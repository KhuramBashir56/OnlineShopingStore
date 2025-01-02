<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">

<head>
    <x-layouts.meta-data />
    <meta name="robots" content="index, follow" />
    <title>{{ $title . ' - ' . config('app.name') }}</title>
    <meta name="description" content="{{ isset($description) ? $description : config('app.description') }}" />
    <meta name="keywords" content="{{ isset($keywords) ? $keywords : config('app.keywords') }}" />
</head>

<body class="font-sans antialiased overflow-y-auto bg-secondary-100 dark:bg-secondary-900 text-secondary-900 dark:text-secondary-200">
    <livewire:components.web.header />
    {{ $slot }}
    <livewire:components.web.footer />
</body>

</html>
