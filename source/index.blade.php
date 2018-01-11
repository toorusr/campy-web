@extends('_layouts.master')

@section('body')
<main class="p-8 bg-purple text-xl">

  <div class="text-white text-3xl mb-4">Code+Design: Wir begeistern für digitale Berufe!</div>

  <div class="bg-white p-4"> 

    <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
  class="lazyload mb-4"
  data-srcset="img/camps/001.jpg" alt="Code+Design Camp" />

<div class="flex">  

  <div class="mb-4 ml-4">
  <div class="text-3xl mb-2"><span class="border-b-2 border-purple">Die Camps</span></div>
  <p class="mb-4">Auf den Code+Design Camps wollen wir dir und vielen anderen Jugendlichen die Chance geben, an spannenden Hard- und Softwareprojekten zu arbeiten und unter der Anleitung von professionellen Coaches neue Technologien kennenzulernen und deine Fähigkeiten weiterzuentwickeln.</p>




  @component('_components.button')
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

<div class="mb-4 ml-4">
  <div class="text-3xl mb-2"><span class="border-b-2 border-yellow">Das Magazin</span></div>
<p class="mb-4">Mit dem C+D Magazin kannst du dir einen Überblick verschaffen, wie sich unser Berufsleben durch die Digitalisierung verändert, welche Berufsbilder dabei entstehen und welche Zukunftschancen Berufe in der digitalen Wirtschaft bieten. Portraits von Arbeitgebern und Hochschulen helfen dir bei der beruflichen Orientierung.</p>

@component('_components.button')
  @slot('colorback')
  yellow
  @endslot
  @slot('colorfront')
  black
  @endslot
  @slot('link')
  magazin
  @endslot
  Mehr zum Magazin
@endcomponent

</div>


<div class="mb-4 md:flex flex-col">
    <div>
      <p class="text-3xl">Die Initiative</p>
      <p>Die gemeinnützige Code+Design Initiative hat sich zum Ziel gesetzt, Jugendliche für digitale Technologien und Berufe zu begeistern und insbesondere den Anteil an Frauen in diesen Bereichen zu erhöhen. Dafür führt sie Code+Design Camps in verschiedenen Orten durch und gibt ein Magazin mit IT-Themen für Jugendliche heraus.</p>
    </div>

    @component('_components.button')
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

</div>




@include('_partials.upcoming')




<div class="mb-4 mt-4">
  <div class="text-3xl">Die Presse</div>

  <div class="md:flex">
    <div>
      <div>Focus: In den Ferien programmieren lernen</div>
      <div>
        Viele Zukunftsberufe verlangen den Arbeitnehmern Informatikkenntnisse ab. Deswegen müssen gerade junge Menschen diese Kompetenzen so früh wie möglich aneignen und weiterentwickeln. Die Weichen dafür stellt eine gemeinnützige Initiative.

        <a href="http://www.focus.de/finanzen/karriere/arbeit-in-den-ferien-programmieren-lernen_id_6635977.html" target="_blank">Link</a>

      </div>
    </div>
    <div class="mt-4 md:mt-0 md:ml-2">
      <div>Planet Beruf: Berufsorientierung in Feriencamps</div>
      <div>
        In Design- und Programmiercamps können Jugendliche unter Anleitung von professionellen Coaches neue Technologien kennenlernen und ihre digitalen Skills weiterentwickeln.

        <a href="http://planet-beruf.de/eltern/feature-navigation/news/meldung/?tx_ttnews%5Btt_news%5D=6437&cHash=072f0bdf6c99f861cd81e33a8067f657" target="_blank">Link</a>
      </div>
    </div>

    <div class="mt-4 md:mt-0 md:ml-2">
      <div>Einstieg Informatik: </div>
      <div>Soft- und Hardware, Coding und Design – die Code+Design Camps bringen beides zusammen. Begleitet von erfahrenen Entwicklern und Designern können SchülerInnen an eigenen Projektideen arbeiten.</div>
      <a href="http://www.einstieg-informatik.de/index.php?article_id=1249" target="_blank"></a>
    </div>


  </div>
  @component('_components.button')
  @slot('colorback')
  pink
  @endslot
  @slot('colorfront')
  white
  @endslot
  @slot('link')
  presse
  @endslot
  Mehr Presse
@endcomponent

</div>

</main>

@endsection
