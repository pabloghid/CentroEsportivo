<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arena extends Model
{
    protected $table = 'Arenas';
    protected $fillable = ['nome', 'valor', 'descricao'];
}
