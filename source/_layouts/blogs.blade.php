@extends('_layouts.master')

@section('body')

<main class="p-8 bg-yellow">
    <div class="text-black text-3xl mb-4">{{$page->caption}} <small>von {{$page->author}} am {{ $page->published_at}}</small></div>
        <div class="bg-white p-4">
            <div class="md:flex mb-4" style="margin-bottom: 10px;">
                <div class="md:w-3/5">
                    <p class="text-2xl mb-4 text-lg">{{$page->lead}}</p>
                    
                </div>
                <div class="md:w-2/5 md:ml-4 mt-4 mb-4 md:mt-0">
                    @if($page->youtube <> '')
                        <div id="plyr-youtube" class="w-full" data-type="youtube" data-video-id="{{$page->youtube}}"></div>
                    @else
                    @if($page->image <> '')
                        <img src="{{$page->image}}" alt="" />
                    @endif
                    @endif
                    
                </div>
            </div>
            <p class="lead-normal">
                @yield('content')
            </p>
        </div>
    </div>
</main>
@endsection

@section('scripts')
<script src="https://cdn.plyr.io/2.0.18/plyr.js"></script>
    <script>
        plyr.setup("#plyr-youtube");

    </script>
@endsection

@section('styles')
<link rel="stylesheet" href="/css/plyr.css">
@endsection

@section('title')
Blog | {{$page->caption}})
@endsection