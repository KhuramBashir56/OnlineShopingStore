<section class="w-full">
    <section class="px-4 bg-primary-600 dark:bg-secondary-800 shadow-md shadow-secondary-400 dark:shadow-secondary-950">
        <div class="2xl:container mx-auto">
            <div class="flex md:flex-row flex-col gap-1 justify-center md:justify-between items-center">
                <p class="flex items-center max-w-full md:order-none order-1 md:justify-start justify-center text-white">
                    <strong>Laravel: </strong>
                    <span class="truncate w-full overflow-x-hidden"> this the text ote this the text note.</span>
                </p>
                <div class="flex items-center gap-1">
                    <x-color-mode-toggle />
                    @auth
                        <a href="{{ route('dashboard') }}" class="text-white bg-secondary-800 hover:text-orange-500 hover:bg-secondary-900 font-medium px-4 py-2.5 dark:bg-orange-500 dark:hover:text-white dark:hover:bg-orange-600 hover:transition-colors hover:duration-500">Dashboard</a>
                    @endauth
                    @guest
                        <a href="{{ route('login') }}" wire:navigate class="text-white bg-secondary-800 hover:text-orange-500 hover:bg-secondary-900 font-medium px-4 py-2.5 dark:bg-orange-500 dark:hover:text-white dark:hover:bg-orange-600 hover:transition-colors hover:duration-500">Login</a>
                        <a href="{{ route('register') }}" wire:navigate class="text-white bg-secondary-800 hover:text-orange-500 hover:bg-secondary-900 font-medium px-4 py-2.5 dark:bg-orange-500 dark:hover:text-white dark:hover:bg-orange-600 hover:transition-colors hover:duration-500">Register</a>
                    @endguest
                </div>
            </div>
        </div>
    </section>
    <header class="p-4 w-full">
        <div class="2xl:container mx-auto">
            <div class="flex md:flex-row flex-col gap-1 justify-center md:justify-between items-center">
                <a wire:navigate href="{{ route('home') }}">
                    <x-app-logo class="size-24" />
                </a>
                <div class="flex items-center gap-4">
                </div>
            </div>
        </div>
    </header>
    <nav class="flex justify-between items-center p-4 bg-secondary-800 text-white">
        <a wire:navigate href="{{ route('home') }}" class="text-white">Home</a>
    </nav>
</section>
