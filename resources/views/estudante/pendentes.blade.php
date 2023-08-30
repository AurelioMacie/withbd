@extends('voyager::master')

@section('page_title', 'Solicitações pendentes')


@section('page_header')
    <div class="container-fluid">
        <h1 class="page-title">
            <i class="voyager-thumb-tack"></i> Pendentes
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
                            <th>Acções</th>
                        </tr>
                        @foreach ($alunos as $aluno)
                            <tr>
                                <td>{{ $aluno->nome }}</td>
                                <td>{{ $aluno->partida }}</td>
                                <td>{{ $aluno->destino }}</td>
                                <td>{{ $aluno->descricaoSolicitacao }}</td>
                                <td class="d-flex">
                                    <a href="{{ route('voyager.estudantes.edit', $aluno->id)}}" class="btn btn-primary me-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                            <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                        </svg>
                                    </a>
                            </tr>
                        @endforeach
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection