<div class="mt-4">

    <h2 class="mb-4" id="updates">Updates</h2>
    
    <div class="bg-grey-lighter p-4 text-xl">
      
      <dl class="mt-4 text-lg">
      @foreach ($updates as $update)

        @if($update->camp == $page->id)
        <dt class="font-bold mb-4"><span class="font-normal bg-yellow-lightest text-grey-darkest py-1 px-2 rounded-lg">{{ date('d.m.y', $update->published_at) }}</span> {{ $update->question }}</dt>
        <dd class="mb-4 leading-normal">{!! $update->getContent() !!}</dd>
        <br>
        @endif

      @endforeach

    </dl>
    
    </div>

</div>