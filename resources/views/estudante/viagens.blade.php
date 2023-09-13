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
                        <tr style="color: black; font-weight: bold">
                            <th>Tipo de viagem</th>
                            <th>Hora de subida</th>
                            <th>Hora de descida</th>
                        </tr>
                        @foreach ($estudante->viagens as $viagem)
                            <tr>
                                <td>{{ $viagem->tipo }}</td>
                                <td>{{ $viagem->pivot->horaSubida }}</td>
                                <td>{{ $viagem->pivot->horaDescida }}</td>
                            </tr>
                        @endforeach
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection