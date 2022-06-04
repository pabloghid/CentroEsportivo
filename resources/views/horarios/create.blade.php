@extends('layouts.master')
@section('title', 'Arenas')
@section('content')
<h1>Aqui cria os horarios</h1>

{!! Form::open(['route'=>'horarios.store']) !!}
    <div class="form-group">        
        {!! Form::label('hora_ini', 'Horario inicial:') !!}
        {!! Form::time('hora_ini', null, ['class'=>'form-control', 'required']) !!}
    </div>
    <div class="form-group">        
        {!! Form::label('hora_fim', 'Horario final:') !!}
        {!! Form::time('hora_fim', null, ['class'=>'form-control', 'required']) !!}
    </div>
    <div class="form-group mt-2">
        {!! Form::submit('Criar Horario', ['class'=>'btn btn-primary']) !!}
        {!! Form::reset('Limpar', ['class'=>'btn btn-default']) !!}
    </div>
{!! Form::close() !!}
@endsection