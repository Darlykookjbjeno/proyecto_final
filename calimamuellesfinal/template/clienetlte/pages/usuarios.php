<?php

require_once('../../../usuarios.php');
$Modelousuario = new Usuario();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | Lista Usuarios</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../../css/adminlte.min.css">

  <link rel="stylesheet" href="../../../css/arreglosadmin.css">


</head>





<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
          <a class="nav-link" data-widget="navbar-search" href="#" role="button">
            <i class="fas fa-search"></i>
          </a>
          <div class="navbar-search-block">
            <form class="form-inline">
              <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
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

        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
            <img src="../../../img/usuario.png" width="30" height="30">
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="left: inherit; right: 0px;">
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Editar Perfil
                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                  </h3>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <!--<a href="#" class="dropdown-item">
              
              <div class="media">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Ver Mis Compras
                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                  </h3>
                </div>
              </div>-->
            <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="http://localhost/html/calimamuellesfinal/usuarios/controlador/salir.php" class="dropdown-item dropdown-footer" id="salir-irse2">salir</a>
          </div>
        </li>



      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="usuarios.php" class="brand-link">
        <img src="../../../img/lgo.png" alt="AdminLTE Logo" class="brand-image ">
        <span class="brand-text font-weight-light">CalimaMuelles</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="../../../img/admin.png" class="img-circle " alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Administrador</a>
          </div>
        </div>



        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
            <li class="nav-item menu-open">
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="http://localhost/html/calimamuellesfinal/template/clienetlte/pages/usuarios.php" class="nav-link">
                    <i class="far fa-user-circle"></i>
                    <p>Usuarios</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="http://localhost/html/calimamuellesfinal/template/clienetlte/pages/categorias.php" class="nav-link">
                    <i class="far fa-window-maximize "></i>
                    <p>Categorias</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="http://localhost/html/calimamuellesfinal/template/clienetlte/pages/productos.php" class="nav-link">
                    <i class="far fa-window-restore "></i>
                    <p>Productos</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="http://localhost/html/calimamuellesfinal/template/clienetlte/pages/imagenes.php" class="nav-link">
                    <i class="far fa-id-badge"></i>
                    <p>imagenes</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="http://localhost/html/calimamuellesfinal/template/clienetlte/pages/metodosPago.php" class="nav-link">
                    <i class="far fa-id-card "></i>
                    <p>Metodos de Pago</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="http://localhost/html/calimamuellesfinal/template/clienetlte/pages/orden.php" class="nav-link">
                    <i class="far fa-envelope-open "></i>
                    <p>Ordenes</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="http://localhost/html/calimamuellesfinal/template/clienetlte/pages/detallesOrden.php" class="nav-link">
                    <i class="far fa-envelope-open "></i>
                    <p>Detalles de Ordene</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="http://localhost/html/calimamuellesfinal/template/clienetlte/pages/domicilios.php" class="nav-link">
                    <i class="far fa-envelope-open "></i>
                    <p>Domicilio</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="http://localhost/html/calimamuellesfinal/template/clienetlte/pages/agregarAdmin.php" class="nav-link">
                    <i class="far fa-envelope-open "></i>
                    <p>Agregar Administrador</p>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </nav>
      </div>
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper " style="min-height: 701px;">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Usuarios</h1>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Lista Usuarios</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0 ">
                  <table class="table table-hover text-nowrap ">
                    <thead>
                      <tr>
                        <th>id</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Telefono</th>
                        <th>Email</th>
                        <th> Rol</th>

                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $listarusuarios = $Modelousuario->verusuario();
                      if ($listarusuarios != Null) {
                        foreach ($listarusuarios as $listausuario) {
                      ?>

                          <tr>
                            <td><?= $listausuario['id_usuario']; ?></td>
                            <td><?= $listausuario['nombres']; ?></td>
                            <td><?= $listausuario['apellidos']; ?></td>
                            <td><?= $listausuario['telefono']; ?></td>
                            <td><?= $listausuario['email']; ?></td>
                            <td><?= $listausuario['nombre_rol']; ?></td>

                          </tr>
                      <?php
                        }
                      }
                      ?>
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                  <ul class="pagination pagination-sm m-0 float-right">
                    <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                  </ul>
                </div>
                <!-- /.card -->
                <!-- /.content-wrapper -->
              </div>
            </div>

            <hr>



          </div>
        </div>
      </section>
    </div>
  </div>




  <!-- /.control-sidebar -->

  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../../../js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../../../js/demo.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  <script src="js/app.js"></script>
  <script src="../../../js/alertas.js"></script>
  <script>
    $(document).ready(function() {
      load(1);
    });
  </script>

</body>

</html>