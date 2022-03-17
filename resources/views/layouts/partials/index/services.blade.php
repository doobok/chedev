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
                    <p class="font-semibold text-sm text-white mt-2">
                        Корпоративный сайт
                    </p>
                </div>

            @endfor

        </div>
    </div>
</div>
