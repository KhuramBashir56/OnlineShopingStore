@props(['title', 'color' => 'orange'])

@php
    $baseClasses = 'flex justify-center items-center font-medium px-3 border-2 py-1.5 hover:transition-colors hover:duration-500 hover:text-white dark:hover:text-white';
    $colorClasses = [
        'blue' => 'border-blue-700 text-blue-700 hover:bg-blue-700 dark:border-blue-500 dark:text-blue-500 dark:hover:bg-blue-500',
        'gray' => 'border-gray-700 text-gray-700 hover:bg-gray-700 dark:border-gray-500 dark:text-gray-500 dark:hover:bg-gray-500',
        'green' => 'border-green-700 text-green-700 hover:bg-green-700 dark:border-green-500 dark:text-green-500 dark:hover:bg-green-500',
        'orange' => 'border-orange-500 text-orange-500 hover:bg-orange-500 dark:border-orange-500 dark:text-orange-500 dark:hover:bg-orange-500',
        'purple' => 'border-purple-800 text-purple-800 hover:bg-purple-800 dark:border-purple-500 dark:text-purple-500 dark:hover:bg-purple-500',
        'red' => 'border-red-700 text-red-700 hover:bg-red-700 dark:border-red-500 dark:text-red-500 dark:hover:bg-red-500',
        'yellow' => 'border-yellow-500 text-yellow-500 hover:bg-yellow-500 dark:border-yellow-500 dark:text-yellow-500 dark:hover:bg-yellow-500',
    ];
@endphp

<a {{ $attributes->merge(['class' => $baseClasses . ' ' . $colorClasses[$color], 'title' => $title]) }} x-data="{ loading: false }" x-on:click="loading = true">
    <span x-show="!loading">
        {{ $title }}{{ $slot }}
    </span>
    <div x-show="loading" class="flex justify-center items-center gap-1">
        <span class="material-symbols-outlined text-sm animate-spin">progress_activity</span>
        <span>Please Wait...</span>
    </div>
    <span class="sr-only">{{ $title }}</span>
</a>
