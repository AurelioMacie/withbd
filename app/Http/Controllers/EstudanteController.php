<?php

namespace App\Http\Controllers;

use App\Models\Estudante;
use Illuminate\Http\Request;

class EstudanteController extends Controller
{
    public function pendentes(){
        $alunos = Estudante::where('estado', 'pendente')->orderBy('id', 'DESC')->orWhere('estado', null)->get();
        return view('estudante.pendentes', compact('alunos'));
    }

    public function viagens($id){
        $estudante = Estudante::where('id', $id)->with('viagens')->first();
        return view('estudante.viagens', compact('estudante'));
    }
}
