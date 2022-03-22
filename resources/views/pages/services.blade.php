@extends('app')

@section('head')
    @component('components.meta')

        @slot('title') services @endslot
        @slot('description') description @endslot
        @slot('image') /services.jpg @endslot
        @slot('date') @endslot

    @endcomponent
@endsection

@section('main')

    @include('layouts.partials.nav')



@endsection
