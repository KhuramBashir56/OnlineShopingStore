@props(['title', 'link' => 'primary', 'target' => null])

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

<a {{ $attributes->merge(['class' => "$baseClasses {$colorClasses[$link]}", 'title' => $title]) }} x-data="{ loading: false }" x-on:click="loading = true">
    <span x-show="!loading">{{ $title }}</span>
    <div x-show="loading" class="flex justify-center items-center gap-1">
        <span class="material-symbols-outlined text-sm animate-spin">progress_activity</span>
        <span>Please Wait...</span>
    </div>
    <span class="sr-only">{{ $title }}</span>
</a>
