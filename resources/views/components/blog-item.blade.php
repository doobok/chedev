<div class="relative overflow-hidden transition-shadow transition-all duration-300 bg-white rounded bg-gray-50 hover:bg-gray-100 hover:-mt-2 hover:mb-2 shadow-lg p-1">
    <a href="{{ route('blog', $item->slug) }}"
       aria-label="{{ $item->getTranslatedAttribute('heading') }}">
        <img src="{{ Voyager::image( $item->image ) }}" class="object-cover w-full h-64 rounded"
             alt="{{$item->getTranslatedAttribute('heading')}}"/></a>
    <div class="py-4 px-2 mb-8">
        <a href="{{ route('blog', $item->slug) }}"
           aria-label="{{$item->getTranslatedAttribute('heading')}}"
           class="inline-block mb-3 text-black transition-colors duration-200 hover:text-green-700">
            <h3 class="text-xl font-bold leading-5">
                {{$item->getTranslatedAttribute('heading')}}
            </h3>
        </a>
        <div class="flex flex-nowrap mb-4">
            @for($i=1; $i<=(($item->stars) ? $item->stars->rating : 5); $i++)
                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 text-yellow-300" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.967-7.417 3.967 1.481-8.279-6.064-5.828 8.332-1.151z"/>
                </svg>
            @endfor
        </div>

        <div class="flex flex-row items-center space-x-2 mb-2 text-xs text-gray-400">
            <div class="flex space-x-2 items-center" title="{{ __('site.publication-date') }}">
                <span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-3" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M17 1c0-.552-.447-1-1-1s-1 .448-1 1v2c0 .552.447 1 1 1s1-.448 1-1v-2zm-12 2c0 .552-.447 1-1 1s-1-.448-1-1v-2c0-.552.447-1 1-1s1 .448 1 1v2zm13 5v10h-16v-10h16zm2-6h-2v1c0 1.103-.897 2-2 2s-2-.897-2-2v-1h-8v1c0 1.103-.897 2-2 2s-2-.897-2-2v-1h-2v18h20v-18zm4 3v19h-22v-2h20v-17h2zm-17 7h-2v-2h2v2zm4 0h-2v-2h2v2zm4 0h-2v-2h2v2zm-8 4h-2v-2h2v2zm4 0h-2v-2h2v2zm4 0h-2v-2h2v2z"/>
                </svg>
            </span>
                <span>
                {{ date('d-m-Y H:i', strtotime($item->created_at)) }}
            </span>
            </div>
            <span>|</span>
            <div class="flex space-x-2 items-center" title="{{ __('site.views-count') }}">
                <span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-3" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12.015 7c4.751 0 8.063 3.012 9.504 4.636-1.401 1.837-4.713 5.364-9.504 5.364-4.42 0-7.93-3.536-9.478-5.407 1.493-1.647 4.817-4.593 9.478-4.593zm0-2c-7.569 0-12.015 6.551-12.015 6.551s4.835 7.449 12.015 7.449c7.733 0 11.985-7.449 11.985-7.449s-4.291-6.551-11.985-6.551zm-.015 3c-2.21 0-4 1.791-4 4s1.79 4 4 4c2.209 0 4-1.791 4-4s-1.791-4-4-4zm-.004 3.999c-.564.564-1.479.564-2.044 0s-.565-1.48 0-2.044c.564-.564 1.479-.564 2.044 0s.565 1.479 0 2.044z"/>
                </svg>
                </span>
                <span>
                    {{$item->views}}
                </span>
            </div>
            @isset($item->youtube)
                <span>|</span>
                <a href="{{ route('blog', $item->slug) }}#youtube" class="cursor-pointer" title="{{ __('site.video-include') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 text-red-300" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M16 18c0 1.104-.896 2-2 2h-12c-1.105 0-2-.896-2-2v-12c0-1.104.895-2 2-2h12c1.104 0 2 .896 2 2v12zm8-14l-6 6.223v3.554l6 6.223v-16z"/>
                    </svg>
                </a>
            @endisset

        </div>
        <p class="mb-4 text-sm text-gray-700">
            {{$item->getTranslatedAttribute('teaser')}}
        </p>
    </div>
    <div class="absolute bottom-0 left-0 w-full p-3">
        <a href="{{ route('blog', $item->slug) }}"
           class="inline-flex items-center justify-center h-10 px-6 mr-6 tracking-wide text-white transition duration-200 rounded shadow-md bg-green-500 hover:bg-green-700 focus:shadow-outline focus:outline-none w-full"
        >
            {{ __('site.read-more') }}
        </a>
    </div>
</div>
