@extends('_layouts.master')

@section('body')
<main class="p-8 bg-green">

    <div class="text-3xl mb-4 text-white">Kontakt</div>

   <div class="p-8 bg-white">
       
    <form name="kontakt" action="/kontaktiert" netlify>
        
<div class="rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2">
    <div class="-mx-3 md:flex mb-6">
        <div class="md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-first-name">
                Vorname <span class="text-grey">*</span>
            </label>
            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker rounded py-3 px-4 mb-3" id="grid-first-name" type="text" placeholder="Vera" name="vorname" required>
        </div>
        <div class="md:w-1/2 px-3">
            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-last-name" required>
                Nachname
            </label>
            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="grid-last-name" type="text" placeholder="Molnár" name="nachname">
        </div>
    </div>
    <div class="-mx-3 md:flex mb-6">
        <div class="md:w-1/2 px-3">
            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-state">
                E-Mail <span class="text-grey">*</span>
            </label>
            <div class="relative">
                <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="grid-zip" type="email" name="email" required>
            </div>
        </div>
        
        <div class="md:w-1/2 px-3">
            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-state">
                Anliegen
            </label>
            <div class="relative">
                <select class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded" id="grid-state" name="anliegen">
                    <option value="coach">Ich möchte euch als Coach helfen</option>
                    <option value="coach">Ich möchte euch auf dem Camp helfen</option>
                    <option value="spende">Ich möchte euch mit Geld- oder Sachspende unterstützen</option>
                    <option value="sponsor">Ich möchte euch sponsorn</option>
                    <option value="frage">Ich habe eine Frage</option>
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
    <div class="-mx-3 md:flex">
    <div class="md:w-full px-3">
      <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-password">
        Nachricht
      </label>
      <textarea class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3" name="nachricht" rows="10"></textarea>
    </div>
  </div>
</div>

<div class="ml-8">@component('_components.button-submit')
    @slot('colorback')
    green
    @endslot
    @slot('colorfront')
    white
    @endslot
    @slot('link')
    #
    @endslot
    @slot('width')
    @endslot
    Senden
    
@endcomponent</div>

    </form>

    </div>

   </div>

</main>

@endsection

@section('title')
Kontakt
@endsection
