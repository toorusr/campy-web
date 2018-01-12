@extends('_layouts.master')

@section('body')
<main class="p-8 bg-purple text-lg">

   <div class="bg-white p-4 flex leading-normal"><section class="w-2/3 mr-4"><div class="text-2xl">Teilnahmebedingungen</div><p>Es gibt einige Punkte, auf die wir Dich im Vorfeld des Code+Design Camps deutlich hinweisen wollen. Wir erwarten von allen Teilnehmern, dass sie diese Hinweise lesen und auf dem Camp einhalten.</p>
   <ul>
   <li>Anweisungen der Organisatoren und Coaches wird Folge geleistet. Solltest Du Dich daneben benehmen, wirst Du vom Code+Design Camp ausgeschlossen.</li>
   <li>
   Illegale Substanzen und Substanzen, die unter das Betäubungsmittelgesetz fallen, haben auf unserer Veranstaltung nichts zu suchen. </li>
   <li>Gleiches gilt für rassistisches oder sexistisches Verhalten.</li>
   <li>
   Du musst eine Haftpflichtversicherung haben, die für Schäden an fremden Sachen, die durch Dich verursacht wurden, aufkommt.</li>
   <li>
   Für den Ernstfall hast Du Deine Krankenversicherungskarte dabei.</li>
   <li> Solltest Du spezielle Allergien haben oder in einer für das Camp relevanten Weise gesundheitlich eingeschränkt sein, musst Du uns im Vorfeld darüber informieren.</li>
   <li>
   Für die An- und Abreise sowie die Organisation einer Übernachtungsmöglichkeit bist Du selbst verantwortlich. Sprich uns aber bitte an, wenn Du Hilfe brauchst.</li>
   <li>
   Im Rahmen des Code+Design Camps werden Foto- und Videoaufnahmen durch die Veranstalter gemacht.</li>
   <li> Die Aufnahmen dürfen dazu verwendet werden, über das Camp zu berichten oder zukünftige Code+Design Camps oder ähnliche Veranstaltungen durch den Veranstalter des Code+Design Camps zu bewerben. </li>
   <li>Dies umfasst auch Aufnahmen durch Partner des Veranstalters, wie etwa die Presse. Willst du nicht fotografiert oder gefilmt werden, gib uns bitte im Camp Bescheid.</li>
   <li><strong>Wir erwarten von dir, dass du an allen Tagen von Anfang bis Ende (9:00-21:00) anwesend bist</strong></li>
   <li>
   Solltest du während des Camps krank werden oder aus sonstigen wichtigen Gründen nicht kommen kannst (egal ob an einem oder an mehreren Tagen), dann gib uns per Mail Bescheid (martin@code.design)</li>
   <p>Stand: 01.01.2018</p>
   </ul></section>
   
   <aside class="w-1/3">
       @component('_components.img')
       
           @slot('src')
           /img/camps/003.jpg
           @endslot
       
           @slot('alt')
           Jugendliche in der Teamarbeit
           @endslot
       
       @endcomponent
   </aside></div>

</main>

@endsection

@section('title')
Teilnahmebedingungen
@endsection
