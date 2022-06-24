@extends('layouts.masterAdmin')
@section('title', 'Admin')
@section('content')
<div class="row d-flex justify-content-center align-items-center">
    <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem">
            <div class="card-body p-4">
                <div class="row g-0">
                    <h2 style="font-family: Constantia; font-weight: bold; padding: 5px;  text-align: center;">
                        Editando Arena Modalidade de ID {{ $arenaModalidade->id }} </h2>

                    {!! Form::open(['route'=> ["arenaModalidades.update", 'id'=>$arenaModalidade->id], 'method'=>'put']) !!}
                    <div class="form-group">
                        {!! Form::label('nome', 'Nome:') !!}
                        {!! Form::select('arena_id', \App\Models\Arena::orderBy('id')->pluck('nome', 'id')->toArray(), null,
                        ['class'=>'form-control', 'required']) !!}
                    </div>
                    
                    <div class="form-group">
                        {!! Form::label('nome', 'Nome:') !!}
                        {!! Form::select('modalidade_id', \App\Models\Modalidade::orderBy('id')->pluck('nome', 'id')->toArray(), null,
                        ['class'=>'form-control', 'required']) !!}
                    </div>
                    <div class="form-group mt-2">
                        {!! Form::submit('Editar', ['class'=>'btn btn-warning']) !!}
                        {!! Form::reset('Limpar', ['class'=>'btn btn-default']) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection