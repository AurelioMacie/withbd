<?php

namespace App\Http\Controllers;

use App\Models\Notificacao;
use Illuminate\Http\Request;

class NotificacaoController extends Controller
{
    //

    public function destroy(Request $request, $id)
    {
        $notificacao = Notificacao::where("id", $id)->orderBy('id', 'DESC')->first();
        if($notificacao){
            $notificacao->delete();
        }else{
           
        }

        return back();
    }
}
