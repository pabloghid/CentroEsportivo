<script>
        function ConfirmaExclusao(id){
            swal.fire({
                title: 'Confirma exclusão?', text: "Esta ação não poderá ser revertida!",
                type: "warning", showCancelButton: true, 
 confirmButtonColor: "#3085d6", cancelButtonColor: "#d33", confirmButtonText: 'Sim,excluir', cancelButtonText: "Cancelar", closeOnConfirm: false,
                }).then(function(isConfirm) {
                    if (isConfirm.value) {
                        $.get('/' + "atores"
 + '/'+id+'/destroy', function(data){
                            swal.fire(
                                'Deletado!',
                                'Exclusão Confirmada.',
                                'success'
                                ).then(function(){
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
    
    
    <title> LaraFlix </title>

    
    
    
            <link rel="stylesheet" href="http://localhost:8000/vendor/fontawesome-free/css/all.min.css">
        <link rel="stylesheet" href="http://localhost:8000/vendor/overlayScrollbars/css/OverlayScrollbars.min.css">

        
        
        <link rel="stylesheet" href="http://localhost:8000/vendor/adminlte/dist/css/adminlte.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    
    
    
    
            
    
    
</head>

<body class="sidebar-mini" >

    
        <div class="wrapper">

        
                    <nav class="main-header navbar
    navbar-expand
    navbar-white navbar-light">

    
    <ul class="navbar-nav">
        
        <li class="nav-item">
    <a class="nav-link" data-widget="pushmenu" href="#"
                        >
        <i class="fas fa-bars"></i>
        <span class="sr-only">Toggle navigation</span>
    </a>
</li>
        
        
        
            </ul>

    
    <ul class="navbar-nav ml-auto">
        
        
        
        <li class="nav-item">

    
    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
        <i class="fas fa-search"></i>
    </a>

    
    <div class="navbar-search-block">
        <form class="form-inline" action="#" method="get">
            <input type="hidden" name="_token" value="XiJoJt4qBmDJG4Oig6P8hULJEs1U0JmeWgJkXPs0">

            <div class="input-group">

                
                <input class="form-control form-control-navbar" type="search"
                                        name="adminlteSearch"
                    placeholder="search"
                    aria-label="search">

                
                <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                        <i class="fas fa-times"></i>
                    </button>
                </div>

            </div>
        </form>
    </div>

</li>

<li class="nav-item">
    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
        <i class="fas fa-expand-arrows-alt"></i>
    </a>
</li>


        
        
        
            </ul>

</nav>
        
        
                    <aside class="main-sidebar sidebar-dark-primary elevation-4">

    
            <a href="http://localhost:8000/home"
            class="brand-link "
    >

    
    <img src="http://localhost:8000/vendor/adminlte/dist/img/AdminLTELogo.png"
         alt="LaraFlix"
         class="brand-image img-circle elevation-3"
         style="opacity:.8">

    
    <span class="brand-text font-weight-light ">
        <b>Lara</b>Flix
    </span>

</a>
    
    
    <div class="sidebar">
        <nav class="pt-2">
            <ul class="nav nav-pills nav-sidebar flex-column "
                data-widget="treeview" role="menu"
                                >
                
                <li>

    <div class="form-inline my-2">
        <div class="input-group" data-widget="sidebar-search" data-arrow-sign="&raquo;">

            
            <input class="form-control form-control-sidebar" type="search"
                                placeholder="search"
                aria-label="search">

            
            <div class="input-group-append">
                <button class="btn btn-sidebar">
                    <i class="fas fa-fw fa-search"></i>
                </button>
            </div>

        </div>
    </div>

</li>

<li  class="nav-item">

    <a class="nav-link  "
       href="http://localhost:8000/admin/pages"        >

        <i class="far fa-fw fa-file "></i>

        <p>
            Pages

                            <span class="badge badge-success right">
                    4
                </span>
                    </p>

    </a>

</li>

<li  class="nav-header ">

    ATORES

</li>

<li  class="nav-item">

    <a class="nav-link active "
       href="http://localhost:8000/atores"        >

        <i class="fas fa-fw fa-user "></i>

        <p>
            Atores

                    </p>

    </a>

</li>

<li  class="nav-item">

    <a class="nav-link  "
       href="http://localhost:8000/nacionalidades"        >

        <i class="fas fa-fw fa-flag "></i>

        <p>
            Nacionalidades

                    </p>

    </a>

</li>

<li  class="nav-item">

    <a class="nav-link  "
       href="http://localhost:8000/admin/settings"        >

        <i class="fas fa-fw fa-lock "></i>

        <p>
            Change Password

                    </p>

    </a>

</li>

<li  class="nav-item has-treeview ">

    
    <a class="nav-link  "
       href="" >

        <i class="fas fa-fw fa-share "></i>

        <p>
            Multi Level
            <i class="fas fa-angle-left right"></i>

                    </p>

    </a>

    
    <ul class="nav nav-treeview">
        <li  class="nav-item">

    <a class="nav-link  "
       href="#"        >

        <i class="far fa-fw fa-circle "></i>

        <p>
            Level 1

                    </p>

    </a>

</li>

<li  class="nav-item has-treeview ">

    
    <a class="nav-link  "
       href="" >

        <i class="far fa-fw fa-circle "></i>

        <p>
            Level 1
            <i class="fas fa-angle-left right"></i>

                    </p>

    </a>

    
    <ul class="nav nav-treeview">
        <li  class="nav-item">

    <a class="nav-link  "
       href="#"        >

        <i class="far fa-fw fa-circle "></i>

        <p>
            Level 2

                    </p>

    </a>

</li>

<li  class="nav-item has-treeview ">

    
    <a class="nav-link  "
       href="" >

        <i class="far fa-fw fa-circle "></i>

        <p>
            Level 2
            <i class="fas fa-angle-left right"></i>

                    </p>

    </a>

    
    <ul class="nav nav-treeview">
        <li  class="nav-item">

    <a class="nav-link  "
       href="#"        >

        <i class="far fa-fw fa-circle "></i>

        <p>
            Level 3

                    </p>

    </a>

</li>

<li  class="nav-item">

    <a class="nav-link  "
       href="#"        >

        <i class="far fa-fw fa-circle "></i>

        <p>
            Level 3

                    </p>

    </a>

</li>

    </ul>

</li>

    </ul>

</li>

<li  class="nav-item">

    <a class="nav-link  "
       href="#"        >

        <i class="far fa-fw fa-circle "></i>

        <p>
            Level 1

                    </p>

    </a>

</li>

    </ul>

</li>

<li  class="nav-header ">

    LABELS

</li>

<li  class="nav-item">

    <a class="nav-link  "
       href="#"        >

        <i class="far fa-fw fa-circle text-red"></i>

        <p>
            Important

                    </p>

    </a>

</li>

<li  class="nav-item">

    <a class="nav-link  "
       href="#"        >

        <i class="far fa-fw fa-circle text-yellow"></i>

        <p>
            Warning

                    </p>

    </a>

</li>

<li  class="nav-item">

    <a class="nav-link  "
       href="#"        >

        <i class="far fa-fw fa-circle text-cyan"></i>

        <p>
            Information

                    </p>

    </a>

</li>

            </ul>
        </nav>
    </div>

</aside>
        
        
                    <div class="content-wrapper ">
   
    
    
    <div class="content">
        <div class="container-fluid">
                <h1>Atores</h1>
    <table class="table table-stripe table-bordered table-hover">
            <thead>
                <th>Nome</th>
                <th>Data de Nascimento</th>
                <th>Ações</th>
            </thead>

        <tbody>
                    </tbody>
    </table>
   

    <a href="http://localhost:8000/atores/create" class="btn btn-info">Adicionar</a>
        </div>
    </div>

</div>    
                    
    </div>

    
            <script src="http://localhost:8000/vendor/jquery/jquery.min.js"></script>
        <script src="http://localhost:8000/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="http://localhost:8000/vendor/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

        
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@8" ></script>
            
                
        <script src="http://localhost:8000/vendor/adminlte/dist/js/adminlte.min.js"></script> 
    
            
</body>

</html>
