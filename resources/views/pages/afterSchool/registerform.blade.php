@section('content')
    <h1>Registraciją į naują veiklą</h1>
    @if(count($data)>0)
        {!! Form::open(['action' => 'App\Http\Controllers\AftersController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{ Form::label('pavadinimas', 'Pavadinimas:') }}
            {!! Form::select('pavadinimas', $data, null, ['class' => 'form-control']) !!}
        </div>
        {{ Form::submit('Sukurti', ['class' => 'btn btn-primary']) }}
        {!! Form::close() !!}
    @endif
    @if(count($data)==0)
        <h2>
            Dabar nėra jokių užsiėmimų
        </h2>
    @endif
    

@endsection

@include('inc.afternavbarstudent')
