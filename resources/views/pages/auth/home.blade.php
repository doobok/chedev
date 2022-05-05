@extends('app')

@section('head')
    @component('components.meta')

        @slot('title') {{ __('seo.home-title') }} @endslot
        @slot('description') {{ __('seo.home-desc') }} @endslot
        @slot('image') /meta/home.png @endslot
        @slot('date') 05.05.2022 @endslot
        @slot('noindex')  @endslot

    @endcomponent
@endsection

@section('main')

    @include('layouts.partials.nav')

    <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">

        @auth
            <div class="px-4 py-8 mx-auto sm:max-w-lg md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-10">
                <div class="grid gap-5 row-gap-8 lg:grid-cols-2">
                    <div class="flex flex-col justify-center">
                        <div class="max-w-xl mb-6">
                            <h1 class="max-w-lg mb-6 font-sans text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-none">
                                {{ __('auth.hello') }}
                                <span class="text-primary">
                                    {{ auth()->user()->name }}
                                </span>!
                            </h1>
                            <p class="text-base text-gray-700 md:text-lg">
                                {{ __('auth.hello-desc') }}
                            </p>
                        </div>
                        <div class="bg-blue-50 rounded-md shadow-md p-2">
                            <p class="font-extrabold text-lg">{{ __('auth.your-bio') }}</p>
                            <p>Email:
                                <span class="font-bold">{{ auth()->user()->email }}</span>
                            </p>
                            <p>{{ __('auth.login-as') }}:
                                <span class="font-bold">{{ auth()->user()->provider }}</span>
                            </p>
                            <p>{{ __('auth.registration-date') }}:
                                <span class="font-bold">{{ auth()->user()->created_at }}</span>
                            </p>
                        </div>



                    </div>
                    <div>
                        <img src="/svg/home.svg" class="object-cover object-right w-full h-auto" alt="home" />
                    </div>
                </div>
            </div>
        @endauth
        @guest
            <div class="px-4 py-8 mx-auto sm:max-w-lg md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-10">
                <div class="grid gap-5 row-gap-8 lg:grid-cols-2">
                    <div class="flex flex-col justify-center">
                        <div class="max-w-xl mb-6">
                            <h1 class="max-w-lg mb-6 font-sans text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-none">
                                {{ __('auth.bye') }}
                            </h1>
                            <p class="text-base text-gray-700 md:text-lg">
                                {{ __('auth.bye-desc') }}
                            </p>
                        </div>
                        <div class="flex space-x-1 items-center mb-4">
                            <span class="capitalize">{{ __('site.login') }}:</span>
                            <auth-buttons></auth-buttons>
                        </div>
                        <a href="{{ route('main-page') }}"
                           class="inline-flex items-center justify-center h-12 px-6 mr-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-blue-500 hover:bg-blue-700 focus:shadow-outline focus:outline-none"
                        >
                            {{__('site.to-home-page')}}
                        </a>
                    </div>
                    <div>
                        <img src="/svg/exit.svg" class="object-cover object-right w-full h-auto" alt="exit" />
                    </div>
                </div>
            </div>
        @endguest
    </div>
@endsection
