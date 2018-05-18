@extends('_layouts.master')

@section('body')
<main class="p-8 bg-green">
<div class="text-white text-3xl mb-4">Die Code+Design Initiative</div>
<div class="bg-white rounded p-4">

    @include('_partials.initiative')

    <div class="mt-4">
        <div class="text-2xl mb-2">Wer wir sind</div>
        <div class="md:flex w-full">
        	<div class="md:w-1/5">
        			<div class="flex-1 h-full bg-grey-lighter p-4 rounded md:mr-1 mb-4">
        				<div class="w-full h-full">
        					<div class="flex flex-row items-center justify-center">
        						@component('_components.img') @slot('src') /img/team/tom.jpg @endslot @slot('width') w-auto @endslot @slot('rounded') rounded-full @endslot @slot('alt') Tom Bachem @endslot @endcomponent
        					</div>
        					<div class="h-full text-center">
        						<p class="text-xl md:pt-4">Thomas Bachem</p><p class="hyphens">Vorstand</p>
        					</div>
        				</div>
        			</div>
        	</div>
        	<div class="md:w-1/5">
        		<div class="flex-1 h-full bg-grey-lighter p-4 rounded md:ml-1 mb-4">
        				<div class="w-full h-full">
        					<div class="flex flex-row items-center justify-center">
        						@component('_components.img') @slot('src') /img/team/manuel.jpg @endslot @slot('width') w-auto @endslot @slot('rounded') rounded-full @endslot @slot('alt') Manuel Dolderer @endslot @endcomponent
        					</div>
        					<div class="h-full text-center">
        						<p class="text-xl md:pt-4">Manuel Dolderer</p><p class="hyphens">Vorstand</p>
        					</div>
        				</div>
        		</div>
        	</div>
        	<div class="md:w-1/5">
        		<div class="flex-1 h-full bg-grey-lighter p-4 rounded md:ml-2 mb-4">
        				<div class="w-full h-full">
        					<div class="flex flex-row items-center justify-center">
        						@component('_components.img') @slot('src') /img/team/ina.jpg @endslot @slot('width') w-auto @endslot @slot('rounded') rounded-full @endslot @slot('alt') Ina Wagner @endslot @endcomponent
        					</div>
        					<div class="h-full text-center">
        						<p class="text-xl md:pt-4">Ina Wagner</p><p class="hyphens">Projektkoordinatorin</p>
        					</div>
        				</div>
        			</div>
        	</div>
        	<div class="md:w-1/5">
        		<div class="flex-1 h-full bg-grey-lighter p-4 rounded md:ml-2 mb-4">
        				<div class="w-full h-full">
        					<div class="flex flex-row items-center justify-center">
        						@component('_components.img') @slot('src') /img/team/martin.jpg @endslot @slot('width') w-auto @endslot @slot('rounded') rounded-full @endslot @slot('alt') Martin Betz @endslot @endcomponent
        					</div>
        					<div class="h-full text-center">
        						<p class="text-xl md:pt-4">Martin Betz</p><p class="hyphens">Geschäftsführer</p>
        					</div>
        				</div>
        		</div>
        	</div>
        	<div class="md:w-1/5">
        		<div class="flex-1 h-full bg-grey-lighter p-4 rounded md:ml-2 mb-4">
        				<div class="w-full h-full">
        					<div class="flex flex-row items-center justify-center">
        						@component('_components.img') @slot('src') /img/team/anna.jpg @endslot @slot('width') w-auto @endslot @slot('rounded') rounded-full @endslot @slot('alt') Anna Brückner @endslot @endcomponent
        					</div>
        					<div class="h-full text-center">
        						<p class="text-xl md:pt-4">Anna Brückner</p><p class="hyphens">Projektleiterin</p>
        					</div>
        				</div>
        			</div>
        	</div>
        </div>
        <div class="mt-4">
            @include('_partials.donations')
        </div>
    </div>
</div>
</main>
@endsection

@section('title')
Initiative
@endsection
