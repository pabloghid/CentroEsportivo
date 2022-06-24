<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Pessoa;
use Illuminate\Http\Request;
use App\Http\Requests\AdminRequest;
use Laravel\Ui\Presets\React;

class AdminController extends Controller
{

    public function index(){
        $admins = Admin::all();
        return view('admins.index', ['admins'=>$admins]);
    }

    public function create(){
        $pessoas = Pessoa::pluck('nome', 'id');
        return view('admins.create', compact(['pessoas', 'pessoas']));
    }
    
    public function store(Request $request){
        $novo_admin = $request->all();
        Admin::create($novo_admin);
        
        return redirect()->route('administradores');
    }

    public function destroy($id) {
        Admin::find($id)->delete();
        return redirect()->route('administradores');
    }
}
