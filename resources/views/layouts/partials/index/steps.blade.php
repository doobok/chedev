<div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
    <div class="grid gap-6 row-gap-10 lg:grid-cols-2">
        <div class="lg:py-6 lg:pr-16">
            <h2 class="max-w-md mb-6 font-sans text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-none xl:max-w-lg">
                {{ __('index.step-h') }}
            </h2>
            <div class="flex">
                <div class="flex flex-col items-center mr-4">
                    <div>
                        <div class="flex items-center justify-center w-10 h-10 border bg-primary rounded-full">
                            <svg class="w-4 text-white" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" viewBox="0 0 24 24">
                                <line fill="none" stroke-miterlimit="10" x1="12" y1="2" x2="12" y2="22"></line>
                                <polyline fill="none" stroke-miterlimit="10" points="19,15 12,22 5,15"></polyline>
                            </svg>
                        </div>
                    </div>
                    <div class="w-px h-full bg-gray-300"></div>
                </div>
                <div class="pt-1 pb-8">
                    <p class="mb-2 text-lg font-bold">{{ __('index.step') }} 1</p>
                    <p class="text-gray-700">
                        {{ __('index.step-1') }}
                    </p>
                </div>
            </div>
            <div class="flex">
                <div class="flex flex-col items-center mr-4">
                    <div>
                        <div class="flex items-center justify-center w-10 h-10 border bg-secondary rounded-full">
                            <svg class="w-4 text-white" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" viewBox="0 0 24 24">
                                <line fill="none" stroke-miterlimit="10" x1="12" y1="2" x2="12" y2="22"></line>
                                <polyline fill="none" stroke-miterlimit="10" points="19,15 12,22 5,15"></polyline>
                            </svg>
                        </div>
                    </div>
                    <div class="w-px h-full bg-gray-300"></div>
                </div>
                <div class="pt-1 pb-8">
                    <p class="mb-2 text-lg font-bold">{{ __('index.step') }} 2</p>
                    <p class="text-gray-700">
                        {{ __('index.step-2') }}
                    </p>
                </div>
            </div>
            <div class="flex">
                <div class="flex flex-col items-center mr-4">
                    <div>
                        <div class="flex items-center justify-center w-10 h-10 border bg-secondary rounded-full">
                            <svg class="w-4 text-white" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" viewBox="0 0 24 24">
                                <line fill="none" stroke-miterlimit="10" x1="12" y1="2" x2="12" y2="22"></line>
                                <polyline fill="none" stroke-miterlimit="10" points="19,15 12,22 5,15"></polyline>
                            </svg>
                        </div>
                    </div>
                    <div class="w-px h-full bg-gray-300"></div>
                </div>
                <div class="pt-1 pb-8">
                    <p class="mb-2 text-lg font-bold">{{ __('index.step') }} 3</p>
                    <p class="text-gray-700">
                        {{ __('index.step-3') }}
                    </p>
                </div>
            </div>
            <div class="flex">
                <div class="flex flex-col items-center mr-4">
                    <div>
                        <div class="flex items-center justify-center w-10 h-10 border bg-secondary rounded-full">
                            <svg class="w-4 text-white" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" viewBox="0 0 24 24">
                                <line fill="none" stroke-miterlimit="10" x1="12" y1="2" x2="12" y2="22"></line>
                                <polyline fill="none" stroke-miterlimit="10" points="19,15 12,22 5,15"></polyline>
                            </svg>
                        </div>
                    </div>
                    <div class="w-px h-full bg-gray-300"></div>
                </div>
                <div class="pt-1 pb-8">
                    <p class="mb-2 text-lg font-bold">{{ __('index.step') }} 4</p>
                    <p class="text-gray-700">
                        {{ __('index.step-4') }}
                    </p>
                </div>
            </div>
            <div class="flex">
                <div class="flex flex-col items-center mr-4">
                    <div>
                        <div class="flex items-center justify-center bg-green-600 w-10 h-10 border rounded-full">
                            <svg class="w-6 text-white" stroke="currentColor" viewBox="0 0 24 24">
                                <polyline fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                          stroke-miterlimit="10" points="6,12 10,16 18,8"></polyline>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="pt-1">
                    <p class="mb-2 text-lg font-bold">{{ __('index.success') }}</p>
                    <p class="text-gray-700"></p>
                </div>
            </div>
        </div>
        <div class="relative">
            <img
                class="inset-0 object-right-top object-bottom w-full h-96 lg:absolute lg:h-full"
{{--                class="inset-0 object-cover object-bottom w-full rounded shadow-lg h-96 lg:absolute lg:h-full"--}}
                src="/svg/steps.svg"
                alt=""
            />
        </div>
    </div>
</div>
