@extends('app')

@section('head')
    @component('components.meta')

        @slot('title') {{ __('seo.portfolio-title') }} @endslot
        @slot('description') {{ __('seo.portfolio-desc') }} @endslot
        @slot('image') /meta/portfolio.jpg @endslot
        @slot('date') {{$date}} @endslot

    @endcomponent
@endsection

@section('main')

    @component('components.breadcrumbs', [
                      'crumbs' => [
                          ['', __('site.portfolio')],
                        ],
                      ])
    @endcomponent

    <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">

        <p class="mb-2 text-xs font-semibold tracking-wide text-gray-600 uppercase sm:text-center">
            {{ config('app.name') }}
        </p>
        <div class="max-w-xl mb-2 md:mx-auto sm:text-center lg:max-w-2xl">
            <div class="mb-4">
                <h1
                    class="inline-block max-w-lg font-sans text-3xl font-extrabold leading-none tracking-tight text-black transition-colors duration-200 hover:text-green-700 sm:text-4xl">
                    {{__('site.portfolio')}}
                </h1>
            </div>
            <p class="text-base text-gray-700 md:text-lg">
                {{__('site.portfolio_teaser')}}
            </p>
        </div>

        {{--Блок услуг--}}
        <div class="px-4 py-8 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-12">
            <div class="mb-5 flex flex-wrap justify-center">
                @foreach($data['tags'] as $tag)
                    <a href="{{ route('page', 'portfolio?tag=' . $tag->slug) }}" class="inline-flex p-1 mr-1 mb-1 text-xs text-white transition duration-200 rounded shadow-md
                    @if($data['mark'] == $tag->slug)
                        bg-{{$tag->getTranslatedAttribute('color')}}-500
                    @else
                        bg-gray-400
                    @endif
                    hover:bg-{{$tag->getTranslatedAttribute('color')}}-700 focus:shadow-outline focus:outline-none">
                        {{$tag->getTranslatedAttribute('name')}}
                    </a>
                @endforeach
            </div>
            <div class="grid gap-5 lg:grid-cols-3 sm:max-w-sm sm:mx-auto lg:max-w-full">
                @foreach($data['portfolio'] as $item)
                    <div class="relative overflow-hidden transition-shadow transition-all duration-300 bg-white rounded bg-gray-50 hover:bg-gray-100 hover:-mt-2 hover:mb-2 shadow-lg p-1">
                        <a href="{{ route('portfolio', $item->slug) }}"
                           aria-label="{{ $item->getTranslatedAttribute('heading') }}">
                            <img src="{{ Voyager::image( $item->image ) }}" class="object-cover w-full h-64 rounded"
                                 alt="{{$item->getTranslatedAttribute('heading')}}"/></a>
                        <div class="py-5 px-2 mb-8">
                            <a href="{{ route('portfolio', $item->slug) }}"
                               aria-label="{{$item->getTranslatedAttribute('heading')}}"
                               class="inline-block mb-1 text-black transition-colors duration-200 hover:text-green-700">
                                <h3 class="text-xl font-bold leading-5">
                                    {{$item->getTranslatedAttribute('heading')}}
                                </h3>
                            </a>
                            <div>
                                @component('components.portfolio-tags', ['tags'=>$item->tags])@endcomponent
                            </div>
                            <p class="mb-4 mt-3 text-sm text-gray-700">
                                {{$item->getTranslatedAttribute('teaser')}}
                            </p>
                        </div>
                        <div class="absolute w-full bottom-0 left-0 p-3">
                            <a href="{{ route('portfolio', $item->slug) }}"
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

@endsection
