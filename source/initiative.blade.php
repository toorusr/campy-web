@extends('_layouts.master')

@section('body')
<main class="p-8 bg-green">

    <div class="text-white text-3xl mb-4">Die Code+Design Initiative</div>


   <div class="bg-white p-4">

   @include('_partials.initiative')


   <div class="mt-4">
    <div class="text-2xl mb-2">Wer wir sind</div>
   
   <div class="md:flex w-full">

    <div class="flex-1 bg-green-lighter p-4 rounded"><p class="text-xl">Thomas Bachem</p><p>Vorstand</p>
         <ul class="mt-4 list-reset">
          
          <li>Tech Entrepreneur</li>
                  <li>Software Entwickler</li>
                  <li>Business Angel</li></ul>
     </div>

     <div class="flex-1 bg-green-lighter p-4 rounded md:ml-4"><p class="text-xl">Manuel Dolderer</p><p>Vorstand</p>
         <ul class="mt-4 list-reset"><li>Wissenschaftler</li>
                  <li>Ökonom</li>
                  <li>Edupreneur</li></ul>
     </div>

     <div class="flex-1 bg-green-lighter p-4 rounded md:ml-4"><p class="text-xl">Martin Betz</p><p>Geschäftsführer</p>
         <ul class="mt-4 list-reset"><li>Bildungsstratege</li>
                  <li>IT-Berater</li>
                  <li>Ökonom</li></ul>
     </div>

     <div class="flex-1 bg-green-lighter p-4 rounded md:ml-4"><p class="text-xl">Anna Brückner</p><p>Projektleiterin</p>
         <ul class="mt-4 list-reset">
         <ul class="list-reset"><li></li>
                  <li></li>
                  <li></li></ul>
     </div>
      

    <div class="md:ml-4  flex-1">
        
    </div>

        </div>

    <div class="mt-4">@include('_partials.donations')</div>

</div>

</div>

</main>

@endsection

@section('title')
Initiative
@endsection