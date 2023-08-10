<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Viagem extends Model
{
    use HasFactory;

    public function estudantes(){
        return $this->belongsToMany(Estudante::class);
    }
}
