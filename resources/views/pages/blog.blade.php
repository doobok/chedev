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

            <div class="flex flex-row space-x-1 mb-5">
                @for($s=0; $s<5; $s++)
                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.967-7.417 3.967 1.481-8.279-6.064-5.828 8.332-1.151z"/>
                </svg>
                @endfor
            </div>

            <div class="flex flex-row text-sm space-x-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 text-gray-600" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M17 1c0-.552-.447-1-1-1s-1 .448-1 1v2c0 .552.447 1 1 1s1-.448 1-1v-2zm-12 2c0 .552-.447 1-1 1s-1-.448-1-1v-2c0-.552.447-1 1-1s1 .448 1 1v2zm13 5v10h-16v-10h16zm2-6h-2v1c0 1.103-.897 2-2 2s-2-.897-2-2v-1h-8v1c0 1.103-.897 2-2 2s-2-.897-2-2v-1h-2v18h20v-18zm4 3v19h-22v-2h20v-17h2zm-17 7h-2v-2h2v2zm4 0h-2v-2h2v2zm4 0h-2v-2h2v2zm-8 4h-2v-2h2v2zm4 0h-2v-2h2v2zm4 0h-2v-2h2v2z"/>
                </svg>
                <span>
                    {{ date('d-m-Y', strtotime($page->created_at)) }}
                </span>
                <span>|</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 text-gray-600" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M19.282 4.494c-.481-.957-1.242-1.558-2.19-1.489-1.006.082-1.843.869-2.08 1.958-.06.27.111.537.381.595.271.057.537-.112.596-.381.166-.759.715-1.137 1.186-1.175.518-.051.91.287 1.179.86.795 1.694 3.319 6.902 4.259 9.186 0 0-1.212-3.049-4.616-3.049-2.366 0-4.338 1.648-4.856 3.857-.36-.261-.779-.393-1.169-.393-.381 0-.776.121-1.118.36-.534-2.191-2.495-3.823-4.849-3.823-3.404 0-4.616 3.049-4.616 3.049.939-2.284 3.464-7.492 4.259-9.186.269-.573.661-.911 1.179-.86.471.038 1.02.417 1.186 1.175.057.269.323.438.594.381.27-.059.44-.325.381-.595-.237-1.089-1.074-1.876-2.08-1.958-.948-.069-1.709.531-2.19 1.488-.989 1.964-4.718 9.585-4.718 10.485 0 .513.4 1.021 1.005 1.021 0 2.762 2.238 5 5 5 2.047 0 3.792-1.235 4.56-2.999.514-1.183.311-2.537 1.405-2.537 1.124 0 .968 1.39 1.469 2.54.767 1.762 2.51 2.996 4.556 2.996 2.762 0 5-2.238 5-5 .605 0 1.005-.508 1.005-1.021 0-.9-3.729-8.521-4.718-10.485zm-13.277 15.506c-2.206 0-4-1.794-4-4s1.794-4 4-4 4 1.794 4 4-1.794 4-4 4zm11.99 0c-2.206 0-4-1.794-4-4s1.794-4 4-4 4 1.794 4 4-1.794 4-4 4zm-.995-6.939c.198-.036.401-.061.609-.061 1.872 0 3.391 1.518 3.391 3.39l-.028.283c-.762-1.692-2.201-3.01-3.972-3.612zm-13.972 3.612l-.028-.283c0-1.872 1.519-3.39 3.391-3.39.208 0 .411.025.609.061-1.771.602-3.21 1.92-3.972 3.612z"/>
                </svg>
                <span>
                    7 min
                </span>
                <span>|</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 text-gray-600" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12.015 7c4.751 0 8.063 3.012 9.504 4.636-1.401 1.837-4.713 5.364-9.504 5.364-4.42 0-7.93-3.536-9.478-5.407 1.493-1.647 4.817-4.593 9.478-4.593zm0-2c-7.569 0-12.015 6.551-12.015 6.551s4.835 7.449 12.015 7.449c7.733 0 11.985-7.449 11.985-7.449s-4.291-6.551-11.985-6.551zm-.015 3c-2.21 0-4 1.791-4 4s1.79 4 4 4c2.209 0 4-1.791 4-4s-1.791-4-4-4zm-.004 3.999c-.564.564-1.479.564-2.044 0s-.565-1.48 0-2.044c.564-.564 1.479-.564 2.044 0s.565 1.479 0 2.044z"/>
                </svg>
                <span>
                    523
                </span>
                <span>|</span>
                <a href="#comments">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 text-gray-600" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M20 15c0 .552-.448 1-1 1s-1-.448-1-1 .448-1 1-1 1 .448 1 1m-3 0c0 .552-.448 1-1 1s-1-.448-1-1 .448-1 1-1 1 .448 1 1m-3 0c0 .552-.448 1-1 1s-1-.448-1-1 .448-1 1-1 1 .448 1 1m5.415 4.946c-1 .256-1.989.482-3.324.482-3.465 0-7.091-2.065-7.091-5.423 0-3.128 3.14-5.672 7-5.672 3.844 0 7 2.542 7 5.672 0 1.591-.646 2.527-1.481 3.527l.839 2.686-2.943-1.272zm-13.373-3.375l-4.389 1.896 1.256-4.012c-1.121-1.341-1.909-2.665-1.909-4.699 0-4.277 4.262-7.756 9.5-7.756 5.018 0 9.128 3.194 9.467 7.222-1.19-.566-2.551-.889-3.967-.889-4.199 0-8 2.797-8 6.672 0 .712.147 1.4.411 2.049-.953-.126-1.546-.272-2.369-.483m17.958-1.566c0-2.172-1.199-4.015-3.002-5.21l.002-.039c0-5.086-4.988-8.756-10.5-8.756-5.546 0-10.5 3.698-10.5 8.756 0 1.794.646 3.556 1.791 4.922l-1.744 5.572 6.078-2.625c.982.253 1.932.407 2.85.489 1.317 1.953 3.876 3.314 7.116 3.314 1.019 0 2.105-.135 3.242-.428l4.631 2-1.328-4.245c.871-1.042 1.364-2.384 1.364-3.75"/>
                    </svg>
                </a>
                <span>
                    5
                </span>
            </div>

            <div>
                {!! $page->getTranslatedAttribute('body') !!}
            </div>

{{--            @include('components.blog-comments')--}}

            @component('components.blog-comments', [
                    'comments' => "Hello 25"
                ])
{{--                @slot('comments')--}}
{{--                    Hello 34343--}}
{{--                @endslot--}}
            @endcomponent
        </article>

        @include('components.lead-form')

        <div class="max-w-screen-lg sm:mx-auto ">
            <h4>{{ __('site.our-services') }}</h4>
            @include('modules.services-tags')
        </div>


    </div>

@endsection
