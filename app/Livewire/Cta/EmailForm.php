<?php

namespace App\Livewire\Cta;

use App\Models\Contact;
use Livewire\Component;

class EmailForm extends Component
{
    public string $phone = '';
    public string $firstName = '';

    public function saveContact()
    {
        dd(['phone' => $this->phone, 'name' => $this->firstName]);

        Contact::create([
            'phone' => $this->phone,
            'first_name' => $this->firstName
        ]);
    }

    public function render()
    {
        return view('livewire.cta.email-form');
    }
}
