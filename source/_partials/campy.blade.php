<div class="mt-4 mb-4 p-4 bg-purple-lightest rounded-lg">

    <p class="text-4xl mb-4 font-bold text-purple">Anmeldung</p>

    <form action="https://cdcamp.de/api/camp_registration" method="POST">

        <input type="hidden" name="token" value="">
        <input type="hidden" name="return_path" value="https://code.design/anfrage">
        <input type="hidden" name="error_path" value="{{ $page->getPath() }}">

        <div class="w-full mt-4">
            <label for="mobile" class="block mb-2">Handynummer</label>
            <input id="mobile" name="mobile" type="text" placeholder="" class="appearance-none block w-full bg-white border border-white text-lg rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey" data-cip-id="grid-last-name" required>
        </div>

        <div class="w-full mt-4">
            <label for="fullname" class="block mb-2">Vor- und Nachname</label>
            <input id="fullname" name="fullname" type="text" placeholder="" class="appearance-none block w-full bg-white text-lg border border-white rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey" data-cip-id="grid-last-name" required>
        </div>

        <div class="relative mt-4">
            <label for="mobile" class="block mb-2">Event</label>
            <select class="block appearance-none w-full bg-white border border-grey-lighter py-3 px-4 pr-8 rounded leading-tight text-lg focus:outline-none focus:bg-white focus:border-grey" id="event" name="event" required>
                <option value="1" @if ($camp_id == 1) selected @endif>Leipzig, 18.-21.10.</option>
                <option value="9" @if ($camp_id == 9) selected @endif>Düsseldorf, 22.-27.10.</option>
                <option value="12" @if ($camp_id == 12) selected @endif>Frankfurt, 31.10.</option>
                <option value="11" @if ($camp_id == 11) selected @endif>Berlin, 01.-04.11.</option>
                <option value="13" @if ($camp_id == 13) selected @endif>München, 21.11.</option>
            </select>
            <div class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey-darker">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
            </div>
        </div>
        <br><br>
        <input type="checkbox" name="tos" class="mr-2"><label>Zustimmung zur <a href="https://cdcamp.de/datenschutz" target="_blank">Datenschutzerklärung</a></label><br><br>
        <input type="submit" value="Anmelden" class="bg-purple text-white no-underline inline-block text-3xl font-bold px-4 py-2 leading-none rounded-lg hover:border-transparent hover:bg-purple-dark mt-4">
    </form>

    <div class="mt-6 ml-1">
        <p>Deine Anmeldung ist verbindlich.</p>
        <p>Du musst uns dann noch ein paar Infos zu dir schicken und ggf. bezahlen.</p>
        <p>Die Anleitung dazu bekommst du per SMS/Whatsapp.</p>
    </div>
</div>
