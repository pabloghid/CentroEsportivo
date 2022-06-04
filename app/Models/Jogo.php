<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jogo extends Model
{
    protected $table = 'jogos';

    public function getHorarioTotalAttribute($value)
    {
        return $value->hora_ini . ' - ' . $value->hora_fim;
    }
}

