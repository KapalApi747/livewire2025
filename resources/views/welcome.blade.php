<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600"
          rel="stylesheet"/>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
<div class="mb-24 bg-gray-100 space-y-6 py-8">
    {{-- Hello World Component --}}
    <x-ui.card title="Hello World">
        <livewire:hello-world/>
    </x-ui.card>
    {{-- Counter Component --}}
    <x-ui.card title="Counter">
        <livewire:counter/>
    </x-ui.card>
    {{-- Clock Component --}}
    <x-ui.card title="Klok">
        <livewire:clock/>
    </x-ui.card>
    {{-- Naamformulier --}}
    <x-ui.card title="Naamformulier">
        <livewire:name-form/>
    </x-ui.card>
    {{-- Events: Parent Component --}}
    <x-ui.card title="Event: Kind stuurt bericht naar Ouder">
        <livewire:parent-component/>
    </x-ui.card>
    {{-- Events: Zoekcomponenten --}}
    <x-ui.card title="Event: Zoekfunctie met live query update">
        <livewire:search-input/>
        <livewire:search-results/>
    </x-ui.card>
    {{-- JS Event Trigger --}}
    <x-ui.card title="Event: Livewire stuurt DOM-event naar JavaScript">
        <livewire:dom-event-example/>
    </x-ui.card>

    <div class="max-w-xl mx-auto">
        <h2 class="text-3xl font-bold text-center mt-12 mb-12">Buttons</h2>
        {{-- Primaire knop --}}
        <x-ui.button wire:click="opslaan">
            Opslaan
        </x-ui.button>
        {{-- Secundaire knop --}}
        <x-ui.button variant="secondary" wire:click="annuleren">
            Annuleren
        </x-ui.button>
        {{-- Gevaarlijke actie --}}
        <x-ui.button variant="danger" wire:click="verwijder">
            Verwijderen
        </x-ui.button>
        {{-- Disabled knop --}}
        <x-ui.button disabled>
            Wachten...
        </x-ui.button>
    </div>

</div>

<div class="bg-emerald-900 pb-24 pt-24">
    <h2 class="text-5xl font-bold text-center mt-24 mb-24">Opdrachten</h2>
    <div class="flex justify-between gap-6 px-12 w-full">
        <div>
            <livewire:polling-clock/>
        </div>
        <div>
            <livewire:temperature-counter/>
        </div>
        <div class="p-6 bg-orange-300 shadow-md rounded-lg text-center flex flex-col justify-center items-center">
            <livewire:search-box/>
            <livewire:search-feedback/>
        </div>
        <div>
            <livewire:advanced-registration/>
        </div>
    </div>
    <div
        class="mt-12 px-12 h-100 bg-pink-300 shadow-md rounded-lg text-center mx-auto flex justify-evenly items-center">
        <livewire:event-counter/>
        <livewire:reset-control/>
    </div>
</div>


</body>
</html>
