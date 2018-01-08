<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
        <link rel="stylesheet" href="/css/style.min.css">
        <style>
            html, body, p {
                font-family: "Hans Grotesque";
            }
        </style>
     @yield('styles')
    </head>
    <body class="antialiased">
        @include('_partials.navbar')
        @yield('body')
        @include('_partials.footer')
        @yield('scripts')
    </body>
</html>
