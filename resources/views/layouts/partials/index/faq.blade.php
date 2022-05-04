<div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
    <div class="max-w-xl sm:mx-auto lg:max-w-2xl">
        <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
            <div>
                <p class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-white uppercase rounded-full bg-green-400">
                    {{ config('app.name') }}
                </p>
            </div>
            <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
                <span class="relative inline-block">
                  @include('layouts.partials.svg.logo-pattern')
                  <span class="relative text-primary">FAQ</span>
                </span>
                {{ __('index.faq') }}
            </h2>
            <p class="text-base text-gray-700 md:text-lg">
                {{ __('index.faq-desc') }}
            </p>
        </div>
    </div>
    <div class="max-w-screen-xl sm:mx-auto">
        <div class="grid grid-cols-1 gap-8 row-gap-6 lg:grid-cols-2">
                @foreach($faqs as $faq)
                <div class="bg-white rounded-md border shadow-md border-gray-100 p-3">
                    <p class="mb-4 text-xl font-medium">
                        {{$faq->getTranslatedAttribute('ask')}}
                    </p>
                    <div class="text-gray-700 text-sm space-y-2">
                        {!! $faq->getTranslatedAttribute('answer') !!}
                    </div>
                </div>
                @endforeach
        </div>
    </div>
</div>



