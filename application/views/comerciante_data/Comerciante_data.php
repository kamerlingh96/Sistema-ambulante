'.$consulta->img
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">

      <script type="text/javascript">
        var reportes = false;
        var crear_comerciante = false;
        var data_ambulante = true;
      </script>
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
                        <h4 class="page-title">Información del Comerciante</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Informacion del comerciante</li>
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
                          <?php
                          $anio_actual = date('Y');
                          if ($consulta->vigencia == $anio_actual) {
                            ?>
                            <form action="<?= base_url() ?>Comerciante_modificar_controller/Actualizar" method="post" name="edicionCorrecta" enctype="multipart/form-data">
                            <?php
                          }else{
                            ?>
                            <form action="<?= base_url() ?>Comerciante_modificar_controller/Renovar" method="post" name="edicionCorrecta" enctype="multipart/form-data">

                            <?php
                          }

                           ?>
                                <div class="form-body">
                                    <div class="card-body">
                                      <?php
                                      $fecha_creado = $consulta->fecha_creado;
                                      list($anio, $mes, $dia) = explode("-",$fecha_creado);
                                      $mes_text = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
                                       ?>
                                       <div class="row">
                                         <div class="col-md-6" style="display: flex;align-items: center;">
                                           <h6 class="">Registrado por <?= $creador->nombre_master ?> / El dia <?= $dia?> de <?= $mes_text[$mes-1]?> del <?= $anio?></h6>
                                         </div>
                                         <div class="col-md-6">
                                           <div class="form-actions" style="text-align:right;">
                                               <div class="">
                                                 <?php
                                                   if ($consulta->vigencia == $anio_actual) {
                                                     if ($nivel != 3) {
                                                     ?>
                                                     <button type="button" class="btn btn-info" onclick="editarComerciante()" id="editarComerciante1"> <i class="fa fa-edit"></i> Editar </button>
                                                     <?php
                                                     }
                                                   }else {
                                                     if ($nivel != 3) {
                                                       if ($consulta->estado != "Renovado") {
                                                         ?>
                                                         <button type="button" class="btn btn-info" onclick="editarComerciante()" id="editarComerciante1"> <i class="fa fa-edit"></i> Renovar </button>
                                                         <?php
                                                       }
                                                     }
                                                   }


                                                  ?>
                                                  <?php
                                                  if ($nivel != 3) {
                                                    ?>
                                                    <a href="<?= base_url() ?><?php if($consulta->estado != "Inactivo" && $consulta->estado != "Rechazado"){echo "Imprimir_comerciante_controller/Imprimir/";} ?><?= $consulta->id ?>"><button type="button" class="btn btn-info" id="imprimir" <?php if($consulta->estado == "Inactivo" || $consulta->estado == "Rechazado"){echo "disabled";} ?>> <i class="fa fa-print"></i> Imprimir </button></a>
                                                    <?php
                                                  }
                                                   ?>
                                                   <button type="button" class="btn btn-success" style="display:none;" id="enviarEdicion1" data-toggle="modal" data-target=".bs-example-modal-lg"> <i class="fa fa-check"></i> Guardar </button>
                                                   <a href="<?= base_url() ?>Comentarios_controller/Comentario/<?= $consulta->id ?>"><button type="button" class="btn btn-info" id="comentarios"> <i class="fa fa-comments"></i> Reportes </button></a>
                                                   <button type="button" class="btn btn-danger" onclick="cancelarEdicion()" style="display:none;" id="cancelarEdicion1">Cancelar</button>
                                               </div>
                                           </div>
                                         </div>
                                       </div>
                                       <br>
                                      <div class="row">
                                        <div class="col-lg-4 text-center m-b-30">
                                          <input type="text" name="id" value="<?= $consulta->id?>" style="display:none">
                                            <img src="<?= base_url('uploads/'. $consulta->vigencia.'/foto_dueno').'/'.$consulta->img?>" alt="image" class="rounded-circle" width="290" height="290">
                                            <h4 class="card-title"><?= $consulta->nombre?></h4>
                                            <span style="float:left;" class="label label-<?php if($consulta->estado == "Activo"){echo "success";}elseif($consulta->estado == "Inactivo" || $consulta->estado == "Vencido"){echo "danger";}elseif($consulta->estado == "Renovado"){echo "warning";} ?>"><?= $consulta->estado?></span>
                                            <?php
                                            if ($consulta->vigencia == $anio_actual) {
                                              ?>
                                              <p class="m-b-0">Vigencia: 31 de Diciembre del <?= $consulta->vigencia?></p>
                                              <?php
                                            }else {
                                              ?>
                                              <p class="m-b-0">Vigencia: Vencido</p>
                                              <?php
                                            }
                                             ?>
                                        </div>
                                        <div class="col-lg-4 text-center m-b-30">

                                          <?php
                                          if (file_exists('uploads/'.$consulta->vigencia.'/estructura/'.$consulta->img)) {
                                            ?>
                                            <img src="<?= base_url('uploads/'. $consulta->vigencia.'/estructura').'/'.$consulta->img?>" alt="image" class="rounded-circle responsive" width="290" height="290">
                                            <h4 class="card-title">Fotografía de la estructura</h4>
                                            <?php
                                          }elseif (file_exists('uploads/'.$consulta->vigencia.'/estructura/'.$consulta->png)) {
                                            ?>
                                            <img src="<?= base_url('uploads/'. $consulta->vigencia.'/estructura').'/'.$consulta->png?>" alt="image" class="rounded-circle responsive" width="290" height="290">
                                            <h4 class="card-title">Fotografía de la estructura</h4>
                                            <?php
                                          }else {
                                            ?>

                                            <?php
                                          }
                                           ?>

                                        </div>
                                        <div class="col-lg-4 text-center m-b-30">

                                          <?php
                                          if (file_exists('uploads/'.$consulta->vigencia.'/lugar/'.$consulta->img)) {
                                            ?>
                                            <img src="<?= base_url('uploads/'. $consulta->vigencia.'/lugar').'/'.$consulta->img?>" alt="image" class="rounded-circle responsive" width="290" height="290">
                                            <h4 class="card-title">Fotografía del lugar</h4>
                                            <?php
                                          }elseif (file_exists('uploads/'.$consulta->vigencia.'/lugar/'.$consulta->png)) {
                                            ?>
                                            <img src="<?= base_url('uploads/'. $consulta->vigencia.'/lugar').'/'.$consulta->png?>" alt="image" class="rounded-circle responsive" width="290" height="290">
                                            <h4 class="card-title">Fotografía del lugar</h4>
                                            <?php
                                          }else {
                                            ?>

                                            <?php
                                          }
                                           ?>
                                        </div>
                                      </div>
                                      <div class="row p-t-20">
                                        <div class="col-md-12">
                                          <h5>Información del Propietario</h5>
                                        </div>
                                      </div>
                                        <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Propietario del comercio</label>
                                                    <input type="text" class="form-control" placeholder="" disabled value="<?= $consulta->nombre?>" id="nombre" name="nombre">
                                                  </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                              <div class="form-group">
                                              <label class="control-label">Correo del comerciante</label>
                                                <input type="email" class="form-control" name="email"  value="<?= $consulta->email?>" disabled id="correo">
                                            </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                              <div class="form-group has-danger">
                                                  <label class="control-label">Celular</label>
                                                  <input class="form-control" type="tel" value="<?= $consulta->celular ?>" name="cel" disabled id="cel">
                                                </div>
                                            </div>
                                            <!--/span-->

                                            <div class="col-md-6">
                                                <div class="form-group has-danger">
                                                  <label class="control-label">Telefono</label>
                                                  <input class="form-control" type="tel" value="<?= $consulta->telefono ?>" disabled id="tel" name="tel">
                                                </div>
                                            </div>

                                            <!--/span-->
                                        </div>

                                        <div class="row">
                                          <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">CURP</label>
                                                <input type="text" class="form-control" placeholder="" name="curp" value="<?= $consulta->curp ?>" disabled id="curp" maxlength="18">
                                              </div>
                                          </div>
                                          <div class="col-md-6">
                                              <div class="form-group">
                                                  <label class="control-label">Genero</label>
                                                  <select class="form-control custom-select required" data-placeholder="Elegir tipo de genero" tabindex="0" name="genero" disabled id="genero">
                                                    <option value="Masculino" <?php if($consulta->genero =="Masculino"){echo "selected";} ?>>Masculino</option>
                                                    <option value="Femenino"<?php if($consulta->genero =="Femenino"){echo "selected";} ?> >Femenino</option>
                                                  </select>
                                              </div>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-md-6">
                                              <div class="form-group">
                                                  <label class="control-label">Trabajador</label>
                                                  <input type="text" class="form-control" placeholder="" disabled value="<?= $consulta->nombre_segundo?>" id="nombre_segundo" name="nombre_segundo">
                                                </div>
                                          </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                          <div class="col-md-6">
                                            <div class="form-group" style="display:none;" id="file">
                                              <label>Foto del comerciante</label>
                                              <div class="input-group">
                                                  <div class="custom-file">
                                                      <input type="file" class="form-control-file" name="nombre_archivo1" accept="image/png, image/jpeg"  id="nombre_archivo1">
                                                  </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                            <div class="form-group" style="display:none;" id="file2">
                                              <label>Credencial</label>
                                              <div class="input-group">
                                                  <div class="custom-file">
                                                      <input type="file" class="form-control-file required" name="nombre_archivo2">
                                                  </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                          <div class="col-md-6">
                                            <div class="form-group" style="display:none;" id="file3">
                                              <label>Domicilio</label>
                                              <div class="input-group">
                                                  <div class="custom-file">
                                                      <input type="file" class="form-control-file required" name="nombre_archivo3">
                                                  </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                            <div class="form-group" style="display:none;" id="file4">
                                              <label>Copriscam</label>
                                              <div class="input-group">
                                                  <div class="custom-file">
                                                      <input type="file" class="form-control-file" name="nombre_archivo4">
                                                  </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                          <div class="col-md-6">
                                            <div class="form-group" style="display:none;" id="file5">
                                              <label>Fotografía del lugar</label>
                                              <div class="input-group">
                                                  <div class="custom-file">
                                                      <input type="file" class="form-control-file required" name="nombre_archivo5" accept="image/png, image/jpeg">
                                                  </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                            <div class="form-group" style="display:none;" id="file6">
                                              <label>Fotografía de la estructura</label>
                                              <div class="input-group">
                                                  <div class="custom-file">
                                                      <input type="file" class="form-control-file required" name="nombre_archivo6" accept="image/png, image/jpeg">
                                                  </div>
                                              </div>
                                              <br>
                                            </div>
                                          </div>
                                        </div>


                                        <!--/row-->
                                        <div class="row p-t-20">
                                          <div class="col-md-12">
                                            <h5>Información del Comercio</h5>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="control-label">Giro o Actividad Comercial</label>
                                                <select class="form-control custom-select" data-placeholder="Elegir tipo de giro" tabindex="0" name="giro" disabled id="giro">
                                                  <?php
                                                  foreach ($consulta1->result() as $giro) {
                                                    ?>
                                                  <option value="<?= $giro->nombre_giro ?>"  <?php if($consulta->giro ==$giro->nombre_giro){echo "selected";} ?>><?= $giro->nombre_giro ?></option>
                                                  <?php
                                                  }
                                                  ?>
                                                </select>
                                              </div>
                                          </div>
                                          <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Descripción General de los Productos a Comercializar</label>
                                                <input type="text" class="form-control" placeholder="Ejemplo: Aguas de diferentes sabores" value="<?= $consulta->descripcion ?>" name="descripcion" disabled id="descripcion">
                                              </div>
                                          </div>
                                          <div class="col-md-3">
                                              <div class="form-group">
                                                  <label class="control-label">Tipo de permiso</label>
                                                  <select class="form-control custom-select" data-placeholder="Elegir tipo de permiso" tabindex="0" name="tipo" disabled id="tipo">
                                                      <?php
                                                    foreach ($consulta3->result() as $permisos) {
                                                      ?>
                                                    <option value="<?= $permisos->tipo ?>" <?php if($consulta->tipo ==$permisos->tipo){echo "selected";} ?>><?= $permisos->tipo ?></option>
                                                    <?php
                                                    }
                                                    ?>
                                                  </select>
                                              </div>
                                          </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-md-6">
                                              <div class="form-group" id="my-tag-list">
                                                <label class="control-label">Actividad</label>
                                                <input type="text" value="<?= $consulta->tags ?>" data-role="tagsinput" class="form-control" style="width:100%;" name="tags" disabled id="etiquetas">

                                              </div>
                                            </div>
                                            <?php
                                            $tarjetonsindicato = $consulta->tarjetonsindicato;
                                            list($tarjeton, $sindicato) = explode("/",$tarjetonsindicato);


                                             ?>
                                            <div class="col-md-2">
                                              <div class="form-group">
                                                <label class="control-label">Tarjetón</label>
                                                <input type="text" class="form-control" value="<?= $tarjeton ?>" name="tarjeton" disabled id="tarjeton">
                                                <div class="onoffswitch" id="switch" style="display: none">
                                                  <?php if ($tarjeton == "Si") {
                                                    ?>
                                                    <input type="checkbox" name="tarjeton" class="onoffswitch-checkbox" id="myonoffswitch" checked>
                                                  <?php
                                                }else {
                                                  ?>
                                                    <input type="checkbox" name="tarjeton" class="onoffswitch-checkbox" id="myonoffswitch">
                                                  <?php
                                                    }
                                                  ?>
                                                    <label class="onoffswitch-label" for="myonoffswitch" style="width:65px;">
                                                        <span class="onoffswitch-inner"></span>
                                                        <span class="onoffswitch-switch"></span>
                                                    </label>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-md-2">
                                              <div class="form-group">
                                                <label class="control-label">Sindicato</label>
                                                <input type="text" class="form-control" value="<?= $sindicato ?>" name="sindicato" disabled id="sindicato">
                                                <div class="onoffswitch" id="switch2" style="display: none">
                                                  <?php if ($sindicato == "Si") {
                                                    ?>
                                                    <input type="checkbox" name="sindicato" class="onoffswitch-checkbox2" id="myonoffswitch2" checked>
                                                  <?php
                                                }else {
                                                  ?>
                                                    <input type="checkbox" name="sindicato" class="onoffswitch-checkbox2" id="myonoffswitch2">
                                                  <?php
                                                    }
                                                  ?>
                                                    <label class="onoffswitch-label2" for="myonoffswitch2" style="width:65px;">
                                                        <span class="onoffswitch-inner2"></span>
                                                        <span class="onoffswitch-switch2"></span>
                                                    </label>
                                                </div>
                                              </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                          <h6>Horario</h6>
                                        </div>

                                        <div class="row" style="display:none;" id="horario-MTN">
                                          <div class="col-md-1">
                                            <input class="form-control" type="number" min="1" max="3" value="<?= $consulta->horario ?>" id="horario" name="horario">
                                          </div>
                                        </div>


                                        <!-- ========================================================================================================================================================================== -->

                                        <div class="row">
                                          <div class="col-md-4">
                                            <div class="row" style="display:none;" id="horario-MTN-edit">
                                              <div class="col-12">
                                                <div class="row">
                                                  <div class="col-4">
                                                    <div class="form-group row">
                                                      <label class="custom-control" style="text-align:left; width:100%;">Dia</label>
                                                    </div>
                                                  </div>
                                                  <div class="col-4">

                                                    <div class="form-group row">
                                                      <label class="custom-control" style="text-align:left; width:100%;">Desde</label>
                                                    </div>
                                                  </div>
                                                  <div class="col-4">

                                                    <div class="form-group row">
                                                      <label class="custom-control" style="text-align:left; width:100%;">Hasta</label>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>


                                        <?php
                                        $conta = 0;
                                              foreach ($hora->result() as $fila) {
                                                $habi = $conta + 1;
                                                ?>

                                                <?php

                                                 ?>

                                                  <div class="row" style="height:72px;display:none;" id="horario1-<?= $conta ?>">
                                                    <div class="col-12">
                                                      <div class="form-group row">
                                                        <div class="col-4 col-form-label">
                                                          <div class="custom-control custom-checkbox mr-sm-2 m-b-15">
                                                            <input type="checkbox" class="custom-control-input"  onchange="habilitar<?= $habi ?>(this.checked);" id="checkbox<?= $fila->fecha ?>" value="<?= $fila->fecha  ?>" name="dias[<?= $conta ?>]" disabled <?php if( $fila->dia_laboral == "true") { echo "checked";} ?>>
                                                            <label class="custom-control-label" for="checkbox<?= $fila->fecha ?>"><?= $fila->fecha ?></label>
                                                          </div>
                                                        </div>
                                                        <div class="col-4">
                                                          <input class="form-control" type="time" value="<?php if ($fila->dia_laboral  == "true" ) { echo $fila->desde;}else{echo "00:00";} ?>" id="<?= $fila->fecha  ?>1" <?php if($fila->dia_laboral == "false"){echo " disabled";}?> name="desde[<?= $conta ?>]">
                                                          </div>
                                                          <div class="col-4">
                                                            <input class="form-control" type="time" value="<?php if ($fila->dia_laboral  == "true" ) { echo $fila->hasta;}else{echo "00:00";} ?>" id="<?= $fila->fecha  ?>2" <?php if($fila->dia_laboral == "false"){echo " disabled";}?> name="hasta[<?= $conta ?>]">
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>

                                              <?php
                                              $conta++;
                                            }
                                        ?>

                                      </div>

                                      <div class="col-md-4" style="display:none;" id="tarde">
                                        <div class="row">
                                          <div class="col-12">
                                            <div class="row">
                                              <div class="col-2">
                                              </div>
                                              <div class="col-4">

                                                <div class="form-group row">
                                                  <label class="custom-control" style="text-align:left; width:100%;">Desde</label>
                                                </div>
                                              </div>
                                              <div class="col-4">

                                                <div class="form-group row">
                                                  <label class="custom-control" style="text-align:left; width:100%;">Hasta</label>
                                                </div>
                                              </div>
                                              <div class="col-2">
                                              </div>
                                            </div>
                                          </div>
                                        </div>


                                    <?php
                                    $conta = 0;
                                    $conta2 = 7;
                                          foreach ($hora->result() as $fila) {
                                            $habi = $conta + 1;
                                            ?>


                                              <div class="row" style="height:72px;display:none;" id="horario3-<?= $conta ?>">
                                                <div class="col-12">
                                                  <div class="form-group row">
                                                    <div class="col-2">
                                                    </div>
                                                    <div class="col-4">
                                                      <input class="form-control" type="time" value="<?php if ($fila->dia_laboral  == "true" ) { echo $fila->desde2;}else{echo "00:00";} ?>" id="<?= $fila->fecha  ?>3" <?php if($fila->dia_laboral == "false"){echo " disabled";}?> name="desde[<?= $conta2 ?>]">
                                                      </div>
                                                      <div class="col-4">
                                                        <input class="form-control" type="time" value="<?php if ($fila->dia_laboral  == "true" ) { echo $fila->hasta2;}else{echo "00:00";} ?>" id="<?= $fila->fecha  ?>4" <?php if($fila->dia_laboral == "false"){echo " disabled";}?> name="hasta[<?= $conta2 ?>]">
                                                        </div>
                                                        <div class="col-2">
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>

                                          <?php
                                          $conta++;
                                          $conta2++;
                                        }
                                    ?>

                                  </div>


                                  <div class="col-md-4" style="display:none;" id="noche">
                                    <div class="row">
                                      <div class="col-12">
                                        <div class="row">
                                          <div class="col-2">
                                          </div>
                                          <div class="col-4">

                                            <div class="form-group row">
                                              <label class="custom-control" style="text-align:left; width:100%;">Desde</label>
                                            </div>
                                          </div>
                                          <div class="col-4">

                                            <div class="form-group row">
                                              <label class="custom-control" style="text-align:left; width:100%;">Hasta</label>
                                            </div>
                                          </div>
                                          <div class="col-2">
                                          </div>
                                        </div>
                                      </div>
                                    </div>


                                <?php
                                $conta = 0;
                                $conta3 = 14;
                                      foreach ($hora->result() as $fila) {
                                        $habi = $conta + 1;
                                        ?>


                                          <div class="row" style="height:72px;display:none;" id="horario4-<?= $conta ?>">
                                            <div class="col-12">
                                              <div class="form-group row">
                                                <div class="col-2">
                                                </div>
                                                <div class="col-4">
                                                  <input class="form-control" type="time" value="<?php if ($fila->dia_laboral  == "true" ) { echo $fila->desde2;}else{echo "00:00";} ?>" id="<?= $fila->fecha  ?>5" <?php if($fila->dia_laboral == "false"){echo " disabled";}?> name="desde[<?= $conta3 ?>]">
                                                  </div>
                                                  <div class="col-4">
                                                    <input class="form-control" type="time" value="<?php if ($fila->dia_laboral  == "true" ) { echo $fila->hasta2;}else{echo "00:00";} ?>" id="<?= $fila->fecha  ?>6" <?php if($fila->dia_laboral == "false"){echo " disabled";}?> name="hasta[<?= $conta3 ?>]">
                                                    </div>
                                                    <div class="col-2">
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>

                                      <?php
                                      $conta++;
                                      $conta3++;
                                    }
                                ?>

                              </div>

                                    </div>



                                    <!-- ========================================================================================================================================================================== -->
                                        <?php


                                        $conta = 0;
                                              foreach ($hora->result() as $fila) {
                                                $habi = $conta + 1;
                                                ?>

                                                <div class="form-group row" id="horario2-<?= $conta ?>">
                                                  <label for="example-time-input" class="col-md-1 col-form-label" style="text-align:left"><?= $fila->fecha ?>: </label>
                                                  <label for="example-time-input" class="col-md-1 col-form-label" style="text-align:left"> <?php if($fila->desde == "00:00" && $fila->hasta == "00:00"){echo "CERRADO";}else{ echo date_format(date_create($fila->desde), 'g:i A'); echo " - "; echo date_format(date_create($fila->hasta), 'g:i A');}  ?></label>
                                                    <?php
                                                    if ($fila->horario == 2) {
                                                      ?>
                                                      <label for="example-time-input" class="col-md-1 col-form-label" style="text-align:left"> <?php if($fila->desde == "00:00" && $fila->hasta == "00:00"){echo "";}else{ echo date_format(date_create($fila->desde2), 'g:i A'); echo " - "; echo date_format(date_create($fila->hasta2), 'g:i A');}  ?></label>
                                                        <?php
                                                    }else{
                                                      if ($fila->horario == 3) {
                                                        ?>
                                                        <label for="example-time-input" class="col-md-1 col-form-label" style="text-align:left"> <?php if($fila->desde == "00:00" && $fila->hasta == "00:00"){echo "";}else{ echo date_format(date_create($fila->desde2), 'g:i A'); echo " - "; echo date_format(date_create($fila->hasta2), 'g:i A');}  ?></label>
                                                        <label for="example-time-input" class="col-md-1 col-form-label" style="text-align:left"> <?php if($fila->desde == "00:00" && $fila->hasta == "00:00"){echo "";}else{ echo date_format(date_create($fila->desde3), 'g:i A'); echo " - "; echo date_format(date_create($fila->hasta3), 'g:i A');}  ?></label>
                                                        <?php
                                                      }
                                                    }

                                                    ?>
                                                </div>

                                              <?php
                                              $conta++;
                                            }
                                        ?>


                                        <div class="row p-t-20">
                                          <div class="col-md-12">
                                            <h5>Ubicación</h5>
                                          </div>
                                        </div>

                                        <div class="row" style="display:none;" id="mapa">
                                          <div class="col-md-12">
                                            <div class="form-group">
                                              <div class="google-maps" style="display:none;" id="mapas">
                                                <div id="map" class="gmaps" style="display:none;"></div>
                                                <div id="map_10_1" class="gmaps" style="display:none;"></div>
                                                <div id="map_10_2" class="gmaps" style="display:none;"></div>
                                                <div id="map_10_3" class="gmaps" style="display:none;"></div>
                                                <div id="map_10_4" class="gmaps" style="display:none;"></div>
                                                <div id="map_10_5" class="gmaps" style="display:none;"></div>
                                                <div id="map_10_6" class="gmaps" style="display:none;"></div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>

                                        <div class="row">
                                          <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Dirección de la Venta Ambulante</label>
                                                <input type="text" class="form-control" placeholder="Ejemplo: Calle 35 #12, Col. Centro" name="direccion" value="<?= $consulta->direccion ?>" disabled id="direccion">
                                              </div>
                                          </div>

                                          <div class="col-md-2">
                                              <div class="form-group">
                                                  <label class="control-label">Zona Solicitada</label>
                                                  <select class="form-control custom-select" data-placeholder="Elegir Zona" tabindex="0" name="zona" disabled id="SelectID">
                                                      <option value="Zona 1" <?php if($consulta->zona =="Zona 1"){echo "selected";} ?>>Zona 1</option>
                                                      <option value="Zona 2" <?php if($consulta->zona =="Zona 2"){echo "selected";} ?>>Zona 2</option>
                                                      <option value="Zona 3" <?php if($consulta->zona =="Zona 3"){echo "selected";} ?>>Zona 3</option>
                                                      <option value="Zona 4" <?php if($consulta->zona =="Zona 4"){echo "selected";} ?>>Zona 4</option>
                                                      <option value="Zona 5" <?php if($consulta->zona =="Zona 5"){echo "selected";} ?>>Zona 5</option>
                                                      <option value="Zona 6" <?php if($consulta->zona =="Zona 6"){echo "selected";} ?>>Zona 6</option>
                                                  </select>
                                              </div>
                                          </div>
                                            <!--/span-->
                                            <div class="col-md-2">
                                              <div class="form-group">
                                                  <label>Coordenadas</label>
                                                  <input class="form-control" type="text" value="<?= $consulta->coordenadas ?>" readonly id="coords" name="coordenadas" disabled>

                                                  <?php
                                                     $cordena = $consulta->coordenadas;
                                                     list($lat, $lng) = explode(",",$cordena);
                                                   ?>
                                                  <script type="text/javascript">
                                                    var zona_selec = "<?php echo $consulta->zona; ?>"
                                                    var coordenadas_ambulante_lat = <?php echo $lat; ?>;
                                                    var coordenadas_ambulante_lng = <?php echo $lng; ?>;

                                                  </script>
                                              </div>
                                            </div>
                                            <div class="col-md-2">
                                              <label>Metros a Ocupar</label>
                                              <input class="form-control" type="number" value="<?= $consulta->metros ?>" id="example-number-input" name="metros" disabled>
                                            </div>
                                            <!--/span-->
                                        </div>

                                        <div class="row">
                                        <div class="col-md-2">
                                          <div class="form-group">
                                              <label class="control-label">Tipo de estructura</label>
                                              <select class="form-control custom-select" data-placeholder="Elegir Zona" tabindex="0" name="estructura" disabled id="estructura">
                                                <?php
                                                foreach ($consulta2->result() as $estructura) {
                                                  ?>
                                                <option value="<?= $estructura->estructura ?>" <?php if($consulta->estructura ==$estructura->estructura){echo "selected";} ?>><?= $estructura->estructura ?></option>
                                                <?php
                                                }
                                                ?>
                                              </select>
                                          </div>
                                        </div>
                                      </div>

                                      <div class="row p-t-20">
                                        <div class="col-md-12">
                                          <h5>Información Adicional</h5>
                                        </div>
                                      </div>

                                        <div class="row">
                                            <div class="col-md-6" style="display:none;" id="estado">
                                                <div class="form-group">
                                                    <label for="participants1">Estado de actividad del ambulante</label>
                                                    <select class="custom-select form-control" name="estado">
                                                        <option value="Activo" <?php if($consulta->estado =="Activo"){echo "selected";} ?>>Activo</option>
                                                        <option value="Inactivo" <?php if($consulta->estado =="Inactivo"){echo "selected";} ?>>Inactivo</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="decisions1">Comentario</label>
                                                    <input name="comentario" class="form-control" disabled value="<?= $consulta->comentario ?>" id="comentario"></input>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <!--<div class="row">
                                          <div class="col-md-6">
                                            <h6>Años renovados: 2018</h6>
                                          </div>
                                        </div>-->

                                        <div class="row p-t-20">
                                          <div class="col-md-12">
                                            <h5>Descarga de Documentos</h5>
                                          </div>
                                        </div>

                                        <div class="row">
                                          <div class="col-md-12">
                                            <a href="<?= base_url('uploads/'. $consulta->vigencia.'/foto_dueno').'/'.$consulta->img?>" download="foto_<?= $consulta->img ?>"><button type="button" class="btn waves-effect waves-light btn-info">Foto del comerciante</button></a>
                                            <?php
                                            if (file_exists('uploads/'.$consulta->vigencia.'/credencial/'.$consulta->img)) {
                                              ?>
                                              <a href="<?= base_url('uploads/'. $consulta->vigencia.'/credencial').'/'.$consulta->img?>" download="Credencial_<?= $consulta->img ?>"><button type="button" class="btn waves-effect waves-light btn-info">Credencial</button></a>
                                              <?php
                                            }elseif (file_exists('uploads/'.$consulta->vigencia.'/credencial/'.$consulta->pdf)) {
                                              ?>
                                              <a href="<?= base_url('uploads/'. $consulta->vigencia.'/credencial').'/'.$consulta->pdf?>" download="Credencial_<?= $consulta->pdf ?>"><button type="button" class="btn waves-effect waves-light btn-info">Credencial</button></a>
                                              <?php
                                            }else {
                                              ?>
                                              <a href="<?= base_url('uploads/'. $consulta->vigencia.'/credencial').'/'.$consulta->png?>" download="Credencial_<?= $consulta->png ?>"><button type="button" class="btn waves-effect waves-light btn-info">Credencial</button></a>
                                              <?php
                                            }
                                             ?>
                                             <?php
                                             if (file_exists('uploads/'.$consulta->vigencia.'/domicilio/'.$consulta->img)) {
                                               ?>
                                               <a href="<?= base_url('uploads/'. $consulta->vigencia.'/domicilio').'/'.$consulta->img?>" download="Domicilio_<?= $consulta->img ?>"><button type="button" class="btn waves-effect waves-light btn-info">Domicilio</button></a>
                                               <?php
                                             }elseif (file_exists('uploads/'.$consulta->vigencia.'/domicilio/'.$consulta->pdf)) {
                                               ?>
                                               <a href="<?= base_url('uploads/'. $consulta->vigencia.'/domicilio').'/'.$consulta->pdf?>" download="Domicilio_<?= $consulta->pdf ?>"><button type="button" class="btn waves-effect waves-light btn-info">Domicilio</button></a>
                                               <?php
                                             }else {
                                               ?>
                                               <a href="<?= base_url('uploads/'. $consulta->vigencia.'/domicilio').'/'.$consulta->png?>" download="Domicilio_<?= $consulta->png ?>"><button type="button" class="btn waves-effect waves-light btn-info">Domicilio</button></a>
                                               <?php
                                             }
                                              ?>
                                              <?php
                                              if (file_exists('uploads/'.$consulta->vigencia.'/copriscam/'.$consulta->img)) {
                                                ?>
                                                <a href="<?= base_url('uploads/'. $consulta->vigencia.'/copriscam').'/'.$consulta->img?>" download="Copriscam_<?= $consulta->img ?>"><button type="button" class="btn waves-effect waves-light btn-info">Copriscam</button></a>
                                                <?php
                                              }elseif (file_exists('uploads/'.$consulta->vigencia.'/copriscam/'.$consulta->pdf)) {
                                                ?>
                                                <a href="<?= base_url('uploads/'. $consulta->vigencia.'/copriscam').'/'.$consulta->pdf?>" download="Copriscam_<?= $consulta->pdf ?>"><button type="button" class="btn waves-effect waves-light btn-info">Copriscam</button></a>
                                                <?php
                                              }elseif (file_exists('uploads/'.$consulta->vigencia.'/copriscam/'.$consulta->png)) {
                                                ?>
                                                <a href="<?= base_url('uploads/'. $consulta->vigencia.'/copriscam').'/'.$consulta->png?>" download="Copriscam_<?= $consulta->png ?>"><button type="button" class="btn waves-effect waves-light btn-info">Copriscam</button></a>
                                                <?php
                                              }
                                               ?>
                                               <?php
                                               if (file_exists('uploads/'.$consulta->vigencia.'/lugar/'.$consulta->img)) {
                                                 ?>
                                                 <a href="<?= base_url('uploads/'. $consulta->vigencia.'/lugar').'/'.$consulta->img?>" download="Lugar_<?= $consulta->img ?>"><button type="button" class="btn waves-effect waves-light btn-info">Fotografia del lugar</button></a>
                                                 <?php
                                               }elseif (file_exists('uploads/'.$consulta->vigencia.'/lugar/'.$consulta->pdf)) {
                                                 ?>
                                                 <a href="<?= base_url('uploads/'. $consulta->vigencia.'/lugar').'/'.$consulta->pdf?>" download="Lugar_<?= $consulta->pdf ?>"><button type="button" class="btn waves-effect waves-light btn-info">Fotografia del lugar</button></a>
                                                 <?php
                                               }else {
                                                 ?>
                                                 <a href="<?= base_url('uploads/'. $consulta->vigencia.'/lugar').'/'.$consulta->png?>" download="Lugar_<?= $consulta->png ?>"><button type="button" class="btn waves-effect waves-light btn-info">Fotografia del lugar</button></a>
                                                 <?php
                                               }
                                                ?>
                                                <?php
                                                if (file_exists('uploads/'.$consulta->vigencia.'/estructura/'.$consulta->img)) {
                                                  ?>
                                                  <a href="<?= base_url('uploads/'. $consulta->vigencia.'/estructura').'/'.$consulta->img?>" download="Estructura_<?= $consulta->img ?>"><button type="button" class="btn waves-effect waves-light btn-info">Fotografia de la estructura</button></a>
                                                  <?php
                                                }elseif (file_exists('uploads/'.$consulta->vigencia.'/estructura/'.$consulta->pdf)) {
                                                  ?>
                                                  <a href="<?= base_url('uploads/'. $consulta->vigencia.'/estructura').'/'.$consulta->pdf?>" download="Estructura_<?= $consulta->pdf ?>"><button type="button" class="btn waves-effect waves-light btn-info">Fotografia de la estructura</button></a>
                                                  <?php
                                                }else {
                                                  ?>
                                                  <a href="<?= base_url('uploads/'. $consulta->vigencia.'/estructura').'/'.$consulta->png?>" download="Estructura_<?= $consulta->png ?>"><button type="button" class="btn waves-effect waves-light btn-info">Fotografia de la estructura</button></a>
                                                  <?php
                                                }
                                                 ?>
                                          </div>
                                        </div>
                                        <div class="row">

                                        </div>





                                    </div>

                                    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myLargeModalLabel">¿Estás seguro de modificar la información del comerciante?</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            </div>
                                            <div class="modal-body">
                                                <h4>Espera un momento....</h4>
                                                <p>Parece que estas a punto de editar la información de un comerciante, verifica los datos antes de aceptar.</p>
                                                <p>Si las modificaciones son correctas entonces adelante.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-success waves-effect text-left" data-dismiss="modal" onclick="enviarEdicion()">&#10004; Actualizar Datos</button>
                                                <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">&#10008; Cancelar</button>
                                            </div>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                    </div>



                                </div>
                                <?php
                                if (isset($_GET['actualizado'])) {
                                  $mensaje = $_GET['actualizado'];
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
