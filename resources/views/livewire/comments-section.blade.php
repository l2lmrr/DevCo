<div>
    <!-- Comments List -->
    <div class="space-y-4">
        @foreach($comments as $comment)
        <div class="flex items-start space-x-3">
            <!-- User Avatar -->
            <img src="{{ $comment->user->profile->image ? asset('storage/' . $comment->user->profile->image) : 'default-avatar-url' }}" alt="User Avatar" class="w-8 h-8 rounded-full">
            <!-- Comment Content -->
            <div>
                <p class="font-semibold text-gray-800">{{ $comment->user->name }}</p>
                <p class="text-gray-600 text-sm">{{ $comment->created_at->format('M d, Y') }}</p>
                <p class="mt-1 text-gray-700">{{ $comment->content }}</p>

                <!-- Delete Comment Button (for comment owner) -->
                @if($comment->user_id === auth()->id())
                <button wire:click="deleteComment({{ $comment->id }})" class="text-red-500 hover:text-red-700 text-sm">Delete</button>
                @endif
            </div>
        </div>
        @endforeach
    </div>

    <!-- Add Comment Form -->
    <div class="mt-6">
        <form wire:submit.prevent="addComment">
            <textarea wire:model="content" rows="3" class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Write a comment..."></textarea>
            <button type="submit" class="mt-2 px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Post Comment</button>
        </form>
    </div>
</div>