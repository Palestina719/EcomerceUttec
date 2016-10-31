<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Electronics - Iniciar Sesión</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">
</head>
<!-- [START] Session -->
<?php
require_once("sesion.class.php");
$sesion = new sesion();
if (isset($_POST["iniciar"])) {
//    $usuario = $_POST["usuario"];
//    $password = $_POST["contrasenia"];
        $usuario = $_POST["InputEmail"];
        $password = $_POST["InputPassword"];
    if (validarUsuario($usuario, $password) == true) {
        $sesion->set("usuario", $usuario);
        include "conexion.php";
        $con = "select permiso from usuarios where correo = '$usuario';";
        $dat = mysqli_query($conexion, $con);
        $numDatos = mysqli_fetch_array($dat);
        $val = $numDatos['0'];
        if ($val == "Administrador") {
            $id = 0;
            header("location: layouts/admin/e-administrator.php?id=$id");
            echo "ADMINISTRADOR";
        }
        if ($val == "Usuario") {
//            header("location: usuario.php");
            echo "USUARIO";
        }
    } else {
        $var_success = "798";
        header("location: login.php?var_success=$var_success");

    }
}
function validarUsuario($usuario, $password)
{
    include "conexion.php";
    $consulta = "select password,permiso from usuarios where correo = '$usuario';";
    $resulta = mysqli_query($conexion, $consulta);
    if ($result = mysqli_num_rows($resulta) > 0) {
        $fila = mysqli_fetch_array($resulta);
        if (strcmp($password, $fila[0]) == 0)
            return true;
        else
            return false;
    } else
        return false;
}

?>
<!-- [END] Session -->
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
            <a class="navbar-brand" href="Electronics">
                <img class="img-rounded" src="files/main_images/logo.jpg" alt="Dispute Bills">
            </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a href="index.php">Inicio</a>
                </li>
                <li>
                    <a href="about.php">Nosotros</a>
                </li>
                <li>
                    <a href="products">Todos los productos</a>
                </li>
                <li>
                    <a href="contact">Contacto</a>
                </li>
                <li>
                    <a>
                    </a>
                </li>

            </ul>
            <ul class="nav navbar-nav navbar-right hidden">
                <li>
                    <a href="login.php">
                        <button class="btn btn-sm btn-danger">
                            <span class="glyphicon glyphicon-user"></span> Acceder
                        </button>
                    </a>
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
        <li>
            <span class="glyphicon glyphicon-dashboard"></span> <a href="index.php">Inicio</a>
        </li>
        <li class="active">
            <span class="glyphicon glyphicon-user"></span> Iniciar sesión
        </li>
        <div class="navbar-right ">
            <?php
            if (isset($_GET["var_success"])):
                if ($_GET["var_success"] == "798") : ?>
                    <span style="margin-right: 10px; color: #cc0000;">
                        <strong> ¡LOS DATOS SON INCORRECTOS, POR FAVOR VERIFICA DE NUEVO! </strong>
<!--                        <a href="slider-admin.php?var_success=1">-->
<!--                            <button class="btn btn-xs btn-default">-->
<!--                                <span class="glyphicon glyphicon-remove icons"></span>-->
<!--                            </button>-->
<!--                        </a>-->
                    </span>
                    <?php
                endif;
            endif;
            ?>
        </div>
    </ol>
    <hr>
    <div class="row">
        <div class="col-md-3">
            <p class="lead">Encuentra lo que deseas</p>
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Buscar...">
                <span class="input-group-btn">
                            <button class="btn btn-info" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                            </button>
                        </span>
            </div>
            <p></p>
            <p class="lead">Categorias</p>
            <div class="list-group">
                <a href="#" class="list-group-item clearfix">Electrónica
                    <span class="pull-right">
                                <button class="btn btn-xs btn-success">
                                    <span class="glyphicon glyphicon-file"></span>
                                </button>
                            </span>
                </a>

                <a href="#" class="list-group-item clearfix">Telefonia
                    <span class="pull-right">
                                <button class="btn btn-xs btn-info">
                                    <span class="glyphicon glyphicon-phone"></span>
                                </button>
                            </span>
                </a>
                <a href="#" class="list-group-item clearfix">Computo
                    <span class="pull-right">
                                <button class="btn btn-xs btn-warning">
                                    <span class="glyphicon glyphicon-file"></span>
                                </button>
                            </span>
                </a>
                <a href="#" class="list-group-item clearfix">Audio
                    <span class="pull-right">
                                <button class="btn btn-xs btn-danger">
                                    <div class="icons">
                                        <span class="glyphicon glyphicon-headphones"></span>
                                    </div>
                                </button>
                            </span>
                </a>
            </div>
            <p class="lead">Descuentos</p>
            <div class="list-group">
                <a href="#" class="list-group-item clearfix">Descuento al 10%
                    <span class="pull-right">
                                <button class="btn btn-xs btn-success">
                                    <span class="glyphicon glyphicon-usd"></span>
                                </button>
                            </span>
                </a>
                <a href="#" class="list-group-item clearfix">Descuento al 20%
                    <span class="pull-right">
                                <button class="btn btn-xs btn-info">
                                    <span class="glyphicon glyphicon-usd"></span>
                                </button>
                            </span>
                </a>
            </div>
            <p class="lead">lo más vendido</p>
            <div class="thumbnail">
                <img class="img-rounded" src="files/main_images/product-1.jpg" alt="">
            </div>
            <div class="thumbnail">
                <img class="img-rounded" src="files/main_images/product-1.jpg" alt="">
            </div>
            <div class="thumbnail">
                <img class="img-rounded" src="files/main_images/product-1.jpg" alt="">
            </div>
        </div>
        <div class="col-md-9">
            <p class="lead">Accede para obtener mas beneficios</p>
            <form name="frmLogin" action="login.php" method="POST">
                <div class="form-group">
                    <label for="InputEmail1">Correo electrónico</label>
                    <input type="text" class="form-control" id="InputEmail" name="InputEmail"
                           pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="example@dominio.com" required
                           autofocus>
                </div>
                <div class="form-group">
                    <label for="InputPassword">Contraseña</label>
                    <input type="password" class="form-control" id="InputPassword" name="InputPassword" title="Min
                            imo 8 caracteres con mayuscula, minuscula, caracter especial y número"
                           placeholder="********"
                           pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox"> Recuerdame
                    </label>
                </div>
<!--                <button type="submit" name="iniciar" class="btn btn-success">Entrar</button>-->
                <input type="submit" name ="iniciar" value="Entrar" class="btn btn-success" />
            </form>


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

</div>
<!-- /.container -->
<!-- jQuery -->
<script src="js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>

</html>
