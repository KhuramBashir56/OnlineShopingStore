@props(['for'])

@php
    $baseClasses = 'block w-full bg-white dark:bg-gray-800 text-black dark:text-white form-input';
    $colorClasses = 'border-secondary-600 focus:border-primary-500 focus:ring-primary-500 dark:border-secondary400 dark:focus:border-primary-500 dark:focus:ring-primary-500';
    $errorClasses = 'border-red-600 dark:border-red-500 ring-red-600 focus:border-red-600 focus:ring-red-600';
@endphp

<input {{ $attributes->merge([
    'class' => $baseClasses . ' ' . ($errors->has($for) ? $errorClasses : $colorClasses),
    'id' => $for,
    'name' => $for,
]) }} />
