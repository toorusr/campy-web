@extends('_layouts.master')

@section('body')
<main class="p-8 bg-purple">

    <div class="text-white text-3xl mb-4">Die Code+Design Camps</div>

    <div class="bg-white p-4">

        <div class="md:flex">
    
            <div class="md:w-3/5">
                <div class="text-2xl mb-4">Was ist das C+D Camp?</div>
                    
                        <p class="text-lg leading-normal">Ein Code+Design Camp ist eine sehr gute Möglichkeit für junge Interessierte (15-20 Jahre) einen genaueren Einblick in die Berufswelt Code und Design zu bekommen. Nicht nur Neulinge, sondern auch schon Fortgeschrittene kommen hierbei auf ihre Kosten in einem Camp voller neuer Erfahrungen, sozialer Kontakte, fachlicher Kompetenz und einer Menge Spaß. Ob man sich nun mit programmieren oder designen beschäftigt ist dir natürlich selbst überlassen. Oder hast du doch eher Lust auf ein Hardware-Projekt?</p>
            </div>
            <div class="md:w-2/5 md:ml-4 mt-4 mb-4 md:mt-0">
                <div id="plyr-youtube" class="w-full" data-type="youtube" data-video-id="xGk1PpIbisU"></div>
                {{-- <img src="/img/camps/002.jpg" alt=""> --}}
            </div>
        </div>
    
    
        @include('_partials.upcoming')


        <div class="md:flex mt-8">
            <div class="md:w-1/3">

                @component('_components.img')

                    @slot('src')
                    /img/camps/002.jpg
                    @endslot

                    @slot('alt')
                    Jugendliche schauen auf Monitor
                    @endslot

                @endcomponent
            </div>

            <div class="md:w-1/3">

                @component('_components.img')

                    @slot('src')
                    /img/camps/004.jpg
                    @endslot

                    @slot('alt')
                    Jugendliche begutachten Raspberry Pi
                    @endslot

                @endcomponent
            </div>

            <div class="md:w-1/3">

                @component('_components.img')

                    @slot('src')
                    /img/camps/005.jpg
                    @endslot

                    @slot('alt')
                    Mädchen arbeiten am Computer
                    @endslot

                @endcomponent
            </div>

            {{-- <div class="md:w-3/5 md:ml-4">
                <div class="text-2xl mb-4">Was passiert auf dem Camp?</div>

                <p class="text-lg leading-normal">Das Camp findet im sog. Hackathon-Format statt. Am ersten Tag geht es um die Team und Projektfindung. Zusammen mit deinem Team arbeitest du am zweiten und dritten Tag an eurem Projekt. Unterstützung bekommt ihr dabei von erfahrenen Coaches und anderen Teilnehmern, die sich schon etwas besser auskennen. Am letzten Tag präsentiert ihr die Ergebnisse eures Projektes vor euren Eltern und Pressevertretern.</p>
            </div> --}}
        </div>

        @include('_partials.timetable', ['width' => 'w-1/4'])

    </div>


</main>

@endsection

@section('scripts')
<script src="https://cdn.plyr.io/2.0.18/plyr.js"></script>
    <script>
        plyr.setup("#plyr-youtube");

    </script>
@endsection

@section('styles')
<link rel="stylesheet" href="/css/plyr.css">
@endsection

@section('title')
Camps
@endsection