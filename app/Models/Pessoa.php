<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Pessoa extends Authenticatable
{
    protected $table = 'pessoas';
    protected $fillable = ['nome', 'email', 'password', 'telefone', 'login'];
}
//// https://www.youtube.com/watch?v=OUFmwAnFclo