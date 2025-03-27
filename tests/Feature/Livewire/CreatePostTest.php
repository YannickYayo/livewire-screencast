<?php

use App\Livewire\CreatePost;
use App\Models\Post;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(CreatePost::class)
        ->assertStatus(200);
});

it('can create a new post', function () {
    $post = Post::where('title', 'The test title')->first();
    expect($post)->toBeNull();

    Livewire::test(CreatePost::class)
        ->set('title', 'The test title')
        ->set('content', 'The content')
        ->call('save');

    $post = Post::where('title', 'The test title')->first();
    expect($post)->not->toBeNull();
    expect($post->title)->toBe('The test title');
    expect($post->content)->toBe('The content');
});

test('Fields required', function (string $field) {
    Livewire::test(CreatePost::class)
        ->set($field, '')
        ->call('save')
        ->assertHasErrors([$field => 'required']);
})
    ->with([
        'Title' => ['title'],
        'Content' => ['content'],
    ]);
