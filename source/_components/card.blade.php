<div class="flex-1 rounded border px-6 py-4 max-w-md h-full {{ $ml or '' }} {{ $mr or '' }} m-{{ $m or '' }} mb-{{ $mb or '' }}">
  <div class="flex items-center">
      <img src="{{ $src }}" class="h-12 w-12 rounded-full" />
      <div class="flex flex-col ml-4">
          <a class="text-black" href="{{ $link }}" target="_blank">{{ $medium }}</a>
          <span class="text-grey">{{ $channel }}</span>
        </div>
        <svg href="{{ $link }}" xmlns="http://www.w3.org/2000/svg" class="ml-auto stroke-current" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-external-link"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" y1="14" x2="21" y2="3"></line></svg>
    </div>
    <div class=" mt-3 mb-1 leading-normal text-lg">{{ $slot }} </div>
    <div class="text-grey-darker mt-3 mb-3 text-sm">{{ $published_at }}</div>
</div>
