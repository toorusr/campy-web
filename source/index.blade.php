@extends('_layouts.master')

@section('body')
<main class="p-8 bg-purple text-xl">

  <div class="text-white text-3xl mb-4">Code+Design: Wir begeistern für digitale Berufe!</div>

  <div class="bg-white p-4"> 

    <img src="img/camps/001.jpg" alt="" class="mb-4">

  <div class="mb-4"><p class="text-3xl">Die Initiative</p>
  <p>Die gemeinnützige Code+Design Initiative hat sich zum Ziel gesetzt, Jugendliche für digitale Technologien und Berufe zu begeistern und insbesondere den Anteil an Frauen in diesen Bereichen zu erhöhen. Dafür führt sie Code+Design Camps in verschiedenen Orten durch und gibt ein Magazin mit IT-Themen für Jugendliche heraus.</p>

@component('comp_button')
  @slot('colorback')
  green
  @endslot
  @slot('colorfront')
  white
  @endslot
  @slot('link')
  initiative
  @endslot
  Zur Initiative
@endcomponent

</div>

<div class="mb-4">
  <div class="text-3xl">Die Camps</div>
<p>Auf den Code+Design Camps wollen wir dir und vielen anderen Jugendlichen die Chance geben, an spannenden Hard- und Softwareprojekten zu arbeiten und unter der Anleitung von professionellen Coaches neue Technologien kennenzulernen und deine Fähigkeiten weiterzuentwickeln.</p>


 </div>

@component('comp_button')
  @slot('colorback')
  purple
  @endslot
  @slot('colorfront')
  white
  @endslot
  @slot('link')
  camps
  @endslot
  Alle Camps
@endcomponent



</div>

</main>

@endsection
