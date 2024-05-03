<?php

namespace App\Livewire;

use App\Livewire\Forms\ContactMeForm;
use Livewire\Component;

class ContactMe extends Component
{
    public ContactMeForm $form;

    public bool $saved = true;

    public function saveMessage()
    {
        if ($this->form->store()) {
            $this->form->reset();

            $this->saved = true;
        }
    }
    public function render()
    {
        return view('livewire.contact-me');
    }
}
