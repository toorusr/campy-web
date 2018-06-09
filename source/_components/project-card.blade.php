<div class="m-2 bg-white mx-auto max-w-xl border rounded-lg overflow-hidden">
  <div class="h-16 sm:flex sm:items-center px-2 py-2">
    <img class="block h-12 sm:h-12 rounded-full mx-auto mb-4 sm:mb-0 sm:mr-4 sm:ml-0" src="{{ $logo }}" alt="">
    <div class="text-center h-12 sm:text-left sm:flex-grow">
      <div class="mb-4 p-1">
        <p class="text-xl leading-tight">{{ $name }}</p>
        <p class="text-sm leading-tight text-grey-dark">{{ $lead }}</p>
      </div>
    </div>
    <div class="text-right mr-8">
        <p><a class="no-underline text-grey-dark hover:text-grey-darkest" href="/camps/{{$location}}/{{ $camp }}">#{{ $camp }}</a></p>
        <p class="text-grey-dark">{{ $location }}</p>
    </div>
    <div class="text-right">
        <button>
            {{--<img class="block h-8 sm:h-8 rounded-full mx-auto mb-4 sm:mb-0 sm:mr-4 sm:ml-0" src="/img/svg-icons/down.svg" alt="">--}}
            <svg style="transform: rotate(-90deg);" class="fill-current opacity-75 h-10 w-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z"/></svg>
        </button>
    </div>
  </div>
  <div id="info-{{ $id }}" class="hidden flex flex-wrap">
    <div class="w-5/6">
      <h4 class="pt-4 pl-2 -mb-2 text-left text-grey-darkest">Description:</h1>
      <blockquote class="m-2 p-1" style="border-left: 0.25rem solid #d4d0d6; color: rgba(72, 71, 72, 0.6);">{{ $description }}</blockquote>
    </div>
  </div>
  <div>
      <button class="rounded">
          <img class="block h-8 w-8 border-2 sm:h-8 rounded-full shadow mx-auto mb-4 sm:mb-0 sm:mr-1 sm:ml-0" src="https://api.adorable.io/avatars/64/abott@adorable.png" alt="">
      </button>
      <button class="rounded">
          <img class="block h-8 w-8 border-2 sm:h-8 rounded-full shadow mx-auto mb-4 sm:mb-0 sm:mr-1 sm:ml-0" src="https://api.adorable.io/avatars/face/eyes4/nose3/mouth7/8e8895" alt="">
      </button>
      <button class="rounded">
          <img class="block h-8 w-8 border-2 sm:h-8 rounded-full shadow mx-auto mb-4 sm:mb-0 sm:mr-1 sm:ml-0" src="https://api.adorable.io/avatars/face/eyes5/nose1/mouth3/458877" alt="">
      </button>
  </div>
</div>
