@extends('layouts.master')
@section('title', 'Admins')
@section('content')
<h1>Aqui cria os admins</h1>

{!! Form::open(['route'=>'administradores.store']) !!}
    <div class="form-group">        
        {!! Form::label('pessoa_id', 'Usuário') !!}
        {!! Form::select('pessoa_id', $pessoas, ['class'=>'form-control', 'required']) !!}
    </div>
    <div class="form-group mt-2">
        {!! Form::submit('Criar Administrador', ['class'=>'btn btn-primary']) !!}
        {!! Form::reset('Limpar', ['class'=>'btn btn-default']) !!}
    </div>
{!! Form::close() !!}
@endsection