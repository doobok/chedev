@extends('app')

@section('head')
    @component('components.meta')

        @slot('title') {{ __('seo.blog-title') }} @endslot
        @slot('description') {{ __('seo.blog-desc') }} @endslot
        @slot('image') /blog.jpg @endslot
        @slot('date') @endslot

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
                    {{__('site.blog')}}
                </h1>
            </div>
            <p class="text-base text-gray-700 md:text-lg">
                {{__('site.blog_teaser')}}
            </p>
        </div>

        {{--        <div class="mb-10 sm:text-center">--}}
        {{--            <a href="{{ setting('contact.telegram_profile') }}" aria-label="{{ setting('contact.telegram_role_name') }}"--}}
        {{--               class="inline-block mb-1" target="_blank">--}}
        {{--                <img alt="avatar"--}}
        {{--                     src="/founder_photo.jpeg"--}}
        {{--                     class="object-cover w-10 h-10 rounded-full shadow-sm"/>--}}
        {{--            </a>--}}
        {{--            <div>--}}
        {{--                <a href="{{ setting('contact.telegram_profile') }}"--}}
        {{--                   aria-label="{{ setting('contact.telegram_role_name') }}" target="_blank"--}}
        {{--                   class="font-semibold text-gray-800 transition-colors duration-200 hover:text-green-700">{{ setting('contact.telegram_username') }}</a>--}}
        {{--                <p class="text-sm font-medium leading-4 text-gray-600">{{ setting('contact.telegram_role_name') }}</p>--}}
        {{--            </div>--}}
        {{--        </div>--}}

        {{--Блок услуг--}}
        <div class="px-4 py-8 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-12">
            <div class="grid gap-5 lg:grid-cols-3 sm:max-w-sm sm:mx-auto lg:max-w-full">
                @foreach($data as $item)
                    <div class="overflow-hidden transition-shadow transition-all duration-300 bg-white rounded bg-gray-50 hover:bg-gray-100 hover:-mt-2 hover:mb-2 shadow-lg p-1">
                        <a href="{{ route('blog', $item->slug) }}"
                           aria-label="{{ $item->getTranslatedAttribute('heading') }}">
                            <img src="{{ Voyager::image( $item->image ) }}" class="object-cover w-full h-64 rounded"
                                 alt="{{$item->getTranslatedAttribute('heading')}}"/></a>
                        <div class="py-5 px-2">
                            <a href="{{ route('blog', $item->slug) }}"
                               aria-label="{{$item->getTranslatedAttribute('heading')}}"
                               class="inline-block mb-3 text-black transition-colors duration-200 hover:text-green-700">
                                <h3 class="text-xl font-bold leading-5">
                                    {{$item->getTranslatedAttribute('heading')}}
                                </h3>
                            </a>
                            <p class="mb-4 text-sm text-gray-700">
                                {{$item->getTranslatedAttribute('teaser')}}
                            </p>
                            <a href="{{ route('blog', $item->slug) }}"
                               class="inline-flex items-center justify-center h-10 px-6 mr-6 tracking-wide text-white transition duration-200 rounded shadow-md bg-green-500 hover:bg-green-700 focus:shadow-outline focus:outline-none w-full"
                            >
                                {{ __('site.read-more') }}
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="max-w-screen-lg sm:mx-auto ">
            <h4>{{ __('site.our-services') }}</h4>
            @include('modules.services-tags')
        </div>
    </div>



    {{--    <div class="px-4 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">--}}
    {{--        @include('components.lead-form')--}}
    {{--    </div>--}}

@endsection
