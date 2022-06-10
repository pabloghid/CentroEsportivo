@extends('layouts.master')
@section('title', 'Modalidades')
@section('content')
<h1>Modalidade {{ $modalidade->nome }}</h1>

{!! Form::open(['route'=> ["modalidades.update", 'id'=>$modalidade->id], 'method'=>'put']) !!}
    <div class="form-group">        
        {!! Form::label('nome', 'Nome:') !!}
        {!! Form::text('nome', $modalidade->nome, ['class'=>'form-control', 'required']) !!}
    </div>
    <div class="form-group mt-2">
        {!! Form::submit('Editar Modalidade', ['class'=>'btn btn-primary']) !!}
        {!! Form::reset('Limpar', ['class'=>'btn btn-default']) !!}
    </div>
{!! Form::close() !!}
@endsection