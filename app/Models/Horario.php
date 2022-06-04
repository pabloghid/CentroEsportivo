<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    protected $table = 'Horarios';
    protected $fillable = ['hora_ini', 'hora_fim'];
}
