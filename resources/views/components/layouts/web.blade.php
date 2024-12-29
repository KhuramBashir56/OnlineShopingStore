<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <x-layouts.meta-data />
    <meta name="robots" content="index, follow" />
    <title>{{ isset($title) ? $title . ' | ' . config('app.name') : config('app.name') }}</title>
    <meta name="description" content="{{ isset($description) ? $description : config('app.description') }}" />
    <meta name="keywords" content="{{ isset($keywords) ? $keywords : config('app.keywords') }}" />
</head>

<body class="font-sans antialiased dark">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900 text-gray-900 dark:text-gray-200">
        <livewire:web.components.header />
        <main class="grid gap-4">
            {{ $slot }}
        </main>
        <livewire:web.components.footer />
    </div>
</body>

</html>
