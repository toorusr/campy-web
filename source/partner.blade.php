@extends('_layouts.master')

@section('body')
<main class="p-8 bg-green">

   <div class="flex flex-wrap bg-white p-8">
       @foreach ($partners as $partner)
            <div class="flex-1 flex flex-col items-center">

                @component('_components.img')
                
                    @slot('src')
                    /img/partner/{{ $partner->logo }}
                    @endslot
                
                    @slot('alt')
                    {{ $partner->name }}
                    @endslot
                
                @endcomponent

                
                <a href="{{ $partner->getUrl() }}" target="_blank">{{  $partner->name }}</a>

                @yield('content')
                
            </div>
        @endforeach
   </div>
</main>

@endsection
