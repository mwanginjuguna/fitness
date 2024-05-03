<?php

namespace App\Livewire\Forms;

use App\Models\Contact;
use Livewire\Attributes\Validate;
use Livewire\Form;

class ContactMeForm extends Form
{
    #[Validate('required|email')]
    public string $email = '';

    #[Validate('required')]
    public string $phoneNumber = '';

    #[Validate('required')]
    public string $name = '';

    public string $contactMessage = '';

    public function store()
    {
        $this->validate();

        Contact::create([
            'email' => $this->email,
            'phone' => $this->phoneNumber,
            'name' => $this->name,
            'message' => $this->contactMessage,
            'form_used' => 'Contact Me'
        ]);

        return true;
    }
}
