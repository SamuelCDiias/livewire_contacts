<?php

namespace App\Livewire;

use App\Models\Contact;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;

class EditContact extends Component
{
    public Contact $contact;

    #[Validate('required | min:3 | max:50')]
    public $name;

    #[Validate('required | email | min:5 | max:50')]
    public $email;

    #[Validate('required | min:5 | max:20')]
    public $phone;


    public function mount($id)
    {
        $this->contact = Contact::find($id);
        $this->name = $this->contact->name;
        $this->email = $this->contact->email;
        $this->phone = $this->contact->phone;
    }

    public function edit()
    {
        $this->validate();

        // check if the name and email already exist
        $contact = Contact::where('name', $this->name)
            ->where('email', $this->email)
            ->where('id', '!=', $this->contact->id)
            ->first();

        if ($contact) {
            session()->flash('error', 'Contact already exists');
            return;
        }

        $this->contact->update(
            [
                'name' => $this->name,
                'email' => $this->email,
                'phone' => $this->phone
            ]
        );
        return redirect()->route('home');
    }

    public function cancel()
    {
        return redirect()->route('home');
    }

    #[Title("EDIT CONTACT")]
    public function render()
    {
        return view('livewire.edit-contact');
    }
}
