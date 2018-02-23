@extends('_layouts.master')

@section('body')

<div class="mt-4">
    <h2 class="mb-4">Updates</h2>
    

    <div id="update" class="bg-grey-lighter p-4 text-xl">
      
      <dl class="mt-4 text-lg">
      @foreach ($updates as $update)

      @if($update->camp == $page->id)

      
        <dt class="font-bold mb-4"><span class="font-normal bg-grey text-grey-darkest p-2 rounded">{{ date('d.m.y', $update->published_at) }}</span> {{ $update->question }}</dt>
        <dd class="mb-4 leading-normal"></dd>



      @endif
      @endforeach
    </dl>
    </div>

</div>

@endsection