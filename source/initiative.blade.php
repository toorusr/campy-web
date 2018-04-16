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
			
				<div class="flex-1 h-full bg-green-lighter p-4 rounded md:mr-1 mb-4">
				
					<div class="w-full h-full items-center">
			
						<div class="items-center">
						
							<img src="/img/team/tom.jpg" class="w-auto p-2 rounded-full" />
						
						</div>
						<div class="h-full items-center">
				
							<p class="text-xl md:pt-4">Thomas Bachem</p><p class="hyphens">Vorstand</p>
							
						</div>
				
					</div>
				
				</div>
		
		</div>
		
		<div class="md:w-1/5">
		
			<div class="flex-1 h-full bg-green-lighter p-4 rounded md:ml-1 mb-4">
				
					<div class="w-full h-full items-center">
			
						<div class="items-center">
						
							<img src="/img/team/manuel.jpg" class="w-auto p-2 rounded-full" />
						
						</div>
						<div class="h-full items-center">
				
							<p class="text-xl md:pt-4">Manuel Dolderer</p><p class="hyphens">Vorstand</p>
							
						</div>
				
					</div>
				
			</div>
			
		</div>
		
		<div class="md:w-1/5">
		
			<div class="flex-1 h-full bg-green-lighter p-4 rounded md:ml-2 mb-4">
				
					<div class="w-full h-full items-center">
			
						<div class="items-center">
						
							<img src="/img/team/martin.jpg" class="w-auto p-2 rounded-full" />
						
						</div>
						<div class="h-full items-center">
				
							<p class="text-xl md:pt-4">Martin Betz</p><p class="hyphens">Geschäftsführer</p>
							
						</div>
				
					</div>
				
			</div>
			 
		</div>
		
		<div class="md:w-1/5">

			<div class="flex-1 h-full bg-green-lighter p-4 rounded md:ml-2 mb-4">
				
					<div class="w-full h-full items-center">
			
						<div class="items-center">
						
							<img src="/img/team/anna.jpg" class="w-auto p-2 rounded-full" />
						
						</div>
						<div class="h-full items-center">
				
							<p class="text-xl md:pt-4">Anna Brückner</p><p class="hyphens">Projektleiterin</p>
							
						</div>
				
					</div>
				
				</div>
	 
		</div>
		
		<div class="md:w-1/5">

			<div class="flex-1 h-full bg-green-lighter p-4 rounded md:ml-2 mb-4">
				
					<div class="w-full h-full items-center">
			
						<div class="items-center-center">
						
							<img src="/img/team/ina.jpg" class="w-auto p-2 rounded-full" />
						
						</div>
						<div class="h-full items-center">
				
							<p class="text-xl md:pt-4">Ina Wagner</p><p class="hyphens">Projektkoordinatorin</p>
							
						</div>
				
					</div>
				
				</div>
	 
		</div>

    </div>

    <div class="mt-4">@include('_partials.donations')</div>

</div>

</div>

</main>

@endsection

@section('title')
Initiative
@endsection