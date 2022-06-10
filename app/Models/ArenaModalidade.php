<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArenaModalidade extends Model
{
    protected $table = 'arena_modalidades';
    protected $fillable = ['arena_id', 'modalidade_id'];
}
