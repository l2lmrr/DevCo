<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use App\Models\Posts;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, $postId)
    {
        $request->validate([
            'content' => 'required|string|max:500',
        ]);
    
        $comment = Comments::create([
            'post_id' => $postId,
            'user_id' => auth()->id(),
            'content' => $request->content,
        ]);
    
        return response()->json([
            'comment' => $comment,
            'user' => [
                'name' => auth()->user()->name,
                'profile_image' => auth()->user()->profile->image ? asset('storage/' . auth()->user()->profile->image) : 'default-avatar-url',
            ],
        ]);
    }

    public function destroy($commentId)
    {
        $comment = Comments::findOrFail($commentId);

        if ($comment->user_id === auth()->id()) {
            $comment->delete();
            return redirect()->back()->with('success', 'Comment deleted successfully!');
        }

        return redirect()->back()->with('error', 'You are not authorized to delete this comment.');
    }
}