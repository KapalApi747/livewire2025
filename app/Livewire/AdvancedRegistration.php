<?php

namespace App\Livewire;

use Livewire\Component;

class AdvancedRegistration extends Component
{
    public $username = '';
    public $email = '';
    public $password = '';

    protected $rules = [
        'username' => 'required|min:3',
        'email' => 'required|email',
        'password' => 'required|min:6',
    ];

    protected $messages = [
        'username.required' => 'Een username is verplicht.',
        'username.min' => 'De username moet minstens 2 tekens bevatten.',
        'email.required' => 'Een e-mailadres is verplicht.',
        'email.email' => 'Ongeldig emailadres ingevoerd.',
        'password.required' => 'Een password is verplicht.',
        'password.min' => 'Het password moet minstens 6 tekens bevatten.',
    ];

    public function updated($property) {
        $this->validateOnly($property);
    }

    public function submit()
    {
        $validated = $this->validate();
        session()->flash('success', 'Formulier succesvol verzonden!');
    }

    public function render()
    {
        return view('livewire.advanced-registration');
    }
}
