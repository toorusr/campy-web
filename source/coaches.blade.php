@extends('_layouts.master')

@section('body')
<main class="p-8 bg-purple">

    <div class="text-3xl mb-4 text-white">Coaches</div>

   <div class="p-8 bg-white">
    <div class="flex flex-wrap ">
        @foreach ($coaches as $coach)
            <div class="w-full md:w-1/2 p-1">
                <div class="flex-1 rounded border px-6 py-4 max-w-md h-full {{ $ml or '' }} {{ $mr or '' }} m-{{ $m or '' }} mb-{{ $mb or '' }}">
                    <div class="md:flex">
                        <div class="md:w-1/6">
                            <img src="/img/coaches/{{ $coach->image }}" class="rounded"/>
                        </div>
                        <div class="md:w-5/6 md:ml-4 mt-4 mb-4 md:mt-0">
                            <div class="text-2xl mb-4"><a class="text-black" href="/coaches/{{ $coach->lastname }}">{{ $coach->firstname }} {{ $coach->lastname }}</a></div>
                            <p class="text-lg leading-normal">{{ $coach->bio }}</p>
                        
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    </div>
    </div>
    </div>
@endsection

@section('title')
Coaches
@endsection