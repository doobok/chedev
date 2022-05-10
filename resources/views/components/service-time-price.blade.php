<h3>{{ __('bl.price-block-h') }}</h3>
{!! __('bl.price-block-txt', [
    'heading' => $page->getTranslatedAttribute('heading'),
    'price' => $page->price,
    'time' => $page->time,
]) !!}

<div class="flex justify-center my-8">
    <div class="w-full sm:w-1/2">
        <div class="p-8 bg-dark-100 rounded">
            <div class="mb-4 text-center">
                <p class="text-xl font-medium tracking-wide text-white">
                    {{$page->getTranslatedAttribute('heading')}}
                </p>
                <div class="flex items-center justify-center">
                    <p class="mr-2 text-5xl font-semibold text-white lg:text-6xl">
                        ${{$page->price}}
                    </p>
                    <p class="text-lg text-gray-500">/ {{$page->time}} {{ __('site.hours') }}*</p>
                </div>
            </div>
            <ul class="mb-8 space-y-2">
                @for($i=1; $i<=4; $i++)
                <li class="flex items-center">
                    <div class="mr-3">
                        <svg class="w-4 h-4 text-green-400" viewBox="0 0 24 24" stroke-linecap="round" stroke-width="2">
                            <polyline fill="none" stroke="currentColor" points="6,12 10,16 18,8"></polyline>
                            <circle cx="12" cy="12" fill="none" r="11" stroke="currentColor"></circle>
                        </svg>
                    </div>
                    <span class="font-medium text-sm text-gray-300">{{ __('bl.price-include-' . $i) }}</span>
                </li>
                @endfor

            </ul>
            <smpl-button
                cls="inline-flex items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-blue-500 hover:bg-blue-700 focus:shadow-outline focus:outline-none"
                txt="{{ __('bl.get-order-development') }}"
            ></smpl-button>

        </div>
        <div class="w-11/12 h-2 mx-auto bg-gray-900 rounded-b opacity-75"></div>
        <div class="w-10/12 h-2 mx-auto bg-gray-900 rounded-b opacity-50"></div>
        <div class="w-9/12 h-2 mx-auto bg-gray-900 rounded-b opacity-25"></div>
    </div>
</div>
<p class="text-sm italic">* {{ __('bl.price-block-callout') }}</p>
