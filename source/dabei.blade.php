@extends('_layouts.master')

@section('body')
<div class="p-4 bg-purple">
    <div class="bg-white p-4">
        <p class="text-2xl mb-4">Danke für deine Anmeldung!</p>
        <ul class="text-lg leading-loose">
           <li>Wir freuen uns, dass du dabei sein wirst! Wir brauchen noch ein paar mehr Infos von dir, um deine Teilnahme zu bestätigen.</li>
        <li class="font-bold">Fülle dafür bitte so schnell wie möglich auf <a href="https://cdcamp.de" target="_blank">cdcamp.de</a> noch deine restlichen Daten aus.</li>
        <li>Bei Fragen: <a href="mailto:hello@code.design">hello@code.design</a></li> 
        </ul>
        
    </div>
</div>
@endsection

@section('title')
Schön, dass du dabei bist!
@endsection
