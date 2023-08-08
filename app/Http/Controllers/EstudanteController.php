<?php

namespace App\Http\Controllers;

use App\Models\Estudante;
use Illuminate\Http\Request;

class EstudanteController extends Controller
{
    public function pendentes(){
        $alunos = Estudante::where('estado', 'pendente')->orWhere('estado', null)->get();
        return view('estudante.pendentes', compact('alunos'));
    }
}
