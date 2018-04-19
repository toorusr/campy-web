@extends('_layouts.master')

@section('body')

<main class="p-8 bg-purple">
	<div class="md:flex mb-4">
        <div class="md:w-2/3 mr-4">
			<a class="text-white text-4xl mb-4" href="/blog">Blog</a>
		</div>
		<div class="md:flex md:w-1/3 mb-4">
			<div class="md:w-1/2 m-full">
				@if ($page->getPrevious())
					@component('_components.blog-button')
						@slot('colorback')
						white
						@endslot
						@slot('colorfront')
						purple
						@endslot
						@slot('maincolor')
						transparent
						@endslot
						@slot('textcolor')
						white
						@endslot
						@slot('bordercolor')
						transparent
						@endslot
						@slot('link')
						{{$page->getPrevious()->getUrl()}}
						@endslot
						@slot('width')
						@endslot
						Vorheriger Blog-Eintrag
					@endcomponent
				@endif
			</div>
			<div class="md:w-1/2 m-full">
				@if ($page->getNext())
					@component('_components.blog-button')
						@slot('colorback')
						white
						@endslot
						@slot('colorfront')
						purple
						@endslot
						@slot('maincolor')
						transparent
						@endslot
						@slot('textcolor')
						white
						@endslot
						@slot('bordercolor')
						transparent
						@endslot
						@slot('link')
						{{$page->getNext()->getUrl()}}
						@endslot
						@slot('width')
						@endslot
						Nächster Blog-Eintrag
					@endcomponent
				@endif
			</div>
		</div>
	</div>
        <div class="bg-white p-4 rounded">
            <div class="md:flex mb-4" style="margin-bottom: 10px;">
                <div class="md:w-3/5 mr-4">
					<div class="text-5xl back md:ml-4 mt-4 md:mt-0"><a class="no-underline text-black" href="{{$page->getUrl()}}">{{$page->caption}} </a></div>
					<div class="text-4md mb-4 back md:ml-4 mt-4 md:mt-0"><small class="text-black">{{$page->author}} | {{ date('d-m-Y', $blog->published_at) }}</small></div>
                    <p class="text-xl text-justify mb-8 text-lg md:ml-4 mt-4 md:mt-0">{{$page->lead}}</p>
					<div class="lead-normal text-md text-justify leading-normal ml-4 mt-4 md:mt-0">{!! $page->getContent() !!}</div>
                </div>
                <div class="md:flex md:w-2/5 md:ml-4 mt-4 md:mt-0 items-start">
					<div class="w-full">
						@if($page->youtube <> '')
							<div id="plyr-youtube" class="w-full" data-type="youtube" data-video-id="{{$page->youtube}}"></div>
						@else
						@if($page->image <> '')
							<img src="{{$page->image}}" alt="" />
						@endif
						@endif
                    </div>
                </div>
            </div>
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