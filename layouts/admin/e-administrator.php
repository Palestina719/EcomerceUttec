<?php
include "../../conexion.php";
require_once("../../sesion.class.php");
$sesion = new sesion();
$usuario = $sesion->get("usuario");
@$id = $_GET['id'];
if ($usuario == false) :
    header("Location: index.php");
else : ?>
    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Electronics - Productos</title>
        <!-- Bootstrap Core CSS -->
        <link href="../../css/bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="../../css/shop-homepage.css" rel="stylesheet">
    </head>

    <body>
    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Menú</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <img class="img-rounded" src="../../files/main_images/logo.JPG" alt="Dispute Bills">
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="../../index.php">Vista previa</a>
                    </li>
                    <li>
                        <a href="#">Guía</a>
                    </li>
                    <li>
                        <a href="#">Contacto con soporte</a>
                    </li>
                    <li>
                        <a>
                        </a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false">Menú <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="../../cerrarsesion.php">Salir</a></li>
                            <!--<li role="separator" class="divider"></li>-->
                        </ul>
                    </li>
                </ul>

            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">
        <ol class="breadcrumb">
            <?php if (@$_GET["st"] >= "719"): ?>
                <li class="active">
                    <span class="glyphicon glyphicon-sunglasses"></span> Bienvenido
                    administrador <?php echo $sesion->get("usuario"); ?>
                </li>
            <?php elseif (@$_GET["var_success"] == "720") : ?>
                <li>
                    <span>Mensaje:</span>
                    <span style="margin-right: 10px; color: #35cc00;">
                        <strong> ¡SE GUARDO EL NUEVO USUARIO CORRECTAMENTE! </strong>
                </span>
                </li>
            <?php elseif (@$_GET["var_success"] == "721") : ?>
                <li>
                    <span>Mensaje:</span>
                    <span style="margin-right: 10px; color: #cc0e00;">
                        <strong> ¡ERROR AL GUARDAR USUARIO! </strong>
                </span>
                </li>
            <?php elseif (@$_GET["st"] == ""): ?>
                <li class="active">
                    <span class="glyphicon glyphicon-sunglasses"></span> Bienvenido
                    administrador <?php echo $sesion->get("usuario"); ?>
                </li>
            <?php endif; ?>
        </ol>
        <hr>
        <div class="row">
            <div class="col-md-3">
                <p class="lead">Panel de Administración</p>
                <div class="list-group">
                    <a href="all-products.php" class="list-group-item clearfix">Productos
                        <span class="pull-right">
                        <button class="btn btn-xs btn-default">
                            <span class="glyphicon glyphicon-barcode"></span>
                        </button>
                    </span>
                    </a>
                    <a href="#" class="list-group-item clearfix">Proveedores
                        <span class="pull-right">
                        <button class="btn btn-xs btn-default">
                            <span class="glyphicon glyphicon-list-alt"></span>
                        </button>
                    </span>
                    </a>
                    <a href="slider-admin.php" class="list-group-item clearfix">Pedidos
                        <span class="pull-right">
                        <button class="btn btn-xs btn-default">
                            <span class="glyphicon glyphicon-shopping-cart"></span>
                        </button>
                    </span>
                    </a>
                    <a href="slider-admin.php" class="list-group-item clearfix">Inventario
                        <span class="pull-right">
                        <button class="btn btn-xs btn-default">
                            <span class="glyphicon glyphicon-list"></span>
                        </button>
                    </span>
                    </a>
                    <a href="slider-admin.php" class="list-group-item clearfix">Carrusel
                        <span class="pull-right">
                        <button class="btn btn-xs btn-default">
                            <span class="glyphicon glyphicon-picture"></span>
                        </button>
                    </span>
                    </a>
                    <a onclick="usuarios()" class="list-group-item clearfix" style="cursor: pointer">Usuarios
                        <span class="pull-right">
                    <button class="btn btn-xs btn-default">
                        <span class="glyphicon glyphicon-user"></span>
                    </button>
                </span>
                    </a>
                </div>
            </div>
            <div class="col-md-9">
                <!--[START] content panel -->
                <div id="myDiv" class="panel panel-default">
                    <?php if ($id == 0): ?>
                        <!--Default section AJAX-->
                        <div class="panel-heading">Información adicional</div>
                        <div class="panel-body">
                            <p>Abc</p>
                        </div>
                    <?php endif; ?>
                    <?php if ($id == 1): ?>
                        <!--User section AJAX-->
                        <script>
                            window.onload = function () {
                                usuarios();
                            };
                        </script>
                    <?php endif; ?>
                </div>
                <!--[END] content panel -->
            </div>
        </div>
    </div>
    <!-- /.container -->
    <div class="container">
        <hr>
        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Electronics Online Store 2016</p>
                </div>
            </div>
        </footer>
        <!-- /.Footer -->
    </div>
    <!-- /.container -->
    <!-- jQuery -->
    <script src="../../js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="../../js/bootstrap.min.js"></script>
    <!-- Funciones by Paslestina-->
    <script src="../../js/funciones.js"></script>
    </body>

    </html>
<?php endif; ?>