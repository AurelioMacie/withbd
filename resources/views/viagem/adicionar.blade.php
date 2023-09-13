@extends('voyager::master')

@section('page_title', 'Adicionar à viagem')

@push('javascript')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $('.estudante-checkbox').on('change', function() {
        var capacidadeVeiculo = <?php echo $viagem->veiculo->capacidade; ?>;
        var checkboxesSelecionadas = $('.estudante-checkbox:checked').length;

        if (checkboxesSelecionadas > capacidadeVeiculo) {
            // Desmarcar a checkbox que excedeu a capacidade
            $(this).prop('checked', false);
            alert('A capacidade máxima do veículo foi atingida. Não é possível adicionar mais estudantes a esta viagem.');
        }
    });
});
</script>
@endpush

@section('page_header')
    <div class="container-fluid">
        <h1 class="page-title">
            <i class="voyager-thumb-tack"></i> Adicionando estudante à viagem
        </h1>
    </div>
@stop

@section('content')
<form action="/gestao/viagem/adicionarAlunos" method="POST">
@csrf
    <div class="page-content browse container-fluid">
        @include('voyager::alerts')
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-bordered">
                    <div class="panel-body">
                        
                            <input type="hidden" value="{{$viagem->id}}" name="viagem_id">

                            <table class="table">
                                <tr style="color: black; font-weight: bold">
                                    <th>Nome do estudante</th>
                                    <th>Paragem</th>
                                    <th>Destino</th>
                                    <th><input type="checkbox" id="select-all"></th>
                                </tr>
                                @foreach ($estudantes as $estudante)
                                    @if($estudante->veiculo->estado == "activo")
                                        <tr style="color: green; font-weight: bold">
                                            <td>{{ $estudante->nome }}</td>
                                            <td>{{ $estudante->partida }}</td>
                                            <td>{{ $estudante->destino }}</td>
                                            <td><input type="checkbox" class="estudante-checkbox" name="selected_items[]" value="{{ $estudante->id }}"></td>
                                        </tr>
                                    @endif
                                @endforeach
                                @foreach ($estudantes_rota as $estudante)
                                   @if($estudante->veiculo->estado != "activo")
                                        <tr>
                                            <td>{{ $estudante->nome }}</td>
                                            <td>{{ $estudante->partida }}</td>
                                            <td>{{ $estudante->destino }}</td>
                                            <td><input type="checkbox" class="estudante-checkbox" name="selected_items[]" value="{{ $estudante->id }}"></td>
                                        </tr>
                                    @endif
                                @endforeach
                            </table>
                        
                    </div>
                </div>
                <button type="submit" class="btn btn-success" style="text-decoration: none;">adicionar</button>
            </div>
        </div>
    </div>
</form>
@endsection
