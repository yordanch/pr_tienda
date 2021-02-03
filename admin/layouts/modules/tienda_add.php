<!DOCTYPE html>
<html lang="en">

<head>
    <title>Añadir Tienda</title>
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
                            <li class="breadcrumb-item">Tienda</li>
                            <li class="breadcrumb-item active aria-current=" page>Agregar tienda</li>
                        </ol>
                    </nav>

                    <div class="pb-3">
                        <h1>Agregar tienda</h1>
                    </div>
                    <form class="" action="#" method="post" onSubmit="return add(this)"> <!-- Modificar aquí -->
                        <div class="row">
                            <input type="hidden" name="option_form" id="type_form" value="add"> <!-- Modificar aquí -->
                            <input type="hidden" name="type_form" id="type_form" value="tienda"> <!-- Modificar aquí -->
                            <div class="col-lg-6">
                                <div class="card mb-grid">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <div class="card-header-title">Datos de tienda</div>

                                        <nav class="card-header-actions">
                                            <a class="card-header-action" data-toggle="collapse" href="#card2" aria-expanded="false" aria-controls="card2">
                                                <i data-feather="minus-circle"></i>
                                            </a>
                                        </nav>
                                    </div>
                                    <div class="card-body collapse show" id="card2">
                                            <div class="form-group row">
                                                <label for="inputruc" class="col-sm-2 col-form-label form-label">RUC</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="ruc_add" name="ruc_add" placeholder="Ingresar RUC">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputdireccion" class="col-sm-2 col-form-label form-label">Dirección</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="direc_add" name="direc_add" placeholder="Ingresar dirección">
                                                </div>
                                            </div>
                                             <div class="form-group row">
                                                <label for="inputnombre" class="col-sm-2 col-form-label form-label">Razón social</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="rs_add" name="rs_add" placeholder="Ingresar nombre">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputtelefono" class="col-sm-2 col-form-label form-label">Telefono</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="telef_add" name="telef_add" placeholder="Ingresar teléfono">
                                                </div>
                                            </div>
                                             <div class="form-group row">
                                                <label for="inputcord" class="col-sm-2 col-form-label form-label">Coordenadas</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="coord_add" name="coord_add" placeholder="Ingresar coordenadas">
                                                </div>
                                            </div>                                           
                                            <div class="form-group row">
                                                <label for="inputcorreo" class="col-sm-2 col-form-label form-label">Correo institucional</label>
                                                <div class="col-sm-10">
                                                    <input type="mail" class="form-control" id="emailinst_add" name="emailinst_add" placeholder="@mail.com">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputdist" class="col-sm-2 col-form-label form-label">Distrito</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" id="distrito_add" name="distrito_add">
                                                        <option value="Andahuaylas">Andahuaylas</option>
                                                        <option value="SanJeronimo">San Jeronimo</option>
                                                        <option value="Talavera">Talavera</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputuscorreo" class="col-sm-2 col-form-label form-label">Correo Administrador</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="email_add" name="email_add" placeholder="@mail.com">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputcate" class="col-sm-2 col-form-label form-label">Categoría tienda</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" id="categoria_add" name="categoria_add">
                                                        <option value="Ropas">Ropas</option>
                                                        <option value="Comida">Comida</option>
                                                        <option value="Zapateria">Zapateria</option>
                                                    </select>
                                                </div>
                                            </div>
                                            
                                            <!-- <button type="submit" class="btn btn-primary">Actualizar</button> -->
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

    <script src="../../script/tienda.js"></script>  <!-- Modificar aquí -->

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