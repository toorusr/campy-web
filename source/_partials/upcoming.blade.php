<div class="mt-4 border-2 rounded p-4 mb-4 bg-grey-light">
    <div class="text-2xl mb-4 text-grey-darkest">Die nächsten Camps</div>

    <div class="md:flex">
        @foreach ($camps as $camp)
             @if ($camp->active === 'yes')

              
                <div class="flex-1 p-1">
                    <div class="flex flex-col flex-1 bg-grey-darkest p-4 rounded">
                                    <a class="no-underline" href="{{ $camp->getUrl() }}">
                                        <p class="mb-2 text-xl font-bold no-underline text-white">{{  $camp->city }}</p>
                                                        <p class="text-white">({{ date('d.m.', $camp->date_start) }} bis {{ date('d.m.y', $camp->date_end) }})<br/>
                                                            {{ $camp->holidays }}
                                                        </p> 
                                                        
                                                    </a>
                    </div>
                </div>
               
                @endif
        @endforeach
    </div>
    
</div>