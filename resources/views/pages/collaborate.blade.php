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

    @component('components.breadcrumbs', [
                      'crumbs' => [
                          ['', __('site.collaborate')],
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
                    class="inline-block max-w-lg font-sans text-3xl font-extrabold leading-none tracking-tight text-black transition-colors duration-200 hover:txt-gradient sm:text-4xl">
                    {{$page->getTranslatedAttribute('heading')}}
                </h1>
            </div>
            <p class="text-base text-gray-700 md:text-lg">
                {{$page->getTranslatedAttribute('teaser')}}
            </p>
            <p class="text-base text-gray-700 md:text-lg">
                {{ __('site.collaborate-d') }}
            </p>
        </div>

        <div class="px-4 py-8 mx-auto sm:max-w-lg md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-10">
            <div class="grid gap-5 row-gap-8 lg:grid-cols-2">
                <div class="flex flex-col justify-center">
                    <div class="max-w-xl mb-6">
                        <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-none">
                            {{ __('site.send-resume') }}
                        </h2>
                        <p class="text-base text-gray-700 md:text-lg">
                            {{ __('site.send-resume-t') }}
                        </p>
                    </div>
                    <button
                        v-scroll-to="'#form'"
                        class="inline-flex items-center justify-center h-12 px-6 mr-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-green-500 hover:bg-green-700 focus:shadow-outline focus:outline-none"
                    >
                        {{ __('site.send-resume') }}
                    </button>
                </div>
                <div>
                    <img src="/svg/resume.svg" class="object-cover object-right w-full h-auto" alt="resume" />

                </div>
            </div>
        </div>

        <article class="max-w-screen-md sm:mx-auto mb-8">
            <div class="mb-16">
                {!! $page->getTranslatedAttribute('body') !!}
            </div>
        </article>

        <div id="form" class="max-w-screen-md sm:mx-auto">
            <h4>{{ __('site.vacancy-form-h') }}</h4>
            <p class="mb-2">{{ __('site.vacancy-form-d') }}</p>

            <div class="border-2 border-gray-200 bg-white rounded-lg p-4">
                <vacancy-form></vacancy-form>
            </div>
        </div>

    </div>


@endsection
