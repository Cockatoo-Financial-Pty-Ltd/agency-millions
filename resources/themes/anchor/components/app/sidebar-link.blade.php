@props([
    'href' => '',
    'icon' => 'phosphor-house-duotone',
    'active' => false,
    'hideUntilGroupHover' => true,
    'target' => '_self',
    'ajax' => true
])

@php
    $isActive = filter_var($active, FILTER_VALIDATE_BOOLEAN);
@endphp

<a {{ $attributes }} href="{{ $href }}" @if((($href ?? false) && $target == '_self') && $ajax) wire:navigate @else @if($ajax) target="_blank" @endif @endif class="@if($isActive){{ 'text-blue-600 bg-blue-50/80 dark:bg-blue-900/30 dark:text-blue-400 font-medium' }}@else{{ 'text-gray-700 dark:text-zinc-300 hover:bg-gray-100 dark:hover:bg-zinc-800' }}@endif transition-colors px-3 py-2 flex rounded-lg w-full text-sm justify-start items-center space-x-2 overflow-hidden">
    <x-dynamic-component :component="$icon" class="flex-shrink-0 w-5 h-5" />
    <span class="flex-shrink-0 ease-out duration-50">{{ $slot }}</span>
</a>
