
@section('content')
    <h1>
        {{ $page->pavadinimas}}
    </h1>
    <h2>
        {{$page->aparasas}}
    </h2>
    <h2>
       Pradžios data: {{$page->pradzios_data}}
    </h2>
    <h2>
       Pabaigos data: {{$page->pabaigos_data}}
    </h2>
    <h2>
      Laikas kada prasideda užsiėmimas:  {{$page->pradzios_laikas}}
    </h2>
    <h2>
       Laikas kada pasibaigia užsiėmimas: {{$page->pabaigos_laikas}}
    </h2>
    <h2>
       Maksimalus dalyvių skaičius: {{$page->max_dalyviu}}
    </h2>
@endsection

@include('inc.afterpageteacher')
