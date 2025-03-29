<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class SearchFeedback extends Component
{
    public string $query = '';
    #[On('search-result')]
    public function updatedResult(string $query) {
        $this->query = $query;
    }

    public function render()
    {
        return view('livewire.search-feedback');
    }
}
