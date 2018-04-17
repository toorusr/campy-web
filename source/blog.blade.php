---
pagination:
  collection: blogs
  perPage: 5
---

@extends('_layouts.master')

@section('body')
<main class="p-8 bg-purple">

    <div class="text-white text-3xl mb-4">Blog: <small class="text-grey">
        <!-- Start: Pagination -->
        @if ($previous = $pagination->previous)
            <a class="text-grey no-underline" href="{{ $page->baseUrl }}{{ $pagination->first }}">&lt;&lt;</a>
            <a class="text-grey no-underline" href="{{ $page->baseUrl }}{{ $previous }}">&lt;</a>
        @endif

        @foreach ($pagination->pages as $pageNumber => $path)
            <a href="{{ $page->baseUrl }}{{ $path }}"
                class="text-grey {{ $pagination->currentPage == $pageNumber ? 'selected' : 'no-underline' }}">
                {{ $pageNumber }}
            </a>
        @endforeach

        @if ($next = $pagination->next)
            <a class="text-grey no-underline" href="{{ $page->baseUrl }}{{ $next }}">&gt;</a>
            <a class="text-grey no-underline" href="{{ $page->baseUrl }}{{ $pagination->last }}">&gt;&gt;</a>
        @endif
        </small>
        <!-- End: Pagination -->
    </div>

        
        
        <!-- Start: Articles -->
    @foreach($pagination->items as $blog)
        <div class="bg-white p-4 rounded mt-4 mb-4">
            <div class="md:flex items-start">
                <div class="md:w-2/5">
                    @if($blog->youtube <> '')
                        <div id="plyr-youtube" class="w-full" data-type="youtube" data-video-id="{{$blog->youtube}}"></div>
                    @else
                        @if($blog->image <> '')
                            <img src="{{$blog->image}}" alt="" />
                        @endif
                    @endif
                </div>
                <div class="md:w-3/5 md:ml-4 mt-4 mb-4 md:mt-0">
					<div class="text-4xl back md:ml-4 mt-4 md:mt-0"><a class="no-underline text-black" href="{{$blog->getUrl()}}">{{$blog->caption}} </a></div>
					<div class="text-2md mb-4 back md:ml-4 mt-4 md:mt-0"><small class="text-grey">{{$blog->author}} | {{ $blog->published_at}}</small></div>
                    <p class="text-lg mb-4 leading-normal md:ml-4 mt-4 md:mt-0">{{$blog->lead}}</p>
					<div class="md:block md:ml-4 mt-4 md:mt-0">
					  @component('_components.blog-button')
						@slot('colorback')
						purple
						@endslot
						@slot('colorfront')
						white
						@endslot
						@slot('maincolor')
						transparent
						@endslot
						@slot('textcolor')
						black
						@endslot
						@slot('bordercolor')
						black
						@endslot
						@slot('link')
						{{$blog->getUrl()}}
						@endslot
						@slot('width')
						@endslot
						Mehr dazu lesen ...
					  @endcomponent
					</div>
                </div>
            </div>
        </div>
    @endforeach
        <!-- End: Articles -->


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
Camps
@endsection