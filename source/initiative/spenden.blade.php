@extends('_layouts.master')

@section('body')
<main class="p-8 bg-pink ">

  <div class="text-white text-3xl mb-4">Spenden</div>

<div class="flex"><div id="form" class="lg:w-1/2 w-full bg-white p-4">

                <div class="text-xl">Wir sind ein gemeinnütziger Verein und können unsere Zwecke nur mit eurer Hilfe umsetzen: Jugendliche für digitale Berufe begeistern, vor allem Mädchen und Jugendliche aus schwierigen sozialen Herkünften.</div>

                <div class="text-xl mt-4">Sie können uns die Spende entweder überweisen (↓) oder direkt über das Formular (→).</div>

                <div id="name" class="mt-8">
                    <label for="name" class="block font-bold lg:text-xl uppercase font-mono tracking-wider mb-2 pl-2">Empfänger</label>
                    <div name="name" type="text" class="h-16 sm:h-auto overflow-x-scroll bg-pink-dark border-1 border-grey-lighter p-4 lg:text-xl font-mono opacity-100 uppercase tracking-wider text-white">Code+Design Initiative e.V.</div>
                </div>
                <div id="iban" class="mt-8">
                    <label for="iban" class="block font-bold lg:text-xl uppercase font-mono tracking-wide mb-2 pl-2">IBAN</label>
                    <div name="iban" class="h-16 sm:h-auto overflow-x-scroll bg-pink-dark text-white border-1 border-grey-lighter p-4 lg:text-xl font-mono opacity-100 uppercase tracking-wider w-full"><span class="mr-4">DE24</span><span class="mr-4">1005</span><span class="mr-4">0000</span><span class="mr-4">0190</span><span class="mr-4">6076</span>29</div>
                </div>
                <div id="bic" class="mt-8">
                    <label for="bic" class="block font-bold lg:text-xl uppercase font-mono tracking-wider mb-2 pl-2">BIC</label>
                    <div name="bic" type="text" class="h-16 sm:h-auto flex items-center overflow-x-scroll bg-pink-dark text-white border-1 border-grey-lighter p-4 lg:text-xl font-mono opacity-100 uppercase tracking-wider w-full">BELADEBEXXX</div>
                </div>
                <div id="Verwendungszweck" class="mt-8 mb-4">
                    <label for="Verwendungszweck" class="block font-bold lg:text-xl uppercase font-mono tracking-wider mb-2 pl-2">Verwendungszweck</label>
                    <div name="Verwendungszweck" type="text" class="overflow-x-scroll hover:shadow-lg bg-pink-dark text-white border-1 border-grey-lighter p-4 lg:text-xl font-mono opacity-100 uppercase tracking-wide w-full">Spende Jugendliche fuer Digitales begeistern</div>
                </div>
</div>

<div id="betterplace" class="lg:w-1/2 w-full bg-white p-4">
    <script type="text/javascript">
      /* Configure at https://www.betterplace.org/de/projects/59504-code-design-jugendliche-fur-digitale-berufe-begeistern/manage/iframe_donation_form/new */
      var _bp_iframe        = _bp_iframe || {};
      _bp_iframe.project_id = 59504; /* REQUIRED */
      _bp_iframe.lang       = 'de'; /* Language of the form */
      _bp_iframe.width = 600; /* Custom iframe-tag-width, integer */
      _bp_iframe.color = 'f66d9b'; /* Button and banderole color, hex without "#" */
      _bp_iframe.background_color = 'ffffff'; /* Background-color, hex without "#" */
      _bp_iframe.default_amount = 50; /* Donation-amount, integer 1-99 */
      _bp_iframe.default_data_transfer_accepted = true; /* true (default), false */
      _bp_iframe.recurring_interval = 'single'; /* Interval for recurring donations, string out of ["single", "monthly", "quarter_yearly", "half_yearly", "yearly"] */
      _bp_iframe.bottom_logo = false;
      (function() {
        var bp = document.createElement('script'); bp.type = 'text/javascript'; bp.async = true;
        bp.src = 'https://asset1.betterplace.org/assets/load_donation_iframe.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(bp, s);
      })();
    </script>
    <div id="betterplace_donation_iframe">
        <strong><a href="https://www.betterplace.org/de/projects/59504-code-design-jugendliche-fur-digitale-berufe-begeistern/donations/new">Jetzt Spenden für „Code+Design: Jugendliche für digitale Berufe begeistern“ bei unserem Partner betterplace.org</a></strong>
    </div>
</div></div>



</main>

@endsection

@section('title')
Spenden
@endsection

@section ('styles')
<style>

[class*='donation'] * {
    font-family: "Hans Grotesque" !important;
}

.iframe-donation-headline {
    display: none !important;
}

donations-form-donation-details-header {
    font-family: "Hans Grotesque";
}

iframe * {
    font-family: "Hans Grotesque";
}

#new_donation_process > fieldset > div.iframe-donation-headline {
  display: none !important;
}

</style>