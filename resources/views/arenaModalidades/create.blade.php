@extends('layouts.masterAdmin')
@section('title', 'Admin')
@section('content')
<div class="row d-flex justify-content-center align-items-center h-100">
    <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem">
            <div class="card-body p-4">
                <div class="row g-0">

                    <h2 style="font-family: Constantia; font-weight: bold; padding: 5px;  text-align: center;">
                        Cadastrar
                        uma modalidade da arena </h2>


                    {!! Form::open(['route'=>'arenaModalidades.store']) !!}
                    <div class="form-group mt-3">
                        <h5 class="fw-normal" style="letter-spacing: 1px;">Arena:</h5>
                        {!! Form::select('arena_id',
                        \App\Models\Arena::orderBy('id')->pluck('nome', 'id')->toArray(), null,
                        ['class'=>'form-control', 'required']) !!}
                    </div>
                    <div class="form-group mt-3">
                        <h5 class="fw-normal" style="letter-spacing: 1px;">Modalidade:</h5>
                        {!! Form::select('modalidade_id',
                        \App\Models\Modalidade::orderBy('id')->pluck('nome', 'id')->toArray(), null,
                        ['class'=>'form-control', 'required']) !!}
                    </div>
                    <div class="form-group mt-2">
                        {!! Form::submit('Cadastrar', ['class'=>'btn btn-warning']) !!}
                        {!! Form::reset('Limpar', ['class'=>'btn btn-light']) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection