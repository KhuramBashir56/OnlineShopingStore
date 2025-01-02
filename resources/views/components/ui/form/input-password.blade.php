@props(['for'])

@php
    $baseClasses = 'block w-full bg-white dark:bg-gray-800 text-black dark:text-white form-input';
    $colorClasses = 'border-secondary-600 focus:border-primary-500 focus:ring-primary-500 dark:border-secondary400 dark:focus:border-primary-500 dark:focus:ring-primary-500';
    $errorClasses = 'border-red-600 dark:border-red-500 ring-red-600 focus:border-red-600 focus:ring-red-600';
@endphp

<div class="w-full relative" x-data="{ show: false }">
    <input :type="show ? 'text' : 'password'" {{ $attributes->merge([
        'class' => $baseClasses . ' ' . ($errors->has($for) ? $errorClasses : $colorClasses),
        'id' => $for,
        'name' => $for,
    ]) }} />
    <button type="button" class="absolute right-2 top-1.5 text-gray-500 hover:text-primary-500 dark:hover:text-secondary-500 flex items-center justify-center hover:transition-colors hover:duration-500" aria-label="Toggle password visibility" x-on:click="show = !show">
        <span class="material-symbols-outlined icon-filled text-2xl" x-show="!show" x-cloak>visibility</span>
        <span class="material-symbols-outlined icon-filled text-2xl" x-show="show" x-cloak>visibility_off</span>
    </button>
</div>
