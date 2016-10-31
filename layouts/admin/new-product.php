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
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Menú</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="Electronics">
                <img class="img-rounded" src="images/logo.jpg" alt="Dispute Bills">
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
        <li class="active"><span class="glyphicon glyphicon-plus-sign"></span> Nuevo producto</li>
        <div class="navbar-right ">
            <?php
            if (isset($_GET["var_success"])):
                if ($_GET["var_success"] == "798") : ?>
                    <span style="margin-right: 10px; color: #cc0000;">
                        ¡LAS IMAGENES SE HAN GARDADO CORRECTAMENTE!
                        <a href="slider-admin.php?var_success=1">
                            <button class="btn btn-xs btn-default">
                                <span class="glyphicon glyphicon-remove icons"></span>
                            </button>
                        </a>
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
                                    <span class="glyphicon glyphicon-picture"></span>
                                </button>
                            </span>
                </a>
            </div>
        </div>
        <div class="col-md-9">
            <p class="lead">Registro de nuevo producto</p>
            <form action="../../functions/upload-image-product.php" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="InputName">Nombre</label>
                            <input type="text" class="form-control" name="InputName" id="InputName"
                                   placeholder="Nombre del producto" autofocus required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="InputPrice">Precio Unitario</label>
                            <div class="input-group">
                                <span class="input-group-addon">$</span>
                                <input type="text" class="form-control" name="InputPrice" id="InputPrice"
                                       placeholder="999.99" required pattern="[0-9]+.[0-9]{1,2}">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="InputUnits">Unidades</label>
                            <div class="input-group">
                                <span class="input-group-addon">#</span>
                                <input type="number" class="form-control" name="InputUnits" id="InputUnits"
                                       placeholder="12" min="0" max="10000" required pattern="[0-9]">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="SelectBuy">¿En venta?</label>
                            <select class="form-control" name="SelectBuy" id="SelectBuy">
                                <option value="1">SI</option>
                                <option value="2">PROXIMAMENTE</option>
                                <option value="3">NO</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="SelectProvider">Proveedor</label>
                            <select class="form-control" name="SelectProvider" id="SelectProvider">
                                <option value="NULL">Seleccionar</option>
                                <option svalue="Proveedor1">Proveedor 1</option>
                                <option value="Proveedor2">Proveedor 2</option>
                                <option value="Proveedor3">Proveedor 3</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="SelectCategory">Categoria</label>
                            <select class="form-control" name="SelectCategory" id="SelectCategory">
                                <option value="NULL">Seleccionar</option>
                                <option value="Category1">Telefonia</option>
                                <option value="Category2">Computo</option>
                                <option value="Category3">Accesorios</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div>
                    <label for="TextAreaDescription">Descripción <i><a style="color: #333; font-size: 12px;">máximo 90
                                caracteres</a></i></label>
                    <textarea name="TextAreaDescription" id="TextAreaDescription" class="form-control" rows="2"
                              maxlength="96"></textarea>
                </div>
                <br>
                <!--                            <p class="help-block">Example block-level help text here.</p>-->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="InputMainPicture">Imagen principal</label>
                            <input type="file" id="InputMainPicture" name="file_array[]">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="InputURL">Dirección electrónica del video (URL)</label>
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-link"></span></span>
                            <input type="text" class="form-control" name="InputURL" id="InputURL"
                                   placeholder="http://electronics-store-shop.com">
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="InputNdPicture">Segunda Imagen</label>
                            <input type="file" id="InputNdPicture" name="file_array[]">
                        </div>
                    </div>
                </div>
                <div class="nav navbar-right">
                    <button type="submit" class="btn btn-info">Guardar</button>
                    <button type="button" class="btn btn-warning">Guardar y Añadir</button>
                    <button type="button" class="btn btn-danger" onclick="location.href='all-products.php'">Cancerlar
                    </button>
                </div>
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
<script src="../../js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="../../js/bootstrap.min.js"></script>

</body>

</html>
