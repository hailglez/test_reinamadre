<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Inicio</title>

    </head>

         <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="../layouts/assets/css/bootstrap.min.css">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="../layouts/assets/css/style.css">
        <link rel="stylesheet" href="../layouts/assets/awesome/font-awesome.css">
        <link rel="stylesheet" href="../layouts/assets/css/animate.css">
    </head>
    <body>
    <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar" class="sammacmedia">
                <div class="sidebar-header">
                <img src="../layouts/assets/image/logo-reina-madre.jpg" class="img-thumbnail">

                    <strong> </strong>
                </div>
                <ul class="list-unstyled components">
                    <li  class="active">
                        <a href="../admin/dashboard.php">
                            <i class="fa fa-th"></i>
                           Inicio</a>
                    </li>
                    <?php
                  
                    ?>
                    <li>
                        <a href="../layouts/a_users.php">
                            <i class="fa fa-user"></i>
                            Añadir Usuarios</a>
                    </li>
                    <li>
                        <a href="../layouts/v_users.php">
                            <i class="fa fa-table"></i>
                            Ver Usuarios</a>
                    </li>
                    <li>
                    <a href="a_empresas.php">
                            <i class="fa fa-list"></i>
                         Añadir Empresas,Desaprtamentos</a>
                    </li>
                    <li>
                        <a href="settings.php">
                            <i class="fa fa-cog"></i>
                            Ajustes </a>
                    </li>
                </ul>
            </nav>

            <!-- Page Content Holder -->
            <div id="content">

                <div clas="col-md-12">
                    <img src="../layouts/assets/image/Screenshot_3.png" class="img-thumbnail">
                    </div>

                <nav class="navbar navbar-default sammacmedia">
                    <div class="container-fluid">

                        <div class="navbar-header" id="sams">
                            <button type="button" id="sidebarCollapse" id="makota" class="btn btn-sam animated tada navbar-btn">
                                <i class="glyphicon glyphicon-align-left"></i>
                                <span>Menú</span>
                            </button>
                        </div>
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <button class="nav navbar-nav navbar-right  makotasamuel">
                                <li><a href="#"></a></li>
                                <li ><a href="logout.php"><i class="fa fa-power-off"> Cerrar sesión</i></a></li>
                            </ul>
                        </div>
                    </div>
                </nav>