@props(['title', 'link' => 'primary', 'target' => null])

@php
    $baseClasses = 'flex justify-center items-center font-medium px-3 border-2 py-1.5 hover:transition-colors hover:duration-500 hover:text-white';
    $colorClasses = [
        'primary' => 'border-primary-600 text-primary-600 hover:bg-primary-600',
        'secondary' => 'border-secondary-600 text-secondary-600 hover:bg-secondary-600',
        'danger' => 'border-red-700 text-red-700 hover:bg-red-700',
        'success' => 'border-green-700 text-green-700 hover:bg-green-700',
        'warning' => 'border-yellow-500 text-yellow-500 hover:bg-yellow-500',
        'info' => 'border-blue-700 text-blue-700 hover:bg-blue-700',
    ];
@endphp

<a {{ $attributes->merge(['class' => $baseClasses . ' ' . $colorClasses[$link], 'title' => $title]) }} x-data="{ loading: false }" x-on:click="loading = true">
    <span x-show="!loading">{{ $title }}</span>
    <div x-show="loading" class="flex justify-center items-center gap-1">
        <span class="material-symbols-outlined text-sm animate-spin">progress_activity</span>
        <span>Please Wait...</span>
    </div>
    <span class="sr-only">{{ $title }}</span>
</a>