<HTML>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Directory -> [.././]-->
</head>
<body>
<div class="panel-heading">Registro de nuevo usuario</div>
<div class="panel-body">
    <fieldset>
        <form name="frmusuario" action="../../paginas/newUserAd.php" method="POST">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="InputName">Nombre</label>
                        <input type="text" class="form-control" name="nombre" id="InputName" autofocus required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="InputLastNamePatern">Apellido paterno</label>
                        <input type="text" class="form-control" name="paterno" id="InputLastNamePatern" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="InputLastNameMatern">Apellido materno</label>
                        <input type="text" class="form-control" name="materno" id="InputLastNameMatern" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="InputPhone">Número telefónico</label>
                        <input type="text" class="form-control" name="telefono" id="InputPhone" required>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                        <label for="InputEmail">Correo electrónico</label>
                        <input type="text" class="form-control" name="email" id="InputEmail" required
                               pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7">
                    <div class="form-group">
                        <label for="InputPassword">Ingresa la contraseña</label>
                        <input type="text" class="form-control" name="password" id="InputPassword"
                               title="Mínimo 8 caracteres y al menos 1 mayúscula, minúscula, carácter especial y número"
                               required pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$">
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form group">
                        <label for="SelectPermission">Tipo de usuario</label>
                        <select class="form-control" name="permiso" id="SelectPermission">
                            <option value="Usuario">Usuario</option>
                            <option value="Administrador">Administrador</option>
                        </select>
                    </div>
                </div>

            </div>
            <div class="nav navbar-right">
                <button type="submit" name="btn" class="btn btn-info">Guardar</button>
                <!--            <a onclick="proveedores()"><input type="button" name="btn" value="Cancelar" class="btn"-->
                <!--                                              style="margin-top:-10px;"></a>-->
                <button type="button" class="btn btn-warning" onclick="location.href='all-products.php'">Cancelar
                </button>
                &nbsp;&nbsp;&nbsp;&nbsp;
            </div>
        </form>
    </fieldset>
</div>
</body>
</HTML>