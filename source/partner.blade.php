@extends('_layouts.master')

@section('body')
<main class="p-8">

   <ul>
       @foreach ($partners as $partner)
            <li><a href="{{ $partner->getUrl() }}">{{  $partner->name }}</a></li>
        @endforeach
   </ul>
</main>

@endsection
