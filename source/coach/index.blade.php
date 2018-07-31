@extends('_layouts.master')

@section('body')
<div class="p-4 bg-green">
    <div class="text-white text-3xl mb-4">Sei als Coach dabei</div>

    <div class="bg-white p-4">
        <div class="lg:flex">
            <div class="flex-1">
                <iframe class="w-full" width="560" height="315" src="https://player.vimeo.com/video/282290294" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="flex-1">
               <div class="mt-4">
            <h3>Worum geht's?</h3>
            <ul>
                <li>Auf den Code+Design Camps arbeiten 50-75 Jugendlichen an Projektideen, die sie selbst mitbringen</li>
            <li>Ziel der Camps ist es, Jugendliche ohne und mit Vorerfahrung für die IT-Berufe zu begeistern</li></ul>
        </div>
        <div class="mt-4">
            <h3>Was macht ein Coach?</h3>
            <p>Coaches auf den Code+Design Camps…</p>
            <ul>

                <li><em>begleiten</em> Jugendliche bei ihren Projekten im Bereich Web, App, Gaming, Hardware und/oder Design</li>
                <li>helfen bei <em>Teambildung und Projektmanagement</em></li>
                <li><em>inspirieren</em> als Praktiker aus der Tech-Branche – egal ob als Profi oder Student, Angestellter oder Selbstständiger</li>
            </ul>
        </div>
<div class="mt-4">
    <h3>Wie kann ich als Coach unterstützen?</h3>
    <p>Wir haben unser Coaching so konzipiert, dass für unterschiedliche Zeitbudgets etwas dabei ist:</p>
</div>

<div class="mt-4">
    <h3>Was passiert (aus Coach-Sicht) auf den Camps?</h3>
    <ul>
        <li><em>1. Tag</em>: Begeistern und Beraten: Du begeisterst Jugendliche für Tech, indem du ihnen präsentierst, was du gerne machst (Open Source, Firmenprojekte…). Du unterstützt als Coach Teams dabei, die für sie richtige Technologie zu wählen und Lernmaterial zu finden</li>
        <li><em>Folgetage</em>: Die Coaches bieten pro Camptag je 1,5h Sprechstunden bei Problemen in den Projekten (Technologie, Lernen, Team) an. Außerdem organisieren sie interaktive Workshops à 1,5h zu Themen im Bereich Web, Mobile, Games.</li>
    </ul>
</div> 

<div class="mt-4 mb-2">
<h3>Mehr Infos</h3>
    <a href="/coach/faq">Fragen und Antworten</a>
    <a href="/camps/philosophie">Philosophie von Code+Design</a></div>
        </div>
        </div>
        
        <div class="mt-8 mb-4 text-center">
            <div class="text-3xl text-bold">Deine Rolle als Coach</div>
        </div>

        <div class="mt-2 md:flex">
            <div class="flex-1 bg-green-lighter p-4 rounded text-xl">Berater</div>
            <div class="flex-1 md:ml-2 mt-2 md:mt-0 bg-green-lighter p-4 rounded text-xl">Begleiter</div>
            <div class="flex-1 md:ml-2 mt-2 md:mt-0 bg-green-lighter p-4 rounded text-xl">Joker</div>
            <div class="flex-1 md:ml-2 mt-2 md:mt-0 bg-green-lighter p-4 rounded text-xl">Inspirierer</div>
        </div>
        <div class="md:flex">
            <div class="mt-4 flex-1 ml-4">
                    <h3>Berater</h3>
                    <p>Als Berater beantwortest du vor allem Fragen zu speziellen Technologien, die die Teilnehmer nutzen. Du bist etwa 1,5 Stunden vor Ort (idealerweise mindestens 2x auf dem Camp), um die Teilnehmer zu unterstützen. Es gibt zwei Sprechstunden-Slots (Vormittag, Nachmittag), du schreibst einfach am Tag zuvor, wann du da sein kannst. Die Teilnehmer sammeln ihre Fragen und bringen nur mit, was sie zuvor nicht lösen konnten.</p>
                    <p>Zusätzlich zur Sprechstunde hast du auch die Möglichkeit, einen Workshop zu organisieren oder zu begleiten. Oft gibt es Anfänger- und Fortgeschrittenenworkshops zu HTML, CSS, JS, Unity, Android</p>
            </div>
            <div class="mt-4 flex-1 ml-4">
                    <h3>Begleiter</h3>
                    <p>Als Begleiter fühlst du dich als <em>Allrounder</em> verantwortlich für die Teamentwicklung und Lernerfolg jeder/s Einzelnen. Du bist mindestens einen ganzen Tag dabei, falls möglich auch mehrere (zusammenhängen müssen sie nicht). Deine Aufgabe ist es, Jugendliche bei Fragen zu Programmieren, Team- und Projektmanagement und idealerweise auch ein wenig Design zu begleiten. </p>
                </div>
                <div class="mt-4 flex-1 ml-4">
                    <h3>Joker</h3>
                    <p>Als <em>Joker</em> hilfst du den Jugendlichen von deinem Schreibtisch irgendwo in der Welt aus. Am besten per Slack. Du schickst uns ein kurzes Video (oder Bild + Audionachricht), in dem du den Teilnehmer kurz über dich erzählst: Wer bist du? Was machst du? Wie kannst du helfen? Wie erfahren die Teilnehmer, wann und wie schnell du antworten kannst?</p>
                </div>
                <div class="mt-4 flex-1 ml-4 pl-2">
                    <h3>Inspirierer</h3>
                    <p>Als <em>Inspirierer</em> begeisterst du die Jugendlichen für die Tech-Branche – egal, wie viel Zeit du hast. Du erzählst etwa am ersten Tag über deine Projekte und warum dein Job cool ist oder bist bei der Job-Speed-Dating (auch bekannt als Berufsorientierung) als Gesprächspartner dabei.</p>
                </div>
                </div>

                <div class="text-2xl text-bold text-center mt-8 mb-4"><a href="/coach/anmelden" class="bg-black text-white p-4">Als Coach anmelden</a></div>
        
        <div class="mt-8">
            <h3 class="text-center text-xl">Camps</h3>
            <p class="text-center text-sm">Vorläufige Camp-Pläne</p>
            <p class="text-center text-xl mb-2 mt-8"><a href="/camps/stuttgart/1808">Stuttgart, 06.-11.08.18</a></p>
            @component('_components.img') @slot('src') /img/coach/stu1808a.png @endslot @slot('alt') Code+Design Stuttgart @endslot @endcomponent
            <p class="text-sm">*grün = zu diesem Zeitpunkt werden Coaches aktiv</p>

            <p class="text-center text-xl mb-2"><a href="/camps/stuttgart2/1808">Stuttgart, 13.-18.08.18</a></p>
            @component('_components.img') @slot('src') /img/coach/stu1808b.png @endslot @slot('alt') Code+Design Stuttgart @endslot @endcomponent
            <p class="text-sm">*grün = zu diesem Zeitpunkt werden Coaches aktiv</p>
        </div>
@endsection
