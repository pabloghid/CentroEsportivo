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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <section class="vh-100" style="background-color:#ffffe0">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
              <div class="card" style="border-radius: 1rem;">
                <div class="row g-0">

                  <h2 style="font-family: Constantia; font-weight: bold; padding: 5px;  text-align: center;"> Arenas </h2>
                  
                  <div class = "tabela">
                    <h5 class="fw-normal " style="letter-spacing: 1px;">Arenas cadastradas</h5>

                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Nome</th>
                          <th scope="col">Valor</th>
                          <th scope="col">Descrição</th>
                          <th scope="col"></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>Quadra areia 1</td>
                          <td>100,00</td>
                          <td>Quadra com vista para o mar</td>
                          <td>
                            <button type="button" class="btn btn-primary">Editar</button>
                            <button type="button" class="btn btn-danger">Apagar</button>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>Quadra salao 1</td>
                          <td>100,00</td>
                          <td>Quadra sem arquibancada</td>
                          <td>
                            <button type="button" class="btn btn-primary">Editar</button>
                            <button type="button" class="btn btn-danger">Apagar</button>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td>Quadra salao 2</td>
                          <td>100,00</td>
                          <td>Quadra com arquibancada</td>
                          <td>
                            <button type="button" class="btn btn-primary">Editar</button>
                            <button type="button" class="btn btn-danger">Apagar</button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>

                  <div class = "Botao">
                    <button type="button" class="btn btn-success">Adicionar</button>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

  </body>
  <style>

    .Botao{
      margin: 40px;
    }

    .tabela{
      padding: 50px;
    }

    .nav-link{
        color: #000000;
    }

    .navbar-brand {
        color: #000000;
    }

</style>
</html>