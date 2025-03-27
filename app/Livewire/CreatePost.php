<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Rule;
use Livewire\Component;

class CreatePost extends Component
{
    #[Rule('required', message: 'Yo, add a title')]
    #[Rule('min:4', message: 'Yo, too short')]
    public string $title = '';

    #[Rule('required')]
    public string $content = '';

    public function save(): void
    {
        $this->validate();

        Post::create([
            'title' => $this->title,
            'content' => $this->content,
        ]);

        $this->redirect('/posts');
    }

    public function render()
    {
        return view('livewire.create-post');
    }
}
