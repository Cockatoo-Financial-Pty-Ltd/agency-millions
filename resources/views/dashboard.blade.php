<x-layouts.app>
    <x-app.container x-data class="lg:space-y-6" x-cloak>
        <x-app.heading
            title="Your Learning Progress"
            description="Track your progress through Agency Millions courses."
            :border="false"
        />

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach(\App\Models\Course::where('is_published', true)->orderBy('order')->get() as $course)
                @php
                    $progress = auth()->user()->getCourseProgress($course);
                @endphp
                <div class="bg-white dark:bg-zinc-800 rounded-lg shadow-sm p-6">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">{{ $course->title }}</h3>
                        <span class="text-sm font-medium text-gray-500">{{ $progress['completed'] }}/{{ $progress['total'] }} lessons</span>
                    </div>
                    
                    <div class="relative pt-1">
                        <div class="overflow-hidden h-2 text-xs flex rounded bg-blue-200 dark:bg-blue-900/30">
                            <div style="width: {{ $progress['percentage'] }}%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-blue-600"></div>
                        </div>
                    </div>
                    
                    <div class="mt-4 flex justify-between items-center">
                        <span class="text-sm font-medium text-gray-500">{{ $progress['percentage'] }}% complete</span>
                        <a href="{{ route('courses.show', $course->slug) }}" class="inline-flex items-center text-sm font-medium text-blue-600 dark:text-blue-400 hover:text-blue-800 dark:hover:text-blue-300">
                            Continue
                            <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            @endforeach
                    </div>
    </x-app.container>
</x-layouts.app>
