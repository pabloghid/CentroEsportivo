<?php

namespace App\Http\Controllers;

use App\Models\Jogo;
use App\Models\Horario;
use App\Models\Arena;
use App\Models\Modalidade;
use App\Http\Requests\JogoRequest;
use Illuminate\Support\Facades\DB;
use App\Models\Pessoa;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;

class JogosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $jogos = Jogo::all();
        $user = Auth::id();
        $jogos = Jogo::Where('usuario_id', $user)
        ->whereDate('data', '>=', date("Y-m-d"))->get();
        return view('jogos.index', ['jogos' => $jogos, 'usuarioId' => $user]);
    }

    public function create()
    {
        $arenasDisponiveis = Arena::pluck('nome', 'id');
        $modalidadesDisponiveis = Modalidade::pluck('nome', 'id');

        $token = '858c4b70060d59a05dac63fefa8fd578';
        $response = Http::get('https://api.openweathermap.org/data/2.5/forecast?', [
            'appid' => $token,
            'q' => 'erechim',
            'lang' => 'pt_br',
            'units' => 'metric',
        ]);
        $tempFuturo = $response->json();

        return view('jogos.create', compact(['arenasDisponiveis', 'modalidadesDisponiveis', 'tempFuturo']));
    }

    public function getHorarios()
    {
        $data = $_POST['data'];
        $arena = $_POST['arena'];
        $horariosDia = DB::table('jogos')->where('data', $data)->where('arena_id', $arena)->select('horario_id')->get();
        $horariosUtilizados = [];
        $count = 0;
        foreach ($horariosDia as $horario) {
            $horariosUtilizados[$count] = $horario->horario_id;
            $count += 1;
        }
        $horariosDisponiveis = DB::table('horarios')
            ->leftJoin('jogos', 'horarios.id', '=', 'jogos.horario_id')
            ->whereNotIn('horarios.id', $horariosUtilizados)
            ->select('horarios.id', 'horarios.hora_ini', 'horarios.hora_fim')
            ->get();

        return response()->json(array('horariosDisponiveis' => $horariosDisponiveis));
    }

    public function getArenas()
    {
        $modalidade = $_POST['modalidade'];
        $arenasSelect = DB::table('arena_modalidades')
            ->where('modalidade_id', $modalidade)
            ->select('arena_id', 'modalidade_id')
            ->get();
        $arenasModalidade = [];
        $count = 0;
        foreach ($arenasSelect as $arena) {
            $arenasModalidade[$count] = $arena->arena_id;
            $count += 1;
        }
        $arenasDisponiveis = DB::table('arenas')
            ->whereIn('id', $arenasModalidade)
            ->select('id', 'nome')
            ->get();
        return response()->json(array('arenasDisponiveis' => $arenasDisponiveis));
    }

    public function previsao($data = null)
    {
        $token = '858c4b70060d59a05dac63fefa8fd578';
        $response = Http::get('https://api.openweathermap.org/data/2.5/forecast?', [
            'appid' => $token,
            'q' => 'erechim',
            'lang' => 'pt_br',
            'units' => 'metric',
        ]);
        $tempoFuturo = $response->json();
        $tempoDia = [];
        $count = 0;
        $tempoTotal = 0;

        foreach ($tempoFuturo['list'] as $tempo) {
            $dia = date('Y-m-d', strval($tempo['dt']));
            if ($dia == $data) {
                $tempoDia[$count] = $tempo;
                $count = $count + 1;
                $tempoTotal += $tempo['main']['temp'];
            }
        }
        if (empty($tempoDia)) {
            return view('jogos.tempoErro');
        }
        $mediaTempo = round($tempoTotal / $count);
        $media = floor($count / 2);
        return view('jogos.tempo', [
            "dados" => $tempoDia,
            "data" => strval($data),
            "tempMedia" => $mediaTempo,
            "media" => $media
        ]);
    }

    public function store(JogoRequest $request)
    {
        $novo_jogo = $request->all();

        $pessoaId = Auth::id();
        $novo_jogo['usuario_id'] = $pessoaId;
        Jogo::create($novo_jogo);

        return redirect()->route('jogos');
    }

    public function destroy($id) {
        Jogo::find($id)->delete();
        return redirect()->route('jogos');
    }

}
