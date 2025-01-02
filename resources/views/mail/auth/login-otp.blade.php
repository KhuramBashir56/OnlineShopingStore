<x-mail::message>
    # Login OTP {{ config('app.name') }}

    The body of your message **{{$otp}}**.

    OTP expires at **{{ $expiredAt }}**.

    <x-mail::button :url="route('login.otp', ['token' => $token])">
        Continue
    </x-mail::button>

    Thanks,<br>
    {{ config('app.name') }}
</x-mail::message>
