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
        $viagem = Viagem::with('veiculo')->where('id', $id)->orderBy('id', 'DESC')->first();
        $estudantes = Estudante::where('veiculo_id', $viagem->veiculo_id)
        ->whereDoesntHave('viagem', function ($query) use($viagem) {
            $query->where('viagems.id', $viagem->id);
        })->get();
        $estudantes_rota = Estudante::with('veiculo')
        ->where('rota_id', $viagem->veiculo->rota_id)
        ->whereNotIn('id', $estudantes->pluck("id"))
        ->with('viagem')
        ->whereDoesntHave('viagem', function ($query) {
            $query->where('estudante_viagem.horaSubida', null)
                 ->where('estudante_viagem.horaDescida', null);
        })
        ->get();
        return view('viagem.adicionar', compact('estudantes',"estudantes_rota", 'viagem'));
    }

    public function presenca($id){
        $viagem = Viagem::where('id', $id)->with('estudantes')->orderBy('id', 'DESC')->first();
        return view('viagem.presenca', compact('viagem'));
    }

    public function adicionarAlunos(Request $request){
        $viagem = Viagem::find($request->viagem_id);
        $capacidadeVeiculo = $viagem->veiculo->capacidade;
        $numeroPresencas = EstudanteViagem::where('viagem_id', $request->viagem_id)->count();
        $numeroPresencasParaAdicionar = count($request->selected_items);
        if (($numeroPresencas + $numeroPresencasParaAdicionar) > $capacidadeVeiculo) {
            return  back()->with(['code' => 404, 'message'=> 'A capacidade máxima do veículo foi atingida. Não é possível adicionar mais estudantes a esta viagem.']);
        }

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
