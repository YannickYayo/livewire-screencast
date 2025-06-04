<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- <link rel="stylesheet" href="/app.css"> -->
        <script src="https://cdn.tailwindcss.com"></script>
        <script defer src="https://unpkg.com/@alpinejs/ui@3.13.2-beta.0/dist/cdn.min.js"></script>
        <link href="https://unpkg.com/@tailwindcss/forms@0.2.1/dist/forms.min.css" rel="stylesheet">

        <title>{{ $title ?? 'Page Title' }}</title>
    </head>
    <body>
        <!-- <nav> -->
        <!--     <a wire:navigate href="/" @class(['current' => request()->is('/')])>Todos</a> -->
        <!--     <a wire:navigate href="/counter" @class(['current' => request()->is('counter')])>Counter</a> -->
        <!--     <a wire:navigate href="/posts" @class(['current' => request()->is('posts')])>Posts</a> -->
        <!--     <a wire:navigate href="/posts/create" @class(['current' => request()->is('posts/create')])>Create Post</a> -->
        <!-- </nav> -->

        <main class="flex justify-center items-start pt-24 bg-slate-200 min-h-screen text-slate-800">
            {{ $slot }}
        </main>
    </body>
</html>
