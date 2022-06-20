@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registre-se') }}</div>

                <div class="card-body">
                    {!! Form::open(['route'=>'registro.store']) !!}

                    <div class="row mb-3">        
                        {!! Form::label('nome', 'Nome:', ['class' => 'col-md-4 col-form-label text-md-end']) !!}
                        <div class="col-md-6">
                        {!! Form::text('nome', null, ['class'=>'form-control', 'required']) !!}
                        </div>
                    </div>
                    <div class="row mb-3">        
                        {!! Form::label('telefone', 'Telefone:', ['class' => 'col-md-4 col-form-label text-md-end']) !!}
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
                        {!! Form::label('password', 'Senha:', ['class' => 'col-md-4 col-form-label text-md-end']) !!}
                        <div class="col-md-6">
                        {!! Form::password('password', ['class'=>'form-control', 'required']) !!}
                        </div>
                    </div>
                    <div class="row mb-3">       
                        {!! Form::label('confirm-password', 'Confirme a senha:', ['class' => 'col-md-4 col-form-label text-md-end']) !!}
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
</div>
@endsection