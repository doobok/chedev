<div class="relative flex flex-col-reverse px-4 py-16 mx-auto lg:block lg:flex-col lg:py-32 xl:py-48 md:px-8 sm:max-w-xl md:max-w-full">
    <div class="z-0 flex justify-center h-full -mx-4 overflow-hidden lg:pt-24 lg:pb-16 lg:pr-8 xl:pr-0 lg:w-1/2 lg:absolute lg:justify-end lg:bottom-0 lg:left-0 lg:items-center">
        <img src="/consultation.svg" class="object-cover object-right w-full h-auto" alt="" />
    </div>
    <div class="relative flex justify-end max-w-xl mx-auto xl:pr-32 lg:max-w-screen-xl">
        <div class="mb-16 lg:pr-5 lg:max-w-lg lg:mb-0">
            <div class="max-w-xl mb-6">
                <div>
                    <p class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-white uppercase rounded-full bg-green-400">
                        {{config('app.name')}}
                    </p>
                </div>
                <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-none">
                    Получить бесплатную<br class="hidden md:block" />
                    консультацию
                    <span class="inline-block text-blue-500">online</span>
                </h2>
                <p class="text-base text-gray-700 md:text-lg">
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae. explicabo.
                </p>
            </div>
{{--            <form>--}}
{{--                <div class="flex flex-col md:flex-row">--}}
{{--                    <input--}}
{{--                        placeholder="Name"--}}
{{--                        required=""--}}
{{--                        type="text"--}}
{{--                        class="flex-grow w-full h-12 px-4 mb-2 transition duration-200 bg-white border border-gray-300 rounded shadow-sm appearance-none md:mr-2 focus:border-purple-400 focus:outline-none focus:shadow-outline"--}}
{{--                    />--}}
{{--                    <input--}}
{{--                        placeholder="Email"--}}
{{--                        required=""--}}
{{--                        type="text"--}}
{{--                        class="flex-grow w-full h-12 px-4 mb-3 transition duration-200 bg-white border border-gray-300 rounded shadow-sm appearance-none md:mb-0 focus:border-purple-400 focus:outline-none focus:shadow-outline"--}}
{{--                    />--}}
{{--                </div>--}}
{{--                <div class="flex items-center mt-4">--}}
{{--                    <button--}}
{{--                        class="inline-flex items-center justify-center h-12 px-6 mr-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-green-500 hover:bg-green-700 focus:shadow-outline focus:outline-none"--}}
{{--                    >--}}
{{--                        Получить консультацию--}}
{{--                    </button>--}}


{{--                </div>--}}
{{--            </form>--}}
            <lead-form-stroke
                clr="green"
                txt="Получить консультацию"
            ></lead-form-stroke>
        </div>
    </div>
</div>
