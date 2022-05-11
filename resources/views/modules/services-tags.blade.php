<div class="flex flex-wrap justify-center mx-2 my-4">
    @foreach($services as $service)
        <a
            href="{{route('page', $service->slug)}}"
            class="uppercase m-1 p-1 md:p-2 border-2 border-gray-300 flex-nowrap text-xs md:text-sm tracking-wide text-black hover:text-white transition duration-200 rounded shadow-md bg-white hover:bg-amber-500 focus:shadow-outline focus:outline-none"
        >
            {{$service->getTranslatedAttribute('heading')}}
        </a>

    @endforeach
</div>
