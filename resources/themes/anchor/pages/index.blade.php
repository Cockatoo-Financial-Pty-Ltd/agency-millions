<?php
    use function Laravel\Folio\{name};
    name('home');
?>

<x-layouts.marketing
    :seo="[
        'title'         => setting('site.title', 'Laravel Wave'),
        'description'   => setting('site.description', 'Software as a Service Starter Kit'),
        'image'         => url('/og_image.png'),
        'type'          => 'website'
    ]"
>
        
        <x-marketing.sections.hero />
        
        <x-container class="py-12 border-t sm:py-24 border-zinc-200">
            <x-marketing.sections.features />
        </x-container>

        <x-container class="py-12 border-t sm:py-24 border-zinc-200">
            <section>
                <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="text-center">
                        <h2 class="text-4xl font-bold tracking-tight text-gray-900 dark:text-white">
                            Course Curriculum
                        </h2>
                        <p class="mt-4 text-xl text-gray-600 dark:text-gray-400">
                            A comprehensive roadmap to building and scaling your digital agency
                        </p>
                    </div>

                    <div class="mt-16 space-y-6">
                        <div class="bg-white dark:bg-zinc-800 rounded-lg shadow-sm overflow-hidden">
                            <div x-data="{ open: true }" class="border-b border-gray-200 dark:border-zinc-700 last:border-0">
                                <button 
                                    @click="open = !open" 
                                    class="w-full px-6 py-4 flex items-center justify-between hover:bg-gray-50 dark:hover:bg-zinc-700/50 transition-colors duration-200"
                                >
                                    <div class="flex items-center gap-3">
                                        <h3 class="text-xl font-bold text-gray-900 dark:text-white">Introduction to Agency Millions</h3>
                                        <span class="px-2 py-1 text-xs font-medium text-green-700 bg-green-100 dark:text-green-400 dark:bg-green-900/30 rounded-full">Free</span>
                                    </div>
                                    <svg 
                                        class="w-5 h-5 text-gray-500 transition-transform duration-200" 
                                        :class="{ 'rotate-180': open }"
                                        fill="none" 
                                        viewBox="0 0 24 24" 
                                        stroke="currentColor"
                                    >
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>

                                <div x-show="open" x-collapse>
                                    <div class="p-6 space-y-4">
                                        <div class="flex items-start gap-4">
                                            <div class="flex-shrink-0 w-8 h-8 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center">
                                                <span class="text-sm font-medium text-blue-600 dark:text-blue-400">1</span>
                                            </div>
                                            <div class="flex-grow">
                                                <div class="flex items-center gap-3">
                                                    <h4 class="text-lg font-medium text-gray-900 dark:text-white">Welcome to Agency Millions!</h4>
                                                    <span class="px-2 py-1 text-xs font-medium text-green-700 bg-green-100 dark:text-green-400 dark:bg-green-900/30 rounded-full">Free</span>
                                                </div>
                                                <p class="mt-1 text-gray-600 dark:text-gray-400">Learn what you will achieve in this course.</p>
                                            </div>
                                            <div class="flex-shrink-0 text-sm text-gray-500 dark:text-gray-400">
                                                10 min
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div x-data="{ open: false }" class="border-b border-gray-200 dark:border-zinc-700 last:border-0">
                                <button 
                                    @click="open = !open" 
                                    class="w-full px-6 py-4 flex items-center justify-between hover:bg-gray-50 dark:hover:bg-zinc-700/50 transition-colors duration-200"
                                >
                                    <div>
                                        <h3 class="text-xl font-bold text-gray-900 dark:text-white">Building Your Agency Foundation</h3>
                                    </div>
                                    <svg 
                                        class="w-5 h-5 text-gray-500 transition-transform duration-200" 
                                        :class="{ 'rotate-180': open }"
                                        fill="none" 
                                        viewBox="0 0 24 24" 
                                        stroke="currentColor"
                                    >
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>

                                <div x-show="open" x-collapse>
                                    <div class="p-6 space-y-4">
                                        <div class="flex items-start gap-4">
                                            <div class="flex-shrink-0 w-8 h-8 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center">
                                                <span class="text-sm font-medium text-blue-600 dark:text-blue-400">1</span>
                                            </div>
                                            <div class="flex-grow">
                                                <div class="flex items-center gap-3">
                                                    <h4 class="text-lg font-medium text-gray-900 dark:text-white">Choosing Your Niche</h4>
                                                </div>
                                                <p class="mt-1 text-gray-600 dark:text-gray-400">Learn how to identify and dominate your perfect agency niche.</p>
                                            </div>
                                            <div class="flex-shrink-0 text-sm text-gray-500 dark:text-gray-400">
                                                15 min
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div x-data="{ open: false }" class="border-b border-gray-200 dark:border-zinc-700 last:border-0">
                                <button 
                                    @click="open = !open" 
                                    class="w-full px-6 py-4 flex items-center justify-between hover:bg-gray-50 dark:hover:bg-zinc-700/50 transition-colors duration-200"
                                >
                                    <div>
                                        <h3 class="text-xl font-bold text-gray-900 dark:text-white">Client Acquisition Mastery</h3>
                                    </div>
                                    <svg 
                                        class="w-5 h-5 text-gray-500 transition-transform duration-200" 
                                        :class="{ 'rotate-180': open }"
                                        fill="none" 
                                        viewBox="0 0 24 24" 
                                        stroke="currentColor"
                                    >
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>

                                <div x-show="open" x-collapse>
                                    <div class="p-6 space-y-4">
                                        <div class="flex items-start gap-4">
                                            <div class="flex-shrink-0 w-8 h-8 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center">
                                                <span class="text-sm font-medium text-blue-600 dark:text-blue-400">1</span>
                                            </div>
                                            <div class="flex-grow">
                                                <div class="flex items-center gap-3">
                                                    <h4 class="text-lg font-medium text-gray-900 dark:text-white">High-Ticket Sales Strategy</h4>
                                                </div>
                                                <p class="mt-1 text-gray-600 dark:text-gray-400">Master the art of closing high-value clients.</p>
                                            </div>
                                            <div class="flex-shrink-0 text-sm text-gray-500 dark:text-gray-400">
                                                20 min
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </x-container>

        <x-container class="py-12 border-t sm:py-24 border-zinc-200">
            <x-marketing.sections.testimonials />
        </x-container>
        
        <x-container class="py-12 border-t sm:py-24 border-zinc-200">
            <x-marketing.sections.pricing />
        </x-container>

</x-layouts.marketing>
