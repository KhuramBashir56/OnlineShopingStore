@props(['title', 'button' => 'primary', 'target' => null])

@php
    $baseClasses = 'flex justify-center items-center px-3 py-2 hover:transition-colors hover:duration-500 text-white dark:text-white';
    $colorClasses = [
        'primary' => 'bg-primary-600 hover:bg-primary-700',
        'secondary' => 'bg-secondary-700 hover:bg-secondary-800',
        'danger' => 'bg-red-600 hover:bg-red-700',
        'success' => 'bg-green-600 hover:bg-green-700',
        'warning' => 'bg-yellow-600 hover:bg-yellow-700',
        'info' => 'bg-blue-600 hover:bg-blue-700',
    ];
@endphp

<button {{ $attributes->merge(['class' => $baseClasses . ' ' . $colorClasses[$button], 'title' => $title]) }} wire:loading.attr="disabled" wire:offline.attr="disabled">
    <span wire:loading.remove @if ($target) wire:target="{{ $target }}" @endif class="material-symbols-outlined">{{ $icon }}</span>
    <span wire:loading @if ($target) wire:target="{{ $target }}" @endif class="material-symbols-outlined animate-spin">progress_activity</span>
    <span class="sr-only">{{ $title }}</span>
</button>
