<div class="bg-dark-100">
    <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
        <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
            <div>
                <p class="gradient inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-white uppercase rounded-full">
                    {{ config('app.name') }}
                </p>
            </div>
            <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-white sm:text-4xl md:mx-auto">
                <span class="relative inline-block">
                @include('layouts.partials.svg.logo-pattern')
                <span class="relative text-secondary">{{ __('index.most-popular') }}</span>
                </span>
                <span class="lowercase">
                    {{ __('site.portfolio') }}
                </span>
            </h2>
            <p class="text-base text-white md:text-lg">
                {{ __('index.portfolio-desc') }}
            </p>
        </div>
        <div class="grid gap-10 sm:grid-cols-2 lg:grid-cols-3">
            @foreach($portfolios as $portfolio)
                <a href="{{ route('portfolio', $portfolio->slug) }}" title="{{$portfolio->getTranslatedAttribute('heading')}}"
                class="text-gray-100 transition-all duration-200 hover:text-green-500">
                    <div class="relative aspect-w-14 aspect-h-10 transition-all duration-200 hover:scale-105 hover:-mt-2 hover:mb-2">
                        <img src="/svg/screan.svg" alt="frame" class="w-full z-30">
                        <div class="absolute left-0 top-0 aspect-w-16 aspect-h-10 align-middle">
                            <img class="px-1 mt-1 w-full h-2/3 object-cover"
                                 src="{{ Voyager::image( $portfolio->image ) }}"
                                 alt="{{$portfolio->getTranslatedAttribute('heading')}}"/>
                        </div>
                    </div>
                    <p class="mb-1 text-lg font-bold">
                        {{ Str::before($portfolio->getTranslatedAttribute('heading'), ' - ') }}
                    </p>
                    <p class="mb-4 text-xs">
                        {{ Str::after($portfolio->getTranslatedAttribute('heading'), ' - ') }}
                    </p>
                    <div class="flex items-center justify-center text-white space-x-3 mt-4">
                        <div
                            class="transition-colors duration-300 hover:text-secondary flex items-center space-x-2"
                            title="{{ __('site.views-count') }}">
                            <p>{{ $portfolio->views }}</p>
                            <p>
                                <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
                                    <path
                                        d="M15 12c0 1.654-1.346 3-3 3s-3-1.346-3-3 1.346-3 3-3 3 1.346 3 3zm9-.449s-4.252 8.449-11.985 8.449c-7.18 0-12.015-8.449-12.015-8.449s4.446-7.551 12.015-7.551c7.694 0 11.985 7.551 11.985 7.551zm-7 .449c0-2.757-2.243-5-5-5s-5 2.243-5 5 2.243 5 5 5 5-2.243 5-5z"/>
                                </svg>
                            </p>
                        </div>
                        <div
                            class="transition-colors duration-300 hover:text-secondary flex items-center space-x-2"
                            title="{{ __('site.rating') }}">
                            <p>
                                @if($portfolio->stars)
                                    {{ $portfolio->stars->rating }}
                                @else
                                    0
                                @endif
                            </p>
                            <p>
                                <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
                                    <path
                                        d="M23.873 9.81c.086-.251.127-.508.127-.763 0-.77-.379-1.514-1.055-1.982-2.152-1.492-1.868-1.117-2.68-3.544-.339-1.014-1.321-1.7-2.429-1.696-2.654.008-2.193.153-4.335-1.354-.446-.314-.974-.471-1.501-.471s-1.055.157-1.502.471c-2.154 1.515-1.687 1.362-4.335 1.354-1.107-.003-2.09.683-2.429 1.696-.812 2.433-.533 2.055-2.68 3.544-.675.469-1.054 1.212-1.054 1.982 0 .255.041.512.127.763.83 2.428.827 1.963 0 4.38-.086.251-.127.509-.127.763 0 .77.379 1.514 1.055 1.982 2.147 1.489 1.869 1.114 2.68 3.544.339 1.014 1.321 1.7 2.429 1.696 2.654-.009 2.193-.152 4.335 1.354.446.314.974.471 1.501.471s1.055-.157 1.502-.471c2.141-1.506 1.681-1.362 4.335-1.354 1.107.003 2.09-.683 2.429-1.696.812-2.428.528-2.053 2.68-3.544.675-.468 1.054-1.212 1.054-1.982 0-.254-.041-.512-.127-.763-.831-2.427-.827-1.963 0-4.38zm-7.565 1.984c.418.056.63.328.63.61 0 .323-.277.66-.844.705-.348.027-.434.312-.016.406.351.08.549.326.549.591 0 .314-.279.654-.913.771-.383.07-.421.445-.016.477.344.026.479.146.479.312 0 .466-.826 1.333-2.426 1.333-2.501.001-3.407-1.499-6.751-1.499v-4.964c1.766-.271 3.484-.817 4.344-3.802.239-.831.39-1.734 1.187-1.734 1.188 0 1.297 2.562.844 4.391.656.344 1.875.468 2.489.442.886-.036 1.136.409 1.136.745 0 .505-.416.675-.677.755-.304.094-.444.404-.015.461z"/>
                                </svg>
                            </p>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</div>

