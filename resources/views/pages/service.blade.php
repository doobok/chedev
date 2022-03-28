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
            Chernobay Development
        </p>
        <div class="max-w-xl mb-5 md:mx-auto sm:text-center lg:max-w-2xl">
            <div class="mb-4">
                <h1
                    class="inline-block max-w-lg font-sans text-3xl font-extrabold leading-none tracking-tight text-black transition-colors duration-200 hover:text-deep-purple-accent-700 sm:text-4xl">
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

        <div class="mb-10 sm:text-center">
            <a href="https://t.me/Yura_Chernobay" aria-label="Founder" class="inline-block mb-1" target="_blank">
                <img alt="avatar"
                     src="/founder_photo.jpeg"
                     class="object-cover w-10 h-10 rounded-full shadow-sm"/>
            </a>
            <div>
                <a href="https://t.me/Yura_Chernobay" aria-label="Founder" target="_blank"
                   class="font-semibold text-gray-800 transition-colors duration-200 hover:text-deep-purple-accent-700">Yuri Chernobay</a>
                <p class="text-sm font-medium leading-4 text-gray-600">Founder</p>
            </div>
        </div>


        <article class="max-w-screen-lg sm:mx-auto mb-8">
            <blockquote>
                <h2 class="text-gray-700">{{$page->getTranslatedAttribute('heading')}}</h2>
            </blockquote>

            <div class="space-y-8">
                {!! $page->getTranslatedAttribute('body') !!}
            </div>

        </article>

        @include('components.lead-form')

        <div class="max-w-screen-lg sm:mx-auto ">
            <h3>Вас также могут заинтересовать и другие услуги</h3>
            @include('modules.services-tags')
        </div>


    </div>

@endsection
