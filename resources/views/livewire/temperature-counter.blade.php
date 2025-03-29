<div class="p-6 bg-green-400 shadow-md rounded-lg text-center max-w-md mx-auto flex flex-col justify-center items-center">
    <h2 class="text-xl font-semibold mb-4">Temperatuur Teller Met Limieten</h2>
    <p class="text-lg mb-4">
        Temperatuur: <span class="text-blue-600 font-bold">{{ $temperature }}</span>°C
    </p>
    <div class="flex justify-center gap-4">
        <button
            wire:click="decrement"
            @disabled($temperature <= $min)
            class="px-4 py-2 bg-gray-500 hover:bg-gray-600 text-white font-bold rounded shadow transition-transform transform hover:-translate-y-0.5 disabled:opacity-50 disabled:cursor-not-allowed"
            {{ $temperature <= $min ? 'disabled' : '' }}>
            –
        </button>
        <button
            wire:click="increment"
            @disabled($temperature >= $max)
            class="px-4 py-2 bg-blue-500 hover:bg-blue-700 text-white font-bold rounded shadow transition-transform transform hover:-translate-y-0.5 disabled:opacity-50 disabled:cursor-not-allowed"
            {{ $temperature >= $max ? 'disabled' : '' }}>
            +
        </button>
    </div>
</div>
