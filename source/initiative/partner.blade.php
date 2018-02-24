@extends('_layouts.master')

@section('body')
<main class="p-8 bg-green">


   <div class="bg-white p-8">

        <p class="text-2xl mt-8">Förderer</p>


        <div class="flex flex-wrap ">
            @foreach ($partners->filter->hasTier('patron')->sortByDesc('strength') as $partner)
                   <div class="p-4"><div class="flex flex-col items-center">
                   
                                   <div class="h-32 flex flex-col justify-center">
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
                                                                      
                                    @endcomponent
                                   </div>
                                                                         
                               </div></div>
            @endforeach
        </div>

        <hr class="border-b-4">


        <p class="text-2xl mt-8">Sponsoren</p>


        <div class="flex flex-wrap mb-4">
            @foreach ($partners->filter->hasTier('gold')->sortByDesc('strength') as $partner)
                   <div class="p-4"><div class="flex flex-col items-center">
                   
                                   <div class="h-32 flex flex-col justify-center">
                                    <a href="{{ $partner->website }}" href="_blank">
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
                                   
                                   @endcomponent
                                   </a>
                                   </div>
                                                                         
                               </div></div>
            @endforeach
        </div>
        <div class="flex flex-wrap mb-4">
            @foreach ($partners->filter->hasTier('silver')->sortByDesc('strength') as $partner)
                   <div class="p-4"><div class="flex flex-col items-center">
                   
                                   <div class="h-32 flex flex-col justify-center">
                                    <a href="{{ $partner->website }}" href="_blank">
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
                                   
                                   @endcomponent
                                   </a>
                                   </div>
                                                                         
                               </div></div>
            @endforeach
        </div>

        <div class="flex flex-wrap mb-4">
            @foreach ($partners->filter->hasTier('bronze')->sortByDesc('strength') as $partner)
                   <div class="p-4"><div class="flex flex-col items-center">
                   
                                   <div class="h-32 flex flex-col justify-center">
                                    <a href="{{ $partner->website }}" href="_blank">
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
                                   
                                   @endcomponent
                                   </a>
                                   </div>
                                                                         
                               </div></div>
            @endforeach
        </div>



        <hr class="border-b-4">

        <p class="text-2xl mt-8">Spender 2018</p>


       <div class="flex flex-wrap ">
            @foreach ($partners->filter->hasTier('donator') as $partner)
                   <div class="p-4"><div class="flex flex-col items-center">
                   
                                   <div class="h-32 flex flex-col justify-center">
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
                                   
                                   @endcomponent
                                   </div>
                                                                         
                    </div>
                </div>
            @endforeach
        </div>


        <hr class="border-b-4">

        <p class="text-2xl mt-8">Partner</p>


       <div class="flex flex-wrap ">
            @foreach ($partners->filter->hasTier('partner')->sortByDesc('strength') as $partner)
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
                                                                      
                                   @endcomponent
                                  </a>
                                   </div>
                                                                         
                    </div>
                </div>
            @endforeach
        </div>

        
        </div>
</main>

@endsection

@section('title')
Partner
@endsection
