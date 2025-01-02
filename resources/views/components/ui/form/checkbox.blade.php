@props(['title', 'for', 'box' => 'primary'])

@php
    $baseClasses = 'size-5 cursor-pointer rounded border border-gray-700 dark:border-gray-400 bg-white form-checkbox';
    $colorClasses = [
        'primary' => 'text-primary-500 checked:bg-primary-500 focus:border-primary-500 focus:ring-primary-500',
        'secondary' => 'text-secondary-500 checked:bg-secondary-500 focus:border-secondary-500 focus:ring-secondary-500',
        'danger' => 'text-red-500 checked:bg-red-500 focus:border-red-500 focus:ring-red-500',
        'success' => 'text-green-500 checked:bg-green-500 focus:border-green-500 focus:ring-green-500',
        'warning' => 'text-yellow-500 checked:bg-yellow-500 focus:border-yellow-500 focus:ring-yellow-500',
        'info' => 'text-blue-500 checked:bg-blue-500 focus:border-blue-500 focus:ring-blue-500',
    ];
    $errorClasses = 'border-red-600 dark:border-red-500 ring-red-600 focus:border-red-600 focus:ring-red-600';
@endphp

<label for="{{ $for }}" class="inline-flex items-center">
    <input type="checkbox" id="{{ $for }}" aria-labelledby="label-{{ $for }}" {{ $attributes->merge(['class' => $baseClasses . ' ' . ($errors->has($for) ? $errorClasses : $colorClasses[$box])]) }}>
    <span id="label-{{ $for }}" class="ms-2 text-black dark:text-gray-300">
        {{ $title ?? $slot }}
    </span>
</label>
