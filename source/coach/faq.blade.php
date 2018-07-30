@extends('_layouts.master')

@section('body')

<div class="p-4 bg-green">
    <div class="text-white text-3xl mb-4">Sei als Coach dabei – Fragen und Antworten</div>

    <div class="bg-white p-4">
        <dl class="mt-4 text-lg">

            <dt class="font-bold">Was ist meine Rolle als Coach?</dt>
            <dd class="mb-4">
                <ul>
                    <li>Als Teamcoach bist du der erste Ansprechpartner für technische und/oder gestalterische Fragen.</li>
                    <li>Du bist nicht verpflichtet, das Problem für dein Team zu lösen – es geht vielmehr darum, ihm Wege und Mittel aufzuzeigen, wie sie sich selbst Wissen aneignen können.</li>
                    <li>Wir laden dich ein, dich aktiv am Code+Design Camp zu beteiligen. Wenn du Vorschläge zur Verbesserung des Lagers hast: Mach es zu deinem Camp!</li>
                </ul>
 </dd>

            <dt class="font-bold" id="programming-languages">Welche Programmiersprachen werden benutzt?</dt>
        <dd class="mb-4">Es gibt keine festen Programmiersprachen. Die Gruppen suchen sich selbst die Technologien aus. Oft verwendet werden: Python, PHP, JavaScript, Java (für Gaming und Apps). Die Jugendlichen orientieren sich aber auch an den Coaches und deren Kompetenzen.</dd>

        <dt class="font-bold" id="results">Wieviel schaffen die Teams in wenigen Tagen?</dt>
        <dd class="mb-4">Das Ziel ist, dass jeder Teilnehmer mit einem Erfolgsergebnis nach Hause geht – und mit einem sichtbaren Produkt. Ob es ein klickbarer Prototyp ist oder eine halbfertige App, das macht keinen Unterschied. Es gibt auch keinen Wettbewerb zwischen den Projektgruppen, auf dem Camp soll nur die Freude an Tech vermittelt werden.</dd>

        <dt class="font-bold" id="workshops">Wie laufen die Workshops ab?</dt>
        <dd class="mb-4">
            <ul>
                <li>In Workshops entdecken Jugendliche etwas Neues</li>
                <li>In Workshops erstellen die Jugendlichen ein vollständiges Produkt: z.B. eine Mini-App, eine Webseite, einen Prototypen einer Webapp</li>
                <li>Workshops sind immer zielorientiert: am Anfang sehen die Jugendlichen, wie das Produkt am Ende aussieht</li>
                <li>Die Jugendlichen nutzen ein Step-by-Step Tutorial (Text/Video), helfen sich gegenseitig und fragen den Coach bei Problemen</li>
                <li>Workshops finden während des Camps parallel zur Projekt-Arbeit statt</li>
                <li>Die Jugendlichen bringen mit: null Vorkenntnisse aber endlos Motivation</li>
                <li>Die Workshops dauern 1-1,5 Stunde</li>
                <li>Beliebte Themen: Interface-Design mit Figma, Webseite mit HTML/CSS, App mit Thunkable, Platine mit Lötkolben</li>
                <li>Workshops nutzen nur Software, die im Browser läuft</li>
                <li>Als Coach bringst du einen (selbsterstellten oder fertigen) Workshop mit, bist für den Rahmen verantwortlich (Zeit, Raum, Wohl der Teilnehmer) und sicherst den Lernerfolg für alle</li>
                <li>Workshops können auch Fortsetzungen haben und anspruchsvoller werden – für sie gelten die gleichen Voraussetzungen wie für alle anderen Workshops</li>
            </ul>
        </dd>

      <dt class="font-bold" id="good-coach">Was macht gute Coaches aus?</dt>
        <dd class="mb-4"> <ul>
            <li>Stellen Fragen und haben nicht auf alles sofort eine Antwort</li>
            <li>Hören zu</li>
            <li>Animieren Jugendliche dazu, eigene Lösungen zu finden</li>
            <li>Sind über ihren Beruf hinaus vielseitig interessiert</li>
            <li>Haben Interesse am Lernweg der Teilnehmer (auch über das Technische und übers Camp hinaus)</li>
        </ul></dd>

        <dt class="font-bold">Wieviel Erfahrung haben die Teilnehmer?</dt>
        <dd class="mb-4">50% sind totale AnfängerInnen, 40% haben Vorkenntnisse. 10% sind Obercracks.</dd>

        <dt class="font-bold">Wieviele Mädels sind auf dem Camp?</dt>
        <dd class="mb-4">Immer mindestens 30%.</dd>

        <dt class="font-bold">Do I need to speak German to coach at the camps?</dt>
        <dd class="mb-4">The camp is 95% in German. Nonetheless we have had english-only coaches with great success.</dd>

        <dt class="font-bold">
          Wie gelingt Lernen auf dem Camp?  
        </dt>
        <dd class="mb-4">
            <ul>
                <li>Nehme an, dass jeder, den du coachst, null Wissen aber unendliche Intelligenz hat.</li>
                <li>Sei geduldig mit der Persönlichkeit, der Geschwindigkeit und der Art und Weise jedes Teilnehmers.</li>
                <li>Wir als Coaches sind Vorbilder in allem, was wir tun.
