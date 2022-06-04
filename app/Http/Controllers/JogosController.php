<?php

namespace App\Http\Controllers;

use App\Models\Jogo;
use App\Models\Horario;
use Illuminate\Http\Request;

class JogosController extends Controller
{
    public function index(){
        $jogos = Jogo::all();
        return view('jogos.index', ['jogos'=>$jogos]);
    }

    public function create(){
        $horariosDisponiveis = Horario::all();

        foreach ($horariosDisponiveis as $horario) {
        $horarioConcat = $horario->horario_total;
    }
        return view('jogos.create', compact('horarioConcat'));
    }
 
}


//->pluck('horario, id');