<div>
    <div class="bg-primary">
        <div class="px-4 py-6 mx-auto lg:py-8 sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
            <div class="relative flex items-center justify-between lg:justify-center lg:space-x-16">
                <ul class="flex items-center hidden space-x-8 lg:flex text-sm">
                    <li><a href="{{route('page', 'services')}}" aria-label="{{__('site.services')}}" title="{{__('site.services')}}"
                           class="font-medium uppercase tracking-wide text-gray-100 transition-colors duration-200 hover:text-secondary-100">{{__('site.services')}}</a>
                    </li>
                    <li><a href="{{route('page', 'portfolio')}}" aria-label="{{__('site.portfolio')}}" title="{{__('site.portfolio')}}"
                           class="font-medium uppercase tracking-wide text-gray-100 transition-colors duration-200 hover:text-secondary-100">{{__('site.portfolio')}}</a>
                    </li>
                    <li><a href="{{route('page', 'blog')}}" aria-label="{{__('site.blog')}}" title="{{__('site.blog')}}"
                           class="font-medium uppercase tracking-wide text-gray-100 transition-colors duration-200 hover:text-secondary-100">{{__('site.blog')}}</a>
                    </li>
                </ul>
                <a href="{{route('main-page')}}" aria-label="{{config('app.name')}}" title="{{config('app.name')}}"
                   class="inline-flex items-center text-white w-36 -mt-10 lg:-mt-9">
                    @include('layouts.partials.svg.logo')
                </a>
                <ul class="flex items-center hidden space-x-8 lg:flex text-sm">
                    <li><a href="{{route('page', 'about-us')}}" aria-label="{{__('site.about-us')}}" title="{{__('site.about-us')}}"
                           class="font-medium uppercase tracking-wide text-gray-100 transition-colors duration-200 hover:text-secondary-100">{{__('site.about-us')}}</a>
                    </li>
                    <li><a href="{{route('page', 'prices')}}" aria-label="{{__('site.prices')}}" title="{{__('site.prices')}}"
                           class="font-medium uppercase tracking-wide text-gray-100 transition-colors duration-200 hover:text-secondary-100">{{__('site.prices')}}</a>
                    </li>
                    <li><a href="{{route('page', 'contacts')}}" aria-label="{{__('site.contacts')}}" title="{{__('site.contacts')}}"
                           class="font-medium uppercase tracking-wide text-gray-100 transition-colors duration-200 hover:text-secondary-100">{{__('site.contacts')}}</a>
                    </li>
                    <li>
                        <a
                            href="{{route('page', 'collaborate')}}" title="{{__('site.collaborate')}}"
                            class="inline-flex items-center justify-center h-8 px-4 tracking-wide text-white transition duration-200 rounded shadow-md bg-indigo-700 hover:bg-indigo-900 focus:shadow-outline focus:outline-none"
                        >
                            Collaborate
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8" viewBox="0 0 24 24" fill="currentColor"><path d="M12.152 18.614c.314.229.383.671.15.984l-.807 1.092c-.215.294-.682.374-.986.151-.314-.231-.383-.672-.152-.986l.809-1.092c.229-.31.67-.382.986-.149zm-4.929-1.046l.807-1.087c.23-.314.164-.755-.152-.987-.316-.232-.756-.163-.986.151l-.806 1.088c-.23.313-.163.756.151.987.298.218.768.146.986-.152zm2.516.158l-.805 1.086c-.231.315-.162.757.151.988.301.221.77.145.987-.151l.805-1.088c.231-.313.163-.755-.151-.987-.313-.23-.753-.163-.987.152zm3.563 2.117c-.128.302-.472.726-.707 1.044.155.08.309.113.451.113.542 0 .902-.511.415-.998l-.159-.159zm-4.986-3.157l-.812 1.096c-.23.314-.157.746.156.978.308.225.768.15.981-.143l.812-1.097c.232-.312.163-.755-.152-.986-.315-.23-.755-.161-.985.152zm12.746-.811l2.938-.781-1.583-6.094-2.979.896 1.624 5.979zm-2.482-5.322c-1.453.106-2.834-.429-4.351-1.212-.334-.172-.719-.312-1.095-.312-.346 0-.685.119-.969.441-1.024 1.161-1.619 2.187-2.839 2.898-.601.351.104 1.45 1.396.999.658-.231 1.55-.827 2.277-1.413.572-.461.914-.394 1.41.102.928.929 4.053 4.013 4.053 4.013.483-.298.95-.539 1.413-.746l-1.295-4.77zm-14.018-.657l-2.979-.896-1.583 6.094 2.938.781 1.624-5.979zm13.406 7.126c-.484-.535-3.737-3.733-4.315-4.31-.981.736-2.273 1.761-3.521 1.761-.943 0-1.752-.557-1.968-1.354-.173-.635.093-1.285.66-1.616.71-.414 1.181-.981 1.755-1.691-1.754-1.108-3.25.692-5.149.709l-1.273 4.685c.556.132 1.04.272 1.489.441l.44-.595c.792-1.081 2.444-.857 2.95.351.64.056 1.186.469 1.424 1.04.619.054 1.174.447 1.422 1.039.936.081 1.7.93 1.53 1.972l.654.654c.275.276.723.275.997 0 .276-.276.276-.723 0-.999l-1.264-1.265c-.069-.069-.069-.183.003-.252.069-.066.179-.065.247.002l1.523 1.524c.275.276.723.276.998 0 .276-.276.276-.722 0-.998l-1.875-1.876c-.072-.071-.069-.188.006-.255.069-.063.178-.062.243.005l2.025 2.025c.275.276.723.276.998 0 .276-.275.276-.721.001-.997zm-7.386-14.022l-.984.174.521 2.954.984-.174-.521-2.954zm3.82.174l-.984-.174-.521 2.954.986.174.519-2.954zm3.598 1.228l-.867-.5-1.5 2.598.867.5 1.5-2.598zm-11.133-.5l-.867.5 1.5 2.598.867-.5-1.5-2.598z"/></svg>
                        </a>
                    </li>

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


