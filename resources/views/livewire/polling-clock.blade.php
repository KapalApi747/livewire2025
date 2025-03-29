<div wire:poll.60000ms class="p-6 bg-red-100 shadow-md rounded-lg text-center mx-auto flex flex-col justify-center items-center">
    <h2 class="text-xl font-bold mb-4">Polling Clock</h2>
    <p class="text-2xl font-mono text-gray-600">{{ now()->format('H:i') }}</p>
</div>
