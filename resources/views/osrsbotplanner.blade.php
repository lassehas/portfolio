<x-layout>
    <x-slot name="title">OSRS Bot Planner</x-slot>

    <x-slot name="content">
        @livewireStyles
        <style>
            h1 {
                display: flex;
                justify-content: center;
                font-size: 40px;
            }

            p.mb-10.mt-5 {
                display: flex;
                justify-content: center;
                text-align: center;
                margin-left: 30px;
                margin-right: 30px;
                word-break: break-word;
            }
        </style>

        <div class="mt-40">
            <h1>OSRS Bot Planner</h1>

            <p class="mb-10 mt-5">
                This is a tool to help you plan your botting strategy. It will help you decide what skills to train, and
                what order to train them in.
            </p>

            @livewire('osrsbotplanner')
        </div>
        @livewireScripts
    </x-slot>
</x-layout>

