
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
                        <h4 class="page-title">Reportes del Comerciante</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Reportes del comerciante</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">

                    <!-- ============================================================================================================================== -->
                    <div class="col-lg-12">
                        <div class="card">

                            <form action="<?= base_url() ?>Comentarios_controller/getComentario" method="post" name="edicionCorrecta" enctype="multipart/form-data">
                                <div class="form-body">
                                    <div class="card-body">
                                      <h4 class="card-title">Reportes</h4>
                                      <div class="row">
                                        <div class="col-lg-4 text-center m-b-30">
                                        </div>
                                        <div class="col-lg-4 text-center m-b-30">
                                          <input type="text" name="id" value="<?= $consulta->id?>" style="display:none;">
                                            <h4 class="card-title"><?= $consulta->nombre?></h4>
                                            <img src="<?= base_url('uploads/'. $consulta->vigencia.'/foto_dueno').'/'.$consulta->img?>" alt="image" class="rounded-circle" width="290">
                                            <p class="m-t-15 m-b-0">Vigencia: 31 de Diciembre del <?= $consulta->vigencia?></p>
                                        </div>
                                        <div class="col-lg-4 text-center m-b-30">
                                        </div>
                                      </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Generar Comentario</label>
                                                    <textarea class="form-control" rows="5" name="comentario" required></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                  <label class="control-label">Tipo de reporte</label>
                                                  <select class="custom-select form-control" name="reporte" required>
                                                      <option value="">Selecciona una opción</option>
                                                      <option value="Normal">Normal</option>
                                                      <option value="Fuera de horario">Fuera de horario</option>
                                                      <option value="Reincidencia">Reincidencia</option>
                                                      <option value="Fuera de zona">Fuera de zona</option>
                                                      <option value="No cuenta con permiso">No cuenta con permiso</option>
                                                      <option value="Estado de ebriedad">Estado de ebriedad</option>
                                                      <option value="Invadir banqueta">Invadir banqueta</option>
                                                      <option value="Hacer caso omiso a las recomendaciones">Hacer caso omiso a las recomendaciones</option>
                                                      <option value="Amenazas y/o insulto a la autoridad">Amenazas y/o insulto a la autoridad</option>
                                                      <option value="Otro">Otro</option>
                                                  </select>
                                              </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-12">
                                            <div class="form-actions" style="text-align:right;">
                                                <div class="card-body">
                                                    <button type="submit" class="btn btn-success"> <i class="fa fa-comments"></i> Reportar </button>
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                          <div class="col-12">
                                            <div class="table-responsive">
                                                <table  class="table m-t-30 no-wrap table-hover contact-list" data-page-size="10" id="demo-foo-addrow">
                                                    <thead>
                                                        <tr>
                                                            <th>Editor</th>
                                                            <th>Reporte</th>
                                                            <th>Comentario</th>
                                                            <th>Fecha</th>
                                                          <?php
                                                          if ($nivel == 1) {
                                                            ?>
                                                            <th>Act</th>
                                                            <?php
                                                          }
                                                           ?>
                                                        </tr>
                                                    </thead>

                                                    <div class="m-t-40">
                                                      <div class="form-group">
                                                        <p style="float:left;">Buscar:&nbsp;&nbsp; </p>
                                                        <input id="search" type="text" placeholder="" autocomplete="off">
                                                      </div>
                                                    </div>

                                                    <tbody>
                                                      <?php
                                                        foreach ($consulta2->result() as $fila) {
                                                      ?>
                                                        <tr>
                                                            <td><?= $fila->nombre_master?></td>
                                                            <td><?= $fila->reporte?></td>
                                                            <td><?= $fila->comentario?></td>

                                                            <?php
                                                            $fecha_creado = $fila->fecha;
                                                            list($fecha, $hora) = explode(" ",$fecha_creado);
                                                            list($anio, $mes, $dia) = explode("-",$fecha);
                                                            $mes_text = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
                                                             ?>
                                                            <td><?= $dia . "-" . $mes_text[$mes-1] . "-" . $anio . " " . $hora?></td>
                                                            <?php
                                                            if ($nivel == 1) {
                                                              ?>
                                                              <td>
                                                                <button type="button" class="btn waves-effect waves-light btn-danger" data-toggle="modal" data-target=".bs-example-modal-lg<?= $fila->id?>">Eliminar</button>
                                                                <div class="modal fade bs-example-modal-lg<?= $fila->id?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                                                                  <div class="modal-dialog modal-lg">
                                                                    <div class="modal-content">
                                                                      <div class="modal-header">
                                                                        <h4 class="modal-title" id="myLargeModalLabel">Alerta...</h4>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                      </div>
                                                                      <div class="modal-body">
                                                                        <h4>Espera un momento....</h4>
                                                                        <p>Parece que estas a punto de eliminar el comentario de <?= $fila->nombre_master?>.</p>
                                                                        <p>Si estas seguro de esto, entones adelante.</p>
                                                                      </div>
                                                                      <div class="modal-footer">
                                                                        <button type="button" class="btn btn-success waves-effect text-left" data-dismiss="modal" onclick="window.location.href = '<?= base_url()."Comentarios_controller/eliminar/". $fila->id . "-" . $consulta->id ?>';">Eliminar</button>
                                                                        <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Cancelar</button>
                                                                      </div>
                                                                    </div>
                                                                    <!-- /.modal-content -->
                                                                  </div>
                                                                  <!-- /.modal-dialog -->
                                                                </div>
                                                              </td>
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
                                <?php
                                if (isset($_GET['creado'])) {
                                  $mensaje = $_GET['creado'];
                                    ?>
                                    <input type="text" id="mensajeCreado" value="<?= $mensaje?>" style="display:none;">
                                    <?php

                                }
                                ?>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
