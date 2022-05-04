<div class="bg-gradient-to-r from-dark-50 to-dark-100">
    <div class="bg-no-repeat bg-100 bg-index">
        <div class="flex flex-col items-center justify-center px-4 pt-16 mx-auto sm:max-w-xl md:max-w-full lg:pt-32 md:px-0">
            <div class="flex flex-col items-center max-w-2xl md:px-8 py-24 text-white">
                <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
                    <h2 class="max-w-xl mb-6 font-sans text-3xl font-bold leading-none tracking-tight sm:text-4xl md:mx-auto">
        <span class="relative inline-block">
            @include('layouts.partials.svg.logo-pattern')
          <span class="relative text-primary">{{ __('index.alfa-h-1') }}</span>
        </span>
                        {{ __('index.alfa-h-2') }}
                    </h2>
                    <p class="text-base md:text-lg">
                        {{ __('index.alfa-desc') }}
                    </p>
                </div>
                <div class="flex flex-col justify-center items-center w-full mb-8 md:flex-row">
                    <smpl-button
                        cls="inline-flex items-center justify-center h-12 px-6 mr-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-blue-500 hover:bg-blue-700 focus:shadow-outline focus:outline-none"
                        txt="{{__('index.alfa-button')}}"
                    ></smpl-button>
                </div>
                <p class="max-w-md mb-10 text-xs text-gray-300 sm:text-sm md:text-center">
                    {{ __('index.alfa-txt') }}
                </p>
            </div>
        </div>
    </div>
</div>

