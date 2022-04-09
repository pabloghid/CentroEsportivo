<!DOCTYPE html>
<html lang="en">
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
  </head>

  <body>
    <div class="quadro-gramado">
        <h1>Testes</h1>
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
      trsnsform: scale(1) translateZ(0);
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

  </style>
</html> 