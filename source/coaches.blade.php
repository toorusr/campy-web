@extends('_layouts.master')

@section('body')
<main class="p-8 bg-purple">
    <div class="text-3xl mb-4 text-white">Coaches</div>
    <div class="p-8 rounded bg-white">
        <div class="flex flex-wrap">
            @foreach ($coaches as $coach)
                <div class="w-full md:w-1/2 p-1">
                    @component('_components.person_card')
                        @slot('image') {{ $coach->image }} @endslot
                        @slot('section') {{ $coach->section }} @endslot
                        @slot('firstname') {{ $coach->firstname }} @endslot
                        @slot('lastname') {{ $coach->lastname }} @endslot
                        @slot('bio') {{ $coach->bio }} @endslot
                        @slot('website') {{ $coach->website }} @endslot
                        @slot('github') {{ $coach->github }} @endslot
                        @slot('twitter') {{ $coach->twitter }} @endslot
                    @endcomponent
                </div>
            @endforeach
        </div>
    </div>
</main>
@endsection

@section('title')
Coaches
@endsection
