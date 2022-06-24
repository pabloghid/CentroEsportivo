<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('admin', []) }}">Admin</a>
        <a class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span href="{{route('admin', []) }}" class="navbar-toggler-icon"></span>
        </a>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link" href="{{route('arenas', []) }}">Arenas</a>
                <a class="nav-link" href="{{route('modalidades', []) }}">Modalidades</a>
                <a class="nav-link" href="{{route('arenaModalidades', []) }}">Modalidades da arena</a>
                <a class="nav-link" href="{{route('administradores', []) }}">Administradores</a>
                <a class="nav-link" href="{{route('horarios', []) }}">Horários</a>
                <a class="nav-link" href="{{route('pessoas', []) }}">Pessoas</a>
            </div>
        </div>
        <ul class="nav navbar-nav navbar-right">
            <li><a class="nav-link" href="{{route('jogos', []) }}">Centro Esportivo</a></li>
            <li><a class="nav-link" href="{{route('logout', []) }}">Logout</a></li>
        </ul>
    </div>
</nav>