<section class="py-2 text-xs">
    <div class="px-2">
        <ol itemscope itemtype="https://schema.org/BreadcrumbList"
            class="flex justify-center items-center list-reset py-4 flex-inline overflow-x-auto text-gray-500 space-x-2">
            <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"
                class="whitespace-nowrap transition-colors duration-200 hover:text-green-700">
                <a itemprop="item" href="{{route('main-page')}}" class="no-underline flex flex-inline items-center">
                <span itemprop="name">
                    {{__('site.main')}}
                </span>
                </a>
                <meta itemprop="position" content="1"/>
            </li>

            @foreach ($crumbs as $key => list($uri, $title))
                <span class="whitespace-nowrap">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-2" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M6 0l12 12-12 12z"/>
                    </svg>
                </span>
                <li class="whitespace-nowrap transition-colors duration-200 hover:text-green-700"
                    itemprop="itemListElement" itemscope
                    itemtype="https://schema.org/ListItem">
                    <a
                    @if (!$uri)
                        class="underline" itemprop="item" href="{{url()->current()}}"
                    @else
                        itemscope itemtype="https://schema.org/WebPage"
                        itemprop="item" itemid="{{ $uri }}" class="no-underline" href="{{ $uri }}"
                    @endif
                    >
                        <span itemprop="name">{{ $title }}</span></a>
                        <meta itemprop="position" content="{{ $key + 2 }}"/>
                </li>
            @endforeach
        </ol>
    </div>
</section>
