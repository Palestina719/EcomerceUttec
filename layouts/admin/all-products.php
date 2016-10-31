<?php
include "../../functions/connect.php";
$products = get_all_products();
?>
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
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
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
            <p class="map-site">
                <span class="glyphicon glyphicon-console"></span>&nbsp;
                <strong>
                    <a href="#">Administrador </a>
                </strong>/&nbsp;
                <span class="glyphicon glyphicon-tag"></span>&nbsp;Todos los productos
            </p>
            <hr>
            <div class="row">
                <div class="col-md-3">
                    <p class="lead">Panel de Administración</p>
                    <div class="list-group">
                        <a href="all-products.php" class="list-group-item clearfix active">Productos
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
                        <a href="slider-admin.php" class="list-group-item clearfix">Carrusel
                            <span class="pull-right">
                                <button class="btn btn-xs btn-default">
                                    <span class="glyphicon glyphicon-phone"></span>
                                </button>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="panel panel-default">
                        <div class="panel-heading">Todos los productos del inventario
                            <!--                            <button type="button" class="btn btn-default navbar-btn">Sign in</button>-->
                            <a href="new-product.php">
                                <span class="pull-right">
                                    <button class="btn btn-xs btn-danger">
                                        <div class="">
                                            <span class="glyphicon glyphicon-plus-sign"></span>
                                            Nuevo Producto
                                            <span class="glyphicon glyphicon-plus-sign"></span>
                                        </div>
                                    </button>
                                </span>
                            </a>
                        </div>

                        <!-- body panel -->
                        <!-- <div class="panel-body"> <p>...</p> </div> -->
                        <!--[START] Table proveedores -->
                        <?php if(count($products) > 0):?>
                        <table class="table">
                            <!--Title of columns-->
                            <th>Nombre</th>
                            <th>Proveedor</th>
                            <th>Precio</th>
                            <th>Unidades</th>
                            <th>Creación</th>
                            <!--                            <th>En venta</th>-->
                            <th>Eliminar</th>
                            <th>Ver</th>
                            <?php foreach($products as $p):?>
                            <tr>
                                <td><?php echo $p->name; ?></td>
                                <td><?php echo $p->provider; ?></td>
                                <td>$<?php echo $p->price; ?></td>
                                <td><?php echo $p->units; ?></td>
                                <td><?php echo $p->create_at; ?></td>
                                <td>
                                    <button class="btn btn-sm btn-default">
                                        <a class="icons" href="../../test.php?id=<?php echo $p->id_product; ?>">
                                            <span class="glyphicon glyphicon-trash"></span>
                                        </a>
                                    </button>
                                </td>
                                <!--
<td><?php
//
//                                    $p = $p->buy;
//                                    if($p == 1):
//                                    echo "SI";
//                                    elseif ($p == 2):
//                                    echo "EN ESPERA";
//                                    else:
//                                    echo "NO";
//                                    endif;
?>
</td>
-->
                                <td>
                                    <button class="btn btn-sm btn-default">
                                        <span class="glyphicon glyphicon-eye-open"></span>
                                    </button>
                                </td>

                            </tr>
                            <?php endforeach; ?>
                        </table>
                        <!--[END] Table proveedores -->
                        <?php else: ?>
                        <table class="table">
                            <tr>
                                <td>
                                    <h2>¡No hay productos!</h2>
                                </td>
                            </tr>
                        </table>
                        <?php endif; ?>
                    </div>
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
        <script src="../../js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="../../js/bootstrap.min.js"></script>

    </body>

</html>
