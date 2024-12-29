@props(['title', 'color' => 'orange', 'target' => null, 'icon'])

@php
    $baseClasses = 'flex justify-center items-center px-2 py-2 hover:transition-colors hover:duration-500';
    $colorClasses = [
        'orange' => 'text-white bg-orange-500 hover:bg-orange-600 dark:bg-orange-700 dark:hover:bg-orange-800',
        'blue' => 'text-white bg-blue-600 hover:bg-blue-700 dark:bg-blue-700 dark:hover:bg-blue-800',
        'gray' => 'text-gray-900 bg-gray-400 hover:bg-gray-500 dark:text-gray-200 dark:bg-gray-600 dark:hover:bg-gray-700',
        'green' => 'text-white bg-green-700 hover:bg-green-800 dark:bg-green-800 dark:hover:bg-green-700',
        'red' => 'text-white bg-red-600 hover:bg-red-700 dark:bg-red-700 dark:hover:bg-red-800',
        'yellow' => 'text-white bg-yellow-400 hover:bg-yellow-500 dark:bg-yellow-600 dark:hover:bg-yellow-700',
        'purple' => 'text-white bg-purple-700 hover:bg-purple-800 dark:bg-purple-700 dark:hover:bg-purple-800',
    ];
@endphp

<button {{ $attributes->merge(['class' => $baseClasses . ' ' . $colorClasses[$color], 'title' => $title]) }} wire:loading.attr="disabled" wire:offline.attr="disabled">
    <span wire:loading.remove @if ($target) wire:target="{{ $target }}" @endif class="material-symbols-outlined">{{ $icon }}</span>
    <span wire:loading @if ($target) wire:target="{{ $target }}" @endif class="material-symbols-outlined animate-spin">progress_activity</span>
    <span class="sr-only">{{ $title }}</span>
</button>
