@extends('_layouts.master')

@section('body')
<main class="p-8 bg-purple">

    <div class="text-white text-3xl mb-4">Coach auf dem Code+Design Camp</div>

    <div class="bg-white p-4">

        

    </div>

</main>

@endsection

@section('scripts')
<script src="https://cdn.plyr.io/2.0.18/plyr.js"></script>
    <script>
        plyr.setup("#plyr-youtube");

    </script>
@endsection

@section('styles')
<link rel="stylesheet" href="/css/plyr.css">
@endsection

@section('title')
Camps
@endsection