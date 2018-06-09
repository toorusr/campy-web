@extends('_layouts.master')

@section('body')
    @foreach($projects as $project)
        <div>
            @component('_components.project-card')
                @slot('name')
                    {{$project->name}}
                @endslot
                @slot('logo')
                    {{$project->logo}}
                @endslot
                @slot('lead')
                    {{$project->lead}}
                @endslot
                @slot('camp')
                    {{$project->camp}}
                @endslot
                @slot('location')
                    {{ $project->location }}
                @endslot
                @slot('description')
                    {{ $project->description }}
                @endslot
                @slot('id')
                    {{ $project->slug }}
                @endslot
            @endcomponent
        </div>
    @endforeach
@endsection

@section('title')
    Archiv
@endsection
