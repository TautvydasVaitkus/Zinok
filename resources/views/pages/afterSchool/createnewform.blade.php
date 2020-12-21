@section('content')
    <h1>Naujos veiklos formą</h1>

    {!! Form::open(['action' => 'App\Http\Controllers\AftersController@store', 'method' => 'POST']) !!}
    <div class="form-group">
        {{ Form::label('pavadinimas', 'Pavadinimas:') }}
        {{ Form::text('pavadinimas', '', ['class' => 'form-control', 'placeholder' => 'Pavadinimas']) }}
    </div>
    <div class="form-group">
        {{ Form::label('aprasas', 'Užsiėmimo aprašas:') }}
        {{ Form::textarea('aprasas', '', ['class' => 'form-control', 'placeholder' => 'Detalus neformalios veiklos aprašas.']) }}
    </div>
    <div class="form-group">
        {{ Form::label('pradzios_data', 'Užsiėmimo pradžios data:') }}
        {{ Form::date('pradzios_data', '', ['class' => 'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::label('pabaigos_data', 'Užsiėmimo pabaigos data:') }}
        {{ Form::date('pabaigos_data', '', ['class' => 'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::label('pradzios_laikas', 'Užsiėmimo pradžios laikas:') }}
        {{ Form::time('pradzios_laikas', '', ['class' => 'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::label('pabaigos_laikas', 'Užsiėmimo pabaigos laikas:') }}
        {{ Form::time('pabaigos_laikas', '', ['class' => 'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::label('max_dalyviu', 'Maksimalus dalyvių skaičius:') }}
        {{ Form::number('max_dalyviu', '', ['class' => 'form-control']) }}
    </div>
    {{ Form::submit('Sukurti', ['class' => 'btn btn-primary']) }}
    {!! Form::close() !!}

@endsection

@include('inc.afternavbarteacher')
