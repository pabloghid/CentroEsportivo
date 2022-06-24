@extends('layouts.master')
@section('title', 'Registro')
@section('content')
<div class="row d-flex justify-content-center align-items-center h-100">
    <div class="col">
        <div class="card card-registration my-4">
            <div class="row g-0">
                <div class="col-xl-6 d-none d-xl-block">
                    <img src="https://i.pinimg.com/564x/83/24/80/832480f2b2be594a4240c06197c1e966.jpg" height="10%"
                        alt="Sample photo" width="500px" height="300px" class="img-fluid"
                        style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                </div>
                <div class="col-xl-6">
                    <div class="card-body p-md-5 text-black">
                        {!! Form::open(['route'=>'registro.store']) !!}
                        <h3 class="mb-5 text-uppercase">Formulário de Cadastro</h3>
                        <div class="row">
                            <div class="form-outline mb-4">
                                {!! Form::text('nome', null, ['class'=>'form-control form-control-lg', 'required'])
                                !!}
                                {!! Form::label('nome', 'Nome Completo', ['class' => 'form-label']) !!}
                            </div>
                        </div>

                        <div class="form-outline mb-4">
                            {!! Form::text('login', null, ['class'=>'form-control form-control-lg', 'required']) !!}
                            {!! Form::label('login', 'Usuário', ['class' => 'form-label']) !!}
                            @if ($errors->has('login'))
                            <span class="text-danger">{{ $errors->first('login') }}</span>
                            @endif
                        </div>

                        <div class="form-outline mb-4">
                            {!! Form::password('password', ['class'=>'form-control form-control-lg', 'required']) !!}
                            {!! Form::label('password', 'Senha', ['class'=>'form-label']) !!}
                            @if ($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </div>

                        <div class="form-outline mb-4">
                            {!! Form::email('email', null, ['class'=>'form-control form-control-lg', 'required'])
                            !!}
                            {!! Form::label('email', 'E-mail', ['class' => 'form-label']) !!}
                            @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                        <div class="form-outline mb-4">
                            {!! Form::text('telefone', null, ['class'=>'form-control form-control-lg', 'required'])
                            !!}
                            {!! Form::label('telefone', 'Telefone', ['class' => 'form-label']) !!}
                        </div>

                        <div class="d-flex justify-content-end pt-3">
                            {!! Form::submit('Registrar', ['class'=>'btn btn-warning btn-lg ms-2']) !!}
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- <style>
    .header {
        padding: 20px;
    }

    .linha {
        display: flex;
        flex-flow: row wrap;
    }
</style>
<div class="row d-flex justify-content-center align-items-center h-100">
    <div class="col">
        <div class="card card-registration my-4">
            <div class="row g-0">
                <div class="col-xl-6 d-none d-xl-block">
                    <img src="https://i.pinimg.com/564x/83/24/80/832480f2b2be594a4240c06197c1e966.jpg" height="10%"
                        alt="Sample photo" width="500px" height="300px" class="img-fluid"
                        style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />

                    <div class="card-body">
                        {!! Form::open(['route'=>'registro.store']) !!}

                        <div class="row mb-3">
                            {!! Form::label('nome', 'Nome:', ['class' => 'col-md-4 col-form-label text-md-end']) !!}
                            <div class="col-md-6">
                                {!! Form::text('nome', null, ['class'=>'form-control', 'required']) !!}
                            </div>
                        </div>
                        <div class="row mb-3">
                            {!! Form::label('telefone', 'Telefone:', ['class' => 'col-md-4 col-form-label text-md-end'])
                            !!}
                            <div class="col-md-6">
                                {!! Form::text('telefone', null, ['class'=>'form-control', 'required']) !!}
                            </div>
                        </div>
                        <div class="row mb-3">
                            {!! Form::label('email', 'Email:', ['class' => 'col-md-4 col-form-label text-md-end']) !!}
                            <div class="col-md-6">
                                {!! Form::text('email', null, ['class'=>'form-control', 'required']) !!}
                            </div>
                        </div>
                        <div class="row mb-3">
                            {!! Form::label('login', 'Login:', ['class' => 'col-md-4 col-form-label text-md-end']) !!}
                            <div class="col-md-6">
                                {!! Form::text('login', null, ['class'=>'form-control', 'required']) !!}
                            </div>
                        </div>
                        <div class="row mb-3">
                            {!! Form::label('password', 'Senha:', ['class' => 'col-md-4 col-form-label text-md-end'])
                            !!}
                            <div class="col-md-6">
                                {!! Form::password('password', ['class'=>'form-control', 'required']) !!}
                            </div>
                        </div>
                        <div class="row mb-3">
                            {!! Form::label('confirm-password', 'Confirme a senha:', ['class' => 'col-md-4
                            col-form-label text-md-end']) !!}
                            <div class="col-md-6">
                                {!! Form::password('confirm-password', ['class'=>'form-control', 'required']) !!}
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                {!! Form::submit('Registrar', ['class'=>'btn btn-primary']) !!}
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    @endsection