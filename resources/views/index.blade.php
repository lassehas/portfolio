<x-layout>
    <x-slot name="title">Lasse's portfolio</x-slot>

    <x-slot name="content">
        <x-navbar></x-navbar>

        <x-banner>
            <x-slot name="title">Lasse Haslund</x-slot>
            <x-slot name="description">Ung mand som brænder for mit arbejde, og tager ære i det jeg laver</x-slot>
            <x-slot name="image">
                /storage/round_profil.png
            </x-slot>
        </x-banner>

        <x-content-box>
            <x-slot name="title">MapFlow</x-slot>
            <x-slot name="description">
                MapFlow er platform som hjælper virksomheder med at finde den bedste rute mellem ens opgaver, så de får mest ud af deres tid. Det sker ved at bruge en alogritme som finder den korteste rute mellem opgaverne, og viser ruten på et kort.
            </x-slot>
            <x-slot name="picture">
                /storage/mapflow_logo.png
            </x-slot>
            <x-slot name="linkbutton">https://mapflow.dk</x-slot>
            <x-slot name="buttontext">MapFlow</x-slot>
            <x-slot name="linkbutton2">/om-mig</x-slot>
            <x-slot name="buttontext2">Læs mere</x-slot>
            <x-slot name="picture2">
                /storage/laravel_icon.png
            </x-slot>
        </x-content-box>

        <x-content-box>
            <x-slot name="title">Tidsregistrering</x-slot>
            <x-slot name="description">
                Et system som registrer hver gang en bruger tjekker til og fra arbejde, og gemmer informationen lokalt, hvorfra det senere kan blive eksporteret til excel file som viser de forskellige data som virksomheden ønsker at gemme. Systemet er blevet lavet til Elrecycling.
            </x-slot>
            <x-slot name="picture">
                /storage/missing_logo.png
            </x-slot>
            <x-slot name="linkbutton">https://elrecycling.dk</x-slot>
            <x-slot name="buttontext">Elrecycling</x-slot>
            <x-slot name="linkbutton2">/om-mig</x-slot>
            <x-slot name="buttontext2">Læs mere</x-slot>
            <x-slot name="picture2">
                /storage/csharp_logo.png
            </x-slot>
        </x-content-box>

        <x-content-box>
            <x-slot name="title">RuneLite Plugin</x-slot>
            <x-slot name="description">
                Et plugin til RuneLite, som er en open source client til spillet Old School RuneScape. Det er lavet til at hjælpe med at blive mere effektiv i spillet, og det bliver brugt af 1800+ aktiv brugere.
            </x-slot>
            <x-slot name="picture">
                /storage/dpshelper_logo.png
            </x-slot>
            <x-slot name="linkbutton">https://github.com/LHPlugins/plugin-hub/tree/dpshelper</x-slot>
            <x-slot name="buttontext">Github</x-slot>
            <x-slot name="linkbutton2">https://runelite.net/plugin-hub/show/dps-helper</x-slot>
            <x-slot name="buttontext2">Link to plugin</x-slot>
            <x-slot name="picture2">
                /storage/java_logo.png
            </x-slot>
        </x-content-box>

    </x-slot>
</x-layout>
