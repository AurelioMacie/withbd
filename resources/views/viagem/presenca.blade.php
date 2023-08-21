@extends('voyager::master')

@section('page_title', 'Presenças')


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
                        @foreach ($viagem->estudantes as $estudante)
                            <tr>
                                <td>{{ $estudante->nome }}</td>
                                <td>{{ $estudante->partida }}</td>
                                <td>{{ $estudante->destino }}</td>
                                <td>
                                    @if($estudante->pivot->horaSubida == null)
                                        <form action="/gestao/viagem/horaSubida" method="POST">
                                        @csrf
                                            <input type="hidden" name="viagem_id" value="{{ $viagem->id }}">
                                            <input type="hidden" name="estudante_id" value="{{ $estudante->id }}">
                                            <button type="submit" class="btn btn-primary" style="text-decoration: none;">Hora de Subida</button>
                                        </form>
                                    @elseif($estudante->pivot->horaDescida == null)
                                        <form action="/gestao/viagem/horaDescida" method="POST">
                                        @csrf
                                            <input type="hidden" name="viagem_id" value="{{ $viagem->id }}">
                                            <input type="hidden" name="estudante_id" value="{{ $estudante->id }}">
                                            <button type="submit" class="btn btn-success" style="text-decoration: none;">Hora de Descida</button>
                                        </form>
                                        @else
                                            Terminado
                                        @endif
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