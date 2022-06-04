@extends('layouts.master')
@section('title', 'Modalidades')
@section('content')
<h1>Modalidade {{ $horarios->id }}</h1>

{!! Form::open(['route'=> ["horarios.update", 'id'=>$horarios->id], 'method'=>'put']) !!}
    <div class="form-group">        
        {!! Form::label('hora_ini', 'Horario inicial:') !!}
        {!! Form::time('hora_ini', $horarios->hora_ini, ['class'=>'form-control', 'required']) !!}
    </div>
    <div class="form-group">        
        {!! Form::label('hora_fim', 'Horario final:') !!}
        {!! Form::time('hora_fim', $horarios->hora_fim, ['class'=>'form-control', 'required']) !!}
    </div>
    <div class="form-group mt-2">
        {!! Form::submit('Editar Horario', ['class'=>'btn btn-primary']) !!}
        {!! Form::reset('Limpar', ['class'=>'btn btn-default']) !!}
    </div>
{!! Form::close() !!}
@endsection