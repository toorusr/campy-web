@extends('_layouts.master')

@section('body')
<main class="p-8 bg-purple">

    <div class="text-3xl mb-4">Das Code+Design Magazin</div>

    <div class="p-8 rounded bg-white">
        <div class="ml-8 text-2xl">Beim Gewinnspiel mitmachen</div>

        <form name="magazin-2-gewinnspiel" action="/magazin/gewinnspiel-mitgemacht" netlify-honeypot="hene" netlify>

            <div class="rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2">
                <div class="-mx-3 md:flex mb-6">
                    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-first-name">
                            Voller Name
                        </label>
                        <input class="appearance-none block w-full bg-grey-lighter text-grey-darker rounded py-3 px-4 mb-3" id="grid-first-name" type="text" placeholder="Lucky Winner" name="name" requipurple>
                        <input type="text" name="hene" hidden>
                    </div>
                    <div class="md:w-1/2 px-3">
                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-email" requipurple>
                            E-Mail
                        </label>
                        <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="grid-last-name" type="email" placeholder="luckywinner@code.design" name="email">
                    </div>
                </div>
                <div class="-mx-3 md:flex mb-2">
                    <div data-netlify-recaptcha></div>
                </div>
            </div>

            <div class="p-8">
                @component('_components.button-submit')
                    @slot('colorback') purple @endslot
                    @slot('colorfront') white @endslot
                    @slot('link') # @endslot
                    Beim Gewinnspiel mitmachen
                @endcomponent
            </div>

        </form>
    </div>

</main>

@endsection

@section('title')
Gewinnspiel
@endsection
