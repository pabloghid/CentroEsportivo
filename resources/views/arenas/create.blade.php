@extends('layouts.master')
@section('title', 'Arenas')
@section('content')
<h1>Aqui cria as arenas</h1>

{!! Form::open(['route'=>'arenas.store']) !!}
    <div class="form-group">        
        {!! Form::label('nome', 'Nome da arena:') !!}
        {!! Form::text('nome', null, ['class'=>'form-control', 'required']) !!}
    </div>
    <div class="form-group">        
        {!! Form::label('valor', 'Valor:') !!}
        {!! Form::text('valor', null, ['class'=>'form-control', 'required']) !!}
    </div>
    <div class="form-group">        
        {!! Form::label('descricao', 'Descrição:') !!}
        {!! Form::text('descricao', null, ['class'=>'form-control', 'required']) !!}
    </div>
    <div class="form-group mt-2">
        {!! Form::submit('Criar Arena', ['class'=>'btn btn-primary']) !!}
        {!! Form::reset('Limpar', ['class'=>'btn btn-default']) !!}
    </div>
{!! Form::close() !!}
@endsection