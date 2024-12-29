@props(['title', 'color' => 'orange', 'target' => null, 'icon'])

@php
    $baseClasses = 'flex justify-center items-center font-medium px-2 border py-[7px] hover:transition-colors hover:duration-500';
    $colorClasses = [
        'orange' => 'text-orange-500 hover:text-white border-orange-500 hover:bg-orange-500 dark:text-orange-600 dark:hover:bg-orange-700 dark:hover:text-white',
        'red' => 'text-red-600 hover:text-white border-red-600 hover:bg-red-600 dark:text-red-500 dark:hover:bg-red-600 dark:hover:text-white',
        'blue' => 'text-blue-700 hover:text-white border-blue-700 hover:bg-blue-700 dark:text-blue-500 dark:hover:bg-blue-500 dark:hover:text-white',
        'gray' => 'text-gray-900 hover:text-white border-gray-600 hover:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white',
        'green' => 'text-green-700 hover:text-white border-green-700 hover:bg-green-700 dark:text-green-500 dark:hover:bg-green-600 dark:hover:text-white',
        'yellow' => 'text-yellow-500 hover:text-white border-yellow-500 hover:bg-yellow-500 dark:text-yellow-500 dark:hover:bg-yellow-600 dark:hover:text-white',
        'purple' => 'text-purple-700 hover:text-white border-purple-700 hover:bg-purple-700 dark:text-purple-500 dark:hover:bg-purple-600 dark:hover:text-white',
    ];
@endphp

<a {{ $attributes->merge(['class' => $baseClasses . ' ' . $colorClasses[$color], 'title' => $title]) }} x-data="{ loading: false }" x-on:click="loading = true">
    <span x-show="!loading" class="material-symbols-outlined">
        {{ $icon }}
    </span>
    <span x-show="loading" class="material-symbols-outlined animate-spin">
        progress_activity
    </span>
    <span class="sr-only">{{ $title }}</span>
</a>
