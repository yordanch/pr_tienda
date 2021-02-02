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

                    <div class="row">
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
                                    <form>
                                        <div class="form-group row">
                                            <label for="inputruc" class="col-sm-2 col-form-label form-label">RUC</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputruc" placeholder="Ingresar RUC">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputdireccion" class="col-sm-2 col-form-label form-label">Dirección</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputdireccion" placeholder="Ingresar dirección">
                                            </div>
                                        </div>
                                         <div class="form-group row">
                                            <label for="inputnombre" class="col-sm-2 col-form-label form-label">Razón social</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputnombre" placeholder="Ingresar nombre">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputtelefono" class="col-sm-2 col-form-label form-label">Telefono</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputtelefono" placeholder="Ingresar teléfono">
                                            </div>
                                        </div>
                                         <div class="form-group row">
                                            <label for="inputcord" class="col-sm-2 col-form-label form-label">Coordenadas</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputcord" placeholder="Ingresar coordenadas">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputfreg" class="col-sm-2 col-form-label form-label">Fecha registro</label>
                                            <div class="col-sm-10">
                                                <input type="date" class="form-control" id="inputfreg" placeholder="Fecha registro">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputhreg" class="col-sm-2 col-form-label form-label">Hora registro</label>
                                            <div class="col-sm-10">
                                                <input type="time" class="form-control" id="inputhreg" placeholder="Hora registro">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputcorreo" class="col-sm-2 col-form-label form-label">Correo institucional</label>
                                            <div class="col-sm-10">
                                                <input type="mail" class="form-control" id="inputcorreo" placeholder="@mail.com">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputdist" class="col-sm-2 col-form-label form-label">Distrito</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" id="inputdist">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputuscorreo" class="col-sm-2 col-form-label form-label">Correo Administrador</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputuscorreo" placeholder="@mail.com">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputcate" class="col-sm-2 col-form-label form-label">Categoría tienda</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" id="inputcate">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                            </div>
                                        </div>

                                        <button type="submit" class="btn btn-primary">Actualizar</button>
                                    </form>
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
                                    <form>
                                        <div class="form-group">
                                            <label class="form-label" for="exampleInputEmail1">Correo</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="@mail.com">
                                            <small id="emailHelp" class="form-text text-muted">Ingrese un correo valido</small>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="exampleInputPassword1">Contraseña</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Ingrese la contraseña">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Actualizar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
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