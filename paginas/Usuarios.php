<!DOCTYPE>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Directory -> [.././]-->
</head>
<body>
<div class="panel-heading">Tabla de usuarios existentes
    <a onclick="addUsuario()">
        <span class="pull-right">
            <button class="btn btn-xs btn-danger">
                    <span class="glyphicon glyphicon-plus-sign"></span>
                    Nuevo usuario
                    <span class="glyphicon glyphicon-plus-sign"></span>
            </button>
        </span>
    </a>
</div>
<div class="panel-body">
    <?php
    include '../conexion.php';
    $cons = "select id_usuario,nombre,correo,password,permiso from usuarios";
    $res = mysqli_query($conexion, $cons);
    ?>
    <!--[START-TABLE]-->
    <table class="table">
        <!--Title of columns-->
        <th id='JO'>ID</th>
        <th id='JO'>Nombre</th>
        <th id='JO'>Usuario</th>
        <th id='JO'>Password</th>
        <th id='JO'>Permiso</th>
        <th id='JO'>Modificar</th>
        <th id='JO'>Eliminar</th>
        <!--Raws-->
        <?php while ($myrow = mysqli_fetch_row($res)) : ?>
            <tr>
                <td id="F"><?php echo "$myrow[0]" ?></td>
                <td id="F"><?php echo "$myrow[1]" ?></td>
                <td id="F"><?php echo "$myrow[2]" ?></td>
                <td id="F"><?php echo "$myrow[3]" ?></td>
                <td id="F"><?php echo "$myrow[4]" ?></td>
                <td id="F">
                    <?php //echo "<a onClick='modificarUsuario(id=$myrow[0])'><center><img src='images/modificar.jpg' width='50'; height:'50';/></center></a>" ?>
                    <button class="btn btn-sm btn-default">
                        <a class="icons" onClick='modificarUsuario(<?php echo "$myrow[0]" ?>)'>
                            <span class="glyphicon glyphicon-edit"></span>
                        </a>
                    </button>
                </td>
                <td id="F">
                    <?php //echo "<a href=paginas/delUsuario.php?id=$myrow[0]><center><img src='images/eliminar.png' width='50'; height:'50';/></center></a>" ?>
                    <button class="btn btn-sm btn-default">
                        <a class="icons" href="#" onClick=''>
                            <span class="glyphicon glyphicon-trash"></span>
                        </a>
                    </button>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
</div>
</body>
</html>