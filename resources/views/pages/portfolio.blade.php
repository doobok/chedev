@extends('app')

@section('head')
    @component('components.meta')
        @slot('title')
            {{$page->getTranslatedAttribute('title')}}
        @endslot
        @slot('description')
            {{$page->getTranslatedAttribute('description')}}
        @endslot
        @slot('image')
            @if($page->seo_image == true)
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

    @include('layouts.partials.nav')

    <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">

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

        <div class="mb-10 sm:text-center">
            <a href="{{ setting('contact.telegram_profile') }}" aria-label="{{ setting('contact.telegram_role_name') }}" class="inline-block mb-1" target="_blank">
                <img alt="avatar"
                     src="/founder_photo.jpeg"
                     class="object-cover w-10 h-10 rounded-full shadow-sm"/>
            </a>
            <div>
                <a href="{{ setting('contact.telegram_profile') }}" aria-label="{{ setting('contact.telegram_role_name') }}" target="_blank"
                   class="font-semibold text-gray-800 transition-colors duration-200 hover:text-green-700">{{ setting('contact.telegram_username') }}</a>
                <p class="text-sm font-medium leading-4 text-gray-600">{{ setting('contact.telegram_role_name') }}</p>
            </div>
        </div>

        <article class="max-w-screen-md sm:mx-auto mb-8">
            <blockquote>
                <h2 class="text-gray-700">{{$page->getTranslatedAttribute('heading')}}</h2>
            </blockquote>

            @include('components.star-rating')

            <div class="flex flex-row text-sm space-x-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 text-gray-600" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M17 1c0-.552-.447-1-1-1s-1 .448-1 1v2c0 .552.447 1 1 1s1-.448 1-1v-2zm-12 2c0 .552-.447 1-1 1s-1-.448-1-1v-2c0-.552.447-1 1-1s1 .448 1 1v2zm13 5v10h-16v-10h16zm2-6h-2v1c0 1.103-.897 2-2 2s-2-.897-2-2v-1h-8v1c0 1.103-.897 2-2 2s-2-.897-2-2v-1h-2v18h20v-18zm4 3v19h-22v-2h20v-17h2zm-17 7h-2v-2h2v2zm4 0h-2v-2h2v2zm4 0h-2v-2h2v2zm-8 4h-2v-2h2v2zm4 0h-2v-2h2v2zm4 0h-2v-2h2v2z"/>
                </svg>
                <span>
                    {{ date('d-m-Y', strtotime($page->created_at)) }}
                </span>
                <span>|</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 text-gray-600" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12.015 7c4.751 0 8.063 3.012 9.504 4.636-1.401 1.837-4.713 5.364-9.504 5.364-4.42 0-7.93-3.536-9.478-5.407 1.493-1.647 4.817-4.593 9.478-4.593zm0-2c-7.569 0-12.015 6.551-12.015 6.551s4.835 7.449 12.015 7.449c7.733 0 11.985-7.449 11.985-7.449s-4.291-6.551-11.985-6.551zm-.015 3c-2.21 0-4 1.791-4 4s1.79 4 4 4c2.209 0 4-1.791 4-4s-1.791-4-4-4zm-.004 3.999c-.564.564-1.479.564-2.044 0s-.565-1.48 0-2.044c.564-.564 1.479-.564 2.044 0s.565 1.479 0 2.044z"/>
                </svg>
                <span>
                    523
                </span>
            </div>


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
