<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <title>{{config('app.name','ZINOK')}}</title>
    </head>
    <body>
         @include('inc.indexnavbar')
        <div class="py-4">
            <div class="container">
            @include('inc.messages')
            @yield('content')
            </div>
        </div>
    </body>
</html>
