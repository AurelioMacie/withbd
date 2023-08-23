<?php

namespace App\Http\Controllers\Voyager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Estudante;
use App\Models\Notificacao;
use App\Models\VeiculoMotorista;

class VoyagerEstudanteController extends \TCG\Voyager\Http\Controllers\VoyagerBaseController
{

    public function edit(Request $request, $id){
        // $veiculo = VeiculoMotorista::where('veiculo_id', $request->veiculo_id)->
        // where('motorista_id', $request->motorista_id)->first();
        // $estudante = Estudante::find($id);

    }
}

