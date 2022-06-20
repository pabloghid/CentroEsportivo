<!DOCTYPE html>
<html lang="en">
    
<head>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/design.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar</title>
</head>
  <body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <section style ="background-color: #ffffe0">
      <div class="container py-7 h-50">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col">
            <div class="card card-registration my-4">
              <div class="row g-0">
                <div class="col-xl-6 d-none d-xl-block" >
                  <img
                    src="https://i.pinimg.com/564x/83/24/80/832480f2b2be594a4240c06197c1e966.jpg"
                    height="10%"
                    alt="Sample photo"
                    width="500px"
                    height="300px"
                    class="img-fluid"
                    style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;"
                  />
                </div>
                <div class="col-xl-6">
                  <div class="card-body p-md-5 text-black">
                    <h3 class="mb-5 text-uppercase">Formulário de Cadastro</h3>
    
                    <div class="row">
                      <div class="col-md-6 mb-4">
                        <div class="form-outline">
                          <input type="text" id="form3Example1m" class="form-control form-control-lg" />
                          <label class="form-label" for="form3Example1m">Primeiro Nome</label>
                        </div>
                      </div>
                      <div class="col-md-6 mb-4">
                        <div class="form-outline">
                          <input type="text" id="form3Example1n" class="form-control form-control-lg" />
                          <label class="form-label" for="form3Example1n">Último Nome</label>
                        </div>
                      </div>
                    </div>
          
                    <div class="form-outline mb-4">
                      <input type="text" id="form3Example8" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Example8">CPF</label>
                    </div>

                    <div class="form-outline mb-4">
                      <input type="text" id="form3Example8" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Example8">Senha</label>
                    </div>
    
                    <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">
    
                      <h6 class="mb-0 me-4">Gênero: </h6>
    
                      <div class="form-check form-check-inline mb-0 me-4">
                        <input
                          class="form-check-input"
                          type="radio"
                          name="inlineRadioOptions"
                          id="femaleGender"
                          value="option1"
                        />
                        <label class="form-check-label" for="femaleGender">Feminino</label>
                      </div>
    
                      <div class="form-check form-check-inline mb-0 me-4">
                        <input
                          class="form-check-input"
                          type="radio"
                          name="inlineRadioOptions"
                          id="maleGender"
                          value="option2"
                        />
                        <label class="form-check-label" for="maleGender">Masculino</label>
                      </div>
    
                      <div class="form-check form-check-inline mb-0">
                        
                        
                      </div>
    
                    </div>
    

                    <div class="form-outline mb-4">
                      <input type="text" id="form3Example99" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Example99">E-mail</label>
                    </div>
    
                    <div class="d-flex justify-content-end pt-3">
                      <button type="button" class="btn btn-warning btn-lg ms-2">Gravar</button>
                    </div>
    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </body>
  <style>
    .header{
      padding: 20px;
    }

    .linha{
      display: flex;
      flex-flow: row wrap;
    }
  </style>