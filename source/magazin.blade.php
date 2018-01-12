@extends('_layouts.master')

@section('body')
<main class="p-8 bg-yellow">

    <div class="text-3xl mb-4">Das Code+Design Magazin</div>

   <div class="p-8 bg-white">
       
    <p class="text-xl">Mit dem Code+Design Magazin sollen sich junge Menschen einen Überblick darüber verschaffen können, wie sich das Berufsleben durch die Digitalisierung verändert, welche Berufsbilder dabei entstehen und welche Zukunftschancen Berufe in der digitalen Wirtschaft bieten.</p>

    <div class="mt-4">

@component('_components.img')

    @slot('src')
    /img/magazin/magazin-001.jpg
    @endslot

    @slot('alt')
    Das Magazin
    @endslot

@endcomponent


    <div class="mt-4">
        <div class="text-2xl font-bold">2016/2017 - Ausgabe 1</div>

        <div class="text-lg">Die neuen Rockstars: Neun Vorbilder zeigen, worauf es ankommt, um Coder*in zu werden
Einblicke in unbekannte Berufe: Was macht eigentlich eine UI-Designerin?
Irgendwas mit Computer: Berufe für Coder*innen kurz erklärt
In fünf Schritten zur eigenen App</div>
    </div>

    <div class="mt-4">
        


        @component('_components.button')
            @slot('link')
                files/code-design-magazine-001.pdf
            @endslot

            @slot('colorback')
            yellow
            @endslot

            @slot('colorfront')
            black
            @endslot

            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg> Download

        @endcomponent

        @component('_components.button')
            @slot('colorback')
            yellow
            @endslot
            @slot('colorfront')
            white
            @endslot
            @slot('link')
            magazin/bestellen
            @endslot
            @slot('width')
            @endslot

            Kostenlos bestellen
            
        @endcomponent

        {{-- <a href="/{{ $link }}" class="no-underline text-black inline-block text-2xl px-4 py-2 leading-none border rounded border-black hover:border-transparent hover:bg-{{ $colorback }} hover:text-{{ $colorfront }} mt-4 lg:mt-0">{{ $slot }}</a> --}}

    </div>

   </div>

</main>

@endsection

@section('title')
Magazin
@endsection
