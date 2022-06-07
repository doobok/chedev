@if( app()->getLocale() == 'uk' )
    <link rel="alternate" href="{{config('app.url')}}/ru{{$_SERVER['REQUEST_URI']}}" hreflang="ru" />
@else
    <link rel="alternate" href="{{config('app.url')}}{{substr($_SERVER['REQUEST_URI'], 3)}}" hreflang="uk" />
@endif
<link rel="alternate" href="{{url()->full()}}" hreflang="{{app()->getLocale()}}" />
<link rel="canonical" href="{{url()->current()}}" />
