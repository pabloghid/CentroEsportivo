<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jogo;
use App\Models\Arena;
use App\Models\Modalidade;
use App\Models\Admin;
use App\Models\Pessoa;
use Illuminate\Support\Facades\Auth;

class AdministradorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        $adminExiste = Admin::find(Auth::id());
        if(empty($adminExiste)){
            return view('administrador.erro');
        }
        
        $jogosTotais = Jogo::all()->count();
        $arenasTotais = Arena::all()->count();
        $modalidadesTotais = Modalidade::all()->count();
        $usuariosTotais = Pessoa::all()->count();
        $adminExiste = Admin::find(Auth::id());
        
        return view('administrador.index', compact(['jogosTotais', 'arenasTotais', 'modalidadesTotais', 'usuariosTotais']));
    }
}