</li>
                <li>Ermutige die Lernenden, selbstständig zu sein und zu experimentieren.</li>
                <li>Wir diskutieren nicht darüber, welche Programmiersprache, Methoden oder Technologien "besser" sind.</li>
                <li>
                    Die Tastatur der Lernenden ist aus Lava. (Du verlierst ie Lernenden, wenn du die Tastatur übernimmst).
                </li>
            </ul>













        </dd>

        <dt class="font-bold">Wie läuft die Berufsorientierung ab?</dt>
        <dd class="mb-4">
            <ul>
                <li>Am einem der letzten Abende haben wir eine Berufsorientierungs-Session, da die meisten Jugendlichen keine Ahnung haben, welche tollen Job-Opportunities sie erwarten.</li>
                <li>Die Berufsorientierung besteht aus 2 Teilen: 1 Podiumsrunde und 1 Kleingruppen. Auf dem Podium stehen 5 Coaches, 1 Teamer moderiert. Er fragt 4 Fragen, jeder hat pro Frage 1 Minute für eine Antwort:</li>
                <li>Wer bist du? Was machst du? Wo?</li>
                <li>Wie sieht dein Arbeitsalltag aus?</li>
                <li>Wenn du heute 17 wärst und anfangen würdest, was würdest du lernen, und warum?</li>
                <li>Wie lernst du/bildest du dich weiter?</li>
                <li>In den Kleingruppen (5-7) können die Jugendlichen Fragen zum Arbeitsalltag, zur Ausbildung/Studium und zur Branche (Games, Apps, etc.) fragen. Fürs Podium suchen wir 5 Coaches aus, die so verschieden wie möglich sind. In den Kleingruppen kann jeder Coach mitmachen. Bitte klickt "ja" an, wenn ihr an einem oder an beiden Format teilnehmen wollt. Wenn ihr euch noch umentscheidet, könnt ihr uns auch gerne eine E-Mail schicken.</li>
            </ul>
        </dd>
    <dt class="font-bold" id="rules">Welche Regeln gelten für Coaches?</dt>
        <dd class="mb-4">
            <ul>
                <li>Ihr seid Vorbilder, benehmt euch bitte auch so!</li>
                <li>Hallo sagen, wenn du kommst. Tschüss, wenn du gehst.</li>
                <li>Kein Alkohol: Viele Jugendliche dürfen auch nicht und wir wollen keine Privilegien auf dem Camp.</li>
            </ul>
        </dd>

        
        
        
    </dl>
    </div>
</div>

@endsection