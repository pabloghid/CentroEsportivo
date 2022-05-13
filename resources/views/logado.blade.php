<script>
    function ConfirmaExclusao(id) {
        swal.fire({
            title: 'Confirma exclusão?',
            text: "Esta ação não poderá ser revertida!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: 'Sim,excluir',
            cancelButtonText: "Cancelar",
            closeOnConfirm: false,
        }).then(function(isConfirm) {
            if (isConfirm.value) {
                $.get('/' + "atores" +
                    '/' + id + '/destroy',
                    function(data) {
                        swal.fire(
                            'Deletado!',
                            'Exclusão Confirmada.',
                            'success'
                        ).then(function() {
                            window.location.reload();
                        });
                    });
            };
        });
    }
</script>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="XiJoJt4qBmDJG4Oig6P8hULJEs1U0JmeWgJkXPs0">

    <title> Thithi </title>

    <link rel="stylesheet" href="http://localhost:8000/vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="http://localhost:8000/vendor/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="http://localhost:8000/vendor/adminlte/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="sidebar-mini">
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">


            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline" action="#" method="get">
                            <input type="hidden" name="_token" value="XiJoJt4qBmDJG4Oig6P8hULJEs1U0JmeWgJkXPs0">
                            <div class="input-group">
                                <input class="form-control form-control-navbar" type="search" name="adminlteSearch" placeholder="search" aria-label="search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

                <li class="nav-item">
                </li>
            </ul>
        </nav>
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="http://localhost:8000/home" class="brand-link ">
                <img src="http://localhost:8000/vendor/adminlte/dist/img/AdminLTELogo.png" alt="LaraFlix" class="brand-image img-circle elevation-3" style="opacity:.8">
                <span class="brand-text font-weight-light ">
                    <b>Thithi</b>
                </span>
            </a>


            <div class="sidebar">
                <nav class="pt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
                        <div>
                            <div class="personal-image">
                                <label class="label">
                                    <input type="file" />
                                    <figure class="personal-figure">
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT_S8PqFSSWaRXiMw1CdgBjZ4gAXXkJJmWZogBy-lCGThsgxf6Oh6Ed-WECo79buk9ljkc&usqp=CAU" class="personal-avatar" alt="avatar">
                                        <figcaption class="personal-figcaption">
                                            <img src="https://raw.githubusercontent.com/ThiagoLuizNunes/angular-boilerplate/master/src/assets/imgs/camera-white.png">
                                        </figcaption>
                                    </figure>
                                </label>
                                <label>
                                </label>
                            </div>

                        </div>

                        <li class="nav-item">
                            <a class="nav-link">
                                    <p>Meu perfil</p>                           
                        </li>

                        <li class="nav-item">                                                            
                                <p>Marcar Jogo</p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>


        <div class="content-wrapper ">



            <div class="content">
                <div class="container-fluid">
                    <h1>Meus horários</h1>
                    <table class="table table-stripe table-bordered table-hover">
                        <thead>
                            <th>Horário</th>
                            <th>Modalidade</th>
                            <th>Quadra</th>
                        </thead>

                        <tbody>
                        </tbody>
                    </table>

                </div>
            </div>

        </div>

    </div>


    <script src="http://localhost:8000/vendor/jquery/jquery.min.js"></script>
    <script src="http://localhost:8000/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="http://localhost:8000/vendor/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <script src="http://localhost:8000/vendor/adminlte/dist/js/adminlte.min.js"></script>

</body>

</html>

<style>


    .personal-image {
  text-align: center;
}
.personal-image input[type="file"] {
  display: none;
}
.personal-figure {
  position: relative;
  width: 120px;
  height: 120px;
}
.personal-avatar {
  cursor: pointer;
  width: 120px;
  height: 120px;
  box-sizing: border-box;
  border-radius: 100%;
  border: 2px solid transparent;
  box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.2);
  transition: all ease-in-out .3s;
}
.personal-avatar:hover {
  box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.5);
}
.personal-figcaption {
  cursor: pointer;
  position: absolute;
  top: 0px;
  width: inherit;
  height: inherit;
  border-radius: 100%;
  opacity: 0;
  background-color: rgba(0, 0, 0, 0);
  transition: all ease-in-out .3s;
}
.personal-figcaption:hover {
  opacity: 1;
  background-color: rgba(0, 0, 0, .5);
}
.personal-figcaption > img {
  margin-top: 32.5px;
  width: 50px;
  height: 50px;
}
</style>