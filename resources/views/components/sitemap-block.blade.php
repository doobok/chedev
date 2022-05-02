<div class="flex flex-col space-y-2 border-l-4 md:border-l-8 border-green-300 mb-10">
    <a href="{{ route('page', $route) }}" class="text-lg font-extrabold text-gray-700 md:text-xl ml-10 transition-colors duration-200 hover:text-green-700">
        {{ $title }}
    </a>
    @foreach($items as $item)
        <a href="{{ route($route_name, $item->slug) }}" class="flex flex-nowrap items-center text-sm md:text-base transition-colors duration-200 hover:text-green-700"
           title="{{$item->getTranslatedAttribute('heading')}}"
        >
            <hr class="w-7 border-t-4 md:border-t-8 border-green-300 mr-3">
            {{$item->getTranslatedAttribute('heading')}}
        </a>
    @endforeach
</div>
