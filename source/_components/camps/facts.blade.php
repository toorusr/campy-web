<div class="mt-4">
    <div class="text-2xl font-bold">FAQ</div>

    <dl class="mt-4 text-lg">
        <dt class="font-bold">Datum</dt>
        <dd class="mb-4">{{ $from }} bis {{ $to }}</dd>
        <dt class="font-bold">Uhrzeit</dt>
        <dd class="mb-4">Jeweils {{ $timestart }} bis {{ $timeend }} Uhr</dd>
        <dt class="font-bold">Inhalt</dt>
        <dd class="mb-4">{{ $days }}-Tage-Programmier-{{ $type }} für Anfänger und Fortgeschrittene + Berufsorientierung</dd>
        <dt class="font-bold">Betreuung</dt>
        <dd class="mb-4">Erfahrene Coaches im Bereich Web, App, Games</dd>
        <dt class="font-bold">Location</dt>
        <dd class="mb-4"><a href="{{ $locationlink }}" target="_blank">{{ $location }}</a></dd>
        <dt class="font-bold"></dt>
        <dd class="mb-4"></dd>
        <dt class="font-bold">Unkostenbeitrag</dt>
        <dd class="mb-4">{{ $cost }}</dd>
        <dt class="font-bold">Inklusive Versorgung</dt>
        <dd class="mb-4">Jeden Tag {{ $meals }}</dd>
        @if($laptopfree == 'no')
        <dt class="font-bold">Laptopausleihe</dt>
        <dd class="mb-4">{{ $costlaptop }}</dd>
        @endif
        <dt class="font-bold"></dt>
        <dd class="mb-4"></dd>
    </dl>

</div>