<div>
  <div class="w-full z-50 top-0 py-3 sm:py-5 absolute">
    <div class="container mx-auto flex justify-between items-center">
        <div>
            <a href="#" class="text-2xl text-white font-bold ml-2">
              {{config('app.name')}}
              {{-- <img src="/img/logo.png"
                   class="w-24 md:w-36 lg:w-48"
                   alt="{{config('app.name')}}"> --}}
            </a>
        </div>
        <div class="hidden lg:block">
            <ul class="flex items-center">


              @if ($menu)
                @foreach ($menu as $item)
                    <li class="group pl-6">
                        <span v-scroll-to="'#{{$item->slug}}'" class="text-sm font-semibold text-white uppercase pt-0.5 cursor-pointer">
                          {{$item->title}}
                        </span>
                        <span class="block w-full h-0.5 bg-transparent group-hover:bg-primary-500"></span>
                    </li>
                @endforeach
              @endif

            </ul>
        </div>
        <div class="block lg:hidden">
            <button class="absolute top-0 right-0 mt-4 mr-4"
              onclick="toggleNavbar('collapse-navbar')"
            >
            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-auto text-white" viewBox="0 0 24 24" fill="currentColor">
              <path d="M24 6h-24v-4h24v4zm0 4h-24v4h24v-4zm0 8h-24v4h24v-4z"/>
            </svg>
           </button>
        </div>
    </div>
  </div>

  <div id="collapse-navbar" class="fixed hidden inset-0 bg-gray-700 bg-opacity-90 z-50 min-h-screen lg:hidden transition-opacity opacity-100 pointer-events-auto">
    <div class="w-2/3 md:w-1/3 bg-primary-500 min-h-screen absolute right-0 shadow py-4 px-8">
        <button class="absolute top-0 right-0 mt-4 mr-4"
                onclick="toggleNavbar('collapse-navbar')"
                >
            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-auto text-white" viewBox="0 0 24 24" fill="currentColor">
              <path d="M24 20.188l-8.315-8.209 8.2-8.282-3.697-3.697-8.212 8.318-8.31-8.203-3.666 3.666 8.321 8.24-8.206 8.313 3.666 3.666 8.237-8.318 8.285 8.203z"/>
            </svg>
        </button>

        <ul class="flex flex-col mt-8">
          @if ($menu)
            @foreach ($menu as $item)
                <li class="py-2">
                  <a href="#" v-scroll-to="'#{{$item->slug}}'"
                    onclick="toggleNavbar('collapse-navbar')"
                    class="font-header font-semibold text-white uppercase pt-0.5 cursor-pointer">
                      {{$item->title}}
                  </a>
                </li>
            @endforeach
          @endif

        </ul>
    </div>
  </div>
</div>
