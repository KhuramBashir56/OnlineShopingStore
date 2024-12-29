<div class="flex justify-center items-center">
    <x-slot name="title">Home</x-slot>
    <x-ui.links.icon-link href="{{ route('home') }}" wire:navigate class="rounded-full" :title="__('Toggle Color')" :icon="__('home')"  />
    <x-ui.links.outline-icon-link href="{{ route('home') }}" wire:navigate class="rounded-full" :title="__('Toggle Color')" :icon="__('home')"  />
    <x-ui.links.link href="{{ route('home') }}" wire:navigate :title="__('Toggle Color')" />
    <x-ui.links.outline-link href="{{ route('home') }}" wire:navigate :title="__('Toggle Color')" />
</div>
