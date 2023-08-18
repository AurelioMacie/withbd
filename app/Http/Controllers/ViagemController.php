<?php

namespace App\Http\Controllers;

use App\Models\Viagem;
use App\Models\Estudante;
use App\Models\EstudanteViagem;
use Illuminate\Http\Request;

class ViagemController extends Controller
{
    public function adicionar($id){
        $viagem = Viagem::where('id', $id)->first();
        $estudantes = Estudante::where('veiculo_id', $viagem->veiculo_id)->get();
        return view('viagem.adicionar', compact('estudantes', 'viagem'));
    }

    public function presenca($id){
        $viagem = Viagem::where('id', $id)->with('estudantes')->first();
        return view('viagem.presenca', compact('viagem'));
    }

    public function adicionarAlunos(Request $request){
        // return $request->selected_items;
        $array = [];
        for($i=0; $i<count($request->selected_items);$i++){
            $estudanteViagem = new EstudanteViagem();
            $estudanteViagem->estudante_id = $request->selected_items[$i];
            $estudanteViagem->viagem_id = $request->viagem_id;
            $array[]=$request->selected_items[$i];
            $estudanteViagem->save();
        }

        return $array;
    }
}
