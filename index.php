<?php
include "functions/connect.php";
$images_last = get_images_slider_last();
$images = get_images_slider();
?>
<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Electronics - Online Store</title>
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/shop-homepage.css" rel="stylesheet">
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
                        <img class="img-rounded" src="files/main_images/logo.jpg" alt="Electronics">
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
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="login.php">
                                <button class="btn btn-sm btn-danger">
                                    <span class="glyphicon glyphicon-log-in"></span> Acceder
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
                        <img class="img-rounded" src="images/product-1.jpg" alt="">
                    </div>
                    <div class="thumbnail">
                        <img class="img-rounded" src="images/product-1.jpg" alt="">
                    </div>
                    <div class="thumbnail">
                        <img class="img-rounded" src="images/product-1.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="row carousel-holder">
                        <div class="col-md-12">
                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <?php if(count($images_last) > 0 && count($images) > 0 ):?>

                                    <?php foreach($images_last as $i):?>
                                    <div class="item active">
                                        <a href="#" title="<?php echo $i->id_product; ?>">
                                            <img class="slide-image" src="files/slider/<?php echo $i->name; ?>" alt="">
                                        </a>
                                    </div>
                                    <?php endforeach; ?>

                                    <?php foreach($images as $k):?>
                                    <div class="item">
                                        <a href="#" title="<?php echo $k->id_product; ?>">
                                            <img class="slide-image" src="files/slider/<?php echo $k->name; ?>" alt="">
                                        </a>
                                    </div>
                                    <?php endforeach; ?>

                                    <?php else: ?>
                                    <div class="item active">
                                        <img class="slide-image" src="files/slider/slide-image-default.png" alt="">
                                    </div>
                                    <div class="item">
                                        <img class="slide-image" src="files/slider/slide-image-default.png" alt="">
                                    </div>
                                    <div class="item">
                                        <img class="slide-image" src="files/slider/slide-image-default.png" alt="">
                                    </div>
                                    <?php endif; ?>
                                </div>
                                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 col-lg-4 col-md-4">
                            <div class="thumbnail">
                                <img src="files/products/product-image-default.png" alt="">
                                <div class="caption">
                                    <h4 class="pull-right">$99.99</h4>
                                    <h4><a href="#">Titulo producto</a>
                                    </h4>
                                    <p>1234567890 124567890 1234567890 123456890</p>
                                </div>
                                <div class="ratings">
                                    <p class="pull-right">
                                        <button class="btn btn-xs btn-warning">VER</button>
                                    </p>
                                    <p>
                                        &nbsp;
                                    </p>
                                </div>
                            </div>
                        </div>
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
        <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

    </body>

</html>
