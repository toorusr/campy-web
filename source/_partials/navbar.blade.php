<nav class="md:flex items-center justify-between flex-wrap bg-white p-6">
    <div class="flex items-center justify-center md:justify-start flex-no-shrink text-black mr-6">
        <a href="/">
            <img src="/img/logo-old.png" class="w-64" alt="">
        </a>
    </div>
    <div class="w-full block items-center justify-center flex-grow flex  md:items-center md:w-auto">
        <div class="text-2xl md:flex-grow text-center md:text-left">
            <ul class="list-reset inline-block mt-4 sm:mt-0">
                <li class="inline-block">
                    <a href="/camps" class="no-underline text-black md:mt-0 border-b-2 border-purple p-1">Camps</a>
                </li>
                <li class="inline-block ml-2">
                    <a href="/magazin" class="no-underline text-black md:mt-0 border-purple border-b-2 p-1">Magazin</a>
                </li>
                <li class="inline-block ml-2">
                    <a href="/community" class="no-underline text-black md:mt-0 border-purple border-b-2 p-1">Community</a>
                </li>
                <li class="inline-block ml-2 mt-6 md:mt-0">
                    <a href="/initiative" class="no-underline text-black border-purple border-b-2 md:mt-0 p-1">Initiative</a>
                </li>
            </ul>
        </div>
        <div class="hidden md:block">
            @component('_components.button')
                @slot('colorback') purple @endslot
                @slot('colorfront') white @endslot
                @slot('link') initiative/spenden/ @endslot
                Spenden
            @endcomponent
        </div>
    </div>
</nav>
