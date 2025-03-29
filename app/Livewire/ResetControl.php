<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class ResetControl extends Component
{
    public $count2 = 5;

    public function resetCount() {
        $this->dispatch('counter-reset', number: 5);
        $this->count2 = 5;
    }

    #[On('display-counter')]
    public function displayCounter(int $number) {
        $this->count2 = $number;
    }

    public function render()
    {
        return view('livewire.reset-control');
    }
}
