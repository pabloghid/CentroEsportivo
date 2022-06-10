<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jogo extends Model
{
    protected $table = 'jogos';
    protected $fillable = ['usuario_id', 'horario_id', 'arena_id', 'modalidade_id'];
}

