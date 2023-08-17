@extends('voyager::master')

@section('page_title', 'Adicionar à viagem')


@section('page_header')
    <div class="container-fluid">
        <h1 class="page-title">
            <i class="voyager-thumb-tack"></i> Adicionando estudante à viagem
        </h1>
        <a href="#" class="btn btn-success">adicionar</a>
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
                            <th><input type="checkbox" id="select-all"></th>
                        </tr>
                        @foreach ($estudantes as $estudante)
                            <tr>
                                <td>{{ $estudante->nome }}</td>
                                <td>{{ $estudante->partida }}</td>
                                <td>{{ $estudante->destino }}</td>
                                <td><input type="checkbox" name="selected_items[]" value="{{ $estudante->id }}"></td>
                            </tr>
                        @endforeach
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#select-all').change(function () {
                $('.checkbox').prop('checked', this.checked);
            });

            $('.checkbox').change(function () {
                if (!this.checked) {
                    $('#select-all').prop('checked', false);
                }
            });
        });
    </script>
@endpush