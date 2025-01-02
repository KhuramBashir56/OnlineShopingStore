@props(['alert', 'message'])

@php
    $baseClasses = 'px-4 py-2 mb-4 text-center w-full sm:max-w-sm';
    $colorClasses = [
        'success' => 'bg-green-700 dark:bg-green-600',
        'error' => 'bg-red-700 dark:bg-red-600',
    ];
@endphp

<span {{ $attributes->merge(['class' => $baseClasses . ' ' . $colorClasses[$alert]]) }} type="alert">{{ $message }}</span>
