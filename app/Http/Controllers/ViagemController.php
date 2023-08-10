<?php

namespace App\Http\Controllers;

use App\Models\Viagem;
use App\Models\Estudante;
use Illuminate\Http\Request;

class ViagemController extends Controller
{
    public function adicionar($id){
        $viagem = Viagem::where('id', $id)->first();
        $estudantes = Estudante::where('veiculo_id', $viagem->veiculo_id)->get();
        return view('viagem.adicionar', compact('estudantes'));
    }

    public function presenca($id){
        $viagem = Viagem::where('id', $id)->with('estudantes')->first();
        return $viagem;
        return view('viagem.presenca');
    }
}
