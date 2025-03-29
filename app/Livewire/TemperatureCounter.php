<?php

namespace App\Livewire;

use Livewire\Component;

class TemperatureCounter extends Component
{
    public $temperature = 20;

    public $min = 15;

    public $max = 25;

    public function increment() {
        $this->temperature++;
    }

    public function decrement() {
        $this->temperature--;
    }

    public function render()
    {
        return view('livewire.temperature-counter');
    }
}
