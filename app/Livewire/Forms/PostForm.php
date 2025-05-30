<?php

namespace App\Livewire\Forms;

use App\Models\Post;
use Livewire\Form;

class PostForm extends Form
{
    public ?Post $post = null;
    public string $title = '';
    public string $content = '';

    public function rules(): array
    {
        return [
            'title' => 'required|min:3',
            'content' => 'required',
        ];
    }

    public function setPost(Post $post): void
    {
        $this->post = $post;
        $this->title = $post->title;
        $this->content = $post->content;
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

    public function update(): void
    {
        $this->validate();

        $this->post->update([
            'title' => $this->title,
            'content' => $this->content,
        ]);
    }
}
