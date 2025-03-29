<div class="text-center">
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}

    <h2 class="text-xl font-semibold mb-4">Event Counter</h2>
    <p class="text-5xl mb-4">
        <span class="text-blue-600 font-bold">{{ $count }}</span>
    </p>
    <div class="flex justify-center gap-4">
        <button
            wire:click="decrement"
            class="px-4 py-2 bg-gray-500 hover:bg-gray-600 text-white font-bold rounded shadow transition-transform transform hover:-translate-y-0.5"
        >
            –
        </button>
        <button
            wire:click="increment"
            class="px-4 py-2 bg-blue-500 hover:bg-blue-700 text-white font-bold rounded shadow transition-transform transform hover:-translate-y-0.5"
        >
            +
        </button>
    </div>
</div>
