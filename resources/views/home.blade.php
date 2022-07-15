@extends('templates.base')

@section('pageTitle', 'HomePage')

@section('mainPage')

    <main>
        <h1>sono il main della pagina</h1>

        {{-- <ul>
            @foreach ($listTrain as $train)
                <li>
                    {{$train->azienda}} - {{$train->stazione_di_partenza}} - {{$train->stazione_di_arrivo}} -
                    {{$train->orario_di_partenza}} - {{$train->orario_di_arrivo}} - {{$train->codice_treno}} -
                    {{$train->numero_carrozze}} - {{$train->in_orario}} - {{$train->cancellato}}
                </li>
            @endforeach
        </ul> --}}

        <table>
            <tr>
                <th>Azienda</th>
                <th>Stazione di partenza</th>
                <th>Stazione di arrivo</th>
                <th>Orario di Partenza</th>
                <th>Orario di Arrivo</th>
                <th>Codice Treno</th>
                <th>Numero Carrozze</th>
                <th>Ritardo</th>
                <th>Cancellato</th>
            </tr>
            @foreach ($listTrain as $train)
                <tr>
                    <td>{{$train->azienda}}</td>
                    <td>{{$train->stazione_di_partenza}}</td>
                    <td>{{$train->stazione_di_arrivo}}</td>
                    <td>{{$train->orario_di_partenza}}</td>
                    <td>{{$train->orario_di_arrivo}}</td>
                    <td>{{$train->codice_treno}}</td>
                    <td>{{$train->numero_carrozze}}</td>
                    <td>{{$train->in_orario}}</td>
                    <td>{{$train->cancellato}}</td>
                </tr>
            @endforeach
        </table>
    </main>
@endsection
