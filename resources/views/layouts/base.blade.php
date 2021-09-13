<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @hasSection('title')
            <title>@yield('title') - {{ config('app.name') }}</title>
        @else
            <title>{{ config('app.name') }}</title>
        @endif
        <!-- Favicon -->
		<link rel="shortcut icon" href="{{ url(asset('/imgs/logos/dcode.svg')) }}" type="image/svg">
        <!-- Styles -->
        <link rel="stylesheet" href="{{ url(mix('css/app.css')) }}">
        <!-- Scripts -->
        <script src="{{ url(mix('js/app.js')) }}" defer></script>
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- LARAVEL Kanopi Sidebar Tag -->
        <script>
            (function(p,r,o,a,c,t,i,v,e){v=p.createElement(r);e=p.currentScript;v.async=1;v.src=o+'?client='+a+'&env='+c+'&project='+(t!==null?t:'');e.parentNode.insertBefore(v,e);})
            (document, 'script', 'https://kanopi.live/embed.js', 'KPI-23', '{{ config('app.env') }}', 1028);
        </script>
        <!-- /LARAVEL Kanopi Sidebar Tag laravel -->
    </head>
    <body {{isset($bodyId) ? "id=$bodyId" : null }}>
        <div id="app">
            @yield('body')
        </div>
    </body>
</html>
