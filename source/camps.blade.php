@extends('_layouts.master')

@section('body')
<main class="p-8">
   <div class="text-3xl">Hello, {{ $page->contact }}!</div> 
   <ul>
       @foreach ($camps as $camp)
            <li><a href="{{ $camp->getUrl() }}">{{  $camp->city }}</a></li>
        @endforeach
   </ul>
</main>

@endsection
