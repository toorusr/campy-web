@extends('_layouts.master')

@section('body')



<div class="p-8 bg-{{ $page->color }} @if ($page->active === 'no') border-t-4 border-pink @endif">
  @if ($page->active === 'no')
<div class="text-pink-lighter">
    Dieses Camp ist leider schon vorbei…
</div>
@endif
   <h1 class="text-white">Komm' zum Camp in {{ $page->city }} ({{ date('d.m.', $page->date_start) }} bis {{ date('d.m.y', $page->date_end) }})</h1>


<div class="md:flex mt-4">
  <div class="md:w-1/2 bg-white p-4">

    <header>
      @if ($page->youtube)
          <div id='plyr-youtube' data-type="youtube" data-video-id="{{ $page->youtube }}"></div>
        @else
          <div><img src="/img/{{ $page->headerimage }}" alt=""></div>
        @endif
    </header>

    @component('_components.camps.facts')
        @slot('location')
        {{ $page->location }}
        @endslot

        @slot('timestart')
        {{ $page->time_start }}
        @endslot

        @slot('timeend')
        {{ $page->time_end }}
        @endslot

        @slot('from')
        {{ date('d.m.', $page->date_start) }}
        @endslot

        @slot('to')
        {{ date('d.m.y', $page->date_end) }}
        @endslot


    @endcomponent


    @component('_components.camps.teaser')
        @slot('location')
        {{ $page->location }}
        @endslot

        @slot('from')
        08.02.18
        @endslot

        @slot('to')
        11.02.18
        @endslot

        @slot('city')
        {{ $page->city }}
        @endslot

        @slot('holidays')
        {{ $page->holidays }}
        @endslot

        @slot('days')
        {{ $page->days }}
        @endslot


        {{-- {{ $from }} bis {{ $to }}, also in den {{ $holidays }} , findet das Code+Design Camp  in {{ $city }} statt. Auch in {{ $city }} sollen Jugendlichen die Chance haben, {{ $days }} intensive Tage lang an spannenden Hard- und Software-Projekten zu arbeiten und unter der Anleitung von professionellen Coaches neue Technologien kennenzulernen und ihre Fähigkeiten weiterzuentwickeln. Alle interessierten Jugendlichen zwischen 15 und 20 Jahren sind willkommen, für die Teilnahme ist keine Programmiererfahrung notwendig.</p>

<p>Das Camp findet im sog. Hackathon-Format statt. Die Teilnehmer stellen am ersten Tag ihre Projektideen vor, weitere interessierte Teilnehmer schließen sich einem Projekt ihrer Wahl an. Bis zur Abschlusspräsentation am letzten Tag werden in den einzelnen Gruppen Konzepte, Prototypen und teilweise auch fertige Produkte entwickelt. Die Coaches sind erfahrene Profis aus der {{ $city }} --}}


    @endcomponent

    @yield('content')   
  </div>
  <div class="md:w-1/2 bg-white p-4 md:ml-4 mt-4 md:mt-0">
    <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
<script>
  hbspt.forms.create({
    portalId: '2730872',
    formId: '{{  $page->form }}'
  });
</script>

  </div>

</div>

<div class="text-5xl mt-8 text-white font-bold uppercase font-mono tracking-wide">Partner</div>

<div class="bg-white p-4 flex">
  <div class="flex-1">
    @foreach($partners as $partner)

    
@if (strpos($partner->camps, 'ber1710') !== false)
  <div class="text-center">
    <a href="https://{{ $partner->website }}" target="_blank"><img src="/img/{{ $partner->logo }}"><br/>
      {{ $partner->name }}</a>
  </div>
@endif
@endforeach
  </div>



  
</div>

@endsection





@section('styles')

@if ($page->youtube)
<link rel="stylesheet" href="/css/plyr.css">
@endif

@if ($page->form)
<style>
  [id^='hs'] * {
    font-family: "Hans Grotesque";
    font-size: 16px;
  }

  [class^='hs'] * {
    font-family: "Hans Grotesque";
    font-size: 16px;
  }

  .hs-button {
    background-color: {{ $page->color }} !important;
    border: 0 !important;
  }

</style>
@endif

@endsection


@section('scripts')

@if ($page->youtube)
<script src="https://cdn.plyr.io/2.0.18/plyr.js"></script>
    <script>
        plyr.setup("#plyr-youtube");

    </script>
@endif

@if ($page->form)
<script src="//js.hsforms.net/forms/v2.js"></script>
@endif

@endsection