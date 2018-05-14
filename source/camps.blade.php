@extends('_layouts.master')

@section('body')
<main class="p-8 bg-purple">

    <div class="text-white text-3xl mb-4">Die Code+Design Camps</div>

    <div class="bg-white rounded p-4">

        <div class="md:flex">
    
            <div class="md:w-3/5">
                <div class="text-2xl mb-4">Was ist das C+D Camp?</div>
                    
                        <p class="text-lg leading-normal">Ein Code+Design Camp ist eine sehr gute Möglichkeit für junge Interessierte (15-20 Jahre) einen genaueren Einblick in die Berufswelt Code und Design zu bekommen. Nicht nur Neulinge, sondern auch schon Fortgeschrittene kommen hierbei auf ihre Kosten in einem Camp voller neuer Erfahrungen, sozialer Kontakte, fachlicher Kompetenz und einer Menge Spaß. Ob man sich nun mit programmieren oder designen beschäftigt ist dir natürlich selbst überlassen. Oder hast du doch eher Lust auf ein Hardware-Projekt?</p>

                        <p class="text-2xl mt-8 mb-2">Auf einen Blick</p>

                        <ul class="-ml-4 leading-normal text-lg">
                            <li>Zwischen 3 und 5 Tagen</li>
                            <li>Für 50-150 Jugendliche</li>
                            <li>Teilnehmer zwischen 15-20 Jahre alt</li>
                            <li>Aus eigenen Ideen digitale Produkte machen</li>
                            <li>Im Team wie in Technologiefirmen arbeiten</li>
                            <li>Design, Programmieren und Produktmanagement erleben</li>
                            <li>Seit 2016 schon 10 Camps in ganz Deutschland</li>
                        </ul>

                        <div class="mt-8 text-xl leading-loose">
            <div class="mr-4 bg-purple-lighter p-2 rounded mt-2 inline-block">Programmier- & Designcamp</div><div class="mr-4 bg-purple-lighter p-2 rounded mt-2 inline-block">Für Jugendliche zwischen 15 und 20</div><div class="mr-4 bg-purple-lighter p-2 rounded mt-2 inline-block">Deine Ideen</div><div class="mr-4 bg-purple-lighter p-2 rounded mt-2 inline-block">Hard- & Software</div><div class="mr-4 bg-purple-lighter p-2 rounded mt-2 inline-block">Projekte</div><div class="mr-4 bg-purple-lighter p-2 rounded mt-2 inline-block">Für Einsteiger & Profis</div><div class="mr-4 bg-purple-lighter p-2 rounded mt-2 inline-block">Berufsorientierung</div><div class="mr-4 bg-purple-lighter p-2 rounded mt-2 inline-block">Präsentationen</div><div class="mr-4 bg-purple-lighter p-2 rounded mt-2 inline-block">Teamarbeit</div><div class="mr-4 bg-purple-lighter p-2 rounded mt-2 inline-block">Neue Freunde finden</div><div class="mr-4 bg-purple-lighter p-2 rounded mt-2 inline-block">Coaches aus der Praxis</div>
        </div>
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

        @include('_partials.interest')

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
