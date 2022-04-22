<div id="comments" class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
    <h3>{{ __('site.blog-comment') }}</h3>
    <div class="grid gap-4 mx-auto grid-cols-1 lg:max-w-screen-lg">
        @for($i=0; $i<5; $i++)
            <div class="bg-gray-100 px-4 py-2 rounded shadow-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 mr-1 text-gray-600 rounded-full border-2 border-green-700 p-2" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 2c2.757 0 5 2.243 5 5.001 0 2.756-2.243 5-5 5s-5-2.244-5-5c0-2.758 2.243-5.001 5-5.001zm0-2c-3.866 0-7 3.134-7 7.001 0 3.865 3.134 7 7 7s7-3.135 7-7c0-3.867-3.134-7.001-7-7.001zm6.369 13.353c-.497.498-1.057.931-1.658 1.302 2.872 1.874 4.378 5.083 4.972 7.346h-19.387c.572-2.29 2.058-5.503 4.973-7.358-.603-.374-1.162-.811-1.658-1.312-4.258 3.072-5.611 8.506-5.611 10.669h24c0-2.142-1.44-7.557-5.631-10.647z"/>
                </svg>
                <div class="flex flex-col justify-center mt-2">
                    <p class="text-lg font-bold mb-1">Oliver Aguilerra</p>
                    <p class="text-sm tracking-wide text-gray-800">
                        Pommy ipsum bent as a nine bob note naff off biscuits nowt, a cuppa unhand me sir hadn't done it in donkey's years sod's law.
                    </p>

                </div>
                <a href="#" class="inline-flex p-1 mr-1 text-xs text-white hover:text-white transition duration-200 rounded shadow-md bg-gray-400 hover:bg-yellow-500 focus:shadow-outline focus:outline-none">
                    <div class="flex flex-row items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 mr-1" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 0l-6 22-8.129-7.239 7.802-8.234-10.458 7.227-7.215-1.754 24-12zm-15 16.668v7.332l3.258-4.431-3.258-2.901z"/>
                        </svg>
                        <span>Ответить</span>
                    </div>
                </a>
                <a href="#" class="inline-flex hover:no-underline p-1 mr-1 text-xs text-white hover:text-white transition duration-200 rounded shadow-md bg-red-400 hover:bg-red-500 focus:shadow-outline focus:outline-none">
                    <div class="flex flex-row items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 mr-1" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2.829l9.171 9.171-9.171 9.171-9.171-9.171 9.171-9.171zm0-2.829l-12 12 12 12 12-12-12-12zm3.787 14.462l-2.463-2.462 2.463-2.463-1.324-1.323-2.463 2.462-2.463-2.463-1.324 1.324 2.463 2.463-2.463 2.463 1.323 1.324 2.464-2.464 2.463 2.463 1.324-1.324z"/>
                        </svg>
                        <span>Пожаловаться</span>
                    </div>

                </a>
            </div>
        @endfor
    </div>
</div>
