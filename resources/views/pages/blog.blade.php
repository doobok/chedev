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
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.5.1/styles/nord.min.css">
@endsection

@section('main')

    @component('components.breadcrumbs', [
                      'crumbs' => [
                          [route('page', 'blog'), __('site.blog')],
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
                    class="inline-block max-w-lg font-sans text-3xl font-extrabold leading-none tracking-tight text-black transition-colors duration-200 hover:txt-gradient sm:text-4xl">
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

            <div class="mb-1 text-base">
                @component('components.blog-item-tags', ['tags'=>$page->tags])@endcomponent
            </div>

            <star-rating
                itemid="{{$page->id}}"
                model="blog"
            ></star-rating>

            @component('components.text-statistics', [
                    'date' => $page->created_at,
                    'read_time' => $read_time,
                    'views_count' => $page->views,
                    'comments_count' => $comments_count,
                ])
            @endcomponent

            <div>
                {!! $page->getTranslatedAttribute('body') !!}
            </div>

            @isset($page->youtube)
                <div id="youtube" class="aspect-w-16 aspect-h-9 mt-8">
                    <iframe src="https://www.youtube.com/embed/{{$page->youtube}}" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            @endisset

            <comments-component blog_id="{{ $page->id }}"></comments-component>

        </article>

        @include('components.lead-form')

        <div class="max-w-screen-lg sm:mx-auto ">
            <h4>{{ __('site.our-services') }}</h4>
            @include('modules.services-tags')
        </div>

    </div>

    {{-- Schema --}}
    @component('layouts.schema.blog-article',[
       'title' => $page->getTranslatedAttribute('heading'),
       'image' => Voyager::image( $page->image ),
       'created' => $page->created_at,
       'updated' => $page->updated_at,
    ])@endcomponent
    @component('layouts.schema.rating', [
       'name' => $page->getTranslatedAttribute('heading'),
       'rating' => $rating->rating,
       'count' => $rating->count,
    ])@endcomponent

    @isset($page->youtube)
        @component('layouts.schema.youtube-video', [
            'name' => $page->getTranslatedAttribute('heading'),
            'youtube' => $page->youtube,
            'created' => $page->created_at,
            'image' => Voyager::image( $page->image ),
            'description' => $page->getTranslatedAttribute('teaser'),
        ])@endcomponent
    @endisset

@endsection
@section('js')
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.5.1/highlight.min.js" defer></script>
    <script defer>
        setTimeout(function () {
            document
                .querySelectorAll('pre code')
                .forEach((block) => {
                    hljs.highlightElement(block);
                })
        }, 1000);

    </script>

@endsection
