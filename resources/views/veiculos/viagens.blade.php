@extends('voyager::master')

@section('page_title', 'Viagens')


@section('page_header')
    <div class="container-fluid">
        <h1 class="page-title">
            <i class="voyager-thumb-tack"></i> Viagem <a href="/gestao/viagems/create" class="btn btn-success" style="text-decoration: none;">Adicionar viagens</a>
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
                        <tr style="color: black; font-weight: bold">
                            <th>Tipo de viagem</th>
                            <th>Data da viagem</th>
                            <!-- <th>Qtd de estudantes</th> -->
                            <th>Acções</th>
                        </tr>
                        @foreach ($viagens as $viagem)
                            <tr>
                                <td>{{ $viagem->tipo }}</td>
                                <td>{{ $viagem->data }}</td>
                                <!-- <td>{{ $viagem->tipo }}</td> -->
                                <td class="d-flex">
                                    <a href="/gestao/viagem/{{$viagem->id}}/estudantes/adicionar" class="btn btn-primary" style="text-decoration: none;">adicionar</a>
                                    <a href="/gestao/viagem/{{$viagem->id}}/estudantes/presenca" class="btn btn-success" style="text-decoration: none;">presenças</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection