@extends('app')

@section('head')
    @component('components.meta')
        @slot('title')
            {{$page->getTranslatedAttribute('title')}}
        @endslot
        @slot('description')
            @if($page->getTranslatedAttribute('description'))
                {{$page->getTranslatedAttribute('description')}}
            @else
                {{$page->getTranslatedAttribute('teaser')}}
            @endif
        @endslot
        @slot('image')
            @if($page->seo_image)
                {{ Voyager::image( $page->seo_image ) }}
            @else
                {{ Voyager::image( $page->image ) }}
            @endif
        @endslot
        @slot('date')
            {{$page->created_at}}
        @endslot
    @endcomponent
@endsection

@section('main')

    @component('components.breadcrumbs', [
                      'crumbs' => [
                          [route('page', 'portfolio'), __('site.portfolio')],
                          ['', $page->getTranslatedAttribute('heading')]
                        ],
                      ])
    @endcomponent

    <div class="px-4 py-8 sm:py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">

        <p class="mb-2 text-xs font-semibold tracking-wide text-gray-600 uppercase sm:text-center">
            {{ config('app.name') }}
        </p>
        <div class="max-w-xl mb-5 md:mx-auto sm:text-center lg:max-w-2xl">
            <div class="mb-4">
                <h1
                    class="inline-block max-w-lg font-sans text-3xl font-extrabold leading-none tracking-tight text-black transition-colors duration-200 hover:text-green-700 sm:text-4xl">
                    {{$page->getTranslatedAttribute('heading')}}
                </h1>
            </div>
            <div class="flex justify-center mb-4">
                <img class="object-cover w-full rounded shadow-lg" src="{{ Voyager::image( $page->image ) }}" alt="{{$page->getTranslatedAttribute('heading')}}" />
            </div>
            <div class="flex flex-wrap justify-start md:justify-end items-center mb-3">
                <div class="text-sm font-bold mr-2">{{ __('site.marks') }}:</div>
                @component('components.portfolio-tags', ['tags'=>$page->tags])@endcomponent
            </div>
            <p class="text-base text-gray-700 md:text-lg">
                {{$page->getTranslatedAttribute('teaser')}}
            </p>
        </div>

        @include('components.author')

        <article class="max-w-screen-md sm:mx-auto mb-8">
            <blockquote>
                <h2 class="text-gray-700">{{$page->getTranslatedAttribute('heading')}}</h2>
            </blockquote>

            <star-rating
                itemid="{{$page->id}}"
                model="portfolio"
            ></star-rating>

            @component('components.text-statistics', [
                    'date' => $page->created_at,
                    'views_count' => $page->views,
                ])
            @endcomponent


            <div>
                {!! $page->getTranslatedAttribute('body') !!}
            </div>

            <h4 class="text-gray-800 mt-7">{{ __('site.portfolio-services') }}</h4>
            <div class="flex flex-wrap justify-start mt-5">
                @foreach($page->services as $service)
                    <a href="{{ route('page', $service->slug) }}"
                       class="flex flex-nowrap items-center p-2 mr-1 mb-1 border border-green-700 hover:bg-green-500 hover:text-white hover:no-underline"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 mr-1" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M11.602 21.564l-1.368 1.436-10.234-10.258v-7.742h2v6.891l9.602 9.673zm12.398-8.454l-9.027 9.027-10.973-11.123v-9.014h8.877l11.123 11.11zm-14.263-5.374c.684-.684.682-1.791-.001-2.475-.684-.684-1.791-.684-2.475 0s-.684 1.791 0 2.475 1.793.684 2.476 0zm4.421 6.848l-3.535-3.537-.707.707 3.535 3.537.707-.707zm2.828 0l-4.949-4.951-.707.707 4.949 4.951.707-.707zm1.415-1.416l-4.95-4.949-.707.707 4.95 4.949.707-.707z"/>
                        </svg>
                        <span>
                            {{$service->getTranslatedAttribute('heading')}}
                        </span>
                    </a>
                @endforeach
            </div>

        </article>

        @component('components.prev-next', [
                'items' => $similar,
                'similar_title' => __('site.similar_portfolio_title'),
                'route' => 'portfolio'
            ])
        @endcomponent

        @include('components.lead-form')

        <div class="max-w-screen-lg sm:mx-auto ">
            <h4>{{ __('site.our-services') }}</h4>
            @include('modules.services-tags')
        </div>


    </div>

@endsection
