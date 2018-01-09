@extends('_layouts.master')

@section('body')
<main class="p-8 bg-purple text-white">

   <ul>
       @foreach ($camps as $camp)
            <li><a href="{{ $camp->getUrl() }}">{{  $camp->city }} {{ $camp->date }}</a></li>
        @endforeach
   </ul>

    <ul>
        @foreach ($partners as $partner)
            <li><a href="{{ $partner->getUrl() }}">{{ $partner->name }}</a></li>
        @endforeach
    </ul>

</main>

@endsection
