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
            20 Nov 2020
        </p>
        <div class="max-w-xl mb-5 md:mx-auto sm:text-center lg:max-w-2xl">
            <div class="mb-4">
                <h1
                    class="inline-block max-w-lg font-sans text-3xl font-extrabold leading-none tracking-tight text-black transition-colors duration-200 hover:text-deep-purple-accent-700 sm:text-4xl">
                    {{$page->getTranslatedAttribute('heading')}}
                </h1>
            </div>
            <p class="text-base text-gray-700 md:text-lg">
                {{$page->getTranslatedAttribute('teaser')}}
            </p>
        </div>
        <div class="mb-10 sm:text-center">
            <a href="/" aria-label="Author" class="inline-block mb-1">
                <img alt="avatar"
                     src="https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260"
                     class="object-cover w-10 h-10 rounded-full shadow-sm"/>
            </a>
            <div>
                <a href="/" aria-label="Author"
                   class="font-semibold text-gray-800 transition-colors duration-200 hover:text-deep-purple-accent-700">Vasile
                    Melinte</a>
                <p class="text-sm font-medium leading-4 text-gray-600">Author</p>
            </div>
        </div>

        <article class="max-w-screen-lg sm:mx-auto">
            <div class="space-y-8">
                {!! $page->getTranslatedAttribute('body') !!}
            </div>
        </article>
    </div>

@endsection
