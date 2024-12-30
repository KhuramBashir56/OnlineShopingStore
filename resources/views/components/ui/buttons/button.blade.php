@props(['title', 'color' => 'orange', 'target' => null])

@php
    $baseClasses = 'flex justify-center items-center px-3 py-2 hover:transition-colors hover:duration-500 text-white dark:text-white';
    $colorClasses = [
        'blue' => 'bg-indigo-500 hover:bg-indigo-700',
        'gray' => 'bg-gray-700 hover:bg-gray-900',
        'green' => 'bg-green-500 hover:bg-green-700',
        'orange' => 'bg-orange-500 cursor-pointer hover:bg-orange-700',
        'purple' => 'bg-purple-500 hover:bg-purple-700',
        'red' => 'bg-red-500 hover:bg-red-700',
        'yellow' => 'bg-yellow-500 hover:bg-yellow-700',
    ];
@endphp

<button {{ $attributes->merge(['class' => "$baseClasses {$colorClasses[$color]}", 'title' => $title]) }} wire:loading.attr="disabled" wire:offline.attr="disabled">
    <span wire:loading.remove @if ($target) wire:target="{{ $target }}" @endif>
        {{ $title }}{{ $slot }}
    </span>
    <div wire:loading @if ($target) wire:target="{{ $target }}" @endif class="flex justify-center items-center gap-1">
        <span class="material-symbols-outlined text-sm animate-spin">progress_activity</span>
        <span>Please Wait...</span>
    </div>
    <span class="sr-only">{{ $title }}</span>
</button>
