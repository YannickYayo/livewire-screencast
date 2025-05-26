<?php

namespace App\Livewire;

use App\Livewire\Forms\CreatePost;
use App\Models\Post;
use Livewire\Component;

class ShowPosts extends Component
{
    public CreatePost $form;

    public bool $show_add_post_dialog = false;

    public function add(): void
    {
        $this->form->save();

        $this->show_add_post_dialog = false;
    }

    public function delete(Post $post): void
    {
        $post->delete();
    }

    public function render()
    {
        return view('livewire.show-posts', [
            'posts' => Post::all(),
        ]);
    }
}
