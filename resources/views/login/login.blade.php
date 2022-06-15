@extends('layouts.master')
@section('title', 'Jogos')
@section('content')

<section class="vh-100"
  style="background-image: url('https://www.teahub.io/photos/full/84-844838_2560x1440-fc-barcelona-camp-nou-mosaic-ucl-wallpaper.jpg'); ">
  <div class="row d-flex justify-content-center align-items-center h-100">
    <div class="col col-xl-10">
      <div class="card" style="border-radius: 1rem;">
        <div class="row g-0">
          <div class="col-md-6 col-lg-5 d-none d-md-block">
            <img
              src="https://images.ctfassets.net/3mv54pzvptwz/60OuRSAurNnU87BhrCOzlu/3b9e76a614e6195a2721047a9af5f751/001.jpg"
              alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
          </div>
          <div class="col-md-6 col-lg-7 d-flex align-items-center">
            <div class="card-body p-4 p-lg-5 text-black">

              {!! Form::open(['route'=>'login.verificar']) !!}

              <div class="d-flex align-items-center mb-3 pb-1">
                <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                <span class="h1 fw-bold mb-0">Thiti</span>
              </div>

              <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Entre com a sua conta</h5>

              <div class="form-outline mb-4">
                {!! Form::label('email', 'Endereço de Email', ['class'=>'form-label']) !!}
                {!! Form::email('email', null, ['class'=>'form-control form-control-lg', 'required']) !!}
              </div>

              <div class="form-outline mb-4">
                {!! Form::label('password', 'Senha', ['class'=>'form-label']) !!}
                {!! Form::password('password', ['class'=>'form-control form-control-lg', 'required']) !!}
              </div>

              <div class="pt-1 mb-4">
                {!! Form::submit('Criar Modalidade', ['class'=>'btn btn-dark btn-lg btn-block']) !!}
              </div>

              <a class="small text-muted" href="#!">Esqueceu a senha?</a>
              <p class="mb-5 pb-lg-2" style="color: #393f81;">Não possui uma conta? <a href="#!"
                  style="color: #393f81;">Registre-se</a></p>

              {!! Form::close() !!}

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection