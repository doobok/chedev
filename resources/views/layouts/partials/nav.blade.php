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
{{--                    <li><a href="{{route('page', 'about-us')}}" aria-label="{{__('site.about-us')}}" title="{{__('site.about-us')}}"--}}
{{--                           class="font-medium uppercase tracking-wide text-gray-100 transition-colors duration-200 hover:text-secondary-100">{{__('site.about-us')}}</a>--}}
{{--                    </li>--}}
{{--                    <li><a href="{{route('page', 'prices')}}" aria-label="{{__('site.prices')}}" title="{{__('site.prices')}}"--}}
{{--                           class="font-medium uppercase tracking-wide text-gray-100 transition-colors duration-200 hover:text-secondary-100">{{__('site.prices')}}</a>--}}
{{--                    </li>--}}
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

                <li class="py-2">
                    <a href="{{route('page', 'services')}}" title="{{__('site.services')}}"
                       class="font-header font-semibold text-white uppercase pt-0.5 cursor-pointer flex flex-nowrap">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 mr-3" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 18.94l-5.691 4.06c-3.072-2.289-5.724-3.023-6.581-3.311-.815-.274-1.343-.798-1.161-1.455.173-.627.802-.839 1.353-.839.488 0 1.241.145 1.664.3l-3.389-4.716c-1.247.123-2.195-.852-2.195-1.979 0-1.104.895-2 2-2s2 .896 2 2c0 .2-.038.39-.093.572l2.192 3.039c.13.182.382.224.563.094.182-.129.225-.382.095-.563l-.663-.929c1.151-.292 1.133-.286 1.233-.286.225 0 .439.107.572.295l.543.76c.129.182.382.224.563.094.182-.129.224-.382.095-.563l-.627-.878c1.123-.259 1.112-.25 1.196-.25.225 0 .439.107.573.295l.46.646c.13.182.382.224.564.094.182-.129.224-.382.094-.563l-.516-.724c.318-.059.482-.091.701-.091.833 0 1.347.527 1.916 1.326 1.47 2.054 1.062 3.503 2.539 5.572zm-8.015-8.233c-.154-3.177-2.77-5.707-5.985-5.707-3.314 0-6 2.686-6 6 0 2.972 2.161 5.432 4.997 5.91.229-.369.525-.688.89-.93l-.782-1.089c-1.775-.41-3.105-1.995-3.105-3.891 0-2.206 1.794-4 4-4s4 1.794 4 4l-.014.139 1.999-.432zm-7.424 8.156c-3.726-.68-6.561-3.944-6.561-7.863 0-4.411 3.589-8 8-8 4.168 0 7.597 3.205 7.964 7.278l.556-.12c.341-.063.635-.118 1.028-.118l.405.037c-.466-5.09-4.741-9.077-9.953-9.077-5.523 0-10 4.477-10 10 0 5.498 4.437 9.956 9.925 9.996-.834-.58-1.265-1.352-1.364-2.133z"/>
                        </svg>
                        {{__('site.services')}}
                    </a>
                </li>
                <li class="py-2">
                    <a href="{{route('page', 'portfolio')}}" title="{{__('site.portfolio')}}"
                       class="font-header font-semibold text-white uppercase pt-0.5 cursor-pointer flex flex-nowrap">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 mr-3" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M2 9l-1-7h5.694c1.265 1.583 1.327 2 3.306 2h13l-1 5h-4.193l-3.9-3-1.464 1.903 1.428 1.097h-1.971l-3.9-3-2.307 3h-3.693zm-2 2l2 11h20l2-11h-24z"/>
                        </svg>
                        {{__('site.portfolio')}}
                    </a>
                </li>
                <li class="py-2">
                    <a href="{{route('page', 'blog')}}" title="{{__('site.blog')}}"
                       class="font-header font-semibold text-white uppercase pt-0.5 cursor-pointer flex flex-nowrap">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 mr-3" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M14 19h-4c-.276 0-.5.224-.5.5s.224.5.5.5h4c.276 0 .5-.224.5-.5s-.224-.5-.5-.5zm0 2h-4c-.276 0-.5.224-.5.5s.224.5.5.5h4c.276 0 .5-.224.5-.5s-.224-.5-.5-.5zm.25 2h-4.5l1.188.782c.154.138.38.218.615.218h.895c.234 0 .461-.08.615-.218l1.187-.782zm3.75-13.799c0 3.569-3.214 5.983-3.214 8.799h-1.989c-.003-1.858.87-3.389 1.721-4.867.761-1.325 1.482-2.577 1.482-3.932 0-2.592-2.075-3.772-4.003-3.772-1.925 0-3.997 1.18-3.997 3.772 0 1.355.721 2.607 1.482 3.932.851 1.478 1.725 3.009 1.72 4.867h-1.988c0-2.816-3.214-5.23-3.214-8.799 0-3.723 2.998-5.772 5.997-5.772 3.001 0 6.003 2.051 6.003 5.772zm4-.691v1.372h-2.538c.02-.223.038-.448.038-.681 0-.237-.017-.464-.035-.69h2.535zm-10.648-6.553v-1.957h1.371v1.964c-.242-.022-.484-.035-.726-.035-.215 0-.43.01-.645.028zm-3.743 1.294l-1.04-1.94 1.208-.648 1.037 1.933c-.418.181-.822.401-1.205.655zm10.586 1.735l1.942-1.394.799 1.115-2.054 1.473c-.191-.43-.423-.827-.687-1.194zm-3.01-2.389l1.038-1.934 1.208.648-1.041 1.941c-.382-.254-.786-.473-1.205-.655zm-10.068 3.583l-2.054-1.472.799-1.115 1.942 1.393c-.264.366-.495.763-.687 1.194zm13.707 6.223l2.354.954-.514 1.271-2.425-.982c.21-.397.408-.812.585-1.243zm-13.108 1.155l-2.356 1.06-.562-1.251 2.34-1.052c.173.433.371.845.578 1.243zm-1.178-3.676h-2.538v-1.372h2.535c-.018.226-.035.454-.035.691 0 .233.018.458.038.681z"/>
                        </svg>
                        {{__('site.blog')}}
                    </a>
                </li>
                <li class="py-2">
                    <a href="{{route('page', 'contacts')}}" title="{{__('site.contacts')}}"
                       class="font-header font-semibold text-white uppercase pt-0.5 cursor-pointer flex flex-nowrap">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 mr-3" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M0 3v18h24v-18h-24zm6.623 7.929l-4.623 5.712v-9.458l4.623 3.746zm-4.141-5.929h19.035l-9.517 7.713-9.518-7.713zm5.694 7.188l3.824 3.099 3.83-3.104 5.612 6.817h-18.779l5.513-6.812zm9.208-1.264l4.616-3.741v9.348l-4.616-5.607z"/>
                        </svg>
                        {{__('site.contacts')}}
                    </a>
                </li>

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


