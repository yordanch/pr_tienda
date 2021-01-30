<?php
    $path = isset($_path)?$_path:"";
    $option = isset($_option)?$_option:0;
?>
<div class="adminx-sidebar expand-hover push">
    <ul class="sidebar-nav">
        <li class="sidebar-nav-item">
            <a href="<?=$path;?>" class="sidebar-nav-link <?=$option==0?'active':'';?>">
                <span class="sidebar-nav-icon">
                    <i data-feather="home"></i>
                </span>
                <span class="sidebar-nav-name">
                    Resumen
                </span>
            </a>
        </li>
        <li class="sidebar-nav-item">
            <a href="<?=$path;?>../" class="sidebar-nav-link" target="_blank">
                <span class="sidebar-nav-icon">
                    <i data-feather="globe"></i>
                </span>
                <span class="sidebar-nav-name">
                    Tienda
                </span>
            </a>
        </li>
        <li class="sidebar-nav-item">
            <a class="sidebar-nav-link collapsed" data-toggle="collapse" href="#user_menu" aria-expanded="false" aria-controls="example">
                <span class="sidebar-nav-icon">
                    <i data-feather="align-justify"></i>
                </span>
                <span class="sidebar-nav-name"> Usuarios </span>
                <span class="sidebar-nav-end">
                    <i data-feather="chevron-right" class="nav-collapse-icon"></i>
                </span>
            </a>

            <ul class="sidebar-sub-nav collapse <?=$option==1?'show':'';?>" id="user_menu">
                <li class="sidebar-nav-item">
                    <a href="<?=$path;?>layouts/modules/usuario_add.php" class="sidebar-nav-link">
                        <span class="sidebar-nav-abbr"> </span>
                        <span class="sidebar-nav-name">
                            Agregar usuarios
                        </span>
                    </a>
                </li>
                <li class="sidebar-nav-item">
                    <a href="./layouts/charts_morris.html" class="sidebar-nav-link">
                        <span class="sidebar-nav-abbr"> </span>
                        <span class="sidebar-nav-name">
                            Agregar trabajador
                        </span>
                    </a>
                </li>
                <li class="sidebar-nav-item">
                    <a href="./layouts/charts_chartjs.html" class="sidebar-nav-link">
                        <span class="sidebar-nav-abbr"> </span>
                        <span class="sidebar-nav-name">
                            Usuarios
                        </span>
                    </a>
                </li>
                <li class="sidebar-nav-item">
                    <a href="./layouts/charts_morris.html" class="sidebar-nav-link">
                        <span class="sidebar-nav-abbr"> </span>
                        <span class="sidebar-nav-name">
                            Trabajador
                        </span>
                    </a>
                </li>
                <li class="sidebar-nav-item">
                    <a href="./layouts/charts_morris.html" class="sidebar-nav-link">
                        <span class="sidebar-nav-abbr"> </span>
                        <span class="sidebar-nav-name">
                            Chat
                        </span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="sidebar-nav-item">
            <a class="sidebar-nav-link collapsed" data-toggle="collapse" href="#tienda_menu" aria-expanded="false" aria-controls="example">
                <span class="sidebar-nav-icon">
                    <i data-feather="monitor"></i>
                </span>
                <span class="sidebar-nav-name"> Tiendas </span>
                <span class="sidebar-nav-end">
                    <i data-feather="chevron-right" class="nav-collapse-icon"></i>
                </span>
            </a>

            <ul class="sidebar-sub-nav collapse" id="tienda_menu">
                <li class="sidebar-nav-item">
                    <a href="./layouts/charts_chartjs.html" class="sidebar-nav-link">
                        <span class="sidebar-nav-abbr"> </span>
                        <span class="sidebar-nav-name">
                            Nueva tienda
                        </span>
                    </a>
                </li>

                <li class="sidebar-nav-item">
                    <a href="./layouts/charts_morris.html" class="sidebar-nav-link">
                        <span class="sidebar-nav-abbr"> </span>
                        <span class="sidebar-nav-name">
                            Categorias
                        </span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="sidebar-nav-item">
            <a class="sidebar-nav-link collapsed" data-toggle="collapse" href="#prod_menu" aria-expanded="false" aria-controls="example">
                <span class="sidebar-nav-icon">
                    <i data-feather="grid"></i>
                </span>
                <span class="sidebar-nav-name"> Productos </span>
                <span class="sidebar-nav-end">
                    <i data-feather="chevron-right" class="nav-collapse-icon"></i>
                </span>
            </a>

            <ul class="sidebar-sub-nav collapse" id="prod_menu">
                <li class="sidebar-nav-item">
                    <a href="./layouts/charts_chartjs.html" class="sidebar-nav-link">
                        <span class="sidebar-nav-abbr"> </span>
                        <!-- &#8226; -->
                        <span class="sidebar-nav-name">
                            Nuevo producto
                        </span>
                    </a>
                </li>

                <li class="sidebar-nav-item">
                    <a href="./layouts/charts_morris.html" class="sidebar-nav-link">
                        <span class="sidebar-nav-abbr"></span>
                        <span class="sidebar-nav-name">
                            Reservas
                        </span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="sidebar-nav-item">
            <a class="sidebar-nav-link collapsed" data-toggle="collapse" href="#apli_menu" aria-expanded="false" aria-controls="example">
                <span class="sidebar-nav-icon">
                    <i data-feather="layout"></i>
                </span>
                <span class="sidebar-nav-name"> Aplicación </span>
                <span class="sidebar-nav-end">
                    <i data-feather="chevron-right" class="nav-collapse-icon"></i>
                </span>
            </a>

            <ul class="sidebar-sub-nav collapse" id="apli_menu">
                <li class="sidebar-nav-item">
                    <a href="./layouts/charts_chartjs.html" class="sidebar-nav-link">
                        <span class="sidebar-nav-abbr"> </span>
                        <!-- &#8226; -->
                        <span class="sidebar-nav-name">
                            Sugerencias aplicación
                        </span>
                    </a>
                </li>
                <li class="sidebar-nav-item">
                    <a href="./layouts/charts_morris.html" class="sidebar-nav-link">
                        <span class="sidebar-nav-abbr"></span>
                        <span class="sidebar-nav-name">
                            Sugerencias tiendas
                        </span>
                    </a>
                </li>
                <li class="sidebar-nav-item">
                    <a href="./layouts/charts_morris.html" class="sidebar-nav-link">
                        <span class="sidebar-nav-abbr"></span>
                        <span class="sidebar-nav-name">
                            Recomendaciones
                        </span>
                    </a>
                </li>
                <li class="sidebar-nav-item">
                    <a href="./layouts/charts_morris.html" class="sidebar-nav-link">
                        <span class="sidebar-nav-abbr"></span>
                        <span class="sidebar-nav-name">
                            Visitas
                        </span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="sidebar-nav-item">
            <a href="#" class="sidebar-nav-link">
                <span class="sidebar-nav-icon">
                    <i data-feather="layers"></i>
                </span>
                <span class="sidebar-nav-name">
                    Ubigeo
                </span>
            </a>
        </li>
        <li class="sidebar-nav-item">
            <a class="sidebar-nav-link collapsed" data-toggle="collapse" href="#report_menu" aria-expanded="false" aria-controls="example">
                <span class="sidebar-nav-icon">
                    <i data-feather="pie-chart"></i>
                </span>
                <span class="sidebar-nav-name"> Reportes </span>
                <span class="sidebar-nav-end">
                    <i data-feather="chevron-right" class="nav-collapse-icon"></i>
                </span>
            </a>

            <ul class="sidebar-sub-nav collapse" id="report_menu">
                <li class="sidebar-nav-item">
                    <a href="./layouts/charts_chartjs.html" class="sidebar-nav-link">
                        <span class="sidebar-nav-abbr"> </span>
                        <!-- &#8226; -->
                        <span class="sidebar-nav-name">
                            Reporte 1
                        </span>
                    </a>
                </li>
                <li class="sidebar-nav-item">
                    <a href="./layouts/charts_morris.html" class="sidebar-nav-link">
                        <span class="sidebar-nav-abbr"></span>
                        <span class="sidebar-nav-name">
                            Reporte 2
                        </span>
                    </a>
                </li>
                <li class="sidebar-nav-item">
                    <a href="./layouts/charts_morris.html" class="sidebar-nav-link">
                        <span class="sidebar-nav-abbr"></span>
                        <span class="sidebar-nav-name">
                            Reporte 4
                        </span>
                    </a>
                </li>
            </ul>
        </li>


        <!-- <li class="sidebar-nav-item">
            <a href="#" class="sidebar-nav-link">
                <span class="sidebar-nav-icon">
                    <i data-feather="layout"></i>
                </span>
                <span class="sidebar-nav-name">
                    Ubigeo
                </span>
                <span class="sidebar-nav-end">
                    <span class="badge badge-info">4</span>
                </span>
            </a>
        </li>

        <li class="sidebar-nav-item">
            <a class="sidebar-nav-link collapsed" data-toggle="collapse" href="#example" aria-expanded="false" aria-controls="example">
                <span class="sidebar-nav-icon">
                    <i data-feather="pie-chart"></i>
                </span>
                <span class="sidebar-nav-name"> Charts </span>
                <span class="sidebar-nav-end">
                    <i data-feather="chevron-right" class="nav-collapse-icon"></i>
                </span>
            </a>

            <ul class="sidebar-sub-nav collapse" id="example">
                <li class="sidebar-nav-item">
                    <a href="./layouts/charts_chartjs.html" class="sidebar-nav-link">
                        <span class="sidebar-nav-abbr"> Ch </span>
                        <span class="sidebar-nav-name">
                            ChartJS
                        </span>
                    </a>
                </li>

                <li class="sidebar-nav-item">
                    <a href="./layouts/charts_morris.html" class="sidebar-nav-link">
                        <span class="sidebar-nav-abbr"> Mo </span>
                        <span class="sidebar-nav-name">
                            Morris
                        </span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="sidebar-nav-item">
            <a class="sidebar-nav-link collapsed" data-toggle="collapse" href="#navTables" aria-expanded="false" aria-controls="navTables">
                <span class="sidebar-nav-icon">
                    <i data-feather="align-justify"></i>
                </span>
                <span class="sidebar-nav-name"> Tables </span>
                <span class="sidebar-nav-end">
                    <i data-feather="chevron-right" class="nav-collapse-icon"></i>
                </span>
            </a>

            <ul class="sidebar-sub-nav collapse" id="navTables">
                <li class="sidebar-nav-item">
                    <a href="./layouts/tables.html" class="sidebar-nav-link">
                        <span class="sidebar-nav-abbr"> Re </span>
                        <span class="sidebar-nav-name">
                            Regular Tables
                        </span>
                    </a>
                </li>

                <li class="sidebar-nav-item">
                    <a href="./layouts/tables_data.html" class="sidebar-nav-link">
                        <span class="sidebar-nav-abbr"> Da </span>
                        <span class="sidebar-nav-name">
                            Data Tables
                        </span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="sidebar-nav-item">
            <a class="sidebar-nav-link collapsed" data-toggle="collapse" href="#navForms" aria-expanded="false" aria-controls="navForms">
                <span class="sidebar-nav-icon">
                    <i data-feather="edit"></i>
                </span>
                <span class="sidebar-nav-name"> Forms </span>
                <span class="sidebar-nav-end">
                    <i data-feather="chevron-right" class="nav-collapse-icon"></i>
                </span>
            </a>

            <ul class="sidebar-sub-nav collapse" id="navForms">
                <li class="sidebar-nav-item">
                    <a href="./layouts/form_elements.html" class="sidebar-nav-link">
                        <span class="sidebar-nav-abbr"> El </span>
                        <span class="sidebar-nav-name">
                            Elements
                        </span>
                    </a>
                </li>

                <li class="sidebar-nav-item">
                    <a href="./layouts/form_advanced.html" class="sidebar-nav-link">
                        <span class="sidebar-nav-abbr"> Ad </span>
                        <span class="sidebar-nav-name">
                            Advanced Elements
                        </span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="sidebar-nav-item">
            <a class="sidebar-nav-link collapsed" data-toggle="collapse" href="#navUI" aria-expanded="false" aria-controls="navUI">
                <span class="sidebar-nav-icon">
                    <i data-feather="grid"></i>
                </span>
                <span class="sidebar-nav-name"> UI Elements </span>
                <span class="sidebar-nav-end">
                    <i data-feather="chevron-right" class="nav-collapse-icon"></i>
                </span>
            </a>

            <ul class="sidebar-sub-nav collapse" id="navUI">
                <li class="sidebar-nav-item">
                    <a href="./layouts/icons.html" class="sidebar-nav-link">
                        <span class="sidebar-nav-abbr"> Ic </span>
                        <span class="sidebar-nav-name">
                            Icons
                        </span>
                    </a>
                </li>

                <li class="sidebar-nav-item">
                    <a href="./layouts/buttons.html" class="sidebar-nav-link">
                        <span class="sidebar-nav-abbr"> Bu </span>
                        <span class="sidebar-nav-name">
                            Buttons
                        </span>
                    </a>
                </li>

                <li class="sidebar-nav-item">
                    <a href="./layouts/notifications.html" class="sidebar-nav-link">
                        <span class="sidebar-nav-abbr"> No </span>
                        <span class="sidebar-nav-name">
                            Notifications
                        </span>
                    </a>
                </li>

                <li class="sidebar-nav-item">
                    <a href="./layouts/progress.html" class="sidebar-nav-link">
                        <span class="sidebar-nav-abbr"> Pr </span>
                        <span class="sidebar-nav-name">
                            Progress Bars
                        </span>
                    </a>
                </li>

                <li class="sidebar-nav-item">
                    <a href="./layouts/tabs.html" class="sidebar-nav-link">
                        <span class="sidebar-nav-abbr"> Ta </span>
                        <span class="sidebar-nav-name"> Tabs </span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="sidebar-nav-item">
            <a class="sidebar-nav-link collapsed" data-toggle="collapse" href="#navExtra" aria-expanded="false" aria-controls="navExtra">
                <span class="sidebar-nav-icon">
                    <i data-feather="layers"></i>
                </span>
                <span class="sidebar-nav-name">
                    Other Layouts
                </span>
                <span class="sidebar-nav-end">
                    <i data-feather="chevron-right" class="nav-collapse-icon"></i>
                </span>
            </a>

            <ul class="sidebar-sub-nav collapse" id="navExtra">
                <li class="sidebar-nav-item">
                    <a href="./layouts/login.html" class="sidebar-nav-link">
                        <span class="sidebar-nav-abbr"> Lo </span>
                        <span class="sidebar-nav-name">
                            Login
                        </span>
                    </a>
                </li>

                <li class="sidebar-nav-item">
                    <a href="./layouts/signup.html" class="sidebar-nav-link">
                        <span class="sidebar-nav-abbr"> Si </span>
                        <span class="sidebar-nav-name">
                            Sign Up
                        </span>
                    </a>
                </li>

                <li class="sidebar-nav-item">
                    <a href="./layouts/404.html" class="sidebar-nav-link">
                        <span class="sidebar-nav-abbr"> Nf </span>
                        <span class="sidebar-nav-name">
                            404 Error
                        </span>
                    </a>
                </li>

                <li class="sidebar-nav-item">
                    <a href="./layouts/500.html" class="sidebar-nav-link">
                        <span class="sidebar-nav-abbr"> Is </span>
                        <span class="sidebar-nav-name">
                            500 Error
                        </span>
                    </a>
                </li>

                <li class="sidebar-nav-item">
                    <a href="./layouts/timeline.html" class="sidebar-nav-link">
                        <span class="sidebar-nav-abbr"> Ti </span>
                        <span class="sidebar-nav-name">
                            Timeline
                        </span>
                    </a>
                </li>

                <li class="sidebar-nav-item">
                    <a href="./layouts/invoice.html" class="sidebar-nav-link">
                        <span class="sidebar-nav-abbr"> In </span>
                        <span class="sidebar-nav-name">
                            Invoice
                        </span>
                    </a>
                </li>
            </ul>
        </li> -->
    </ul>
</div>