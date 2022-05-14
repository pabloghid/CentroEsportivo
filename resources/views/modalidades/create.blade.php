@extends('layouts.master')
@section('title', 'Modalidades')
@section('content')
<h1>Aqui cria as modalidades</h1>

{!! Form::open(['route'=>'modalidades.store']) !!}
    <div class="form-group">        
        {!! Form::label('nome', 'Nome:') !!}
        {!! Form::text('nome', null, ['class'=>'form-control', 'required']) !!}
    </div>
    <div class="form-group mt-2">
        {!! Form::submit('Criar Modalidade', ['class'=>'btn btn-primary']) !!}
        {!! Form::reset('Limpar', ['class'=>'btn btn-default']) !!}
    </div>
{!! Form::close() !!}
@endsection