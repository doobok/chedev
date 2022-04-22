<div class="px-4 py-8 mx-auto lg:py-10 xl:py-12 md:px-8 sm:max-w-xl md:max-w-full">
    <h4>{{$similar_title}}</h4>
    <div class="flex flex-wrap">
        @foreach($items as $item)
            <div class="w-full sm:w-1/2 p-3">
                <div class="border rounded-md">
                    <a href="{{ route($route , $item->slug) }}">
                        <img src="{{ Voyager::image( $item->image ) }}" class="object-cover w-full h-56 mb-5 bg-center rounded" alt="{{$item->getTranslatedAttribute('heading')}}" loading="lazy" />
                    </a>
                    <div class="px-4">
                        <h2 class="mb-2 text-lg font-semibold text-gray-900">
                            <a href="{{ route($route , $item->slug) }}" class="text-gray-900 hover:text-green-700">{{$item->getTranslatedAttribute('heading')}}</a>
                        </h2>
                        <div class="flex flex-wrap mb-3">
                            @component('components.portfolio-tags', ['tags'=>$item->tags])@endcomponent
                        </div>
                        <p class="mb-3 text-sm font-normal text-gray-500">
                            {{$item->getTranslatedAttribute('teaser')}}
                        </p>
                        <p class="mb-3 text-sm font-normal text-gray-500">
                            <a href="{{route('main-page')}}" class="font-medium text-gray-900 hover:text-green-700">{{ config('app.name') }}</a>
                            • {{ date('d-m-Y', strtotime($item->created_at)) }}
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
