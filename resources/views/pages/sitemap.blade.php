@extends('app')

@section('head')
    @component('components.meta')

        @slot('title') {{ __('seo.sitemap-title') }} @endslot
        @slot('description') {{ __('seo.sitemap-desc') }} @endslot
        @slot('image') /meta/sitemap.png @endslot
        @slot('date') {{ $date }} @endslot

    @endcomponent
@endsection

@section('main')

    @component('components.breadcrumbs', [
                      'crumbs' => [
                          ['', __('site.sitemap')],
                        ],
                      ])
    @endcomponent

    <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
        <p class="mb-2 text-xs font-semibold tracking-wide text-gray-600 uppercase sm:text-center">
            {{ config('app.name') }}
        </p>
        <div class="max-w-xl mb-5 md:mx-auto sm:text-center lg:max-w-2xl">
            <div class="mb-4">
                <h1
                    class="inline-block max-w-lg font-sans text-3xl font-extrabold leading-none tracking-tight text-black transition-colors duration-200 hover:text-green-700 sm:text-4xl">
                    {{ __('site.sitemap') }}
                </h1>
            </div>
            <p class="text-base text-gray-700 md:text-lg">
                {{ __('site.sitemap-d') }}
            </p>
        </div>

        <div class="px-4 py-8 mx-auto sm:max-w-lg md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-10">
            <div class="grid gap-5 row-gap-8 lg:grid-cols-2">
                <div class="order-first md:order-last">
                    <img src="/svg/sitemap.svg" class="object-cover object-right w-full h-auto mb-4" alt="sitemap" />
                </div>
                <div class="order-last md:order-first flex flex-col justify-center">
                    <a href="{{ route('page', 'about-us') }}" class="flex flex-nowrap items-center text-lg font-extrabold text-gray-700 md:text-xl border-l-4 md:border-l-8 mb-4 transition-colors border-green-300 duration-200 hover:text-green-700"
                       title="{{__('site.about-us')}}"
                    ><hr class="w-7 border-t-4 md:border-t-8 border-green-300 mr-3">
                        {{__('site.about-us')}}
                    </a>
                    <a href="{{ route('page', 'contacts') }}" class="flex flex-nowrap items-center text-lg font-extrabold text-gray-700 md:text-xl border-l-4 md:border-l-8 mb-4 transition-colors border-green-300 duration-200 hover:text-green-700"
                       title="{{__('site.contacts')}}"
                    ><hr class="w-7 border-t-4 md:border-t-8 border-green-300 mr-3">
                        {{__('site.contacts')}}
                    </a>
                    @component('components.sitemap-block', [
                        'items' => $services,
                        'route' => 'services',
                        'route_name' => 'page',
                        'title' => __('site.services'),
                    ])@endcomponent

                    @component('components.sitemap-block', [
                        'items' => $portfolios,
                        'route' => 'portfolio',
                        'route_name' => 'portfolio',
                        'title' => __('site.portfolio'),
                    ])@endcomponent

                    @component('components.sitemap-block', [
                        'items' => $blogs,
                        'route' => 'blog',
                        'route_name' => 'blog',
                        'title' => __('site.blog'),
                    ])@endcomponent

                </div>
            </div>
        </div>

    </div>


@endsection
