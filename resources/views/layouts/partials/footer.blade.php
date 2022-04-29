<div class="bg-gray-900">
    <div class="px-4 pt-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
        <div class="grid row-gap-10 mb-8 lg:grid-cols-6">
            <div class="grid grid-cols-2 gap-5 row-gap-8 lg:col-span-4 md:grid-cols-4">
                <div>
                    <p class="font-medium tracking-wide text-gray-300">Category</p>
                    <ul class="mt-2 space-y-2">
                        <li>
                            <a href="/"
                               class="text-gray-500 transition-colors duration-300 hover:text-purple-200">News</a>
                        </li>
                        <li>
                            <a href="/"
                               class="text-gray-500 transition-colors duration-300 hover:text-purple-200">World</a>
                        </li>
                        <li>
                            <a href="/"
                               class="text-gray-500 transition-colors duration-300 hover:text-purple-200">Games</a>
                        </li>
                        <li>
                            <a href="/"
                               class="text-gray-500 transition-colors duration-300 hover:text-purple-200">References</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <p class="font-medium tracking-wide text-gray-300">Apples</p>
                    <ul class="mt-2 space-y-2">
                        <li>
                            <a href="/"
                               class="text-gray-500 transition-colors duration-300 hover:text-purple-200">Web</a>
                        </li>
                        <li>
                            <a href="/"
                               class="text-gray-500 transition-colors duration-300 hover:text-purple-200">eCommerce</a>
                        </li>
                        <li>
                            <a href="/"
                               class="text-gray-500 transition-colors duration-300 hover:text-purple-200">Business</a>
                        </li>
                        <li>
                            <a href="/"
                               class="text-gray-500 transition-colors duration-300 hover:text-purple-200">Entertainment</a>
                        </li>
                        <li>
                            <a href="/"
                               class="text-gray-500 transition-colors duration-300 hover:text-purple-200">Portfolio</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <p class="font-medium tracking-wide text-gray-300">Cherry</p>
                    <ul class="mt-2 space-y-2">
                        <li>
                            <a href="/"
                               class="text-gray-500 transition-colors duration-300 hover:text-purple-200">Media</a>
                        </li>
                        <li>
                            <a href="/"
                               class="text-gray-500 transition-colors duration-300 hover:text-purple-200">Brochure</a>
                        </li>
                        <li>
                            <a href="/"
                               class="text-gray-500 transition-colors duration-300 hover:text-purple-200">Nonprofit</a>
                        </li>
                        <li>
                            <a href="/"
                               class="text-gray-500 transition-colors duration-300 hover:text-purple-200">Educational</a>
                        </li>
                        <li>
                            <a href="/"
                               class="text-gray-500 transition-colors duration-300 hover:text-purple-200">Projects</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <p class="font-medium tracking-wide text-gray-300">Business</p>
                    <ul class="mt-2 space-y-2">
                        <li>
                            <a href="/"
                               class="text-gray-500 transition-colors duration-300 hover:text-purple-200">Infopreneur</a>
                        </li>
                        <li>
                            <a href="/"
                               class="text-gray-500 transition-colors duration-300 hover:text-purple-200">Personal</a>
                        </li>
                        <li>
                            <a href="/"
                               class="text-gray-500 transition-colors duration-300 hover:text-purple-200">Wiki</a>
                        </li>
                        <li>
                            <a href="/"
                               class="text-gray-500 transition-colors duration-300 hover:text-purple-200">Forum</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="md:max-w-md lg:col-span-2">
                <span class="text-base font-medium tracking-wide text-gray-300">{{__('site.footer-consultation-h')}}</span>
                <div class="flex flex-col mt-4 md:flex-row">
                    <smpl-button
                        cls="inline-flex items-center justify-center h-12 px-6 mr-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-blue-500 hover:bg-blue-700 focus:shadow-outline focus:outline-none"
                        txt="{{__('site.footer-consultation-b')}}"
                    ></smpl-button>
                </div>
                <p class="mt-4 text-sm text-gray-500">
                    {{__('site.footer-consultation-t')}}
                </p>
            </div>
        </div>
        <div class="flex flex-col justify-between pt-5 pb-10 border-t border-gray-800 sm:flex-row">
            <p class="text-gray-500 text-sm text-center sm:text-left">© 2021 - {{date("Y")}} Copyright —
                {{config('app.name')}}
                |
                <a href="/policy" class="sm:ml-auto sm:mt-0 mt-2 sm:w-auto w-full sm:text-left text-center text-gray-500 text-sm">Политика конфиденциальности</a>
            </p>
            <div class="h-6">
                @include('layouts.partials.social-buttons')
            </div>

        </div>
    </div>
</div>
