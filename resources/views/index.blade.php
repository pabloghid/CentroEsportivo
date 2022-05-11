<!DOCTYPE html>
<html lang="en">
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Untitled</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis

    <title>Document</title>
  </head>

  <body>
  <div>
        <div class="header-dark">
            <nav class="navbar navbar-dark navbar-expand-md navigation-clean-search">
                <div class="container"><a class="navbar-brand" href="#">Thithi</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse"
                        id="navcol-1">
                        <ul class="nav navbar-nav">
                            <li class="nav-item" role="presentation"><a class="nav-link" href="#">Link</a></li>
                            <li class="dropdown"><a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">Dropdown </a>
                                <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">First Item</a><a class="dropdown-item" role="presentation" href="#">Second Item</a><a class="dropdown-item" role="presentation" href="#">Third Item</a></div>
                            </li>
                        </ul>
                        <form class="form-inline mr-auto" target="_self">
                            <div class="form-group"><label for="search-field"><i class="fa fa-search"></i></label><input class="form-control search-field" type="search" name="search" id="search-field"></div>
                        </form><span class="navbar-text"><a href="#" class="login">Log In</a></span><a class="btn btn-light action-button" role="button" href="#">Sign Up</a></div>
                </div>
            </nav>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    </div>
    
    <!-- quadros -->
    <section class="quadro-modalidade">
      <div class="card-grid">
        <a class="card" href='http://127.0.0.1:8000/horarios'>
          <div class="card__background" style="background-image: url(https://i.pinimg.com/564x/87/6e/54/876e54cf2810104f9af88e6bda9a0222.jpg)"></div>
          <div class="card__content">
            <p class="card__category">Modalidade</p>
            <h3 class="card__heading">Futsal</h3>
          </div>
        </a>
        <a class="card" href='http://127.0.0.1:8000/horarios'>
          <div class="card__background" style="background-image: url(https://i.pinimg.com/564x/c8/36/91/c836910ff230a5bc886ba84744b0a121.jpg)"></div>
          <div class="card__content">
            <p class="card__category">Modalidade</p>
            <h3 class="card__heading">Volei</h3>
          </div>
        </a>
        <a class="card" href='http://127.0.0.1:8000/horarios'>
          <div class="card__background" style="background-image: url(https://i.pinimg.com/564x/74/0f/e1/740fe189460ad8c3798b82a97e749bb9.jpg)"></div>
          <div class="card__content">
            <p class="card__category">Modalidade</p>
            <h3 class="card__heading">Basquete</h3>
          </div>
        </li>
        <a class="card" href='http://127.0.0.1:8000/horarios'>
          <div class="card__background" style="background-image: url(https://i.pinimg.com/564x/7d/38/c6/7d38c69b99e52a601c94233ffab85f95.jpg)"></div>
          <div class="card__content">
            <p class="card__category">Modalidade</p>
            <h3 class="card__heading">Tenis</h3>
          </div>
        </a>
      <div>
    </section>
      
  </body>
  <style>
    :root{
      --background-dark: #2d3548;
      --text-light: rgba(255,255,255,0.6);
      --text-lighter: rgba(255,255,255,0.9);
      --spacing-s: 8px;
      --spacing-m: 16px;
      --spacing-l: 24px;
      --spacing-xl: 32px;
      --spacing-xxl: 64px;
      --width-container: 1200px;
    }

    *{
      border: 0;
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    html{
      height: 100%;
      font-family: 'Montserrat', sans-serif;
      font-size: 14px;
    }

    body{
      height: 100%;
    }
/* #231F20 */
    .quadro-modalidade{
      align-items: flex-start;
      background-color: #231F20;
      display: flex;
      min-height: 100%;
      justify-content: center;
      padding: var(--spacing-xxl) var(--spacing-l);
    }

    .card-grid{
      display: grid;
      grid-template-columns: repeat(1, 1fr);
      grid-column-gap: var(--spacing-l);
      grid-row-gap: var(--spacing-l);
      max-width: var(--width-container);
      width: 100%;
    }

    @media(min-width: 540px){
      .card-grid{
        grid-template-columns: repeat(2, 1fr); 
      }
    }

    @media(min-width: 960px){
      .card-grid{
        grid-template-columns: repeat(4, 1fr); 
      }
    }

    .card{
      list-style: none;
      position: relative;
      background-color: #231F20;
      border-radius: 100cm;
    }

    .card:before{
      content: '';
      display: block;
      padding-bottom: 150%;
      width: 100%;
      background-color: #231F20;
    }

    .card__background{
      background-color: #231F20;
      background-size: cover;
      background-position: center;
      border-radius: var(--spacing-l);
      bottom: 0;
      filter: brightness(0.75) saturate(1.2) contrast(0.85);
      left: 0;
      position: absolute;
      right: 0;
      top: 0;
      transform-origin: center;
      transform: scale(1) translateZ(0);
      transition: 
        filter 200ms linear,
        transform 200ms linear;
    }

    .card:hover .card__background{
      transform: scale(1.05) translateZ(0);
    }

    .card-grid:hover > .card:not(:hover) .card__background{
      filter: brightness(0.5) saturate(0) contrast(1.2) blur(20px);
    }

    .card__content{
      left: 0;
      padding: var(--spacing-l);
      position: absolute;
      top: 0;
    }

    .card__category{
      color: var(--text-light);
      font-size: 0.9rem;
      margin-bottom: var(--spacing-s);
      text-transform: uppercase;
    }

    .card__heading{
      color: var(--text-lighter);
      font-size: 1.9rem;
      text-shadow: 2px 2px 20px rgba(0,0,0,0.2);
      line-height: 1.4;
      word-spacing: 100vw;
    }

    .quadro-gramado{
        display: grid;
        width: 100%;
        background-image: url(https://img.freepik.com/fotos-gratis/linha-de-futebol-na-grama-verde-do-campo-de-futebol-fundo-de-campo-gramado-verde_64749-2453.jpg);
    }


      /*  header */


    .header-dark {
  background:url('https://cdn.pixabay.com/photo/2015/10/12/14/59/milky-way-984050_960_720.jpg') #444;
  background-size:cover;
  padding-bottom:80px;
    }

@media (min-width:768px) {
  .header-dark {
    padding-bottom:120px;
  }
  }

.header-dark .navbar {
  background:transparent;
  padding-top:0;
  padding-bottom:0;
  color:#fff;
  border-radius:0;
  box-shadow:none;
  border:none;
  }

@media (min-width:768px) {
  .header-dark .navbar {
    padding-top:.75rem;
    padding-bottom:.75rem;
  }
  }

.header-dark .navbar .navbar-brand {
  font-weight:bold;
  color:inherit;
  }

.header-dark .navbar .navbar-brand:hover {
  color:#f0f0f0;
  }

.header-dark .navbar .navbar-collapse span {
  margin-top:5px;
  }

.header-dark .navbar .navbar-collapse span .login {
  color:#d9d9d9;
  margin-right:.5rem;
  text-decoration:none;
  }

.header-dark .navbar .navbar-collapse span .login:hover {
  color:#fff;
  }

.header-dark .navbar .navbar-toggler {
  border-color:#747474;
  }

.header-dark .navbar .navbar-toggler:hover, .header-dark .navbar-toggler:focus {
  background:none;
  }

.header-dark .navbar .navbar-toggler {
  color:#eee;
  }

.header-dark .navbar .navbar-collapse, .header-dark .navbar .form-inline {
  border-color:#636363;
  }

@media (min-width: 992px) {
  .header-dark .navbar.navbar .navbar-nav .nav-link {
    padding-left:1.2rem;
    padding-right:1.2rem;
  }
  }

.header-dark .navbar.navbar-dark .navbar-nav .nav-link {
  color: #000000;
  }

.header-dark .navbar.navbar-dark .navbar-nav .nav-link:focus, .header-dark .navbar.navbar-dark .navbar-nav .nav-link:hover {
  color:#fcfeff !important;
  background: color #000000;
  }

.header-dark .navbar .navbar-nav > li > .dropdown-menu {
  margin-top:-5px;
  box-shadow:0 4px 8px rgba(0,0,0,.1);
  background-color:#fff;
  border-radius:2px;
  }

.header-dark .navbar .dropdown-menu .dropdown-item:focus, .header-dark .navbar .dropdown-menu .dropdown-item {
  line-height:2;
  font-size:14px;
  color:#37434d;
  }

.header-dark .navbar .dropdown-menu .dropdown-item:focus, .header-dark .navbar .dropdown-menu .drodown-item:hover {
  background:#ebeff1;
  }

.header-dark .navbar .action-button, .header-dark .navbar .action-button:active {
  background:#208f8f;
  border-radius:20px;
  font-size:inherit;
  color:#fff;
  box-shadow:none;
  border:none;
  text-shadow:none;
  padding:.5rem .8rem;
  transition:background-color 0.25s;
  }

.header-dark .navbar .action-button:hover {
  background:#269d9d;
  }

.header-dark .navbar .form-inline label {
  color:#ccc;
  }

.header-dark .navbar .form-inline .search-field {
  display:inline-block;
  width:80%;
  background:none;
  border:none;
  border-bottom:1px solid transparent;
  border-radius:0;
  color:#000000;
  box-shadow:none;
  color:inherit;
  transition:border-bottom-color 0.3s;
  }

.header-dark .navbar .form-inline .search-field:focus {
  border-bottom:1px solid #ccc;
  }









  </style>
</html> 