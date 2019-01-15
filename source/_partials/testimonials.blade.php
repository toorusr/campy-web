<div class="mb-4 mt-4">
    <div class="text-3xl mb-4 mt-8 ml-4">
        <a href="/initiative/stimmen" class="no-underline border-b-2 border-purple text-grey-darkest">Die Stimmen</a>
    </div>
    <div class="md:flex">
      @php
          $testimonials->splice(3)
      @endphp
      @foreach ($testimonials as $testimonial)
          <div @if(! $loop->first) class="md:ml-2 mt-2 md:mt-0" @endif>
              @component('_components.card')
                  @slot('src') {{$testimonial->src}} @endslot
                  @slot('link') {{$testimonial->resource}} @endslot
                  @slot('medium') {{$testimonial->medium}} @endslot
                  @slot('channel') {{$testimonial->channel}} @endslot
                  @slot('published_at') {{ date('d.m.y', $testimonial->published_at) }} @endslot
                  {{$testimonial->content}}
              @endcomponent
          </div>
      @endforeach
    </div>
</div>
