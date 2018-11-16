@extends('_layouts.master')

@section('body')

<div class="p-4 bg-purple">
    <div class="text-white text-3xl mb-4">Sei als Coach dabei – Fragen und Antworten</div>

    <div class="bg-white p-4">
        <dl class="mt-4 text-lg">

            <dt class="font-bold">Warum sollte ich als Coach mitmachen?</dt>
            <dd class="mb-4">
                <ul>
                    <li>Helfe der nächsten Generation von Techies!</li>
                    <li>Wir hätten uns früher so ein Camp gewünscht, es gab Null Angebot für digital Interessierte…</li>
                    <li>Die Jugendlichen sind super dankbar für die Unterstützung</li>
                    <li>Interessante Projekte: Die Jugendlichen haben Ideen die erfrischen</li>
                    <li>Du triffst andere engagierte Coaches aus verschiedenen Bereichen</li>
                    
                </ul>
            </dd>

            <dt class="font-bold">Ist die Coach-Tätigkeit bezahlt?</dt>
            <dd class="mb-4">Unsere Coaches sind zu 90% ehrenamtlich dabei, weil sie der Community zurückgeben wollen. Selten können wir für Coaches die Anreise und Übernachtung tragen.</dd>

            <dt class="font-bold">Was ist meine Rolle als Coach?</dt>
            <dd class="mb-4">
                <ul>
                    <li>Als Teamcoach bist du der erste Ansprechpartner für technische und/oder gestalterische Fragen.</li>
                    <li>Du bist nicht verpflichtet, das Problem für dein Team zu lösen – es geht vielmehr darum, ihm Wege und Mittel aufzuzeigen, wie sie sich selbst Wissen aneignen können.</li>
                    <li>Wir laden dich ein, dich aktiv am Code+Design Camp zu beteiligen. Wenn du Vorschläge zur Verbesserung des Lagers hast: Mach es zu deinem Camp!</li>
                </ul>
 </dd>

        <dt class="font-bold" id="programming-languages">Muss ich einen Workshop leiten?</dt>
        <dd class="mb-4">Nein, das ist natürlich freiwillig.</dd>

        <dt class="font-bold" id="programming-languages">Muss ich eine Gruppe betreuen?</dt>
        <dd class="mb-4">Nur wenn du glaubst, dass dir das liegt und du Lust auf diese Aufgabe hast.</dd>

        <dt class="font-bold" id="programming-languages">Kann ich zwischendurch mal kurz weg?</dt>
        <dd class="mb-4">Klar! Schreibe aber bitte den Teilnehmern auf Slack, wann du wieder da bist.</dd>

        <dt class="font-bold" id="programming-languages">Kriege ich Fahrtkosten und Übernachtung erstattet?</dt>
        <dd class="mb-4">Wir haben ein sehr kleines Budget für diese Auslagen. Sprich uns an, wenn du Unterstützung brauchst.</dd>

        <dt class="font-bold" id="programming-languages">Kann ich Teilnehmer für meine Firma anwerben?</dt>
        <dd class="mb-4">Jein. Das Camp ist keine Werbeveranstaltung. Die Teilnehmer sollen erstmal ein tolles Camp haben und ausprobieren und lernen können. Wenn sie mit dir ins Gespräch kommen und etwa nach einem Praktikumsplatz fragen, kannst du diesen aber natürlich anbieten.</dd>

        <dt class="font-bold" id="programming-languages">Muss ich von Anfang bis Ende dabei sein?</dt>
        <dd class="mb-4">Natürlich nicht. Du bist Ehrenamtler, du kommst, wenn du kannst. Du kannst das bei der Anmeldung sehr differenziert angeben.</dd>

        <dt class="font-bold" id="programming-languages">Wen spreche ich für Orga-Fragen an?</dt>
        <dd class="mb-4">Vor dem Camp: <a href="mailto:hello@code.design">hello@code.design</a>; Auf dem Camp: Die Campleitung stellt sich am Anfang vor.</dd>


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
                    Die Tastatur der Lernenden ist aus Lava. (Du verlierst die Lernenden, wenn du die Tastatur übernimmst).
                </li>
            </ul>













        </dd>

        <dt class="font-bold">Werde ich als Coach bezahlt?</dt>
        <dd class="mb-4">
            Code+Design als kleiner gemeinnütziger Verein hat nur das Ziel, Jugendliche für digitale Berufe zu begeistern. Wir dürfen keine Gewinne machen und müssen alle unsere Aktivitäten auf den Vereinszweck ausrichten. Die Events, die wir ausrichten, sind sehr teuer und aufwändig. Auch benötigen wir für die Organisation der Events und der Geschäftsstelle einen Hauptamtler, für den wir Gehalt zahlen müssen. Da wir bisher keine Zuschüsse durch Bund, Länder oder Kommunen bekommen, sind wir auf Sponsoring durch Unternehmen angewiesen, um unsere Kosten zu decken.
        </dd>

        <dt class="font-bold">Wie läuft die Berufsorientierung ab?</dt>
        <dd class="mb-4">
            <ul>
                <li>An einem der letzten Abende haben wir eine Berufsorientierungs-Session, da die meisten Jugendlichen keine Ahnung haben, welche tollen Job-Opportunities sie erwarten.</li>
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