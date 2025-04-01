<?php

namespace App\Livewire;

use App\Livewire\Forms\ProfileForm;
use App\Models\User;
use Livewire\Component;

class EditProfile extends Component
{
    public ProfileForm $form;
    public bool $show_success_indicator = false;

    public function mount(): void
    {
        auth()->login(User::first());

        $this->form->setUser(auth()->user());
    }

    public function save(): void
    {
        $this->form->update();

        $this->show_success_indicator = true;
    }

    public function render()
    {
        return view('livewire.edit-profile');
    }
}
