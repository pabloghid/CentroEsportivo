@extends('layouts.master')
@section('title', 'Arenas')
@section('content')
<h1>Aqui cria as Modalidades da arena</h1>

{!! Form::open(['route'=>'arenaModalidades.store']) !!}
    <div class="form-group">        
        {!! Form::label('arena_id', 'Arena:') !!}
        {!! Form::select('arena_id',
        \App\Models\Arena::orderBy('id')->pluck('nome', 'id')->toArray(), null, ['class'=>'form-control', 'required']) !!}
    </div>
    <div class="form-group">        
        {!! Form::label('modalidade_id', 'Modalidade:') !!}
        {!! Form::select('modalidade_id',
        \App\Models\Modalidade::orderBy('id')->pluck('nome', 'id')->toArray(), null, ['class'=>'form-control', 'required']) !!}
    </div>
    <div class="form-group mt-2">
        {!! Form::submit('Criar Arena', ['class'=>'btn btn-primary']) !!}
        {!! Form::reset('Limpar', ['class'=>'btn btn-default']) !!}
    </div>
{!! Form::close() !!}
@endsection