@extends('_layouts.master')

@section('body')

<div class="text-2xl">{{ $page->name }}</div>

<img src="/img/{{ $page->logo}}" alt="">

<p>@yield('test')</p>

@endsection