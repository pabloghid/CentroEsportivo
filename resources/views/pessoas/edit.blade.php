@extends('layouts.masterAdmin')
@section('title', 'Admin')
@section('content')
<div class="row d-flex justify-content-center align-items-center">
    <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem">
            <div class="card-body p-4">
                <div class="row g-0">

                    <h2 style="font-family: Constantia; font-weight: bold; padding: 5px;  text-align: center;">
                        Editando modalidade {{ $modalidade->nome }} </h2>

                    {!! Form::open(['route'=> ["modalidades.update", 'id'=>$modalidade->id], 'method'=>'put']) !!}
                    <div class="form-group mt-3">
                        <h5 class="fw-normal mt-3" style="letter-spacing: 1px;">Nome da modalidade:</h5>
                        {!! Form::text('nome', $modalidade->nome, ['class'=>'form-control', 'required']) !!}
                    </div>
                    <div class="form-group mt-2">
                        {!! Form::submit('Editar Modalidade', ['class'=>'btn btn-primary']) !!}
                        {!! Form::reset('Limpar', ['class'=>'btn btn-default']) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection