<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.meta')
    <title>@yield('title')</title>
    @include('layouts.css')
    @yield('css')
</head>
<body role="document">
{{-- use for JS --}}
<div id="app">
    @include('layouts.nav')
    <div class="container theme-showcase" role="main">
        @yield('content')
        {{-- <div id="root">
          <message title="hello1" body="Lorem ipsum dolar sit amet..."></message>
        </div> --}}
        @include('layouts.bottom')
    </div>
</div>
@include('layouts.scripts')
@yield('scripts')
</body>
</html>
