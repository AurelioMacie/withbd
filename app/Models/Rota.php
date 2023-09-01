<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rota extends Model
{
    use HasFactory;

    public function veiculos(){
        return $this->hasMany(Veiculo::class)->withCount('estudantes');
    }
}
