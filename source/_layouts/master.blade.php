<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/lazysizes@4.0.1/lazysizes.min.js"></script>
        
        <style>
        @font-face{ 
            font-family: 'Hans';
            src: url('/fonts/hans_grotesque_regular.eot');
            src: url('/fonts/hans_grotesque_regular.eot?#iefix') format('embedded-opentype'),
                 url('/fonts/hans_grotesque_regular.woff') format('woff'),
                 url('/fonts/hans_grotesque_regular.ttf') format('truetype');
             font-weight: 200;
            }

        @font-face{ 
            font-family: 'Hans';
            src: url('/fonts/hans_grotesque_bold.eot');
            src: url('/fonts/hans_grotesque_bold.eot?#iefix') format('embedded-opentype'),
                 url('/fonts/hans_grotesque_bold.woff') format('woff'),
                 url('/fonts/hans_grotesque_bold.ttf') format('truetype');
             font-weight: 600;
            }

        html,body,p {
            font-family: 'Hans';
        }
        .hyphens {
            -webkit-hyphens: auto;
            -moz-hyphens: auto;
            hyphens: auto;
        }
        </style>
     @yield('styles')
    </head>
    <body class="antialiased">
        @include('_partials.navbar')
        <main>
            @yield('body')
        </main>
        @include('_partials.footer')
        @yield('scripts')
        @include('_partials.scripts')

    </body>
</html>
