<?php

namespace App\Http\Controllers;

use App\Models\Jogo;
use App\Models\Horario;
use App\Models\Arena;
use App\Models\Modalidade;
use App\Http\Requests\JogoRequest;
use Illuminate\Support\Facades\DB;

class JogosController extends Controller
{
    public function index(){
        $jogos = Jogo::all();
        return view('jogos.index', ['jogos'=>$jogos]);
    }

    public function create(){
        $arenasDisponiveis = Arena::pluck('nome', 'id');
        $modalidadesDisponiveis = Modalidade::pluck('nome', 'id');
        /// passar apenas as arenas. buscar outras infos por ajax;
        return view('jogos.create', compact(['arenasDisponiveis', 'modalidadesDisponiveis']));
    }

    public function getHorarios()
    {
        //$horariosDisponiveis = Horario::all();
        $horariosDisponiveis = DB::table('horarios')
        ->leftJoin('jogos', 'horarios.id', '=', 'jogos.horario_id')
        ->whereNull('jogos.horario_id')
        //->toSql('horarios.id', 'horarios.hora_ini', 'horarios.hora_fim');
        ->select('horarios.id', 'horarios.hora_ini', 'horarios.hora_fim')
        ->get();

        //var_dump($horariosDisponiveis);
        return response()->json(array('horariosDisponiveis' => $horariosDisponiveis));
    }

    //// criar tabela modalidades por arena
/*     public function getArenas()
    {
        //$horariosDisponiveis = Horario::all();
        $arenasDisponiveis = DB::table('arenas')
        ->leftJoin('modalidades', 'arenas.id', '=', 'modalidades.horario_id')
        ->whereNull('jogos.horario_id')
            ->get();

        return response()->json(array('arenasDisponiveis' => $arenasDisponiveis));
    } */
    
    public function store(JogoRequest $request){
        $novo_jogo = $request->all();
        $novo_jogo['usuario_id'] = '1';
        var_dump($novo_jogo);
        Jogo::create($novo_jogo);
        
        return redirect()->route('jogos');
    }
 
}

/* $horariosDisponiveis = DB::table('horarios')
->leftJoin('jogos', function($join){
    $join->on('id', '=', 'jogos.horarios_id')
    ->where('jogos.horarios_id', 'is', 'null')
    ->get();
}); */

//->pluck('horario, id');