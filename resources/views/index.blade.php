<!DOCTYPE html>
<html lang="en">
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="resources\css\index.css"/>
    <title>Modalidades</title>
  </head>

  <body style="background-color:#ffffe0">

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
   

    <section class="vh-100">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col col-xl-10">
            <div class="card" style="border-radius: 1rem;">
              <div class="row g-0" >

                <div class = "BemVindo">
                  <h1 class = "Texto">Bem Vindo </h1>
                  <h1>Eduardo</h1>
                </div>

                

                <div class = "tabela">
                  <h5 class="fw-normal " style="letter-spacing: 1px;">Seus jogos marcados:</h5>

                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Arena</th>
                        <th scope="col">Data</th>
                        <th scope="col">Horario</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Eduardo</td>
                        <td>arena 1</td>
                        <td>05/08/2022</td>
                        <td>09:00</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Eduardo</td>
                        <td>arena 6</td>
                        <td>12/05/2023</td>
                        <td>15:30</td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Eduardo</td>
                        <td>05/08/2022</td>
                        <td>12:00</td>
                      </tr>
                    </tbody>
                  </table>

                </div>

                <div class = "Botao">

                  <button type="button" class="btn btn-warning">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-checklist" viewBox="0 0 16 16">
                      <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                      <path d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0zM7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z"/>
                    </svg>
                    Marcar novo jogo
                  </button>

                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
  
    </section>

    


  </body>



  <style>

    .tabela {
      padding: 30px;
    }

    .BemVindo{
      text-align: center;
      margin top: 40px;

    }

    .Texto{
      
      font-weight: bold;
      color: #ffc107;
      font-family: Constantia;
      text-transform: uppercase;
      
    }

    .Botao{
      padding: 30px;
    }

    .nav-link{
        color: #000000;
    }

    .navbar-brand {
        color: #000000;
    }

  </style>

</html> 