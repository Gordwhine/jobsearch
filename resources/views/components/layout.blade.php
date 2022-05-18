<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        {{-- <meta name="viewport" content="width=device-width, initial-scale=1"> --}}
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'JobSearch') }}</title>
        @include('partials.links')
    </head>
    <body id="top">
        <div id="overlayer"></div>
        <div class="loader">
            <div class="spinner-border text-primary" role="status">
            <span class="sr-only">Loading...</span>
            </div>
        </div>

        <div class="site-wrap">
            @include('partials.header')
            <!-- HOME -->
            {{-- @yield('content') --}}
            {{$slot}}
            @include('partials.footer')
        </div>
        @include('partials.js')
    </body>
</html>
