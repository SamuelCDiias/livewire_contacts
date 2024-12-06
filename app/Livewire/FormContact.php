<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Log;
use Livewire\Attributes\Validate;
use Livewire\Component;

class FormContact extends Component
{
    #[Validate('required | min:3 | max:50')]
    public $name;

    #[Validate('required | email | min:5 | max:50')]
    public $email;

    #[Validate('required | min:5 | max:20')]
    public $phone;

    public function newContact()
    {
        // validation
        $this->validate();

        // temporary store in log file
        Log::info('Novo Contato: ' . $this->name . ' - ' . $this->email . ' - ' . $this->phone);

        // clear form

        // option 1
        // $this->name = '';
        // $this->phone = '';
        // $this->email = '';

        // option 2
        $this->reset();
    }

    public function render()
    {
        return view('livewire.form-contact');
    }
}
