@extends('app')

@section('head')
    @component('components.meta')

        @slot('title') {{ __('seo.blog-title') }} @endslot
        @slot('description') {{ __('seo.blog-desc') }} @endslot
        @slot('image') /meta/blog.jpg @endslot
        @slot('date') {{$date}} @endslot

    @endcomponent
@endsection

@section('main')

    @component('components.breadcrumbs', [
                      'crumbs' => [
                          ['', __('site.blog')],
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
                    {{__('site.blog')}}
                </h1>
            </div>
            <p class="text-base text-gray-700 md:text-lg">
                {{__('site.blog_teaser')}}
            </p>
        </div>
        {{-- Блок тегов --}}
        <div class="mb-5 flex flex-wrap justify-center items-center text-gray-500 text-sm space-x-2 space-y-1">
            <span class="mt-1">Теми:</span>
            @foreach($data['tags'] as $tag)
                <a href="{{ route('page', 'blog?tag=' . $tag->slug) }}" class="inline-flex transition duration-200
                    @if($data['mark'] == $tag->slug)
                        text-green-500
                    @endif
                    hover:text-green-500">
                    #{{$tag->getTranslatedAttribute('name')}}
                </a>
            @endforeach
            @isset($data['mark'])
                <a href="{{ route('page', 'blog') }}"
                   class="inline-flex transition duration-200 hover:text-green-500"
                   title="{{ __('site.show-all-blogs') }}"
                >[ {{ __('site.all') }} ]</a>
            @endisset
        </div>

        {{--Блок материалов--}}
        <div class="py-8 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-12">
            <div class="grid gap-5 lg:grid-cols-3 sm:max-w-sm sm:mx-auto lg:max-w-full">
                @foreach($data['blogs'] as $item)
                    @component('components.blog-item', ['item'=>$item])@endcomponent
                @endforeach
            </div>
        </div>
        <div class="max-w-screen-lg sm:mx-auto ">
            <h4>{{ __('site.our-services') }}</h4>
            @include('modules.services-tags')
        </div>
    </div>

@endsection
