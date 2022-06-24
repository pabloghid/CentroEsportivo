@extends('layouts.masterAdmin')
@section('title', 'Admin')
@section('content')

<div class="row mt-4">
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Jogos já marcados</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$jogosTotais}}</div>
                    </div>
                    <div class="col-auto py-2">
                        <a class="text-xs btn btn-primary " href="{{route('jogos', []) }}">Jogos</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Usuários Cadastrados</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$usuariosTotais}}</div>
                    </div>
                    <div class="col-auto py-2">
                        <a class="text-xs btn btn-primary " href="{{route('pessoas', []) }}">Usuários</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Arenas Cadastradas</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$arenasTotais}}</div>
                    </div>
                    <div class="col-auto py-2">
                        <a class="text-xs btn btn-primary " href="{{route('arenas', []) }}">Arenas</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                            Modalidades Cadastradas</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$modalidadesTotais}}</div>
                    </div>
                    <div class="col-auto py-2">
                        <a class="text-xs btn btn-primary " href="{{route('modalidades', []) }}">Modalidades</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .text-xs {
        font-size: .7rem;
    }
</style>
@endsection