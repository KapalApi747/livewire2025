<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}

    <h2 class="text-xl font-semibold mb-4">Reset Control</h2>
    <div class="flex flex-col">
        <div class="flex justify-center">
            <p>
                Huidige waarde: {{ $count2 }}
            </p>
        </div>
        <div class="flex justify-center mt-6">
            <button
                wire:click="resetCount"
                class="px-4 py-2 bg-red-500 hover:bg-red-600 text-white font-bold rounded shadow transition-transform transform hover:-translate-y-0.5">
                Reset naar 5
            </button>
        </div>
    </div>
</div>
