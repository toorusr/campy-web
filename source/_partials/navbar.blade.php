<nav class="md:flex items-center justify-between flex-wrap bg-white p-6">
  <div class="flex items-center justify-center md:justify-start flex-no-shrink text-black mr-6">
    <a href="/">
      <img src="/img/logo-old.png" class="w-64" alt="">
    </a>
  </div>
  <div class="w-full block items-center justify-center flex-grow md:flex  md:items-center md:w-auto">
    <div class="text-2xl md:flex-grow text-center md:text-left">

      <a href="/camps" class="no-underline text-black inline md:block mt-4 md:inline-block md:mt-0 border-b-2 border-purple mr-4 p-1">Camps</a>
      
      <a href="/magazin" class="no-underline text-black inline block mt-4 md:inline-block md:mt-0 border-yellow border-b-2 mr-4 p-1">
        Magazin
      </a>
      <a href="/initiative" class="no-underline text-black inline block mt-4 md:inline-block border-green border-b-2 md:mt-0 p-1">
        Initiative
      </a>
    </div>
    <div class="hidden md:block">
      @component('_components.button')
        @slot('colorback')
        pink
        @endslot
        @slot('colorfront')
        white
        @endslot
        @slot('link')
        initiative/spenden/
        @endslot
        @slot('width')
        @endslot
        Spenden
    @endcomponent
    </div>
  </div>
</nav>