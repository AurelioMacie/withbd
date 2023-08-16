@extends('voyager::master')

@section('page_title', 'Adicionar à viagem')


@section('page_header')
    <div class="container-fluid">
        <h1 class="page-title">
            <i class="voyager-thumb-tack"></i> Adicionar
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

    @push('scripts')

    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const selectAllCheckbox = document.getElementById('select-all');
        const checkboxes = document.querySelectorAll('input[name="selected_items[]"]');

        selectAllCheckbox.addEventListener('change', function () {
            checkboxes.forEach(checkbox => {
                checkbox.checked = selectAllCheckbox.checked;
            });
        });

        checkboxes.forEach(checkbox => {
            checkbox.addEventListener('change', function () {
                if (!this.checked) {
                    selectAllCheckbox.checked = false;
                } else {
                    const allChecked = Array.from(checkboxes).every(checkbox => checkbox.checked);
                    selectAllCheckbox.checked = allChecked;
                }
            });
        });
    });
    </script>

@endpush

@endsection