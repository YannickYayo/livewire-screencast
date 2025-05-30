<?php

namespace App\Livewire;

use App\Livewire\Forms\PostForm;
use App\Models\Post;
use Livewire\Component;

class PostRow extends Component
{
    public Post $post;
    public PostForm $form;

    public bool $show_edit_dialog = false;

    public function mount(): void
    {
        $this->form->setPost($this->post);
    }

    public function save(): void
    {
        $this->form->update();
        $this->post->refresh();

        $this->show_edit_dialog = false;
    }

    public function render()
    {
        return view('livewire.post-row');
    }
}
