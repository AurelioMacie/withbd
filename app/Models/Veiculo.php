<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    use HasFactory;

    public function motoristas(){
        return $this->belongsToMany(Motorista::class);
    }

    public function estudantes(){
        return $this->hasMany(Estudante::class);
    }

    public function Rota(){
        return $this->belongsTo(Rota::class);
    }
}
