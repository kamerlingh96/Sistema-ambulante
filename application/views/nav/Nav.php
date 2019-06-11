

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="<?= base_url() ?>">
                        <!-- Logo icon -->

                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text" style="width:100%;text-align:center;">
                             <!-- dark Logo text -->
                             <img src="<?= base_url() ?>estilos/dashboard/assets/images/logo-text.png" alt="homepage" class="dark-logo" />
                             <!-- Light Logo text -->
                             <img src="<?= base_url() ?>uploads/system/LogoInspector_BN.png" class="light-logo" alt="homepage" style="width:150px;"/>
                        </span>
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto">
                        <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                        <!-- ============================================================== -->
                        <!-- mega menu -->
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <!-- ============================================================== -->
                        <!-- create new -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->

                        <!-- ============================================================== -->
                        <!-- End Comment -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Messages -->
                        <!-- ============================================================== -->

                        <!-- ============================================================== -->
                        <!-- End Messages -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?= base_url('uploads/users').'/'.$img?>" alt="user" class="rounded-circle" width="31"></a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                                <span class="with-arrow"><span class="bg-primary"></span></span>
                                <div class="d-flex no-block align-items-center p-15 bg-primary text-white m-b-10">
                                    <div class=""><img src="<?= base_url('uploads/users').'/'.$img?>" alt="user" class="img-circle" width="60"></div>
                                    <div class="m-l-10">
                                        <h4 class="m-b-0"><?= $nombre ?></h4>
                                        <p class=" m-b-0"><?= $correo ?></p>
                                    </div>
                                </div>
                                <a class="dropdown-item" href="<?= base_url() ?>Perfil_controller"><i class="ti-user m-r-5 m-l-5"></i> Mi Perfil</a>
                                <div class="dropdown-divider"></div>
                                <?php
                                if ($nivel == 1) {
                                ?>
                                <a class="dropdown-item" href="<?= base_url() ?>Cuentas_controller"><i class="ti-settings m-r-5 m-l-5"></i> Cuentas</a>
                                <div class="dropdown-divider"></div>
                                <?php
                                }
                                ?>
                                <!--<a class="dropdown-item" href="javascript:void(0)"><i class="ti-settings m-r-5 m-l-5"></i> Configurar datos</a>-->
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?= base_url() ?>Login/logout"><i class="fa fa-power-off m-r-5 m-l-5"></i> Cerrar sesion</a>
                                <div class="dropdown-divider"></div>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li>
                            <!-- User Profile-->
                            <div class="user-profile d-flex no-block dropdown m-t-20">
                                <div class="user-pic"><img src="<?= base_url('uploads/users').'/'.$img?>" alt="users" class="rounded-circle" width="40" /></div>
                                <div class="user-content hide-menu m-l-10">
                                    <a href="javascript:void(0)" class="" id="Userdd" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <h5 class="m-b-0 user-name font-medium"><?= $nombre ?> <i class="fa fa-angle-down"></i></h5>
                                        <span class="op-5 user-email"><?= $correo ?></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="Userdd">
                                        <a class="dropdown-item" href="<?= base_url() ?>Perfil_controller"><i class="ti-user m-r-5 m-l-5"></i> Mi perfil</a>
                                        <div class="dropdown-divider"></div>
                                        <?php
                                        if ($nivel == 1) {
                                        ?>
                                        <a class="dropdown-item" href="<?= base_url() ?>Cuentas_controller"><i class="ti-settings m-r-5 m-l-5"></i> Cuentas</a>
                                        <div class="dropdown-divider"></div>
                                        <?php
                                        }
                                        ?>
                                        <!--<a class="dropdown-item" href="javascript:void(0)"><i class="ti-settings m-r-5 m-l-5"></i> Configurar datos</a>-->
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="<?= base_url() ?>Login/logout"><i class="fa fa-power-off m-r-5 m-l-5"></i> Cerrar sesion</a>
                                    </div>
                                </div>
                            </div>
                            <!-- End User Profile-->
                        </li>
                        <?php
                        if ($nivel != 3) {
                          ?>
                          <li class="p-15 m-t-10"><a href="<?= base_url() ?>Create_comerciante_controller" class="btn btn-block create-btn text-white no-block d-flex align-items-center"><i class="fa fa-plus-square"></i> <span class="hide-menu m-l-5">Alta de Comerciante</span> </a></li>
                          <?php
                        }
                         ?>
                        <!-- User Profile-->
                        <li class="p-15 m-t-10" style="padding:0 15px !important; margin-top: 0 !important;"> <a class="btn btn-block create-btn text-white no-block d-flex align-items-center" href="<?= base_url()?>Comerciantes_list_controller/list" aria-expanded="false"><i class="mdi mdi-account-multiple"></i> <span class="hide-menu m-l-5">Lista de Comerciantes</span></a></li>
                        <!--<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= base_url()?>Carpeta" aria-expanded="false"><i class="mdi mdi-account-multiple"></i><span class="hide-menu">Pruebas</span></a></li>-->
                        <?php
                        if ($nivel != 3) {
                          ?>
                        <li class="p-15 m-t-10" style="padding:0 15px !important; margin-top: 15px !important;"> <a class="btn btn-block create-btn text-white no-block d-flex align-items-center" href="#" aria-expanded="false"><i class="fa fa-print"></i> <span class="hide-menu m-l-5"> Imprimir Tarjetón</span></a></li>
                        <?php
                      }
                       ?>

                        <li class="p-15 m-t-10" style="padding:0 15px !important; margin-top: 15px !important;"> <a class="btn btn-block create-btn text-white no-block d-flex align-items-center" href="<?= base_url()?>Reportes_controller/reportes" aria-expanded="false"><i class="mdi mdi-tooltip-edit"></i> <span class="hide-menu m-l-5"> Reportes</span></a></li>

                        <li class="p-15 m-t-10" style="padding:0 15px !important; margin-top: 15px !important;"> <a class="btn btn-block create-btn text-white no-block d-flex align-items-center" href="#" aria-expanded="false"><i class="mdi mdi-help-circle"></i> <span class="hide-menu m-l-5"> Ayuda</span></a></li>

                        <div class="navbar-header hide-menu" style="text-align:center;position: absolute;width: 100%;bottom: 0;">
                            <!-- This is for the sidebar toggle which is visible on mobile only -->
                            <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                            <!-- ============================================================== -->
                            <!-- Logo -->
                            <!-- ============================================================== -->
                            <a class="navbar-brand" href="<?= base_url() ?>">
                                <!-- Logo icon -->

                                <!--End Logo icon -->
                                <!-- Logo text -->
                                <span class="logogrande" style="width:100%;text-align:center;">
                                     <!-- dark Logo text -->
                                     <!-- Light Logo text -->
                                     <img src="<?= base_url() ?>uploads/system/logo-carmen-nav.png" class="light-logo" alt="homepage" style="width: 100%;max-width:200px;"/>
                                </span>
                                <span class="logolittle" style="width:100%;text-align:center; display:none;">
                                     <!-- dark Logo text -->
                                     <!-- Light Logo text -->
                                     <img src="<?= base_url() ?>uploads/system/logo-carmen-blanco.png" class="light-logo" alt="homepage" style="width: 100%;max-width:200px;"/>
                                </span>
                            </a>
                            <!-- ============================================================== -->
                            <!-- End Logo -->
                            <!-- ============================================================== -->
                            <!-- ============================================================== -->
                            <!-- Toggle which is visible on mobile only -->
                            <!-- ============================================================== -->
                            <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                        </div>

                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
