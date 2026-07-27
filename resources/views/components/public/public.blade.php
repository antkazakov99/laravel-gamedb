<!DOCTYPE html>
<html>
<head>
    <title>{{ $title }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<x-public.header />
<main>
    <div class="mx-auto max-w-5xl">
        {{ $slot }}
    </div>
</main>
{{-- footer --}}
</body>
</html>
