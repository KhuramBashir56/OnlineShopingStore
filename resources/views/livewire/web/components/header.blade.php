<section class="w-full">
    <section class="px-4 py-1.5 bg-orange-500 dark:bg-gray-800 shadow-lg">
        <div class="2xl:container mx-auto">
            <div class="flex md:flex-row flex-col gap-1 justify-center md:justify-between items-center">
                <p class="flex items-center max-w-full md:order-none order-1 md:justify-start justify-center text-white">
                    <strong>Laravel: </strong>
                    <span class="truncate w-full overflow-x-hidden"> this the text ote this the text note.</span>
                </p>
                <div class="flex items-center divide-x divide-gray-400 dark:divide-gray-600">
                    <x-toggle-color-mode />
                    {{-- @auth
                        <x-web.navigation-link wire:navigate href="{{ route('dashboard') }}" :title="__('Dashboard')":active="__('dashboard')" />
                    @endauth
                    @guest
                        <x-web.navigation-link wire:navigate href="{{ route('login') }}" :title="__('Login')" :active="__('login')" />
                        <x-web.navigation-link wire:navigate href="{{ route('register') }}" :title="__('Register')" :active="__('register')" />
                    @endguest --}}
                </div>
            </div>
        </div>
    </section>
    <header>

    </header>
    <nav class="flex justify-between items-center p-4 bg-gray-800 text-white">
        <a wire:navigate href="{{ route('home') }}" class="text-white">Home</a>
    </nav>
</section>
