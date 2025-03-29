<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class EventCounter extends Component
{
    public $count = 5;

    public function increment() {
        $this->count++;
        $this->dispatch('display-counter', number: $this->count);
    }

    public function decrement() {
        $this->count--;
        $this->dispatch('display-counter', number: $this->count);
    }

    #[On('counter-reset')]
    public function resetCounter(int $number) {
        $this->count = $number;
    }

    public function render()
    {
        return view('livewire.event-counter');
    }
}
