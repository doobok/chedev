<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.partials.head')
    @yield('head')
</head>
<body class="text-gray-800"
      :class="{ 'overflow-hidden max-h-screen': mobileMenu }"
      x-data="{ mobileMenu: false }"
      itemscope itemtype="https://schema.org/WebPage"
>
<div id="app">
    <main class="bg-left-bottom bg-no-repeat bg-100 bg-curve-bl">
        <div class="bg-left-top bg-no-repeat bg-100 bg-shape">
            @include('layouts.partials.nav')
            @yield('main')
        </div>
    </main>

    @include('layouts.partials.footer')

    <lead-form></lead-form>

</div>
@include('layouts.partials.js')

</body>
</html>
