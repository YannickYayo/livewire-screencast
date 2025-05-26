<?php

namespace App\Livewire;

use Livewire\Component;

class Signup extends Component
{
    public bool $show_modal = false;

    public function openModal(): void
    {
        $this->show_modal = true;
    }

    public function render()
    {
        return view('livewire.signup');
    }
}
