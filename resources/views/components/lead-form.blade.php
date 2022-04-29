<div class="relative flex flex-col-reverse px-4 py-8 mx-auto lg:block lg:flex-col lg:py-12 xl:py-16 md:px-8 sm:max-w-xl md:max-w-full">
    <div class="z-0 flex justify-center h-full -mx-4 overflow-hidden lg:pt-16 lg:pb-16 lg:pr-8 xl:pr-0 lg:w-1/2 lg:absolute lg:justify-end lg:bottom-0 lg:left-0 lg:items-center">
        <img src="/consultation.svg" class="object-cover object-right w-full h-auto" alt="" />
    </div>
    <div class="relative flex justify-end max-w-xl mx-auto xl:pr-32 lg:max-w-screen-xl">
        <div class="mb-2 lg:pr-5 lg:max-w-lg lg:mb-0">
            <div class="max-w-xl mb-6">
                <div>
                    <p class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-white uppercase rounded-full bg-green-400">
                        {{config('app.name')}}
                    </p>
                </div>
                <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-none">
                    {{__('site.module-consultation-h1')}}<br class="hidden md:block" />
                    {{__('site.module-consultation-h2')}}
                    <span class="inline-block text-blue-500">online</span>
                </h2>
                <p class="text-base text-gray-700 md:text-lg">
                    {{__('site.module-consultation-t')}}
                </p>
            </div>
            <lead-form-stroke
                clr="green"
                txt="module service page"
            ></lead-form-stroke>
        </div>
    </div>
</div>
