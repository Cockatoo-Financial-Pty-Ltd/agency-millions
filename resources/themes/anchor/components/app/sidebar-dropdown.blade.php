<div x-data="{ {{ $id }}: {{ $open ?? false }} }"
    :class="{ 'bg-blue-50/50 dark:bg-blue-900/20 rounded-lg' : {{ $id }} == true }"
    class="relative w-full select-none">
    <div
        @click="{{ $id }}=!{{ $id }}"
        class="@if($active){{ 'text-blue-600 font-medium' }}@endif ease-linear duration-50 transition-colors flex rounded-lg w-full px-3 py-2 cursor-pointer text-sm justify-start items-center overflow-hidden"
        :class="{ 'text-blue-600 font-medium' : {{ $id }} == true, 'text-gray-700 dark:text-zinc-300 hover:bg-gray-100 dark:hover:bg-zinc-800' : ({{ $id }} == false && {{ !$active }}) }"
    >
        <div class="flex relative items-center w-full h-auto">
            <x-dynamic-component :component="$icon" class="flex-shrink-0 mr-2 w-5 h-5" />
            <span class="mr-0">{{ $text }}</span>
            <span :class="{ 'rotate-180' : {{ $id }} == true }" class="mr-0.5 ml-auto w-4 h-4 duration-300 ease-out">
                <x-phosphor-caret-down class="w-full h-full" />
            </span>
        </div>

        <template x-teleport="#{{ $id }}">
            <div class="relative p-1 space-y-1" x-show="{{ $id }}" x-collapse x-cloak>
                {{ $slot }}
            </div>
        </template>
    </div>

    <div id="{{ $id }}"></div>

</div>
