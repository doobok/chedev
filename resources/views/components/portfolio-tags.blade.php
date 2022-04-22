{{--<div class="flex flex-wrap">--}}
    @foreach($tags as $tag)
        <a href="{{ route('page', 'portfolio?tag=' . $tag->slug) }}"
           class="inline-flex p-1 mr-1 text-xs text-white transition duration-200 rounded shadow-md hover:no-underline hover:text-white
       bg-{{$tag->getTranslatedAttribute('color')}}-500 hover:bg-{{$tag->getTranslatedAttribute('color')}}-700 focus:shadow-outline focus:outline-none">
            {{$tag->getTranslatedAttribute('name')}}
        </a>
    @endforeach
{{--</div>--}}

