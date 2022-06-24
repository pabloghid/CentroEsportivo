<nav class="navbar navbar-expand-lg  bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route('jogos', []) }}">Centro Esportivo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
      aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('jogos', []) }}">Jogos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('jogos.create', []) }}">Marcar jogo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('sobre', []) }}">Sobre</a>
        </li>
      </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a class="nav-link" href="{{route('admin', []) }}">Admin</a></li>
          <li><a class="nav-link" href="{{route('logout', []) }}">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>