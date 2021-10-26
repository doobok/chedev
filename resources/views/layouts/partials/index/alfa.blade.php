<div class="flex flex-col items-center justify-center px-4 pt-16 mx-auto sm:max-w-xl md:max-w-full lg:pt-32 md:px-0">
    <div class="flex flex-col items-center max-w-2xl md:px-8">
        <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
            <h2 class="max-w-xl mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
        <span class="relative inline-block">
            @include('layouts.partials.svg.chips-pattern')
          <span class="relative text-primary">Заказать сайт,</span>
        </span>
                продвижение, оптимизация
            </h2>
            <p class="text-base text-gray-700 md:text-lg">
                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque rem aperiam, eaque
                ipsa quae.
            </p>
        </div>
        <form class="flex flex-col items-center w-full mb-4 md:flex-row">
            {{--            <input--}}
            {{--                name="name"--}}
            {{--                placeholder="Name"--}}
            {{--                required=""--}}
            {{--                type="text"--}}
            {{--                class="flex-grow w-full h-12 px-4 mb-3 transition duration-200 bg-white border border-gray-300 rounded shadow-sm appearance-none md:mr-2 md:mb-0 focus:border-primary focus:outline-none focus:shadow-outline"--}}
            {{--            />--}}
            <input
                placeholder="Email"
                required=""
                type="text"
                class="flex-grow w-full h-12 px-4 mb-3 transition duration-200 bg-white border border-gray-300 rounded shadow-sm appearance-none md:mr-2 md:mb-0 focus:border-primary focus:outline-none focus:shadow-outline"
            />
            <button
                type="submit"
                class="inline-flex items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md md:w-auto bg-primary hover:bg-primary-50 focus:shadow-outline focus:outline-none"
            >
                Subscribe
            </button>
        </form>
        <p class="max-w-md mb-10 text-xs text-gray-600 sm:text-sm md:text-center">
            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.
        </p>
    </div>
    <img src="/svg/dev.svg"
         class="w-full max-w-screen-sm mx-auto md:w-auto lg:max-w-screen-md" alt=""/>
</div>
