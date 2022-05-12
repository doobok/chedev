<section class="py-2 text-xs -mb-8">
    <div class="px-2">
        <ol vocab="https://schema.org/" typeof="BreadcrumbList"
            class="flex justify-center items-center list-reset py-4 flex-inline overflow-x-auto text-gray-500 space-x-2">
            <li property="itemListElement" typeof="ListItem"
                class="whitespace-nowrap transition-colors duration-200 hover:text-green-700">
                <a property="item" typeof="WebPage"
                   class="no-underline flex flex-inline items-center"
                   href="{{route('main-page')}}">
                <span property="name">
                    {{__('site.main')}}
                </span>
                </a>
                <meta property="position" content="1"/>
            </li>

            @foreach ($crumbs as $key => list($uri, $title))
                <span class="whitespace-nowrap">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-2" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M6 0l12 12-12 12z"/>
                    </svg>
                </span>
                <li property="itemListElement" typeof="ListItem">
                    @if (!$uri)
                        <span property="name" class="text-gray-400">{{ $title }}</span>
                    @else
                        <a property="item" typeof="WebPage"
                           class="no-underline whitespace-nowrap transition-colors duration-200 hover:text-green-700" href="{{ $uri }}">
                            <span property="name">{{ $title }}</span></a>
                    @endif
                        <meta property="position" content="{{ $key + 2 }}"/>
                </li>
            @endforeach
        </ol>
    </div>
</section>
