<?php

namespace App\Http\Controllers;

use App\Models\Viagem;
use Illuminate\Http\Request;

class VeiculoController extends Controller
{
    public function veiculoViagem($id){
        $viagens = Viagem::where('veiculo_id', $id)->get();
        return view('veiculos.viagens', compact('viagens'));
    }
}
