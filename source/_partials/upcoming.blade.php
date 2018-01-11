<div class="mt-4 border-2 rounded p-4 mb-4">
    <div class="text-2xl">Die nächsten Camps</div>
    
   <ul class="mt-4 list-reset">
   @foreach ($camps as $camp)
   @if ($camp->active === 'yes')
        <li class="mb-2"><a class="text-lg" href="{{ $camp->getUrl() }}">{{  $camp->city }} ({{ date('d.m.', $camp->date_start) }} bis {{ date('d.m.y', $camp->date_end) }})

        </a></li>
    @endif
    @endforeach
    </ul>
    
</div>