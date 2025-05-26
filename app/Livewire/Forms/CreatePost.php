<?php

namespace App\Livewire\Forms;

use App\Models\Post;
use Livewire\Form;

class CreatePost extends Form
{
    public string $title = '';
    public string $content = '';

    public function rules(): array
    {
        return [
            'title' => 'required|min:3',
            'content' => 'required',
        ];
    }

    public function save(): void
    {
        $this->validate();

        Post::create([
            'title' => $this->title,
            'content' => $this->content,
        ]);

        $this->reset(['title', 'content']);
    }
}
