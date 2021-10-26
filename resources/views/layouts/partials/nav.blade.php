<div>
    <div class="bg-primary">
        <div class="px-4 py-6 mx-auto lg:py-8 sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
            <div class="relative flex items-center justify-between lg:justify-center lg:space-x-16">
                <ul class="flex items-center hidden space-x-8 lg:flex">
                    <li><a href="/" aria-label="Our product" title="Our product"
                           class="font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-secondary-100">Послуги</a>
                    </li>
                    <li><a href="/" aria-label="Our product" title="Our product"
                           class="font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-secondary-100">Портфоліо</a>
                    </li>
                    <li><a href="/" aria-label="Product pricing" title="Product pricing"
                           class="font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-secondary-100">Pricing</a>
                    </li>
                </ul>
                <a href="/" aria-label="Company" title="Company"
                   class="inline-flex items-center text-white w-36 -mt-10 lg:-mt-9">
                    @include('layouts.partials.svg.logo')
                </a>
                <ul class="flex items-center hidden space-x-8 lg:flex">
                    <li><a href="/" aria-label="About us" title="About us"
                           class="font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-secondary-100">About
                            us</a></li>
                    <li><a href="/" aria-label="Sign in" title="Sign in"
                           class="font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-secondary-100">Sign
                            in</a></li>
                    <li><a href="/" aria-label="Sign up" title="Sign up"
                           class="font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-secondary-100">Sign
                            up</a></li>
                </ul>
                <div class="block lg:hidden">
                        <button class="absolute top-0 right-0"
                                onclick="toggleNavbar('collapse-navbar')"
                        >
                            <img src="/svg/menu.svg"
                                 class="h-7 w-auto">
                        </button>
                </div>
            </div>
        </div>
    </div>

    <div id="collapse-navbar"
         class="fixed hidden inset-0 bg-black bg-opacity-80 z-50 min-h-screen lg:hidden transition-opacity duration-300 opacity-100 pointer-events-auto">
        <div class="w-2/3 md:w-1/3 bg-primary min-h-screen absolute right-0 shadow py-4 px-8">
            <button class="absolute top-0 right-0 mt-4 mr-4"
                    onclick="toggleNavbar('collapse-navbar')"
            >
                <img src="/svg/cross.svg"
                     class="h-7 w-auto mt-2 text-white">
            </button>


            <ul class="flex flex-col mt-8">

                {{--                @if ($blocks)--}}
                {{--                    @foreach ($blocks as $block)--}}
                {{--                        @if ($block['menu'])--}}
                {{--                            <li class="py-2">--}}
                {{--                                <a href="#" v-scroll-to="'#{{$block['name']}}'"--}}
                {{--                                   onclick="toggleNavbar('collapse-navbar')"--}}
                {{--                                   class="font-header font-semibold text-white uppercase pt-0.5 cursor-pointer">--}}
                {{--                                    {{__('site.menu-' . $block['name'])}}--}}
                {{--                                </a>--}}
                {{--                            </li>--}}
                {{--                        @endif--}}
                {{--                    @endforeach--}}
                {{--                @endif--}}


            </ul>
        </div>
    </div>
</div>


