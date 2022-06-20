<!DOCTYPE html>
<html lang="en">
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin='anonymous'></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seleciona Horário</title>

    </head>
<body>
    

    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand">Centro Esportivo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link" href="#">Jogos</a>
                <a class="nav-link" href="#">Marcar Jogos</a>
                <a class="nav-link" href="#">Sobre</a>
            </div>
            </div>
        </div>
    </nav>

    <section class="vh-100" style="background-color:#ffffe0">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
              <div class="card" style="border-radius: 1rem;">
                <div class="row g-0">
                  <div class="col-md-6 col-lg-7 d-none d-md-block">

                    <h2 style="font-family: Constantia; font-weight: bold; padding: 5px;  text-align: center;"> Marque Um Horario </h2>

                    <form style="padding: 30px;">


                        <div calss = "select" style="padding: 10px;">
                            <h5 class="fw-normal" style="letter-spacing: 1px;">Selecione uma Modalidade</h5>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Modalidade</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>

                        <div calss = "select" style="padding: 10px;">
                            <h5 class="fw-normal " style="letter-spacing: 1px;">Selecione uma Arena</h5>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Arena</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select> 
                        </div calss = "select">

                        <div calss = "select" style="padding: 10px;">
                            <h5 class="fw-normal " style="letter-spacing: 1px;">Selecione uma Data</h5>
                            <input class="form-control" id="disabledInput" type="date">
                        </div>

                        <div calss = "select" style="padding: 10px;">
                            <h5 class="fw-normal " style="letter-spacing: 1px;">Selecione um Horario</h5>
                            <select class="form-select" size="3" aria-label="size 3 select example">
                                <option selected>Horarios</option>
                                <option value="1">12:00</option>
                                <option value="2">15:00</option>
                                <option value="3">18:00</option>
                            </select>
                        </div>
                    </form>


    

                        <div style="padding: 10px; display: inline-block;">
                            <button type="button" class="btn btn-warning">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-checklist" viewBox="0 0 16 16">
                            <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                            <path d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0zM7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z"/>
                            </svg>
                            Gravar
                        </button>

                        </div>

                    </div>
                    
                    <div class="col-md-6 col-lg-5 d-flex align-items-center">
                        <div class="card-body p-4 p-lg-5 text-black" >
        
                        <img
                            src="https://i.pinimg.com/564x/c6/a4/5b/c6a45bb98b0a6c3836c903f5587d349a.jpg"
                            alt="login form"
                            class="img-fluid" style="border-radius: 1rem 0 0 1rem;"
                        />

                        <div class="card" style="display: block; background-color: deepskyblue; position: relative; margin: 10px; text-align: center;">
                            <div class="card-body">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cloud-hail" viewBox="0 0 16 16">
                                    <path d="M13.405 4.527a5.001 5.001 0 0 0-9.499-1.004A3.5 3.5 0 1 0 3.5 10.5H13a3 3 0 0 0 .405-5.973zM8.5 1.5a4 4 0 0 1 3.976 3.555.5.5 0 0 0 .5.445H13a2 2 0 0 1-.001 4H3.5a2.5 2.5 0 1 1 .605-4.926.5.5 0 0 0 .596-.329A4.002 4.002 0 0 1 8.5 1.5zM3.75 15.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0zm.408-3.724a.5.5 0 0 1 .316.632l-.5 1.5a.5.5 0 1 1-.948-.316l.5-1.5a.5.5 0 0 1 .632-.316zM7.75 15.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0zm.408-3.724a.5.5 0 0 1 .316.632l-.5 1.5a.5.5 0 1 1-.948-.316l.5-1.5a.5.5 0 0 1 .632-.316zm3.592 3.724a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0zm.408-3.724a.5.5 0 0 1 .316.632l-.5 1.5a.5.5 0 1 1-.948-.316l.5-1.5a.5.5 0 0 1 .632-.316z"/>
                                  </svg>
                              Previsao do Tempo no Dia
                            </div>
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

        .weather{
            display: inline-block;
        }

        .nav-link{
            color: #000000;
        }

        .navbar-brand {
            color: #000000;
        }

    </style>
</html>