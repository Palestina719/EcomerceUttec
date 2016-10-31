<?php
include "../../functions/connect.php";
$products = get_name_products();
?>
<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Electronics - Nuevo producto</title>
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
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Menú</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="Electronics">
                        <img class="img-rounded" src="../../files/main_images/logo.jpg" alt="Electronics">
                    </a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="../../index.php">Inicio</a>
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
                            <a href="login.hmtl">
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
                <li><a href="#"><span class="glyphicon glyphicon-console"></span> Administrador</a></li>
                <li class="active"><span class="glyphicon glyphicon-plus-sign"></span> Administrar Carrusel</li>
                <div class="navbar-right ">
                    <?php
                    if (isset($_GET["var_success"])) {
                        if ($_GET["var_success"] == "798") { ?>
                    <span style="margin-right: 10px; color: #cc0000;">
                        ¡EL PRODUCTO SE HAN GARDADO CORRECTAMENTE!
                        <a href="slider-admin.php?var_success=1">
                            <button class="btn btn-xs btn-default">
                                <span class="glyphicon glyphicon-remove icons"></span>
                            </button>
                        </a>
                    </span>
                    <?php
                        }
                    }
                    ?>
                </div>
            </ol>
            <hr>
            <div class="row">
                <!-- [START OPTIONS] -->
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
                                    <span class="glyphicon glyphicon-phone"></span>
                                </button>
                            </span>
                        </a>
                        <a href="slider-admin.php" class="list-group-item clearfix active">Carrusel
                            <span class="pull-right">
                                <button class="btn btn-xs btn-default">
                                    <span class="glyphicon glyphicon-picture"></span>
                                </button>
                            </span>
                        </a>
                    </div>
                </div>
                <!-- [END OPTIONS] -->
                <!-- [START ADMIN SLIDER] -->
                <div class="col-md-9">
                    <p class="lead">Ingresar imagenes del Carrusel</p>
                    <form action="../../functions/upload-image-slider.php" method="post" enctype="multipart/form-data">
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="InputAPicture">Imagen C</label>
                                    <input type="file" id="InputAPicture" name="file_array[]">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="SelectProductA">Asociar con el producto</label>
                                    <select class="form-control" name="SelectProductA" id="SelectProductA">
                                        <option value="NULL">NINGUNO</option>
                                        <?php foreach($products as $p):?>
                                        <option value="<?php echo $p->id_product; ?>"><?php echo $p->name; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="InputBPicture">Imagen B</label>
                                    <input type="file" id="InputBPicture" name="file_array[]">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="SelectProductB">Asociar con el producto</label>
                                    <select class="form-control" name="SelectProductB" id="SelectProductB">
                                        <option value="NULL">NINGUNO</option>
                                        <?php foreach($products as $p):?>
                                        <option value="<?php echo $p->id_product; ?>"><?php echo $p->name; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="InpuCPicture">Imagen A</label>
                                    <input type="file" id="InputCPicture" name="file_array[]">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="SelectProductC">Asociar con el producto</label>
                                    <select class="form-control" name="SelectProductC" id="SelectProductC">
                                        <option value="NULL">NINGUNO</option>
                                        <?php foreach($products as $p):?>
                                        <option value="<?php echo $p->id_product; ?>"><?php echo $p->name; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="nav navbar-right">
                            <button type="submit" class="btn btn-info">Guardar</button>
                            <button type="button" class="btn btn-danger" onclick="location.href='all-products.php'">Cancerlar</button>
                        </div>
                    </form>
                </div>
                <!-- [END ADMIN SLIDER] -->
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
        <script src="../../js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="../../js/bootstrap.min.js"></script>

    </body>

</html>
