<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'ZINOK') }}</title>
    @if (Auth::guest())
        <meta http-equiv="refresh" content="0; url={{ route('home') }}" />
    @endif
    @if (auth()->user()->role == 'Mokinys')
        <meta http-equiv="refresh" content="0; url={{ route('home') }}" />
    @endif
</head>

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="/home">Žinok</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/Teacher/After/{{ $page->id }}/edit">Veiklos
                        redagavimas</a>
                </li>
                {!!Form::open(['action' => ['App\Http\Controllers\AftersController@destroy',$page->id], 'method' => 'POST', 'class' => 'text-right'])!!}
                    {{Form::hidden('_method','DELETE')}}
                    {{Form::submit('Trinti Veikla',['class'=>'btn btn-danger'])}}

                {!!Form::close()!!}

            </ul>
        </div>
    </div>
</nav>

<div class="jumbotron vertical-center">
    <div class="container">
        @yield('content')

    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
</script>

</html>
