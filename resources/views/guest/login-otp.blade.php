<x-layouts.web>
    <x-slot:title>{{ __('Login OTP Verification') }}</x-slot>
    <section class="flex flex-col sm:justify-center items-center py-10 px-4 bg-gray-100 dark:bg-gray-900">
        <h1 class="text-3xl font-medium text-center mb-10 text-gray-950 dark:text-gray-200">{{ __('Login OTP Verification') }}</h1>
        @if (session('error'))
            <x-alert-message :alert="__('error')" :message="session('error')" />
        @endif
        @if (session('success'))
            <x-alert-message :alert="__('success')" :message="session('success')" />
        @endif
        <x-card class="w-full sm:max-w-sm mx-auto p-4 rounded-xl">
            <p class="mb-2 text-center text-black dark:text-gray-200">{{ __('Please ') }}</p>
            <form method="POST" action="{{ route('login.otp_verification') }}">
                @csrf
                <input type="hidden" name="token" id="token" value="{{ $token }}" />
                {{-- <input type="hidden" name="email" id="email" value="{{ $email }}" /> --}}
                <x-ui.form.label :title="__('OTP Code')" :for="__('otp')">
                    <x-ui.form.input type="number" :for="__('otp')" maxlength="6" autofocus required autocomplete="off" placeholder="{{ __('OTP Code') }}" class="rounded-md" />
                </x-ui.form.label>
                <div class="block text-end">
                    <a wire:navigate href="{{ route('password.request') }}" class="text-primary-500 hover:text-primary-600 dark:hover:text-secondary-600 hover:underline">{{ __('Forgot your password?') }}</a>
                </div>
                <div class="flex items-center justify-center mt-4">
                    <x-ui.buttons.button type="submit" :title="__('Verify')" class="w-full" />
                </div>
            </form>
        </x-card>
    </section>
</x-layouts.web>
