<div>
    <x-slot name="title">{{ __('Welcome') }}</x-slot>
    <x-ui.buttons.outline-button :title="__('Login')" wire:click="login" :button="__('primary')" :target="__('login')" />
    <x-ui.buttons.outline-button :title="__('Login')" wire:click="login" :button="__('secondary')" :target="__('login')" />
    <x-ui.buttons.outline-button :title="__('Login')" wire:click="login" :button="__('danger')" :target="__('login')" />
    <x-ui.buttons.outline-button :title="__('Login')" wire:click="login" :button="__('success')" :target="__('login')" />
    <x-ui.buttons.outline-button :title="__('Login')" wire:click="login" :button="__('warning')" :target="__('login')" />
    <x-ui.buttons.outline-button :title="__('Login')" wire:click="login" :button="__('info')" :target="__('login')" />
</div>
