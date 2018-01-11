@extends('_layouts.master')

@section('body')
<main class="p-8 bg-green">

    <div class="text-white text-3xl mb-4">Die Code+Design Initiative</div>


   <div class="bg-white p-4">

   @include('_partials.initiative')


   <div class="mt-4">
    <div class="text-2xl mb-2">Wer wir sind</div>
   
   <div class="md:flex">

    <div class="flex-1">Thomas Bachem (Vorstand)
         Tech Entrepreneur
         Software Entwickler
         Business Angel
     </div>
      
      <div class="md:ml-4 flex-1">Manuel Dolderer (Vorstand)
            Wissenschaftler
            Ökonom
            Edupreneur
      </div>
      
      <div class="md:ml-4  flex-1">Martin Betz (Geschäftsführer)
            Bildungsstratege
            IT-Berater
            Ökonom
    </div>

    <div class="md:ml-4  flex-1">Anna Brückner (Projektleiterin)
        
    </div>

        </div>

    <div class="mt-4">@include('_partials.donations')</div>

</div>

</div>

</main>

@endsection
