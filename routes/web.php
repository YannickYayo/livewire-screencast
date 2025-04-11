<?php

use App\Livewire\Counter;
use App\Livewire\CreatePost;
use App\Livewire\EditProfile;
use App\Livewire\ShowPosts;
use App\Livewire\Signup;
use Illuminate\Support\Facades\Route;

Route::get('/', Signup::class);
Route::get('/counter', Counter::class);
Route::get('/posts', ShowPosts::class);
Route::get('posts/create', CreatePost::class);
Route::get('profile/edit', EditProfile::class);
