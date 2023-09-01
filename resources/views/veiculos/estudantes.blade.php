@extends('voyager::master')

@section('page_title', 'Solicitações pendentes')


@section('page_header')
    <div class="container-fluid">
        <h1 class="page-title">
            <i class="voyager-thumb-tack"></i> Estudantes do veículo
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
                            <th>Nome</th>
                            <th>Partida</th>
                            <th>Destino</th>
                            <th>Descrição de solicitação</th>
                        </tr>
                        @foreach ($veiculo->estudantes as $aluno)
                            <tr>
                                <td>{{ $aluno->nome }}</td>
                                <td>{{ $aluno->partida }}</td>
                                <td>{{ $aluno->destino }}</td>
                                <td>{{ $aluno->descricaoSolicitacao }}</td>
                            </tr>
                        @endforeach
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection