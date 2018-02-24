@extends('_layouts.master')

@section('body')
<main class="p-8 bg-green">

    <div class="text-3xl mb-4 text-white">Stimmen zu Code+Design</div>

   <div class="p-8 bg-white">

    
       
    <div class="flex flex-wrap">
        @foreach ($testimonials as $testimonial)
                <div class="w-full md:w-1/2 p-1">@component('_components.card')
                             
                                             @slot('src')
                                             {{ $testimonial->src }}
                                             @endslot
                             
                                             @slot('link')
                                             {{ $testimonial->resource }}
                                             @endslot
                             
                                             @slot('medium')
                                             {{ $testimonial->medium }}
                                             @endslot
                             
                                             @slot('channel')
                                            {{ $testimonial->channel }}
                                             @endslot
                             
                                             @slot('published_at')
                                             {{ date('d.m.y', $testimonial->published_at) }}
                                             @endslot
                             
                                             @slot('ml')
                                             @endslot
                             
                                             @slot('mr')
                                             @endslot

                                             @slot('m')
                                             @endslot

                                             @slot('mb')
                                             @endslot

                                             @yield('content')
                             
                                             {{ $testimonial->content }}
                             
                                          @endcomponent</div>         
    
        @endforeach
    </div>




    </div>

   </div>

</main>

@endsection

@section('title')
Stimmen
@endsection
