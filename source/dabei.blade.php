@extends('_layouts.master')

@section('body')
<div class="p-4 bg-purple">
    <div class="bg-white p-4">
        <p class="text-2xl mb-4">Danke für deine Anmeldung!</p>
        <ul class="text-lg leading-loose">
           <li>Wir freuen uns, dass du dabei sein wirst! Wir schreiben dir so schnell wie möglich per SMS, wie du deine Anmeldung bestätigst.</li>
           <li class="text-sm">Keine SMS bekommen und 24h durch? Bitte erinnere uns <a href="mailto:hello@code.design?subject=Erinnerung%20Anmeldung&amp;body=Hallo,%20ich%habe%20mich%20angemeldet%20und%20warte%20auf%20eine%20Ant">kurz per Mail :)</a>
        <li class="font-bold"></li> 
        </ul>
        
    </div>
</div>
@endsection

@section('title')
Schön, dass du dabei bist!
@endsection
