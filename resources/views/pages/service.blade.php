@extends('app')

@section('head')
    @component('components.meta')
        @slot('title')
            {{$page->getTranslatedAttribute('title')}}
        @endslot
        @slot('description')
            {{$page->getTranslatedAttribute('description')}} {{ __('seo.service-desc-tail', [
                'price' => $page->price ?? 200,
                'time' => $page->time ?? 48,
            ]) }}
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
                model="service"
            ></star-rating>

            <div>
                {!! $page->getTranslatedAttribute('body') !!}
            </div>

            @isset($page->youtube)
                <div class="aspect-w-16 aspect-h-9 mt-8">
                    <iframe src="https://www.youtube.com/embed/{{$page->youtube}}" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            @endisset
            @isset($page->price)
            <div class="mt-8">
                @include('components.service-time-price')
            </div>
            @endisset

        </article>

        @if($page->portfolios->count() > 0)
            <div class="mx-auto lg:max-w-screen-lg my-10">
                <h4 class="text-gray-800 mt-7">{{ __('site.service-portfolios') }}</h4>
                <div class="grid gap-10 row-gap-8 mx-auto sm:row-gap-10 lg:max-w-screen-lg sm:grid-cols-2 lg:grid-cols-3">
                    @foreach($page->portfolios as $portfolio)
                        <a href="{{ route('portfolio', $portfolio->slug) }}" class="hover:no-underline bg-gray-100 text-gray-800 hover:text-green-700 transition-all duration-300 rounded-full border border-white hover:border-green-700 ">
                            <div class="flex">
                                <img class="object-cover w-20 h-20 mr-4 rounded-full shadow"
                                     src="{{ Voyager::image( $portfolio->image ) }}" alt="{{$portfolio->getTranslatedAttribute('heading')}}" />
                                <div class="flex flex-col justify-center">
                                    <p class="text-sm">{{$portfolio->getTranslatedAttribute('heading')}}</p>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        @endif

        @include('components.lead-form')

        <div class="max-w-screen-lg sm:mx-auto ">
            <h4>{{ __('site.more-services') }}</h4>
            @include('modules.services-tags')
        </div>

    </div>

@endsection
