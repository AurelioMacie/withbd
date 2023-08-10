@extends('voyager::master')

@section('page_title', 'Marcas aprovadas')


@section('page_header')
    <div class="container-fluid">
        <h1 class="page-title">
            <i class="voyager-thumb-tack"></i> Presenças
        </h1>
    </div>
@stop



@section('content')
    <div class="page-content browse container-fluid">
        @include('voyager::alerts')
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-bordered">
                    <div class="panel-body">
                    <table class="table">
                        <tr>
                            <th>Nome do estudante</th>
                            <th>Paragem</th>
                            <th>Destino</th>
                            <th>Acções</th>
                        </tr>
                        @foreach ($estudantes as $estudante)
                            <tr>
                                <td>{{ $estudante->nome }}</td>
                                <td>{{ $estudante->partida }}</td>
                                <td>{{ $estudante->destino }}</td>
                            </tr>
                        @endforeach
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection