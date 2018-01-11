<div class="border-2 rounded p-4">
    <p>Willst du uns helfen, Jugendliche für digitale Berufe zu begeistern und zu qualifizeren?
        Eine Spende hilft uns, wir können als gemeinnütziger Verein Spendenbescheinigungen ausstellen.</p>

    @component('_components.button')
        @slot('colorback')
            grey-darkest
        @endslot
        @slot('colorfront')
            white
        @endslot
        @slot('link')
        spenden
        @endslot
        Spenden
    @endcomponent
</div>