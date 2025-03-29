<?php

namespace App\Livewire;

use Livewire\Component;

class SearchBox extends Component
{
    public $query = '';

    public function updatedQuery() {
        $this->dispatch('search-result', query: $this->query);
    }

    public function render()
    {
        return view('livewire.search-box');
    }
}
