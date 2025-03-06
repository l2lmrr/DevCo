<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;
use App\Models\Comment;

class CommentsSection extends Component
{
    public $post;
    public $content;

    protected $rules = [
        'content' => 'required|string|max:500',
    ];

    public function mount(Post $post)
    {
        $this->post = $post;
    }

    public function render()
    {
        $comments = $this->post->comments()->with('user')->latest()->get();
        return view('livewire.comments-section', [
            'comments' => $comments,
        ]);
    }

    public function addComment()
    {
        $this->validate();

        // Create the comment
        Comment::create([
            'post_id' => $this->post->id,
            'user_id' => auth()->id(),
            'content' => $this->content,
        ]);

        // Clear the input field
        $this->content = '';

        // Refresh the comments list
        $this->emit('commentAdded');
    }

    public function deleteComment($commentId)
    {
        $comment = Comment::findOrFail($commentId);

        // Ensure the authenticated user owns the comment
        if ($comment->user_id === auth()->id()) {
            $comment->delete();
            $this->emit('commentDeleted');
        }
    }
}