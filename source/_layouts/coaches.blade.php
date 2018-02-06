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
            
            @if($page->website <> '')
            <dt class="font-bold">Website</dt>
            <a class="no-underline text-blue" href="{{$page->website}}>
                <dd class="mb-4">{{$page->website}}</dd>
            </a>
            @endif
            
            @if($page->phone <> '')
            <dt class="font-bold">Phone</dt>
            <dd class="mb-4">{{$page->phone}}</dd>
            @endif
            
            @if($page->email <> '')
            <dt class="font-bold">E-Mail</dt>
            <a class="no-underline text-blue" href="mailto:{{$page->email}}">
                <dd class="mb-4">{{$page->email}}</dd>
            </a>
            @endif
            
            @if($page->twitter <> '')
            <dt class="font-bold">Twitter</dt>
            <a class="no-underline text-blue" href="https://twitter.com/{{$page->twitter}}">
                <dd class="mb-4">&#64;{{$page->twitter}}</dd>
            </a>
            @endif
            
            @if($page->facebook <> '')
            <dt class="font-bold">Facebook</dt>
            <a class="no-underline text-blue" href="https://www.facebook.com/{{$page->facebook}}">
                <dd class="mb-4">{{$page->facebook}}</dd>
            </a>
            @endif
            
            @if($page->youtube <> '')
            <dt class="font-bold">YouTube</dt>
            <a class="no-underline text-blue" href="https://www.youtube.com/user/{{$page->youtube}}">
                <dd class="mb-4">{{$page->youtube}}</dd>
            </a>
            @endif
            
            @if($page->github <> '')
            <dt class="font-bold">Github</dt>
            <a class="no-underline text-blue" href="https://github.com/{{$page->github}}">
                <dd class="mb-4">{{$page->github}}</dd>
            </a>
            @endif
        </dl>
    </div>

</div>
@endsection