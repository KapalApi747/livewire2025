<div class="p-6 bg-white shadow-md rounded-lg text-center mt-8 max-w-md mx-auto">
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}

    <h2 class="text-xl font-semibold mb-4">Oudercomponent</h2>

    @if($message)
        {{$message}}
    @endif

    <livewire:child-component/>
</div>
