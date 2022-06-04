@extends('layouts.master')
@section('title', 'Horários')
@section('content')
<h1>Aqui cria os jogos</h1>

{!! Form::open(['route'=>'jogos.store']) !!}
    <div class="form-group">        
        {!! Form::label('horario_id', 'Horarios:') !!}
        {!! Form::select('horario_id', $horariosDisponiveis, ['class'=>'form-control', 'required']) !!}
    </div>
    <div class="form-group mt-2">
        {!! Form::submit('Criar Modalidade', ['class'=>'btn btn-primary']) !!}
        {!! Form::reset('Limpar', ['class'=>'btn btn-default']) !!}
    </div>
{!! Form::close() !!}

@endsection