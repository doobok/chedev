<div class="bg-primary-50">
    <div class="relative px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
        <h2 class="max-w-md mb-6 font-sans text-3xl font-bold tracking-tight text-gray-200 sm:text-4xl sm:leading-none xl:max-w-lg">
            Каталог услуг
        </h2>
        <div class="absolute inset-x-0 top-0 items-center justify-center hidden overflow-hidden md:flex md:inset-y-0">
            <svg viewBox="0 0 88 88" class="w-full max-w-screen-xl text-gray-800">
                <circle fill="currentColor" fill-opacity="0.4" cx="44" cy="44" r="15.5"></circle>
                <circle fill-opacity="0.1" fill="currentColor" cx="44" cy="44" r="44"></circle>
                <circle fill-opacity="0.1" fill="currentColor" cx="44" cy="44" r="37.5"></circle>
                <circle fill-opacity="0.1" fill="currentColor" cx="44" cy="44" r="29.5"></circle>
                <circle fill-opacity="0.1" fill="currentColor" cx="44" cy="44" r="22.5"></circle>
            </svg>
        </div>

        <div class="relative grid gap-5 sm:grid-cols-2 lg:grid-cols-4">
            @for($i=0;  $i < 8 ; $i++)
                <div class="text-center">
                    <div
                        class="px-10 py-20 text-center transition duration-300 transform bg-local rounded shadow-2xl hover:scale-105 md:shadow-xl hover:shadow-2xl"
                        style="background-image: url('/landing.jpg')">
                    </div>
                    <p class="font-semibold text-sm text-white">
                        Корпоративный сайт
                    </p>
                </div>

            @endfor


            {{--            <div--}}
            {{--                class="px-10 py-20 text-center transition duration-300 transform bg-gray-900 rounded shadow-2xl hover:scale-105 md:shadow-xl hover:shadow-2xl">--}}
            {{--                <p class="font-semibold text-gray-200">--}}
            {{--                    Well, the way they make shows is--}}
            {{--                </p>--}}
            {{--            </div>--}}
            {{--            <div--}}
            {{--                class="px-10 py-20 text-center transition duration-300 transform bg-gray-900 rounded shadow-2xl hover:scale-105 md:shadow-xl hover:shadow-2xl">--}}
            {{--                <p class="font-semibold text-gray-200">--}}
            {{--                    Some don't, become nothing again--}}
            {{--                </p>--}}
            {{--            </div>--}}
            {{--            <div--}}
            {{--                class="px-10 py-20 text-center transition duration-300 transform bg-gray-900 rounded shadow-2xl hover:scale-105 md:shadow-xl hover:shadow-2xl">--}}
            {{--                <p class="font-semibold text-gray-200">--}}
            {{--                    Pommy ipsum smeg head whizz morris--}}
            {{--                </p>--}}
            {{--            </div>--}}
            {{--            <div--}}
            {{--                class="px-10 py-20 text-center transition duration-300 transform bg-gray-900 rounded shadow-2xl hover:scale-105 md:shadow-xl hover:shadow-2xl">--}}
            {{--                <p class="font-semibold text-gray-200">--}}
            {{--                    Taking the mick middle class bog--}}
            {{--                </p>--}}
            {{--            </div>--}}
            {{--            <div--}}
            {{--                class="px-10 py-20 text-center transition duration-300 transform bg-gray-900 rounded shadow-2xl hover:scale-105 md:shadow-xl hover:shadow-2xl">--}}
            {{--                <p class="font-semibold text-gray-200">--}}
            {{--                    Sportacus andrew weatherall goose--}}
            {{--                </p>--}}
            {{--            </div>--}}
            {{--            <div--}}
            {{--                class="px-10 py-20 text-center transition duration-300 transform bg-gray-900 rounded shadow-2xl hover:scale-105 md:shadow-xl hover:shadow-2xl">--}}
            {{--                <p class="font-semibold text-gray-200">--}}
            {{--                    Semi beard cream bun disaster alpha--}}
            {{--                </p>--}}
            {{--            </div>--}}
            {{--            <div--}}
            {{--                class="px-10 py-20 text-center transition duration-300 transform bg-gray-900 rounded shadow-2xl hover:scale-105 md:shadow-xl hover:shadow-2xl">--}}
            {{--                <p class="font-semibold text-gray-200">--}}
            {{--                    Bro ipsum dolor sit amet gaper dart--}}
            {{--                </p>--}}
            {{--            </div>--}}
        </div>
    </div>
</div>


<div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
    <div class="grid grid-cols-2 row-gap-8 md:grid-cols-4">
        <div class="text-center md:border-r">
            <h6 class="text-4xl font-bold lg:text-5xl xl:text-6xl">144K</h6>
            <p class="text-sm font-medium tracking-widest text-gray-800 uppercase lg:text-base">
                Downloads
            </p>
        </div>
        <div class="text-center md:border-r">
            <h6 class="text-4xl font-bold lg:text-5xl xl:text-6xl">12.9K</h6>
            <p class="text-sm font-medium tracking-widest text-gray-800 uppercase lg:text-base">
                Subscribers
            </p>
        </div>
        <div class="text-center md:border-r">
            <h6 class="text-4xl font-bold lg:text-5xl xl:text-6xl">48.3K</h6>
            <p class="text-sm font-medium tracking-widest text-gray-800 uppercase lg:text-base">
                Users
            </p>
        </div>
        <div class="text-center">
            <h6 class="text-4xl font-bold lg:text-5xl xl:text-6xl">24.5K</h6>
            <p class="text-sm font-medium tracking-widest text-gray-800 uppercase lg:text-base">
                Cookies
            </p>
        </div>
    </div>
</div>


<div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
    <div class="flex flex-col mb-6 lg:flex-row md:mb-10">
        <div class="lg:w-1/2">
            <h2 class="max-w-md mb-6 font-sans text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-none xl:max-w-lg">
                To conquer the space you must trust.
            </h2>
        </div>
        <div class="lg:w-1/2">
            <p class="text-base text-gray-700 md:text-lg">
                For those who have seen the Earth from space, and for the hundreds and perhaps thousands more who will,
                the experience most certainly changes your perspective.
            </p>
        </div>
    </div>
    <div class="grid gap-8 row-gap-10 sm:grid-cols-2 lg:grid-cols-4">
        <div>
            <div class="flex items-center justify-center w-16 h-16 mb-4 rounded-full bg-indigo-50">
                <svg class="w-7 h-7 text-primary" stroke-linecap="round" stroke-width="2"
                     viewBox="0 0 24 24">
                    <circle cx="11" cy="13" fill="none" r="9" stroke="currentColor"></circle>
                    <path
                        d=" M21.955,18.005c1.089,2.145,1.378,3.816,0.622,4.572C20.92,24.234,14.799,20.799,9,15S-0.234,3.08,1.423,1.423 C2.18,0.666,3.853,0.956,6,2.047"
                        stroke="currentColor" fill="none"></path>
                </svg>
            </div>
            <h6 class="mb-2 font-semibold leading-5">Our planet</h6>
            <p class="mb-3 text-sm text-gray-900">
                We choose to go to the moon, not because it's easy, but because it's hard.
            </p>
            <ul class="mb-4 -ml-1 space-y-2">
                <li class="flex items-start">
          <span class="mr-1">
            <svg class="w-5 h-5 mt-px text-primary" stroke="currentColor" viewBox="0 0 52 52">
              <polygon stroke-width="4" stroke-linecap="round" stroke-linejoin="round" fill="none"
                       points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
            </svg>
          </span>
                    Earth
                </li>
                <li class="flex items-start">
          <span class="mr-1">
            <svg class="w-5 h-5 mt-px text-primary" stroke="currentColor" viewBox="0 0 52 52">
              <polygon stroke-width="4" stroke-linecap="round" stroke-linejoin="round" fill="none"
                       points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
            </svg>
          </span>
                    Space
                </li>
                <li class="flex items-start">
          <span class="mr-1">
            <svg class="w-5 h-5 mt-px text-primary" stroke="currentColor" viewBox="0 0 52 52">
              <polygon stroke-width="4" stroke-linecap="round" stroke-linejoin="round" fill="none"
                       points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
            </svg>
          </span>
                    Humans
                </li>
            </ul>
            <a href="/" aria-label=""
               class="inline-flex items-center font-semibold transition-colors duration-200 text-primary hover:text-purple-800">Learn
                more</a>
        </div>
        <div>
            <div class="flex items-center justify-center w-16 h-16 mb-4 rounded-full bg-indigo-50">
                <svg class="w-7 h-7 text-primary" viewBox="0 0 24 24" stroke-linecap="round">
                    <path d="M2,10C2,5.029,6.47,1,12,1c5.379,0,10,4.029,10,9S15.712,23,12,23C8.212,23,2,14.971,2,10Z"
                          fill="none" stroke-width="2" stroke="currentColor"></path>
                    <path
                        d="M5,9a6.529,6.529,0,0,1,4.393,1.607C10.705,11.92,10,15,10,15a6.59,6.59,0,0,1-3.436-1.564C5.022,11.894,5,9,5,9Z"
                        fill="none" stroke-width="1.5" stroke="currentColor"></path>
                    <path
                        d="M19,9a6.523,6.523,0,0,0-4.392,1.608C13.3,11.92,14,15,14,15a6.59,6.59,0,0,0,3.436-1.564C18.978,11.894,19,9,19,9Z"
                        fill="none" stroke-width="1.5" stroke="currentColor"></path>
                </svg>
            </div>
            <h6 class="mb-2 font-semibold leading-5">Another life</h6>
            <p class="mb-3 text-sm text-gray-900">
                There can be no thought of finishing for "aiming for the stars".
            </p>
            <ul class="mb-4 -ml-1 space-y-2">
                <li class="flex items-start">
          <span class="mr-1">
            <svg class="w-5 h-5 mt-px text-primary" stroke="currentColor" viewBox="0 0 52 52">
              <polygon stroke-width="4" stroke-linecap="round" stroke-linejoin="round" fill="none"
                       points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
            </svg>
          </span>
                    Life
                </li>
                <li class="flex items-start">
          <span class="mr-1">
            <svg class="w-5 h-5 mt-px text-primary" stroke="currentColor" viewBox="0 0 52 52">
              <polygon stroke-width="4" stroke-linecap="round" stroke-linejoin="round" fill="none"
                       points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
            </svg>
          </span>
                    Aliens
                </li>
                <li class="flex items-start">
          <span class="mr-1">
            <svg class="w-5 h-5 mt-px text-primary" stroke="currentColor" viewBox="0 0 52 52">
              <polygon stroke-width="4" stroke-linecap="round" stroke-linejoin="round" fill="none"
                       points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
            </svg>
          </span>
                    Shrek
                </li>
            </ul>
            <a href="/" aria-label=""
               class="inline-flex items-center font-semibold transition-colors duration-200 text-primary hover:text-purple-800">Learn
                more</a>
        </div>
        <div>
            <div class="flex items-center justify-center w-16 h-16 mb-4 rounded-full bg-indigo-50">
                <svg class="w-7 h-7 text-primary" stroke-linecap="round" stroke-width="2"
                     viewBox="0 0 24 24">
                    <path d="M8.291,18.709,4.182,22.818c-.419.419-1.43.086-2.258-.742s-1.161-1.839-.742-2.258l4.11-4.11"
                          fill="none" stroke="currentColor"></path>
                    <ellipse cx="19.078" cy="4.922" fill="none" rx="2.5" ry="4.95" stroke="currentColor"
                             transform="translate(2.107 14.932) rotate(-45)"></ellipse>
                    <path d="M9.185,9.815,5.3,13.7c-.7.7-.143,2.382,1.238,3.762S9.6,19.4,10.3,18.7l3.885-3.885"
                          fill="none" stroke="currentColor"></path>
                    <path
                        d="M15.578,1.422,9.422,7.578c-.976.976-.2,3.335,1.732,5.268s4.292,2.708,5.268,1.732l6.156-6.156"
                        fill="none" stroke="currentColor"></path>
                </svg>
            </div>
            <h6 class="mb-2 font-semibold leading-5">Explore space</h6>
            <p class="mb-3 text-sm text-gray-900">
                We are all connected to the universe atomically, strong bonds.
            </p>
            <ul class="mb-4 -ml-1 space-y-2">
                <li class="flex items-start">
          <span class="mr-1">
            <svg class="w-5 h-5 mt-px text-primary" stroke="currentColor" viewBox="0 0 52 52">
              <polygon stroke-width="4" stroke-linecap="round" stroke-linejoin="round" fill="none"
                       points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
            </svg>
          </span>
                    Infinity
                </li>
                <li class="flex items-start">
          <span class="mr-1">
            <svg class="w-5 h-5 mt-px text-primary" stroke="currentColor" viewBox="0 0 52 52">
              <polygon stroke-width="4" stroke-linecap="round" stroke-linejoin="round" fill="none"
                       points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
            </svg>
          </span>
                    Stars
                </li>
                <li class="flex items-start">
          <span class="mr-1">
            <svg class="w-5 h-5 mt-px text-primary" stroke="currentColor" viewBox="0 0 52 52">
              <polygon stroke-width="4" stroke-linecap="round" stroke-linejoin="round" fill="none"
                       points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
            </svg>
          </span>
                    Black Holes
                </li>
            </ul>
            <a href="/" aria-label=""
               class="inline-flex items-center font-semibold transition-colors duration-200 text-primary hover:text-purple-800">Learn
                more</a>
        </div>
        <div>
            <div class="flex items-center justify-center w-16 h-16 mb-4 rounded-full bg-indigo-50">
                <svg class="w-7 h-7 text-primary" stroke-linecap="round" stroke-width="2"
                     viewBox="0 0 24 24">
                    <path d="M8,13l3,3,9.379-9.379a2.122,2.122,0,0,0,0-3h0a2.122,2.122,0,0,0-3,0Z" fill="none"
                          stroke="currentColor"></path>
                    <polyline fill="none" points="10 11 10 6 6 2 3 5 7 9" stroke="currentColor"></polyline>
                    <polyline fill="none" points="15 12 15 17 19 21 22 18 18 14" stroke="currentColor"></polyline>
                    <path d="M8,23a7,7,0,0,1-7-7" fill="none" stroke="currentColor"></path>
                    <path d="M8,19a3,3,0,0,1-3-3" fill="none" stroke="currentColor"></path>
                </svg>
            </div>
            <h6 class="mb-2 font-semibold leading-5">First contact</h6>
            <p class="mb-3 text-sm text-gray-900">
                For those who have seen the Earth from space or in dreams.
            </p>
            <ul class="mb-4 -ml-1 space-y-2">
                <li class="flex items-start">
          <span class="mr-1">
            <svg class="w-5 h-5 mt-px text-primary" stroke="currentColor" viewBox="0 0 52 52">
              <polygon stroke-width="4" stroke-linecap="round" stroke-linejoin="round" fill="none"
                       points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
            </svg>
          </span>
                    Listen
                </li>
                <li class="flex items-start">
          <span class="mr-1">
            <svg class="w-5 h-5 mt-px text-primary" stroke="currentColor" viewBox="0 0 52 52">
              <polygon stroke-width="4" stroke-linecap="round" stroke-linejoin="round" fill="none"
                       points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
            </svg>
          </span>
                    Communicate
                </li>
                <li class="flex items-start">
          <span class="mr-1">
            <svg class="w-5 h-5 mt-px text-primary" stroke="currentColor" viewBox="0 0 52 52">
              <polygon stroke-width="4" stroke-linecap="round" stroke-linejoin="round" fill="none"
                       points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
            </svg>
          </span>
                    Run
                </li>
            </ul>
            <a href="/" aria-label=""
               class="inline-flex items-center font-semibold transition-colors duration-200 text-primary hover:text-purple-800">Learn
                more</a>
        </div>
    </div>
</div>


<div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
    <div class="grid gap-6 row-gap-10 lg:grid-cols-2">
        <div class="lg:py-6 lg:pr-16">
            <div class="flex">
                <div class="flex flex-col items-center mr-4">
                    <div>
                        <div class="flex items-center justify-center w-10 h-10 border rounded-full">
                            <svg class="w-4 text-gray-600" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" viewBox="0 0 24 24">
                                <line fill="none" stroke-miterlimit="10" x1="12" y1="2" x2="12" y2="22"></line>
                                <polyline fill="none" stroke-miterlimit="10" points="19,15 12,22 5,15"></polyline>
                            </svg>
                        </div>
                    </div>
                    <div class="w-px h-full bg-gray-300"></div>
                </div>
                <div class="pt-1 pb-8">
                    <p class="mb-2 text-lg font-bold">Step 1</p>
                    <p class="text-gray-700">
                        All recipes are written using certain conventions, which define the characteristics of common
                        ingredients. The rules vary from place to place.
                    </p>
                </div>
            </div>
            <div class="flex">
                <div class="flex flex-col items-center mr-4">
                    <div>
                        <div class="flex items-center justify-center w-10 h-10 border rounded-full">
                            <svg class="w-4 text-gray-600" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" viewBox="0 0 24 24">
                                <line fill="none" stroke-miterlimit="10" x1="12" y1="2" x2="12" y2="22"></line>
                                <polyline fill="none" stroke-miterlimit="10" points="19,15 12,22 5,15"></polyline>
                            </svg>
                        </div>
                    </div>
                    <div class="w-px h-full bg-gray-300"></div>
                </div>
                <div class="pt-1 pb-8">
                    <p class="mb-2 text-lg font-bold">Step 2</p>
                    <p class="text-gray-700">
                        The first mate and his Skipper too will do their very best to make the others comfortable in
                        their tropic island nest. Michael Knight a young loner.
                    </p>
                </div>
            </div>
            <div class="flex">
                <div class="flex flex-col items-center mr-4">
                    <div>
                        <div class="flex items-center justify-center w-10 h-10 border rounded-full">
                            <svg class="w-4 text-gray-600" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" viewBox="0 0 24 24">
                                <line fill="none" stroke-miterlimit="10" x1="12" y1="2" x2="12" y2="22"></line>
                                <polyline fill="none" stroke-miterlimit="10" points="19,15 12,22 5,15"></polyline>
                            </svg>
                        </div>
                    </div>
                    <div class="w-px h-full bg-gray-300"></div>
                </div>
                <div class="pt-1 pb-8">
                    <p class="mb-2 text-lg font-bold">Step 3</p>
                    <p class="text-gray-700">
                        Tell them I hate them. Is the Space Pope reptilian!? Tell her she looks thin. Hello, little man.
                        I will destroy you!
                    </p>
                </div>
            </div>
            <div class="flex">
                <div class="flex flex-col items-center mr-4">
                    <div>
                        <div class="flex items-center justify-center w-10 h-10 border rounded-full">
                            <svg class="w-4 text-gray-600" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" viewBox="0 0 24 24">
                                <line fill="none" stroke-miterlimit="10" x1="12" y1="2" x2="12" y2="22"></line>
                                <polyline fill="none" stroke-miterlimit="10" points="19,15 12,22 5,15"></polyline>
                            </svg>
                        </div>
                    </div>
                    <div class="w-px h-full bg-gray-300"></div>
                </div>
                <div class="pt-1 pb-8">
                    <p class="mb-2 text-lg font-bold">Step 4</p>
                    <p class="text-gray-700">
                        If one examines precultural libertarianism, one is faced with a choice: either accept
                        rationalism or conclude that context is a product.
                    </p>
                </div>
            </div>
            <div class="flex">
                <div class="flex flex-col items-center mr-4">
                    <div>
                        <div class="flex items-center justify-center w-10 h-10 border rounded-full">
                            <svg class="w-6 text-gray-600" stroke="currentColor" viewBox="0 0 24 24">
                                <polyline fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                          stroke-miterlimit="10" points="6,12 10,16 18,8"></polyline>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="pt-1">
                    <p class="mb-2 text-lg font-bold">Success</p>
                    <p class="text-gray-700"></p>
                </div>
            </div>
        </div>
        <div class="relative">
            <img
                class="inset-0 object-cover object-bottom w-full rounded shadow-lg h-96 lg:absolute lg:h-full"
                src="https://images.pexels.com/photos/3184287/pexels-photo-3184287.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260"
                alt=""
            />
        </div>
    </div>
</div>


<div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
    <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
        <div>
            <p class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-teal-900 uppercase rounded-full bg-teal-400">
                Core Team
            </p>
        </div>
        <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
      <span class="relative inline-block">
        @include('layouts.partials.svg.chips-pattern')
        <span class="relative">Welcome</span>
      </span>
            our talented team of professionals
        </h2>
        <p class="text-base text-gray-700 md:text-lg">
            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque rem aperiam, eaque
            ipsa quae.
        </p>
    </div>
    <div class="grid gap-10 sm:grid-cols-2 lg:grid-cols-4">
        <div>
            <div
                class="relative overflow-hidden transition duration-300 transform rounded shadow-lg lg:hover:-translate-y-2 hover:shadow-2xl">
                <img class="object-cover w-full h-56 md:h-64 xl:h-80"
                     src="https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=3&amp;h=750&amp;w=1260"
                     alt="Person"/>
                <div
                    class="absolute inset-0 flex flex-col justify-center px-5 py-4 text-center transition-opacity duration-300 bg-black bg-opacity-75 opacity-0 hover:opacity-100">
                    <p class="mb-1 text-lg font-bold text-gray-100">Oliver Aguilerra</p>
                    <p class="mb-4 text-xs text-gray-100">Product Manager</p>
                    <p class="mb-4 text-xs tracking-wide text-gray-400">
                        Vincent Van Gogh’s most popular painting, The Starry Night.
                    </p>
                    <div class="flex items-center justify-center space-x-3">
                        <a href="/" class="text-white transition-colors duration-300 hover:text-secondary">
                            <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
                                <path
                                    d="M24,4.6c-0.9,0.4-1.8,0.7-2.8,0.8c1-0.6,1.8-1.6,2.2-2.7c-1,0.6-2,1-3.1,1.2c-0.9-1-2.2-1.6-3.6-1.6 c-2.7,0-4.9,2.2-4.9,4.9c0,0.4,0,0.8,0.1,1.1C7.7,8.1,4.1,6.1,1.7,3.1C1.2,3.9,1,4.7,1,5.6c0,1.7,0.9,3.2,2.2,4.1 C2.4,9.7,1.6,9.5,1,9.1c0,0,0,0,0,0.1c0,2.4,1.7,4.4,3.9,4.8c-0.4,0.1-0.8,0.2-1.3,0.2c-0.3,0-0.6,0-0.9-0.1c0.6,2,2.4,3.4,4.6,3.4 c-1.7,1.3-3.8,2.1-6.1,2.1c-0.4,0-0.8,0-1.2-0.1c2.2,1.4,4.8,2.2,7.5,2.2c9.1,0,14-7.5,14-14c0-0.2,0-0.4,0-0.6 C22.5,6.4,23.3,5.5,24,4.6z"
                                ></path>
                            </svg>
                        </a>
                        <a href="/" class="text-white transition-colors duration-300 hover:text-secondary">
                            <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
                                <path
                                    d="M22,0H2C0.895,0,0,0.895,0,2v20c0,1.105,0.895,2,2,2h11v-9h-3v-4h3V8.413c0-3.1,1.893-4.788,4.659-4.788 c1.325,0,2.463,0.099,2.795,0.143v3.24l-1.918,0.001c-1.504,0-1.795,0.715-1.795,1.763V11h4.44l-1,4h-3.44v9H22c1.105,0,2-0.895,2-2 V2C24,0.895,23.105,0,22,0z"
                                ></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div
                class="relative overflow-hidden transition duration-300 transform rounded shadow-lg lg:hover:-translate-y-2 hover:shadow-2xl">
                <img class="object-cover w-full h-56 md:h-64 xl:h-80"
                     src="https://images.pexels.com/photos/2381069/pexels-photo-2381069.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260"
                     alt="Person"/>
                <div
                    class="absolute inset-0 flex flex-col justify-center px-5 py-4 text-center transition-opacity duration-300 bg-black bg-opacity-75 opacity-0 hover:opacity-100">
                    <p class="mb-1 text-lg font-bold text-gray-100">Marta Clermont</p>
                    <p class="mb-4 text-xs text-gray-100">Design Team Lead</p>
                    <p class="mb-4 text-xs tracking-wide text-gray-400">
                        Amet I love liquorice jujubes pudding croissant I love pudding.
                    </p>
                    <div class="flex items-center justify-center space-x-3">
                        <a href="/" class="text-white transition-colors duration-300 hover:text-secondary">
                            <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
                                <path
                                    d="M24,4.6c-0.9,0.4-1.8,0.7-2.8,0.8c1-0.6,1.8-1.6,2.2-2.7c-1,0.6-2,1-3.1,1.2c-0.9-1-2.2-1.6-3.6-1.6 c-2.7,0-4.9,2.2-4.9,4.9c0,0.4,0,0.8,0.1,1.1C7.7,8.1,4.1,6.1,1.7,3.1C1.2,3.9,1,4.7,1,5.6c0,1.7,0.9,3.2,2.2,4.1 C2.4,9.7,1.6,9.5,1,9.1c0,0,0,0,0,0.1c0,2.4,1.7,4.4,3.9,4.8c-0.4,0.1-0.8,0.2-1.3,0.2c-0.3,0-0.6,0-0.9-0.1c0.6,2,2.4,3.4,4.6,3.4 c-1.7,1.3-3.8,2.1-6.1,2.1c-0.4,0-0.8,0-1.2-0.1c2.2,1.4,4.8,2.2,7.5,2.2c9.1,0,14-7.5,14-14c0-0.2,0-0.4,0-0.6 C22.5,6.4,23.3,5.5,24,4.6z"
                                ></path>
                            </svg>
                        </a>
                        <a href="/" class="text-white transition-colors duration-300 hover:text-secondary">
                            <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
                                <path
                                    d="M22,0H2C0.895,0,0,0.895,0,2v20c0,1.105,0.895,2,2,2h11v-9h-3v-4h3V8.413c0-3.1,1.893-4.788,4.659-4.788 c1.325,0,2.463,0.099,2.795,0.143v3.24l-1.918,0.001c-1.504,0-1.795,0.715-1.795,1.763V11h4.44l-1,4h-3.44v9H22c1.105,0,2-0.895,2-2 V2C24,0.895,23.105,0,22,0z"
                                ></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div
                class="relative overflow-hidden transition duration-300 transform rounded shadow-lg lg:hover:-translate-y-2 hover:shadow-2xl">
                <img class="object-cover w-full h-56 md:h-64 xl:h-80"
                     src="https://images.pexels.com/photos/2379004/pexels-photo-2379004.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260"
                     alt="Person"/>
                <div
                    class="absolute inset-0 flex flex-col justify-center px-5 py-4 text-center transition-opacity duration-300 bg-black bg-opacity-75 opacity-0 hover:opacity-100">
                    <p class="mb-1 text-lg font-bold text-gray-100">Anthony Geek</p>
                    <p class="mb-4 text-xs text-gray-100">CTO, Lorem Inc.</p>
                    <p class="mb-4 text-xs tracking-wide text-gray-400">
                        Apple pie macaroon toffee jujubes pie tart cookie caramels.
                    </p>
                    <div class="flex items-center justify-center space-x-3">
                        <a href="/" class="text-white transition-colors duration-300 hover:text-secondary">
                            <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
                                <path
                                    d="M24,4.6c-0.9,0.4-1.8,0.7-2.8,0.8c1-0.6,1.8-1.6,2.2-2.7c-1,0.6-2,1-3.1,1.2c-0.9-1-2.2-1.6-3.6-1.6 c-2.7,0-4.9,2.2-4.9,4.9c0,0.4,0,0.8,0.1,1.1C7.7,8.1,4.1,6.1,1.7,3.1C1.2,3.9,1,4.7,1,5.6c0,1.7,0.9,3.2,2.2,4.1 C2.4,9.7,1.6,9.5,1,9.1c0,0,0,0,0,0.1c0,2.4,1.7,4.4,3.9,4.8c-0.4,0.1-0.8,0.2-1.3,0.2c-0.3,0-0.6,0-0.9-0.1c0.6,2,2.4,3.4,4.6,3.4 c-1.7,1.3-3.8,2.1-6.1,2.1c-0.4,0-0.8,0-1.2-0.1c2.2,1.4,4.8,2.2,7.5,2.2c9.1,0,14-7.5,14-14c0-0.2,0-0.4,0-0.6 C22.5,6.4,23.3,5.5,24,4.6z"
                                ></path>
                            </svg>
                        </a>
                        <a href="/" class="text-white transition-colors duration-300 hover:text-secondary">
                            <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
                                <path
                                    d="M22,0H2C0.895,0,0,0.895,0,2v20c0,1.105,0.895,2,2,2h11v-9h-3v-4h3V8.413c0-3.1,1.893-4.788,4.659-4.788 c1.325,0,2.463,0.099,2.795,0.143v3.24l-1.918,0.001c-1.504,0-1.795,0.715-1.795,1.763V11h4.44l-1,4h-3.44v9H22c1.105,0,2-0.895,2-2 V2C24,0.895,23.105,0,22,0z"
                                ></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div
                class="relative overflow-hidden transition duration-300 transform rounded shadow-lg lg:hover:-translate-y-2 hover:shadow-2xl">
                <img class="object-cover w-full h-56 md:h-64 xl:h-80"
                     src="https://images.pexels.com/photos/3747435/pexels-photo-3747435.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260"
                     alt="Person"/>
                <div
                    class="absolute inset-0 flex flex-col justify-center px-5 py-4 text-center transition-opacity duration-300 bg-black bg-opacity-75 opacity-0 hover:opacity-100">
                    <p class="mb-1 text-lg font-bold text-gray-100">Alice Melbourne</p>
                    <p class="mb-4 text-xs text-gray-100">Human Resources</p>
                    <p class="mb-4 text-xs tracking-wide text-gray-400">
                        Lorizzle ipsum bling bling sit amizzle, consectetuer adipiscing elit.
                    </p>
                    <div class="flex items-center justify-center space-x-3">
                        <a href="/" class="text-white transition-colors duration-300 hover:text-secondary">
                            <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
                                <path
                                    d="M24,4.6c-0.9,0.4-1.8,0.7-2.8,0.8c1-0.6,1.8-1.6,2.2-2.7c-1,0.6-2,1-3.1,1.2c-0.9-1-2.2-1.6-3.6-1.6 c-2.7,0-4.9,2.2-4.9,4.9c0,0.4,0,0.8,0.1,1.1C7.7,8.1,4.1,6.1,1.7,3.1C1.2,3.9,1,4.7,1,5.6c0,1.7,0.9,3.2,2.2,4.1 C2.4,9.7,1.6,9.5,1,9.1c0,0,0,0,0,0.1c0,2.4,1.7,4.4,3.9,4.8c-0.4,0.1-0.8,0.2-1.3,0.2c-0.3,0-0.6,0-0.9-0.1c0.6,2,2.4,3.4,4.6,3.4 c-1.7,1.3-3.8,2.1-6.1,2.1c-0.4,0-0.8,0-1.2-0.1c2.2,1.4,4.8,2.2,7.5,2.2c9.1,0,14-7.5,14-14c0-0.2,0-0.4,0-0.6 C22.5,6.4,23.3,5.5,24,4.6z"
                                ></path>
                            </svg>
                        </a>
                        <a href="/" class="text-white transition-colors duration-300 hover:text-secondary">
                            <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
                                <path
                                    d="M22,0H2C0.895,0,0,0.895,0,2v20c0,1.105,0.895,2,2,2h11v-9h-3v-4h3V8.413c0-3.1,1.893-4.788,4.659-4.788 c1.325,0,2.463,0.099,2.795,0.143v3.24l-1.918,0.001c-1.504,0-1.795,0.715-1.795,1.763V11h4.44l-1,4h-3.44v9H22c1.105,0,2-0.895,2-2 V2C24,0.895,23.105,0,22,0z"
                                ></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div
                class="relative overflow-hidden transition duration-300 transform rounded shadow-lg lg:hover:-translate-y-2 hover:shadow-2xl">
                <img class="object-cover w-full h-56 md:h-64 xl:h-80"
                     src="https://images.pexels.com/photos/3785077/pexels-photo-3785077.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;w=500"
                     alt="Person"/>
                <div
                    class="absolute inset-0 flex flex-col justify-center px-5 py-4 text-center transition-opacity duration-300 bg-black bg-opacity-75 opacity-0 hover:opacity-100">
                    <p class="mb-1 text-lg font-bold text-gray-100">Martin Garix</p>
                    <p class="mb-4 text-xs text-gray-100">Good guy</p>
                    <p class="mb-4 text-xs tracking-wide text-gray-400">
                        Bacon ipsum dolor sit amet salami jowl corned beef, andouille flank.
                    </p>
                    <div class="flex items-center justify-center space-x-3">
                        <a href="/" class="text-white transition-colors duration-300 hover:text-secondary">
                            <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
                                <path
                                    d="M24,4.6c-0.9,0.4-1.8,0.7-2.8,0.8c1-0.6,1.8-1.6,2.2-2.7c-1,0.6-2,1-3.1,1.2c-0.9-1-2.2-1.6-3.6-1.6 c-2.7,0-4.9,2.2-4.9,4.9c0,0.4,0,0.8,0.1,1.1C7.7,8.1,4.1,6.1,1.7,3.1C1.2,3.9,1,4.7,1,5.6c0,1.7,0.9,3.2,2.2,4.1 C2.4,9.7,1.6,9.5,1,9.1c0,0,0,0,0,0.1c0,2.4,1.7,4.4,3.9,4.8c-0.4,0.1-0.8,0.2-1.3,0.2c-0.3,0-0.6,0-0.9-0.1c0.6,2,2.4,3.4,4.6,3.4 c-1.7,1.3-3.8,2.1-6.1,2.1c-0.4,0-0.8,0-1.2-0.1c2.2,1.4,4.8,2.2,7.5,2.2c9.1,0,14-7.5,14-14c0-0.2,0-0.4,0-0.6 C22.5,6.4,23.3,5.5,24,4.6z"
                                ></path>
                            </svg>
                        </a>
                        <a href="/" class="text-white transition-colors duration-300 hover:text-secondary">
                            <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
                                <path
                                    d="M22,0H2C0.895,0,0,0.895,0,2v20c0,1.105,0.895,2,2,2h11v-9h-3v-4h3V8.413c0-3.1,1.893-4.788,4.659-4.788 c1.325,0,2.463,0.099,2.795,0.143v3.24l-1.918,0.001c-1.504,0-1.795,0.715-1.795,1.763V11h4.44l-1,4h-3.44v9H22c1.105,0,2-0.895,2-2 V2C24,0.895,23.105,0,22,0z"
                                ></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div
                class="relative overflow-hidden transition duration-300 transform rounded shadow-lg lg:hover:-translate-y-2 hover:shadow-2xl">
                <img class="object-cover w-full h-56 md:h-64 xl:h-80"
                     src="https://images.pexels.com/photos/3931603/pexels-photo-3931603.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260"
                     alt="Person"/>
                <div
                    class="absolute inset-0 flex flex-col justify-center px-5 py-4 text-center transition-opacity duration-300 bg-black bg-opacity-75 opacity-0 hover:opacity-100">
                    <p class="mb-1 text-lg font-bold text-gray-100">Andrew Larkin</p>
                    <p class="mb-4 text-xs text-gray-100">Backend Developer</p>
                    <p class="mb-4 text-xs tracking-wide text-gray-400">
                        Moonfish, steelhead, lamprey southern flounder tadpole fish bigeye.
                    </p>
                    <div class="flex items-center justify-center space-x-3">
                        <a href="/" class="text-white transition-colors duration-300 hover:text-secondary">
                            <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
                                <path
                                    d="M24,4.6c-0.9,0.4-1.8,0.7-2.8,0.8c1-0.6,1.8-1.6,2.2-2.7c-1,0.6-2,1-3.1,1.2c-0.9-1-2.2-1.6-3.6-1.6 c-2.7,0-4.9,2.2-4.9,4.9c0,0.4,0,0.8,0.1,1.1C7.7,8.1,4.1,6.1,1.7,3.1C1.2,3.9,1,4.7,1,5.6c0,1.7,0.9,3.2,2.2,4.1 C2.4,9.7,1.6,9.5,1,9.1c0,0,0,0,0,0.1c0,2.4,1.7,4.4,3.9,4.8c-0.4,0.1-0.8,0.2-1.3,0.2c-0.3,0-0.6,0-0.9-0.1c0.6,2,2.4,3.4,4.6,3.4 c-1.7,1.3-3.8,2.1-6.1,2.1c-0.4,0-0.8,0-1.2-0.1c2.2,1.4,4.8,2.2,7.5,2.2c9.1,0,14-7.5,14-14c0-0.2,0-0.4,0-0.6 C22.5,6.4,23.3,5.5,24,4.6z"
                                ></path>
                            </svg>
                        </a>
                        <a href="/" class="text-white transition-colors duration-300 hover:text-secondary">
                            <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
                                <path
                                    d="M22,0H2C0.895,0,0,0.895,0,2v20c0,1.105,0.895,2,2,2h11v-9h-3v-4h3V8.413c0-3.1,1.893-4.788,4.659-4.788 c1.325,0,2.463,0.099,2.795,0.143v3.24l-1.918,0.001c-1.504,0-1.795,0.715-1.795,1.763V11h4.44l-1,4h-3.44v9H22c1.105,0,2-0.895,2-2 V2C24,0.895,23.105,0,22,0z"
                                ></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div
                class="relative overflow-hidden transition duration-300 transform rounded shadow-lg lg:hover:-translate-y-2 hover:shadow-2xl">
                <img class="object-cover w-full h-56 md:h-64 xl:h-80"
                     src="https://images.pexels.com/photos/774909/pexels-photo-774909.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=3&amp;h=750&amp;w=1260"
                     alt="Person"/>
                <div
                    class="absolute inset-0 flex flex-col justify-center px-5 py-4 text-center transition-opacity duration-300 bg-black bg-opacity-75 opacity-0 hover:opacity-100">
                    <p class="mb-1 text-lg font-bold text-gray-100">Sophie Denmo</p>
                    <p class="mb-4 text-xs text-gray-100">Designer</p>
                    <p class="mb-4 text-xs tracking-wide text-gray-400">
                        Veggies sunt bona vobis, proinde vos postulo esse magis grape pea.
                    </p>
                    <div class="flex items-center justify-center space-x-3">
                        <a href="/" class="text-white transition-colors duration-300 hover:text-secondary">
                            <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
                                <path
                                    d="M24,4.6c-0.9,0.4-1.8,0.7-2.8,0.8c1-0.6,1.8-1.6,2.2-2.7c-1,0.6-2,1-3.1,1.2c-0.9-1-2.2-1.6-3.6-1.6 c-2.7,0-4.9,2.2-4.9,4.9c0,0.4,0,0.8,0.1,1.1C7.7,8.1,4.1,6.1,1.7,3.1C1.2,3.9,1,4.7,1,5.6c0,1.7,0.9,3.2,2.2,4.1 C2.4,9.7,1.6,9.5,1,9.1c0,0,0,0,0,0.1c0,2.4,1.7,4.4,3.9,4.8c-0.4,0.1-0.8,0.2-1.3,0.2c-0.3,0-0.6,0-0.9-0.1c0.6,2,2.4,3.4,4.6,3.4 c-1.7,1.3-3.8,2.1-6.1,2.1c-0.4,0-0.8,0-1.2-0.1c2.2,1.4,4.8,2.2,7.5,2.2c9.1,0,14-7.5,14-14c0-0.2,0-0.4,0-0.6 C22.5,6.4,23.3,5.5,24,4.6z"
                                ></path>
                            </svg>
                        </a>
                        <a href="/" class="text-white transition-colors duration-300 hover:text-secondary">
                            <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
                                <path
                                    d="M22,0H2C0.895,0,0,0.895,0,2v20c0,1.105,0.895,2,2,2h11v-9h-3v-4h3V8.413c0-3.1,1.893-4.788,4.659-4.788 c1.325,0,2.463,0.099,2.795,0.143v3.24l-1.918,0.001c-1.504,0-1.795,0.715-1.795,1.763V11h4.44l-1,4h-3.44v9H22c1.105,0,2-0.895,2-2 V2C24,0.895,23.105,0,22,0z"
                                ></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div
                class="relative overflow-hidden transition duration-300 transform rounded shadow-lg lg:hover:-translate-y-2 hover:shadow-2xl">
                <img class="object-cover w-full h-56 md:h-64 xl:h-80"
                     src="https://images.pexels.com/photos/3931553/pexels-photo-3931553.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260"
                     alt="Person"/>
                <div
                    class="absolute inset-0 flex flex-col justify-center px-5 py-4 text-center transition-opacity duration-300 bg-black bg-opacity-75 opacity-0 hover:opacity-100">
                    <p class="mb-1 text-lg font-bold text-gray-100">Benedict Caro</p>
                    <p class="mb-4 text-xs text-gray-100">Frontend Developer</p>
                    <p class="mb-4 text-xs tracking-wide text-gray-400">
                        I love cheese, especially airedale queso. Cheese and biscuits halloumi.
                    </p>
                    <div class="flex items-center justify-center space-x-3">
                        <a href="/" class="text-white transition-colors duration-300 hover:text-secondary">
                            <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
                                <path
                                    d="M24,4.6c-0.9,0.4-1.8,0.7-2.8,0.8c1-0.6,1.8-1.6,2.2-2.7c-1,0.6-2,1-3.1,1.2c-0.9-1-2.2-1.6-3.6-1.6 c-2.7,0-4.9,2.2-4.9,4.9c0,0.4,0,0.8,0.1,1.1C7.7,8.1,4.1,6.1,1.7,3.1C1.2,3.9,1,4.7,1,5.6c0,1.7,0.9,3.2,2.2,4.1 C2.4,9.7,1.6,9.5,1,9.1c0,0,0,0,0,0.1c0,2.4,1.7,4.4,3.9,4.8c-0.4,0.1-0.8,0.2-1.3,0.2c-0.3,0-0.6,0-0.9-0.1c0.6,2,2.4,3.4,4.6,3.4 c-1.7,1.3-3.8,2.1-6.1,2.1c-0.4,0-0.8,0-1.2-0.1c2.2,1.4,4.8,2.2,7.5,2.2c9.1,0,14-7.5,14-14c0-0.2,0-0.4,0-0.6 C22.5,6.4,23.3,5.5,24,4.6z"
                                ></path>
                            </svg>
                        </a>
                        <a href="/" class="text-white transition-colors duration-300 hover:text-secondary">
                            <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
                                <path
                                    d="M22,0H2C0.895,0,0,0.895,0,2v20c0,1.105,0.895,2,2,2h11v-9h-3v-4h3V8.413c0-3.1,1.893-4.788,4.659-4.788 c1.325,0,2.463,0.099,2.795,0.143v3.24l-1.918,0.001c-1.504,0-1.795,0.715-1.795,1.763V11h4.44l-1,4h-3.44v9H22c1.105,0,2-0.895,2-2 V2C24,0.895,23.105,0,22,0z"
                                ></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
    <div class="max-w-xl sm:mx-auto lg:max-w-2xl">
        <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
            <div>
                <p class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-teal-900 uppercase rounded-full bg-teal-400">
                    Brand new
                </p>
            </div>
            <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
        <span class="relative inline-block">
          @include('layouts.partials.svg.chips-pattern')
          <span class="relative">The2</span>
        </span>
                quick, brown fox jumps over a lazy dog
            </h2>
            <p class="text-base text-gray-700 md:text-lg">
                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque rem aperiam, eaque
                ipsa quae.
            </p>
        </div>
    </div>
    <div class="max-w-screen-xl sm:mx-auto">
        <div class="grid grid-cols-1 gap-16 row-gap-8 lg:grid-cols-2">
            <div class="space-y-8">
                <div>
                    <p class="mb-4 text-xl font-medium">
                        The quick, brown fox jumps over a lazy dog?
                    </p>
                    <p class="text-gray-700">
                        Space, the final frontier. These are the voyages of the Starship Enterprise. Its five-year
                        mission: to explore strange new worlds.<br/>
                        <br/>
                        Many say exploration is part of our destiny, but it’s actually our duty to future generations.
                    </p>
                </div>
                <div>
                    <p class="mb-4 text-xl font-medium">
                        The first mate and his Skipper too will do?
                    </p>
                    <p class="text-gray-700">
                        Well, the way they make shows is, they make one show. That show's called a pilot.<br/>
                        <br/>
                        Then they show that show to the people who make shows, and on the strength of that one show they
                        decide if they're going to make more shows. Some pilots get picked and become television
                        programs.Some don't, become nothing. She
                        starred in one of the ones that became nothing.
                    </p>
                </div>
                <div>
                    <p class="mb-4 text-xl font-medium">Is the Space Pope reptilian!?</p>
                    <p class="text-gray-700">
                        A flower in my garden, a mystery in my panties. Heart attack never stopped old Big Bear. I
                        didn't even know we were calling him Big Bear.
                    </p>
                </div>
            </div>
            <div class="space-y-8">
                <div>
                    <p class="mb-4 text-xl font-medium">How much money you got on you?</p>
                    <p class="text-gray-700">
                        The first mate and his Skipper too will do their very best to make the others comfortable in
                        their tropic island nest.<br/>
                        <br/>
                        Michael Knight a young loner on a crusade to champion the cause of the innocent. The helpless.
                        The powerless in a world of criminals who operate above the law. Here he comes Here comes Speed
                        Racer. He's a demon on wheels.
                    </p>
                </div>
                <div>
                    <p class="mb-4 text-xl font-medium">
                        Galaxies Orion's sword globular star cluster?
                    </p>
                    <p class="text-gray-700">
                        A business big enough that it could be listed on the NASDAQ goes belly up. Disappears!<br/>
                        <br/>
                        It ceases to exist without me. No, you clearly don't know who you're talking to, so let me clue
                        you in.
                    </p>
                </div>
                <div>
                    <p class="mb-4 text-xl font-medium">
                        When has justice ever been as simple as a rule book?
                    </p>
                    <p class="text-gray-700">
                        This is not about revenge. This is about justice. A lot of things can change in twelve years,
                        Admiral. Well, that's certainly good to know. About four years. I got tired of hearing how young
                        I looked.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>



