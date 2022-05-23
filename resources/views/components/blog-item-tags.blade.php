<div class="flex flex-wrap text-gray-400 space-x-2">
    @foreach($tags as $tag)
        <a href="{{ route('page', 'blog?tag=' . $tag->slug) }}"
           class="mb-1 hover:text-green-500 transition-colors duration-300 hover:no-underline">
            #{{$tag->getTranslatedAttribute('name')}}
        </a>
    @endforeach
</div>
