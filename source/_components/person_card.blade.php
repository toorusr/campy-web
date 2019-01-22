<div class="flex-1 rounded border p-3 md:px-6 md:py-4 max-w-md h-full {{ $ml ?? '' }} {{ $mr ?? '' }} {{ $m ?? '' }} { $mb ?? '' }}">
    <div class="flex items-center">
        <img src="{{ $image ?? ''}}" class="h-12 w-12 rounded-full" />
        <div class="flex flex-col ml-4">
            {{ $firstname ?? ''}} {{ $lastname ?? ''}}
            <span class="text-grey"> {{ $section ?? ''}} </span>
        </div>
    </div>
    <div class=" mt-3 leading-normal text-lg">
        <div class="text-center">
            @if ($bio != '')
                <p class="text-grey-darker break-words"> {{ $bio ?? ''}} </p>
            @endif
            @if ($github != '')
                <a href="https://github.com/{{$github ?? ''}}"><img src="/img/github.svg" width="24" height="24" /></a>
            @endif
            @if ($twitter != '')
                <a href="https://twitter.com/{{$twitter ?? ''}}"><img src="/img/twitter.svg" width="24" height="24" /></a>
            @endif
            @if ($website != '')
                <a href="{{$website ?? ''}}"><img src="/img/external-link.svg" width="24" height="24" /></a>
            @endif
        </div>
    </div>
</div>
