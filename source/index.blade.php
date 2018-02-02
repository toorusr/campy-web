@extends('_layouts.master') @section('body')
<main class="p-2 sm:p-4 md:p-8 bg-purple text-xl">
    <div class="text-white text-3xl mb-4">Code+Design: Wir begeistern für digitale Berufe!</div>
    <div class="bg-white p-6">
        @component('_components.img') @slot('src') /img/header03.jpg @endslot @slot('alt') Code+Design Camp @endslot @endcomponent
        
        <div class="lg:flex p-4">
            <div class="mb-4 h-auto lg:w-1/3">
                <div class="text-3xl mb-4"><a href="/camps" class="no-underline text-grey-darkest"><span class="border-b-2 border-purple">Die Camps</span></a></div>
                <p class="mb-4 hyphens leading-normal">Auf den Code+Design Camps wollen wir dir und vielen anderen Jugendlichen die Chance geben, an spannenden Hard- und Softwareprojekten zu arbeiten und unter der Anleitung von professionellen Coaches neue Technologien kennenzulernen und deine Fähigkeiten weiterzuentwickeln.</p>
                @component('_components.button') @slot('colorback') purple @endslot @slot('colorfront') white @endslot @slot('link') camps @endslot @slot('width') w-64 @endslot Alle Camps @endcomponent
            </div>
            <div class="mb-4 lg:ml-8 lg:w-1/3">
                <div class="text-3xl mb-4 "><a href="/magazin" class="no-underline text-grey-darkest"><span class="border-b-2 border-yellow">Das Magazin</span></a></div>
                <p class="mb-4 leading-normal hyphens">Mit dem C+D Magazin kannst du dir einen Überblick verschaffen, wie sich unser Berufsleben durch die Digitalisierung verändert, welche Berufsbilder dabei entstehen und welche Zukunftschancen Berufe in der digitalen Wirtschaft bieten. Portraits von Arbeitgebern und Hochschulen helfen dir bei der beruflichen Orientierung.</p>
                @component('_components.button') @slot('colorback') yellow @endslot @slot('colorfront') black @endslot @slot('link') magazin @endslot @slot('width') w-64 @endslot Mehr zum Magazin @endcomponent
            </div>
            <div class="mb-4 lg:ml-8 md:flex flex-col justify-between lg:w-1/3">
                <div>
                    <p class="text-3xl mb-4 "><a href="/initiative" class="no-underline text-grey-darkest"><span class="border-b-2 border-green">Die Initiative</span></a></p>
                    <p class="leading-normal hyphens">Die gemeinnützige Code+Design Initiative hat sich zum Ziel gesetzt, Jugendliche für digitale Technologien und Berufe zu begeistern und insbesondere den Anteil an Frauen in diesen Bereichen zu erhöhen. Dafür haben wir im letzten Jahr 8 Code+Design Camps in 6 verschiedenen Städten mit über 650 Teilnehmern organisiert. Dieses Jahr wollen wir noch mehr Jugendlichen die Möglichkeit geben eines unserer Events zu besuchen. Deshalb arbeiten wir an weiteren Formaten um die Zeit zwischen den Code+Design Camps zu verkürzen und unsere Reichweite zu vergrößern.</p>
                </div>
                @component('_components.button') @slot('colorback') green @endslot @slot('colorfront') white @endslot @slot('link') initiative @endslot @slot('width') w-64 @endslot Zur Initiative @endcomponent
            </div>
        </div>
        @include('_partials.upcoming')
        <div class="mb-4 mt-4">
            <div class="text-3xl mb-4 mt-8 ml-4"><a href="/initiative/stimmen" class="no-underline border-b-2 border-purple text-grey-darkest">Die Stimmen</a></div>
            <div class="md:flex">
                <div>
                    @component('_components.card') @slot('src') https://pbs.twimg.com/profile_images/847373919468179456/Zrp-86HU_400x400.jpg @endslot @slot('link') http://www.focus.de/finanzen/karriere/arbeit-in-den-ferien-programmieren-lernen_id_6635977.html @endslot @slot('medium') Focus @endslot @slot('channel') www.focus.de @endslot @slot('published_at') Montag, 13.02.2017, 04:35 @endslot @slot('ml') @endslot @slot('mr') @endslot Viele Zukunftsberufe verlangen den Arbeitnehmern Informatikkenntnisse ab. Deswegen müssen gerade junge Menschen diese Kompetenzen so früh wie möglich aneignen und weiterentwickeln. Die Weichen dafür stellt eine gemeinnützige Initiative. @endcomponent
                </div>
                <div class="md:ml-4">
                    @component('_components.card') @slot('src') https://pbs.twimg.com/profile_images/1332189243/logo_pb_400x400.jpg @endslot @slot('link') http://planet-beruf.de/eltern/feature-navigation/news/meldung/?tx_ttnews%5Btt_news%5D=6437&cHash=072f0bdf6c99f861cd81e33a8067f657 @endslot @slot('medium') Planet Beruf @endslot @slot('channel') planet-beruf.de @endslot @slot('published_at') Donnerstag, 09.02.2017, 09:45 @endslot @slot('ml') @endslot @slot('mr') @endslot In Design- und Programmiercamps können Jugendliche unter Anleitung von professionellen Coaches neue Technologien kennenlernen und ihre digitalen Skills weiterentwickeln. @endcomponent
                </div>
                <div class="md:ml-4">
                    @component('_components.card') @slot('src') https://pbs.twimg.com/profile_images/734677911282798592/VYZcvOSk_400x400.jpg @endslot @slot('link') http://www.einstieg-informatik.de/index.php?article_id=1249 @endslot @slot('medium') Einstieg Informatik @endslot @slot('channel') einstieg-informatik.de @endslot @slot('published_at') Mittwoch, 10.01.2018, 12:45 @endslot @slot('ml') @endslot @slot('mr') @endslot Soft- und Hardware, Coding und Design – die Code+Design Camps bringen beides zusammen. Begleitet von erfahrenen Entwicklern und Designern können SchülerInnen an eigenen Projektideen arbeiten. @endcomponent
                </div>
            </div>
        </div>
</main>
@endsection @section('title') Zuhause @endsection
