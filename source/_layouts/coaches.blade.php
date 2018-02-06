@extends('_layouts.master')

@section('body')
<div class="md:flex">
    <div class="md:w-1/6 md:ml-4 mt-4 mb-4 md:mt-0">
        @component('_components.img')
        
            @slot('src')
            /img/coaches/{{$page->image}}
            @endslot
            
            @slot('alt')
            {{$page->firstname}} {{$page->lastname}}
            @endslot
            
        @endcomponent
    </div>
    <div class="md:w-4/6" style="margin-left: 20px;">
        <dl class="mt-4 text-lg">
            <dt class="font-bold">Name</dt>
            <dd class="mb-4">{{$page->firstname}} {{$page->lastname}}</dd>
            <dt class="font-bold">Website</dt>
            <dd class="mb-4">{{$page->website}}</dd>
            <dt class="font-bold">Twitter</dt>
            <dd class="mb-4">&#64;{{$page->twitter}}</dd>
            <dt class="font-bold">Github</dt>
            <dd class="mb-4">{{$page->github}}</dd>
        </dl>
    </div>

</div>
@endsection