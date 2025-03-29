<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class ParentComponent extends Component
{
    public string $message = '';

    #[On('child-button-clicked')]
    public function handleEvent(string $text) {
        $this->message = $text;
    }

    public function render()
    {
        return view('livewire.parent-component');
    }
}
