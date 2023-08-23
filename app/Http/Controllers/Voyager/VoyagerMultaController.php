<?php

namespace App\Http\Controllers\Voyager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Multa;

class VoyagerMultaController extends \TCG\Voyager\Http\Controllers\VoyagerBaseController
{
        public function store(Request $request){

            $request->validate([
                'valor' => 'required|numeric|min:1000', 
                'referencia' => 'required'
            ]);

            $multa = new Multa();
            $multa->valor = $request->input('valor');
            $multa->referencia = $request->input('referencia');
            $multa->motorista_id = $request->input('motorista_id');

            $multa->save();

                return back()->with(['code' => 200, 'message'=> 'Multa cadastrada com sucesso!']);

        }
}
