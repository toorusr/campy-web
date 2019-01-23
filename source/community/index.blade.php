@extends('_layouts.master')

@section('body')
<main class="p-8 bg-purple">
    <div class="text-3xl mb-4 text-white">Die Code+Design Community</div>
    <div class="p-8 rounded bg-white">
        <div>
            <div class="w-100 text-center md:float-right">
                <a href="https://docs.google.com/document/d/1apQKZKee2YmjpZtycIzNYRH0ZDkYqymgBLfcIsTHMxU/edit#bookmark=id.xsrxfeqs777z" target="_blank">
                    <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                    class="lazyload mb-4"
                    data-srcset="/img/community/ladder.png" alt="Community Programm Ladder" width="350px"/>
                </a>
            </div>
            <h2 class="mt-6 mb-2">Was ist unsere Mission</h2>

            <p class="text-lg">
            Die Mission von Code+Design ist es, Jugendliche für digitale Berufe zu begeistern und zu qualifizieren. Dafür geben wir dir und vielen anderen Jugendlichen die Chance, an spannenden Events mitzuwirken – Camps, Meetups und neue Formate. Wir waren alle selbst mal AnfängerInnen und wollen deshalb unsere eigene Begeisterung und unser Wissen weitergeben!
            </p>

            <p class="text-lg">
            Gemeinsam können wir viel erreichen. Dafür ist es wichtig, dass sich jede und jeder in der Community wohlfühlt. Dafür geben wir uns im Code of Conduct eigene Regeln.
            </p>


            <h2 class="mt-6 mb-2">Code of Conduct</h2>
            <p class="text-lg">
            Unsere gemeinsame Mission ist es, Jugendliche für digitale Berufe zu begeistern und zu qualifizieren. Um dieses Ziel zu erreichen, bemühen wir uns als Code+Design Community folgende Werte zu leben:
            </p>


            <ul class="text-lg leading-loose">
            <li>Wir sind nett zueinander, respektieren uns. Wir dulden keinerlei Diskriminierung, Beleidigungen, Ausgrenzungen oder Hass
            <li>Wir tragen dazu bei, Code+Design zu einer Community zu machen, in der sich alle sicher und wohlfühlen können. Wir zeigen uns selbst und allen anderen gegenüber Respekt
            <li>Wir unterstützen uns gegenseitig, sind offen, freundlich und behandeln andere so, wie wir auch behandelt werden wollen
            <li>Wir lernen von- und miteinander
            <li>Wir leben diese Werte vor allem dann, wenn wir Code+Design öffentlich repräsentieren
            <li>Wir packen mit an, handeln proaktiv und übernehmen Verantwortung für unsere Aufgaben</li>
            </ul>

            <p class="text-lg mt-6">
            Der Code of Conduct wird vom Vorstand betreut. Der Vorstand Community ist immer die ersten Ansprechperson, wenn es Fragen zum oder Probleme mit dem Code of Conduct gibt.
            </p>


            <h2 class="mt-6 mb-2">Wie kannst du dich einbringen?</h2>
            <p class="text-lg">
            Es gibt mehrere Möglichkeiten Code+Design zu unterstützen und aktiv mitzugestalten. Bedingung für jede Mitarbeit ist es, den Code of Conduct zu leben. Darüber hinaus gibt es für jede Stufe verschiedene Anforderungen, Aufgaben und Vorteile. Die Stufen bauen dabei aufeinander auf, auf jeder neuen Stufe übernimmt man mehr Verantwortung.
            </p>
            <p>(Für Details zu den Stufen, bitte aufs Bilder oder <a href="https://docs.google.com/document/d/1apQKZKee2YmjpZtycIzNYRH0ZDkYqymgBLfcIsTHMxU/edit#bookmark=id.xsrxfeqs777z" target="_blank">hier</a> klicken)</p>

        </div>

        <hr class="border-2 mb-8">
        <div class="w-full flex justify-center">
        <button class="text-center bg-purple p-2 rounded"><a class="text-white no-underline font-bold text-2xl" href="/community/anmelden">Jetzt mitmachen</a></button>
        </div>
    </div>
</main>
@endsection

@section('title')
Community Programm
@endsection
