<?php

namespace App\Livewire;

use App\Models\Contact;
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

        // store contact in database
        Contact::firstOrCreate(
            [
                'name' => $this->name,
                'email' => $this->email,
            ],
            [
                'phone' => $this->phone,
            ]
        );



        // clear for
        $this->reset();
    }

    public function render()
    {
        return view('livewire.form-contact');
    }
}
