@extends('_layouts.master')

@section('body')
<main class="p-8 bg-yellow">

    <div class="text-3xl mb-4">Das Code+Design Magazin</div>

   <div class="p-8 bg-white">

    <div class="ml-8 text-2xl">Magazin kostenlos bestellen!</div>
       
    <form name="magazin-bestellung" action="/magazin/bestellt" netlify>
        
<div class="rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2">
    <div class="-mx-3 md:flex mb-6">
        <div class="md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-first-name">
                Vorname
            </label>
            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker rounded py-3 px-4 mb-3" id="grid-first-name" type="text" placeholder="Grace" name="vorname" required>
        </div>
        <div class="md:w-1/2 px-3">
            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-last-name" required>
                Nachname
            </label>
            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="grid-last-name" type="text" placeholder="Hopper" name="nachname">
        </div>
    </div>
    <div class="-mx-3 md:flex mb-6">
        <div class="md:w-2/3 px-3">
            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-password">
                Straße und Hausnummer
            </label>
            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3" id="grid-password" type="text" name="anschrift" required>
        </div>
        <div class="md:w-1/3 px-3">
            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-zip">
                PLZ
            </label>
            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="grid-zip" type="text" name="plz" required>
        </div>
        <div class="md:w-1/3 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-city">
                Ort
            </label>
            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="grid-city" type="text" name="ort" required>
        </div>
    </div>
    <div class="-mx-3 md:flex mb-2">
        <div class="md:w-1/2 px-3">
            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-state">
                Anzahl
            </label>
            <div class="relative">
                <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="grid-zip" type="number" name="anzahl" required>
            </div>
        </div>
        
        <div class="md:w-1/2 px-3">
            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-state">
                Bestellgrund
            </label>
            <div class="relative">
                <select class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded" id="grid-state">
                    <option value="selbst">Ich möchte es selbst lesen</option>
                    <option value="kinder">Ich möchte es meinen Kindern geben</option>
                    <option value="schueler">Ich möchte es meinen Schülern geben</option>
                    <option value="firma">Ich möchte es in meiner Firma auslegen</option>
                    <option value="sonstiges">Sonstiges</option>
                </select>
                <div class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey-darker">
                    <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                    </svg>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="p-8">@component('_components.button-submit')
    @slot('colorback')
    yellow
    @endslot
    @slot('colorfront')
    white
    @endslot
    @slot('link')
    #
    @endslot
    @slot('width')
    @endslot
    Bestellen
    
@endcomponent</div>

    </form>

    </div>

   </div>

</main>

@endsection

@section('title')
Magazin
@endsection
