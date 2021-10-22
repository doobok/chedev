<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    @include('layouts.partials.head')
    @yield('head')
  </head>
  <body class="text-gray-800"
        :class="{ 'overflow-hidden max-h-screen': mobileMenu }"
        x-data="{ mobileMenu: false }">
  <div id="app">

    <main>
    @yield('main')
    </main>

    @include('layouts.partials.footer')

    <lead-form></lead-form>

  </div>
  @include('layouts.partials.js')

  </body>
</html>
