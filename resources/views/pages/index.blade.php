@extends('app')

@section('head')
@component('components.meta')

  @slot('title') {{ __('seo.index-title') }} @endslot
  @slot('description') {{ __('seo.index-desc') }} @endslot
  @slot('image') /meta/index.png @endslot
  @slot('date') {{ $date }} @endslot

@endcomponent
@endsection

@section('main')

    @include('layouts.partials.index.alfa')
    @include('layouts.partials.index.dev-vectors')
    @include('layouts.partials.index.services')
    @include('layouts.partials.index.numbers')
    @include('layouts.partials.index.accents')
    @include('layouts.partials.index.steps')
    @include('layouts.partials.index.portfolios')
    @include('layouts.partials.index.faq')

    {{--Schema--}}
    @component('layouts.schema.faq',['faqs'=>$faqs])@endcomponent

@endsection
