<x-layouts.app>
    <div class="bg-white dark:bg-zinc-800 rounded-lg shadow-sm overflow-hidden mb-8">
        <div class="aspect-w-16 aspect-h-9">
            <iframe src="{{ $lesson->video_url }}" class="w-full h-full" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>

    <div class="max-w-4xl mx-auto">
        <div class="mb-8">
            <div class="flex items-center justify-between">
                <div>
                    <h1 class="text-3xl font-bold text-gray-900 dark:text-white mb-2">{{ $lesson->title }}</h1>
                    <p class="text-gray-600 dark:text-gray-400">{{ $lesson->description }}</p>
                </div>
                <div>
                    @if($isCompleted)
                        <div class="inline-flex items-center px-4 py-2 bg-green-100 text-green-800 rounded-lg">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Completed
                        </div>
                    @else
                        <form action="{{ route('courses.lessons.complete', [$course->slug, $lesson->slug]) }}" method="POST">
                            @csrf
                            <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Mark as Complete
                            </button>
                        </form>
                    @endif
                </div>
            </div>
        </div>

        <div class="bg-white dark:bg-zinc-800 rounded-lg shadow-sm p-6">
            <div class="prose dark:prose-invert max-w-none">
                {!! $lesson->content !!}
            </div>
        </div>

        {{-- Comments Section --}}
        <div class="bg-white dark:bg-zinc-800 rounded-lg shadow-sm p-6">
            <h3 class="text-lg font-semibold mb-4 text-gray-900 dark:text-white">Discussion</h3>
            
            @foreach($lesson->comments()->whereNull('parent_id')->get() as $comment)
                <div class="mb-4 pb-4 border-b border-gray-200 dark:border-zinc-700">
                    <div class="flex items-start space-x-3">
                        <img src="{{ $comment->user->avatar }}" alt="{{ $comment->user->name }}" class="w-10 h-10 rounded-full">
                        <div>
                            <div class="flex items-center space-x-2">
                                <h4 class="font-medium text-gray-900 dark:text-white">{{ $comment->user->name }}</h4>
                                <span class="text-sm text-gray-500">{{ $comment->created_at->diffForHumans() }}</span>
                            </div>
                            <p class="mt-1 text-gray-600 dark:text-gray-300">{{ $comment->content }}</p>
                        </div>
                    </div>
                </div>
            @endforeach

            <form action="{{ route('comments.store', $lesson) }}" method="POST" class="mt-6">
                @csrf
                <textarea name="content" rows="3" class="w-full rounded-lg border-gray-300 dark:border-zinc-700 dark:bg-zinc-900 dark:text-white shadow-sm focus:border-blue-500 focus:ring-blue-500" placeholder="Add to the discussion"></textarea>
                <button type="submit" class="mt-3 px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">Post Comment</button>
            </form>
        </div>
    </div>
</x-layouts.app>
