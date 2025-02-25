<x-layouts.app>
    <div class="max-w-4xl mx-auto">
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-gray-900 dark:text-white mb-4">{{ $course->title }}</h1>
            <p class="text-lg text-gray-600 dark:text-gray-400">{{ $course->description }}</p>
        </div>

        <div class="bg-white dark:bg-zinc-800 rounded-lg shadow-sm p-8">
            <h2 class="text-xl font-semibold mb-4 text-gray-900 dark:text-white">Course Overview</h2>
            
            <div class="space-y-6">
                @foreach($course->lessons()->orderBy('order')->get() as $lesson)
                    <div class="flex items-start space-x-4 p-4 rounded-lg hover:bg-gray-50 dark:hover:bg-zinc-700/50 transition-colors">
                        <div class="flex-shrink-0">
                            <div class="w-8 h-8 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center">
                                <span class="text-blue-600 dark:text-blue-400 font-medium">{{ $loop->iteration }}</span>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-lg font-medium text-gray-900 dark:text-white">
                                <a href="{{ route('courses.lessons.show', [$course->slug, $lesson->slug]) }}" class="hover:text-blue-600 dark:hover:text-blue-400">
                                    {{ $lesson->title }}
                                </a>
                            </h3>
                            <p class="mt-1 text-gray-600 dark:text-gray-400">{{ $lesson->description }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-layouts.app>
