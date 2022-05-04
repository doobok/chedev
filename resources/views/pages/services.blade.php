@extends('app')

@section('head')
    @component('components.meta')

        @slot('title') {{ __('seo.services-title') }} @endslot
        @slot('description') {{ __('seo.services-desc') }} @endslot
        @slot('image') /services.jpg @endslot
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
                    {{__('site.services')}}
                </h1>
            </div>
            <div class="flex justify-center mb-4">
                <img class="object-cover w-full rounded shadow-lg" src="/services.jpg" alt="{{__('site.services')}}"/>
            </div>
            <p class="text-base text-gray-700 md:text-lg">
                {{__('site.services_teaser')}}
            </p>
        </div>

        {{--Блок услуг--}}
        <div class="px-4 py-8 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-12">
            <div class="grid gap-5 lg:grid-cols-3 sm:max-w-sm sm:mx-auto lg:max-w-full">
                @foreach($data as $item)
                    <div class="overflow-hidden transition-all duration-300 bg-white rounded bg-gray-50 hover:bg-gray-100 hover:-mt-2 hover:mb-2 shadow-md p-1">
                        <a href="{{ route('page', $item->slug) }}"
                           aria-label="{{ $item->getTranslatedAttribute('heading') }}">
                            <img src="{{ Voyager::image( $item->image ) }}" class="object-cover w-full h-64 rounded"
                                 alt="{{$item->getTranslatedAttribute('heading')}}"/></a>
                        <div class="py-5 px-2">
                            <a href="{{ route('page', $item->slug) }}"
                               aria-label="{{$item->getTranslatedAttribute('heading')}}"
                               class="inline-block mb-3 text-black transition-colors duration-200 hover:text-green-700">
                                <p class="text-2xl font-bold leading-5">
                                    {{$item->getTranslatedAttribute('heading')}}
                                </p>
                            </a>
                            <p class="mb-4 text-sm text-gray-700">
                                {{$item->getTranslatedAttribute('teaser')}}
                            </p>
                            <a href="{{ route('page', $item->slug) }}"
                               class="inline-flex items-center justify-center h-10 px-6 mr-6 tracking-wide text-white transition duration-200 rounded shadow-md bg-blue-500 hover:bg-blue-700 focus:shadow-outline focus:outline-none w-full"
                            >
                                {{ __('site.read-more') }}
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    {{--Блок услуг конец--}}
    <div class="px-4 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
        @include('components.lead-form')
    </div>

@endsection
