<x-layout>
    <x-slot name="title">Lasse's portfolio</x-slot>

    <x-slot name="content">
        <x-navbarProject></x-navbarProject>

        <x-banner>
            <x-slot name="title">Mine projekter</x-slot>
            <x-slot name="description">Disse er de projekter, jeg har lavet eller været en del af</x-slot>
            <x-slot name="image">
                /storage/round_profil.png
            </x-slot>
        </x-banner>

        @livewire('posts')

    </x-slot>
</x-layout>
