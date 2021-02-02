<!DOCTYPE html>
<html lang="en">

<head>
    <title>Añadir usuarios</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" href="../../dist/css/adminx.css" media="screen" />
</head>

<body>
    <div class="adminx-container">
        <!-- Header -->
        <?php
            $_path = "../../";
            $_option = 1;
            include("../system/header.php");
        ?>
        <!-- // Header -->

        <!-- expand-hover push -->

        <?php
            include("../system/menu.php");
        ?>

        <!-- Main Content -->
        <div class="adminx-content">
            <div class="adminx-main-content">
                <div class="container-fluid">
                    <!-- BreadCrumb -->
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb adminx-page-breadcrumb">
                            <!-- <li class="breadcrumb-item"><a href="#">Usuarios</a></li> -->
                            <li class="breadcrumb-item">Usuarios</li>
                            <li class="breadcrumb-item active aria-current=" page>Agregar usuarios</li>
                        </ol>
                    </nav>

                    <div class="pb-3">
                        <h1>Agregar usuarios</h1>
                    </div>

                    <form class="" action="#" method="post" onSubmit="return add(this)"> <!-- Modificar aquí -->
                        <div class="row">
                            <input type="hidden" name="option_form" id="type_form" value="add"> <!-- Modificar aquí -->
                            <input type="hidden" name="type_form" id="type_form" value="usuario"> <!-- Modificar aquí -->
                            <div class="col-lg-6">
                                <div class="card mb-grid">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <div class="card-header-title">Datos personales</div>

                                        <nav class="card-header-actions">
                                            <a class="card-header-action" data-toggle="collapse" href="#card2" aria-expanded="false" aria-controls="card2">
                                                <i data-feather="minus-circle"></i>
                                            </a>
                                        </nav>
                                    </div>
                                    <div class="card-body collapse show" id="card2">
                                        <div>
                                            <div class="form-group row">
                                                <label for="nombre_add" class="col-sm-2 col-form-label form-label">Nombres</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="nombre_add" name="nombre_add" placeholder="Nombres">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="apell_add" class="col-sm-2 col-form-label form-label">Apellidos</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="apell_add" name="apell_add" placeholder="Apellidos">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="sexo_add" class="col-sm-2 col-form-label form-label">Sexo</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" id="sexo_add" name="sexo_add">
                                                        <option value="f">Femenino</option>
                                                        <option value="m">Masculino</option>
                                                        <option value="">Otro</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="telefono_add" class="col-sm-2 col-form-label form-label">Telefono</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="telefono_add" name="telefono_add" placeholder="Telefono">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="fechan_add" class="col-sm-2 col-form-label form-label">Fecha nacimiento</label>
                                                <div class="col-sm-10">
                                                    <input type="date" class="form-control" id="fechan_add" name="fechan_add" placeholder="Fecha de nacimiento">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="acceso_add" class="col-sm-2 col-form-label form-label">Acceso</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" id="acceso_add" name="acceso_add">
                                                        <option value="NO">NO</option>
                                                        <option value="SI">SI</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="tipouser_add" class="col-sm-2 col-form-label form-label">Tipo de usuario</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" id="tipouser_add" name="tipouser_add">
                                                        <option value="Usuario">Usuario</option>
                                                        <option value="Administrador">Administrador</option>
                                                        <option value="Vendedor">Vendedor</option>
                                                        <option value="Gerente">Gerente</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card mb-grid">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <div class="card-header-title">Datos de acceso</div>

                                        <nav class="card-header-actions">
                                            <a class="card-header-action" data-toggle="collapse" href="#card1" aria-expanded="false" aria-controls="card1">
                                                <i data-feather="minus-circle"></i>
                                            </a>
                                        </nav>
                                    </div>
                                    <div class="card-body collapse show" id="card1">
                                        <div>
                                            <div class="form-group">
                                                <label class="form-label" for="correo_add">Correo</label>
                                                <input type="email" class="form-control" id="correo_add" name="correo_add" aria-describedby="correo_add_help" placeholder="Ingrese correo">
                                                <small id="correo_add_help" class="form-text text-muted">Ingrese un correo valido</small>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="contras_add">Contraseña</label>
                                                <input type="password" class="form-control" id="contras_add" name="contras_add" placeholder="Ingrese la contraseña">
                                            </div>
                                            <!-- <button type="submit" class="btn btn-primary">Actualizar</button> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <button type="submit" class="btn btn-primary">Agregar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- // Main Content -->
    </div>

    <script src="../../../js/jquery.min.js"></script>
    <script src="../../../js/popper.min.js"></script>
    <script src="../../../js/bootstrap4.0.0.min.js"></script>
    <script src="../../../admin/dist/js/vendor.js"></script>
    <script src="../../../admin/dist/js/adminx.js"></script>

    <script src="../../../js/sweetalert2.all.min.js"></script>
    <link rel="stylesheet" href="../../../css/sweetalert2.min.css">
    <script src="../../../script/functions.js"></script>
    <script src="../../script/usuario.js"></script>  <!-- Modificar aquí -->

    <!-- If you prefer vanilla JS these are the only required scripts -->
    <!-- script src="../dist/js/vendor.js"></script>
    <script src="../dist/js/adminx.vanilla.js"></script-->

    <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';

        window.addEventListener('load', function() {
            var form = document.getElementById('needs-validation');
            if (form !== null) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            }
        }, false);
    })();
    </script>
</body>

</html>