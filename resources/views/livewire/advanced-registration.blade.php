<div class="p-6 w-100 h-100 bg-blue-400 shadow-md rounded-lg text-center mx-auto flex flex-col justify-center items-center">
    <h2 class="text-xl font-semibold mb-4 text-center">Uitgebreid Registratieformulier Met Validatie</h2>

    @if (session()->has('success'))
        <div class="bg-green-100 text-green-700 p-3 rounded mb-4 text-sm text-center">
            {{ session('success') }}
        </div>
    @endif
    <div class="mb-4">
        <label for="username">Username:</label>
        <input
            id="username"
            type="text"
            wire:model.live.debounce.400ms="username"
            placeholder="Vul je username hier in..."
        >
        @error('username')
        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-4">
        <label for="email2">E-mail Adres:</label>
        <input
            id="email2"
            type="text"
            wire:model.lazy="email"
            placeholder="Vul je e-mailadres hier in..."
        >
        @error('email')
        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-16">
        <label for="password">Password:</label>
        <input
            id="password"
            type="password"
            wire:model.defer="password"
            placeholder="Vul je password hier in..."
        >
        @error('password')
        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>
    <div>
        <flux:button variant="primary" wire:click="submit">
            Submit
        </flux:button>
    </div>
</div>
