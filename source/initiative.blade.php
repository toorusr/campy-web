@extends('_layouts.master')

@section('body')
<main class="p-8 bg-green">

   <ul>
       @foreach ($camps as $camp)
            <li><a href="{{ $camp->getUrl() }}">{{  $camp->city }} {{ $camp->date }}</a></li>
        @endforeach
   </ul>
</main>

@endsection
