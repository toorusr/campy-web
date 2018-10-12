@extends('_layouts.master')

@section('body')



<div class="p-8 bg-prime @if ($page->active === 'no') border-t-4 border-pink @endif">
  @if ($page->active === 'no')
<div class="text-pink-lighter">
    Dieses {{ $page->type }} ist leider schon vorbei…
</div>
@endif
   <h1 class="text-white">Komm' zum {{ $page->type }} in {{ $page->city }} 
    @if ($page->days === 1) ({{ date('d.m.', $page->date_start) }}) @else 
    ({{ date('d.m.', $page->date_start) }} bis {{ date('d.m.y', $page->date_end) }}) @endif</h1>


<div class="md:flex mt-4">
  <div class="md:w-2/3 bg-white rounded p-4">

    <header>
      @if ($page->youtube)
          <div id='plyr-youtube' data-type="youtube" data-video-id="{{ $page->youtube }}"></div>
        @else
          <div><img src="/img/{{ $page->headerimage }}" alt=""></div>
        @endif
    </header>


    @component('_components.camps.facts')
        @slot('location')
        {{ $page->location }}
        @endslot

        @slot('locationlink')
        {{ $page->locationlink }}
        @endslot

        @slot('timestart')
        {{ $page->time_start }}
        @endslot

        @slot('timeend')
        {{ $page->time_end }}
        @endslot

        @slot('from')
        {{ date('d.m.', $page->date_start) }}
        @endslot

        @slot('to')
        {{ date('d.m.y', $page->date_end) }}
        @endslot

        @slot('days')
        {{ $page->days }}
        @endslot

        @slot('cost')
        {{ $page->cost }}
        @endslot

        @slot('costlaptop')
        {{ $page->costlaptop }}
        @endslot

        @slot('meals')
        {{ $page->meals }}
        @endslot

        @slot('type')
        {{ $page->type }}
        @endslot

        @slot('laptopfree')
        {{ $page->laptopfree }}
        @endslot

    @endcomponent

@if ($page->teaser === 'yes')
    @component('_components.camps.teaser')
        @slot('location')
        {{ $page->location }}
        @endslot

        @slot('from')
        {{ date('d.m.y', $page->date_start) }}
        @endslot

        @slot('to')
        {{ date('d.m.y', $page->date_end) }}
        @endslot

        @slot('city')
        {{ $page->city }}
        @endslot

        @slot('holidays')
        {{ $page->holidays }}
        @endslot

        @slot('days')
        {{ $page->days }}
        @endslot


    @endcomponent
@else
  {!! $page->getContent() !!}
{{--   @yield('content')--}}
@endif

    @if ($page->active === 'yes')
    @include('_partials.campy', ['type' => $page->type ])
    @endif

    @include('_partials.timetable', ['width' => 'w-1/2'])

  </div>
  <div class="md:w-1/3 bg-white rounded p-4 md:ml-4 mt-4 md:mt-0">
    
    <div class="mb-4">@if ($page->active === 'yes')
    @include('_partials.campy', ['type' => $page->type ])
    @endif</div>


    @include('_partials.faq', ['cost' => $page->cost, 'costlaptop' => $page->costlaptop, 'campid' => $page->id])

    @include('_partials.update')


  </div>

</div>

<div class="text-5xl mt-8 text-white font-bold uppercase font-sans tracking-wide">Förderer</div>

<div class="bg-white rounded p-8 mt-8">

  <div class="flex flex-wrap ">
            @foreach ($partners->filter->hasCamp($page->id) as $partner)

            @if($partner->tier == 'silver' or $partner->tier == 'gold' or $partner->tier == 'bronze')
                   <div class="p-4"><div class="flex flex-col items-center">
                   
                                   <div class="flex flex-col justify-center">
                                   <a href="{{ $partner->website}}">
                                    @component('_components.img')
                                                                                                  
                                      @slot('src')
                                      /img/partner/{{ $partner->logo }}
                                      @endslot
                                  
                                      @slot('alt')
                                      {{ $partner->name }}
                                      @endslot
      
                                      @slot('width')
                                      {{ $partner->width or ''}}
                                      @endslot
                                      
                                      @slot('height')
                                      {{ $partner->height or "h-16"}}
                                      @endslot
                                                                      
                                   @endcomponent
                                  </a>
                                   </div>

                                   @if($page->long)
                                   {{ $partner->long }}
                                   @endif
                                                                         
                    </div>
                </div>
            @endif
            @endforeach
</div></div>

<div class="text-5xl mt-8 text-white font-bold uppercase font-sans tracking-wide">Partner</div>

<div class="bg-white rounded p-8 mt-8">

  <div class="flex flex-wrap ">
            @foreach ($partners->filter->hasCamp($page->id) as $partner)
                   @if ($partner->tier == 'patron' or $partner->tier == 'partner' )
                   <div class="p-4"><div class="flex flex-col items-center">
                   
                                   <div class="h-32 flex flex-col justify-center">
                                   <a href="{{ $partner->website}}">
                                    @component('_components.img')
                                                                                                  
                                      @slot('src')
                                      /img/partner/{{ $partner->logo }}
                                      @endslot
                                  
                                      @slot('alt')
                                      {{ $partner->name }}
                                      @endslot
      
                                      @slot('width')
                                      w-32
                                      @endslot

                                      @slot('style')
                                      
                                      @endslot
                                                                      
                                   @endcomponent
                                  </a>
                                   </div>

                                   @if($page->long)
                                   {{ $partner->long }}
                                   @endif
                                                                         
                    </div>
                </div>
                @endif
            @endforeach
</div></div>

@endsection





@section('meta')

@if ($page->youtube)
<link rel="stylesheet" href="/css/plyr.css">
@endif

@if ($page->color)
<style>
  .bg-prime {
    background-color: {{ $page->color }};
  }
</style>
@endif

@endsection


@section('scripts')

@if ($page->youtube)
<script src="https://cdn.plyr.io/2.0.18/plyr.js"></script>
    <script>
        plyr.setup("#plyr-youtube");

    </script>
@endif

@endsection


@section('title')
{{ $page->type }} | {{ $page->city }} @if ($page->days > 1)({{ date('d.m.', $page->date_start) }} - {{ date('d.m.y', $page->date_end) }} @else {{ date('d.m.', $page->date_start) }} @endif)
@endsection