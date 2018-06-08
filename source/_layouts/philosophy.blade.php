@extends('_layouts.master')


@section('body')
    <main class="p-8 bg-blue">
        <div class="text-3xl mb-4 text-white">Philosophie der Camps</div>
            <div class="p-8 rounded bg-white docs">
                @yield('philosophy_content')
            </div>
        </div>
    </main>
@endsection

@section('title')
Philosophy
@endsection
