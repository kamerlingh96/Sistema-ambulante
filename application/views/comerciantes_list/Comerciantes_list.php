
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">


        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Lista de Comerciantes</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Lista de comerciantes</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <input id="search" type="text" placeholder="Buscar" autocomplete="off">
                                  </div>
                                </div>
                                <div class="col-md-6" style="text-align: right;">
                                  <?php
                                  if ($nivel != 3) {
                                    ?>
                                    <a href="<?= base_url() ?>Create_comerciante_controller"><button type="button" class="btn btn-light"><i class="fa fa-plus-square"></i><span class="hide-menu m-l-5">Agregar Comerciante</span></button></a>
                                    <?php
                                  }
                                   ?>
                                </div>
                              </div>
                                <div class="table-responsive">
                                    <table  class="table m-t-30 no-wrap table-hover contact-list" data-page-size="10" id="demo-foo-addrow">
                                        <thead>
                                            <tr>
                                                <th>Folio</th>
                                                <th>Nombre</th>
                                                <th>Giro</th>
                                                <th>Descripción</th>
                                                <th>Estado</th>
                                                <th>Zona</th>
                                                <th>CURP</th>
                                                <th style="display:;">Registro</th>
                                                <?php
                                                if ($nivel != 3) {
                                                  ?>
                                                  <th>Tarjetón</th>
                                                  <?php
                                                }
                                                 ?>
                                            </tr>
                                        </thead>


                                        <tbody>
                                          <?php
                                            foreach ($consulta->result() as $fila) {
                                                // code...
                                          ?>
                                            <tr>
                                                <td><?= $fila->id?></td>
                                                <td>
                                                    <a href="<?= base_url() ?>Comerciante_data_controller/comerciante_data/<?= $fila->id ?>" style="color:#3e5569;"><img src="<?= base_url('uploads/'. $fila->vigencia.'/foto_dueno').'/'.$fila->img?>" alt="user" width="40" class="rounded-circle" /> <?= $fila->nombre?></a>
                                                </td>
                                                <td><?= $fila->giro?></td>
                                                <td><?= $fila->descripcion?></td>
                                                <td><span class="label label-<?php if($fila->estado == "Activo"){echo "success";}elseif($fila->estado == "Inactivo" || $fila->estado == "Vencido"){echo "danger";}elseif($fila->estado == "Renovado"){echo "warning";} ?>"><?= $fila->estado?></span> </td>
                                                <td><?= $fila->zona?></td>
                                                <td><?= $fila->curp ?></td>

                                                <?php
                                                $fecha_creado = $fila->fecha_creado;
                                                list($anio, $mes, $dia) = explode("-",$fecha_creado);
                                                $mes_text = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
                                                 ?>

                                                <td style="display:;"><?= $dia . "-" . $mes_text[$mes-1] . "-" . $anio ?></td>
                                                <?php
                                                if ($nivel != 3) {
                                                  ?>
                                                <td><a href="<?= base_url() ?><?php if($fila->estado != "Inactivo" && $fila->estado != "Rechazado"){echo "Imprimir_comerciante_controller/Imprimir/";}  ?><?= $fila->id ?>"><button type="button" class="btn btn-light" id="imprimir" <?php if($fila->estado == "Inactivo" || $fila->estado == "Rechazado"){echo "disabled";} ?>> <i class="fa fa-print"></i> Imprimir </button></a></td>
                                                <?php
                                              }
                                               ?>
                                            </tr>

                                          <?php

                                            }
                                          ?>


                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="2">

                                                </td>

                                                <td colspan="7">
                                                    <div class="">
                                                        <nav aria-label="Page navigation example">
                                                            <ul class="pagination float-right"></ul>
                                                        </nav>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
