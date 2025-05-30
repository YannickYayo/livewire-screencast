<?php

namespace App\Livewire;

use Livewire\Component;

class AddPostDialog extends Component
{
    public PostForm $form;

    public bool $show = false;

    public function add(): void
    {
        $this->form->save();

        $this->show = false;

        $this->dispatch('added');
    }

    public function render()
    {
        return view('livewire.add-post-dialog');
    }
}
