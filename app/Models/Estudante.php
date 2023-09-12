<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudante extends Model
{
    use HasFactory;

    public function veiculo(){
        return $this->belongsTo(Veiculo::class);
    }

    public function viagem(){
        return $this->belongsToMany(Viagem::class)->withPivot("horaSubida","horaDescida");
    }

    public function viagens(){
        return $this->belongsToMany(Viagem::class)->withPivot("horaSubida","horaDescida");
    }
}
