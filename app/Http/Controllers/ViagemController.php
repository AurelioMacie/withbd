<?php

namespace App\Http\Controllers;

use App\Models\Viagem;
use App\Models\Estudante;
use App\Models\EstudanteViagem;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class ViagemController extends Controller
{
    public function adicionar($id){
        $viagem = Viagem::where('id', $id)->orderBy('id', 'DESC')->first();
        $estudantes = Estudante::where('veiculo_id', $viagem->veiculo_id)->get();
        return view('viagem.adicionar', compact('estudantes', 'viagem'));
    }

    public function presenca($id){
        $viagem = Viagem::where('id', $id)->with('estudantes')->orderBy('id', 'DESC')->first();
        return view('viagem.presenca', compact('viagem'));
    }

    public function adicionarAlunos(Request $request){
        $array = [];
        for($i=0; $i<count($request->selected_items);$i++){
            $verificarEstudanteViagem = EstudanteViagem::where('estudante_id', $request->selected_items[$i])
            ->where('viagem_id', $request->viagem_id)->first();
            if(!$verificarEstudanteViagem){
                $estudanteViagem = new EstudanteViagem();
                $estudanteViagem->estudante_id = $request->selected_items[$i];
                $estudanteViagem->viagem_id = $request->viagem_id;
                $array[]=$request->selected_items[$i];
                $estudanteViagem->save();
            }else{
                return back()->with(['code' => 403, 'message'=> 'o estudante já foi adicionado a viagem']);
            }
        }

        return redirect()->route('viagem.presenca', $request->viagem_id);
    }

    public function horaSubida(Request $request){
        $estudante = EstudanteViagem::where('estudante_id', $request->estudante_id)->
        where('viagem_id', $request->viagem_id)->first();
        if($estudante){
            $currentDateTime = Carbon::now();
            $estudante->horaSubida = $currentDateTime->format('H:i:s');
            $estudante->update();
            return back()->with(['code' => 200, 'message'=> 'hora de subida adicionada']);
        }else{
            return abort(404);
        }
    }

    public function horaDescida(Request $request){
        $estudante = EstudanteViagem::where('estudante_id', $request->estudante_id)->
        where('viagem_id', $request->viagem_id)->first();
        if($estudante){
            $currentDateTime = Carbon::now();
            $estudante->horaDescida = $currentDateTime->format('H:i:s');
            $estudante->update();
            return back()->with(['code' => 200, 'message'=> 'hora de descida adicionada']);
        }else{
            return abort(404);
        }
    }
}
