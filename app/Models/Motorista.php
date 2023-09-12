<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Motorista extends Model
{
    use HasFactory;

    public function veiculos(){
        return $this->belongsToMany(Veiculo::class)->with('rota');
    }

    public function viagens(){
        return $this->hasMany(Viagem::class)->with('veiculo');
    }

    public function solicitacoes(){
        return $this->hasMany(Solicitacao::class);
    }
}
