@extends('layouts.masterAdmin')
@section('title', 'Admin')
@section('content')
<div class="row d-flex justify-content-center align-items-center">
    <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem">
            <div class="card-body p-4">
                <div class="row g-0">
                    <h2 style="font-family: Constantia; font-weight: bold; padding: 5px;  text-align: center;">
                        Editando Horário de ID {{ $horarios->id }} </h2>

                    {!! Form::open(['route'=> ["horarios.update", 'id'=>$horarios->id], 'method'=>'put']) !!}
                    <div class="form-group mt-3">
                        <h5 class="fw-normal mt-3" style="letter-spacing: 1px;">Horario inicial:</h5>
                        {!! Form::time('hora_ini', $horarios->hora_ini, ['class'=>'form-control', 'required']) !!}
                    </div>
                    <div class="form-group mt-3">
                        <h5 class="fw-normal mt-3" style="letter-spacing: 1px;">Horario final:</h5>
                        {!! Form::time('hora_fim', $horarios->hora_fim, ['class'=>'form-control', 'required']) !!}
                    </div>
                    <div class="form-group mt-2">
                        {!! Form::submit('Editar Horario', ['class'=>'btn btn-warning']) !!}
                        {!! Form::reset('Limpar', ['class'=>'btn btn-default']) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection