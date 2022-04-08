@extends('app')

@section('head')
    @component('components.meta')

        @slot('title') title @endslot
        @slot('description') description @endslot
        @slot('image') /index.jpg @endslot
        @slot('date') @endslot

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
                    class="inline-block max-w-lg font-sans text-3xl font-extrabold leading-none tracking-tight text-black transition-colors duration-200 hover:text-green-700 sm:text-4xl">
                    {{ __('site.contacts') }}
                </h1>
            </div>
            <p class="text-base text-gray-700 md:text-lg">
                {{ __('site.contacts-d') }}
            </p>
        </div>
        <div class="mb-4 sm:text-center">
            <a href="https://t.me/Yura_Chernobay" aria-label="Founder" class="inline-block mb-1" target="_blank">
                <img alt="avatar"
                     src="/founder_photo.jpeg"
                     class="object-cover w-10 h-10 rounded-full shadow-sm"/>
            </a>
            <div>
                <a href="https://t.me/Yura_Chernobay" aria-label="Founder" target="_blank"
                   class="font-semibold text-gray-800 transition-colors duration-200 hover:text-green-700">Yuri Chernobay</a>
                <p class="text-sm font-medium leading-4 text-gray-600">Founder</p>
            </div>
        </div>


        <div class="px-4 py-8 mx-auto sm:max-w-lg md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-10">
            <div class="grid gap-5 row-gap-8 lg:grid-cols-2">
                <div class="flex flex-col justify-center">
                    <div class="max-w-xl mb-6">
                        <h3 class="max-w-lg mb-6 font-sans text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-none">
                            {{ __('site.contacts-h') }}
                        </h3>
                        <p class="text-base text-gray-700 md:text-lg">
                            {{ __('site.contacts-t') }}
                        </p>
                    </div>

                    <a href="/" class="flex items-center mb-5 md:mb-6 group lg:max-w-xl">
                        <div class="mr-3">
                            <div class="flex items-center justify-center w-16 h-16 rounded-full bg-green-100">
                                <svg viewBox="0 0 24 24" class="w-10 h-10 text-green-400" fill="currentColor" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:1.41421;">
                                    <path id="telegram-1" d="M18.384,22.779c0.322,0.228 0.737,0.285 1.107,0.145c0.37,-0.141 0.642,-0.457 0.724,-0.84c0.869,-4.084 2.977,-14.421 3.768,-18.136c0.06,-0.28 -0.04,-0.571 -0.26,-0.758c-0.22,-0.187 -0.525,-0.241 -0.797,-0.14c-4.193,1.552 -17.106,6.397 -22.384,8.35c-0.335,0.124 -0.553,0.446 -0.542,0.799c0.012,0.354 0.25,0.661 0.593,0.764c2.367,0.708 5.474,1.693 5.474,1.693c0,0 1.452,4.385 2.209,6.615c0.095,0.28 0.314,0.5 0.603,0.576c0.288,0.075 0.596,-0.004 0.811,-0.207c1.216,-1.148 3.096,-2.923 3.096,-2.923c0,0 3.572,2.619 5.598,4.062Zm-11.01,-8.677l1.679,5.538l0.373,-3.507c0,0 6.487,-5.851 10.185,-9.186c0.108,-0.098 0.123,-0.262 0.033,-0.377c-0.089,-0.115 -0.253,-0.142 -0.376,-0.064c-4.286,2.737 -11.894,7.596 -11.894,7.596Z"/>
                                </svg>
                            </div>
                        </div>
                        <h4 class="font-sans text-lg font-bold leading-none tracking-tight text-gray-900 sm:text-xl">
                            <span class="inline-block mb-2">Telegram</span>
                            <div class="h-1 ml-auto duration-300 origin-left transform bg-green-400 scale-x-30 group-hover:scale-x-100"></div>
                        </h4>
                    </a>
                    <a href="mailto:yura.chernobay@gmail.com" class="flex items-center mb-5 md:mb-6 group lg:max-w-xl">
                        <div class="mr-3">
                            <div class="flex items-center justify-center w-16 h-16 rounded-full bg-green-100">
                                <svg viewBox="0 0 24 24" class="w-10 h-10 text-green-400" fill="currentColor">
                                    <path d="M0 3v18h24v-18h-24zm6.623 7.929l-4.623 5.712v-9.458l4.623 3.746zm-4.141-5.929h19.035l-9.517 7.713-9.518-7.713zm5.694 7.188l3.824 3.099 3.83-3.104 5.612 6.817h-18.779l5.513-6.812zm9.208-1.264l4.616-3.741v9.348l-4.616-5.607z"/>
                                </svg>
                            </div>
                        </div>
                        <h4 class="font-sans text-lg font-bold leading-none tracking-tight text-gray-900 sm:text-xl">
                            <span class="inline-block mb-2">Email</span>
                            <div class="h-1 ml-auto duration-300 origin-left transform bg-green-400 scale-x-30 group-hover:scale-x-100"></div>
                        </h4>
                    </a>


                    <smpl-button
                        cls="inline-flex items-center justify-center h-12 px-6 mr-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-green-500 hover:bg-green-700 focus:shadow-outline focus:outline-none"
                        txt="{{__('site.call-me')}}"
                    ></smpl-button>
                </div>
                <div>
                    <img src="/contacts.svg" class="object-cover object-right w-full h-auto" alt="contacts" />

                </div>
            </div>
        </div>

        <article class="max-w-screen-lg sm:mx-auto">


        </article>


    </div>


@endsection
