<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- <link rel="stylesheet" href="/app.css"> -->
        <script src="https://cdn.tailwindcss.com"></script>
        <script defer src="https://unpkg.com/@alpinejs/ui@3.13.2-beta.0/dist/cdn.min.js"></script>
        <link href="https://unpkg.com/@tailwindcss/forms@0.2.1/dist/forms.min.css" rel="stylesheet">

        <title>{{ $title ?? 'Livewire Data Tables' }}</title>
    </head>
    <body>
        <main class="mx-auto flex justify-center px-8 lg:px-16">
            <div class="py-12 w-full max-w-[50rem]">
                {{ $slot }}
            </div>
        </main>
    </body>
</html>
