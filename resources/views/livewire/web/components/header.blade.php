<section class="w-full">
    <section class="px-4 bg-orange-500 dark:bg-gray-800 shadow-md shadow-gray-400 dark:shadow-gray-950">
        <div class="2xl:container mx-auto">
            <div class="flex md:flex-row flex-col gap-1 justify-center md:justify-between items-center">
                <p class="flex items-center max-w-full md:order-none order-1 md:justify-start justify-center text-white">
                    <strong>Laravel: </strong>
                    <span class="truncate w-full overflow-x-hidden"> this the text ote this the text note.</span>
                </p>
                <div class="flex items-center gap-1">
                    <x-toggle-color-mode />
                    @auth
                        <a href="{{ route('dashboard') }}" wire:navigate class="text-white bg-gray-700 hover:text-orange-500 hover:bg-gray-800 font-medium px-4 py-2 dark:bg-orange-500 dark:hover:text-white dark:hover:bg-orange-600 hover:transition-colors hover:duration-500">Dashboard</a>
                    @endauth
                    @guest
                        <a href="{{ route('login') }}" wire:navigate class="text-white bg-gray-700 hover:text-orange-500 hover:bg-gray-800 font-medium px-4 py-2 dark:bg-orange-500 dark:hover:text-white dark:hover:bg-orange-600 hover:transition-colors hover:duration-500">Login</a>
                        <a href="{{ route('register') }}" wire:navigate class="text-white bg-gray-700 hover:text-orange-500 hover:bg-gray-800 font-medium px-4 py-2 dark:bg-orange-500 dark:hover:text-white dark:hover:bg-orange-600 hover:transition-colors hover:duration-500">Register</a>
                    @endguest
                </div>
            </div>
        </div>
    </section>
    <header class="py-4">

    </header>
    <nav class="flex justify-between items-center p-4 bg-gray-800 text-white">
        <a wire:navigate href="{{ route('home') }}" class="text-white">Home</a>
    </nav>
</section>
