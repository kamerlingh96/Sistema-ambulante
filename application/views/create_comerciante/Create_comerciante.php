
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">

      <script type="text/javascript">
        var reportes = false;
        var crear_comerciante = true;
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
                        <h4 class="page-title">Alta de Comerciante</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Alta de Comerciante</li>
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
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body wizard-content">

                                <form action="<?= base_url() ?>Create_comerciante_controller/Create_comerciante" class="validation-wizard wizard-circle " method="post" name="formulario1" enctype="multipart/form-data">
                                    <!-- Step 1 -->
                                    <h6>Información del solicitante</h6>
                                    <section>
                                      <div class="row p-t-20">
                                          <div class="col-md-6">
                                              <div class="form-group">
                                                  <label class="control-label">Nombre del solicitante*</label>
                                                  <input type="text" class="form-control " placeholder="Nombres y apellidos" name="nombre" maxlength="50">
                                                </div>
                                          </div>
                                          <!--/span-->
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <label class="control-label">Correo del solicitante</label>
                                                <input type="email" class="form-control" name="email"  value="" placeholder="abc@dominio.com" maxlength="50">
                                            </div>
                                          </div>
                                          <!--/span-->
                                      </div>
                                      <!--/row-->
                                      <div class="row">
                                          <div class="col-md-6">
                                            <div class="form-group has-danger">
                                                <label class="control-label">Celular</label>
                                                <input class="form-control" type="tel" value="" name="cel" placeholder="(938) 123 4567" pattern="[0-9]+">
                                               </div>
                                          </div>
                                          <!--/span-->

                                          <div class="col-md-6">
                                            <div class="form-group has-danger">
                                                <label class="control-label">Teléfono</label>
                                                <input class="form-control" type="tel" value="" name="tel" placeholder="(938) 123 4567">
                                            </div>
                                          </div>

                                          <!--/span-->
                                      </div>

                                      <div class="row">
                                        <div class="col-md-6">
                                          <div class="form-group">
                                              <label class="control-label">CURP*</label>
                                              <input type="text" class="form-control text-uppercase " placeholder="" name="curp" maxlength="18">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Género*</label>
                                                <select class="form-control custom-select " data-placeholder="Elegir tipo de género" tabindex="0" name="genero">
                                                  <option value="">Selecciona el género</option>
                                                  <option value="Masculino">Masculino</option>
                                                  <option value="Femenino">Femenino</option>
                                                </select>
                                            </div>
                                        </div>

                                      </div>

                                      <div class="row">
                                          <div class="col-md-6">
                                              <div class="form-group">
                                                  <label class="control-label">Nombre del trabajador</label>
                                                  <input type="text" class="form-control" placeholder="Nombres y apellidos" name="nombre_segundo" maxlength="50">
                                                </div>
                                          </div>
                                      </div>

                                      <div class="row">
                                        <div class="col-md-6">
                                          <div class="form-group">
                                            <label>Foto del comerciante*  jpg/png</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="form-control-file " name="nombre_archivo1" accept="image/png, image/jpeg" id="nombre_archivo1">
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-md-6">
                                          <div class="form-group">
                                            <label>Credencial*  jpg/png/pdf</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="form-control-file " name="nombre_archivo2">
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>

                                      <div class="row">
                                      <div class="col-md-6">
                                        <div class="form-group">
                                          <label>Domicilio*  jpg/png/pdf</label>
                                          <div class="input-group">
                                              <div class="custom-file">
                                                  <input type="file" class="form-control-file " name="nombre_archivo3">
                                              </div>
                                          </div>
                                        </div>
                                      </div>
                                        <div class="col-md-6">
                                          <div class="form-group">
                                            <label>Copriscam  jpg/png/pdf</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="form-control-file" name="nombre_archivo4">
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="col-md-6">
                                          <div class="form-group">
                                            <label>Fotografía del lugar*  jpg/png/pdf</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="form-control-file " name="nombre_archivo5" accept="image/png, image/jpeg">
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-md-6">
                                          <div class="form-group">
                                            <label>Fotografía de la estructura*  jpg/png/pdf</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="form-control-file " name="nombre_archivo6" accept="image/png, image/jpeg">
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>

                                    </section>
                                    <!-- Step 2 -->
                                    <h6>Información del Comercio</h6>

                                    <section>
                                        <div class="row">

                                            <div class="col-md-3">
                                              <div class="form-group">
                                                <label class="control-label">Giro*</label>
                                                <select class="form-control custom-select " data-placeholder="Elegir tipo de giro" tabindex="0" name="giro">
                                                  <option value="">Selecciona un giro</option>

                                                  <?php
                                                  foreach ($consulta->result() as $giro) {
                                                    ?>
                                                  <option value="<?= $giro->nombre_giro ?>"><?= $giro->nombre_giro ?></option>
                                                  <?php
                                                  }
                                                  ?>
                                                </select>
                                              </div>
                                            </div>





                                          <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Descripción General de los Productos a Comercializar*</label>
                                                <input type="text" class="form-control " placeholder="Ejemplo: Aguas de diferentes sabores" name="descripcion">
                                              </div>
                                          </div>

                                          <div class="col-md-3">
                                              <div class="form-group">
                                                  <label class="control-label">Tipo de permiso*</label>
                                                  <select class="form-control custom-select " data-placeholder="Elegir tipo de permiso" tabindex="0" name="tipo">
                                                    <option value="">Selecciona un permiso</option>
                                                    <?php
                                                    foreach ($consulta3->result() as $permisos) {
                                                      ?>
                                                    <option value="<?= $permisos->tipo ?>"><?= $permisos->tipo ?></option>
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
                                                <label class="control-label">Actividad*</label>
                                                <input type="text" value="" data-role="tagsinput" class="form-control " style="width:100%;" name="tags" id="tagsList">



                                              </div>
                                            </div>
                                            <div class="col-md-2">
                                              <div class="form-group">
                                                <label class="control-label">Tarjetón</label>
                                                <div class="onoffswitch">
                                                    <input type="checkbox" name="tarjeton" class="onoffswitch-checkbox" id="myonoffswitch" checked>
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
                                                <div class="onoffswitch2">
                                                    <input type="checkbox" name="sindicato" class="onoffswitch-checkbox2" id="myonoffswitch2" checked>
                                                    <label class="onoffswitch-label2" for="myonoffswitch2" style="width:65px;">
                                                        <span class="onoffswitch-inner2"></span>
                                                        <span class="onoffswitch-switch2"></span>
                                                    </label>
                                                </div>
                                              </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                          <h6>Horario*</h6>
                                        </div>
                                        <br>

                                        <div class="row">
                                          <div class="col-md-4">
                                            <div class="row">
                                              <div class="col-12">
                                                <div class="row form-group">
                                                  <div class="col-md-4">
                                                    <input class="form-control" type="number" min="1" max="3" value="1" id="horario" name="horario">
                                                  </div>

                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>

                                        <div class="row">
                                          <div class="col-md-4">
                                            <div class="row">
                                              <div class="col-12">
                                                <div class="row">
                                                  <div class="col-4">

                                                  </div>
                                                  <div class="col-4 col-form-label">
                                                    <div class="custom-control custom-checkbox mr-sm-2 m-b-15">
                                                      <input type="checkbox" class="custom-control-input" id="LV1" name="lv1">
                                                      <label class="custom-control-label" for="LV1" style="{background-color : #FFFFFF;">L-V</label>
                                                    </div>
                                                  </div>
                                                  <div class="col-4 col-form-label">
                                                    <div class="custom-control custom-checkbox mr-sm-2 m-b-15">
                                                      <input type="checkbox" class="custom-control-input" id="SD1" name="sd1">
                                                      <label class="custom-control-label" for="SD1" style="{background-color : #FFFFFF;">S-D</label>
                                                    </div>
                                                  </div>
                                                </div>
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

                                            <div class="row" style="height:72px;" >
                                              <div class="col-12">
                                                <div class="form-group row">
                                                  <div class="col-4 col-form-label">
                                                    <div class="custom-control custom-checkbox mr-sm-2 m-b-15">
                                                      <input type="checkbox" class="custom-control-input"  onchange="habilitar1(this.checked);" id="checkboxLunes" value="Lunes" name="dias[0]">
                                                      <label class="custom-control-label" for="checkboxLunes" style="{background-color : #FFFFFF;">Lunes</label>
                                                    </div>
                                                  </div>
                                                  <div class="col-4">
                                                    <input class="form-control" type="time" value="05:00" id="Lunes1" disabled name="desde[0]" onchange ="lvd1(this.value)">
                                                  </div>
                                                  <div class="col-4">
                                                    <input class="form-control" type="time" value="15:00" id="Lunes2" disabled name="hasta[0]" onchange ="lvh1(this.value)">
                                                  </div>
                                                </div>

                                              </div>
                                            </div>
                                            <div class="row" style="height:72px;" >
                                              <div class="col-12">
                                                <div class="form-group row">
                                                  <div class="col-4 col-form-label">
                                                    <div class="custom-control custom-checkbox mr-sm-2 m-b-15">
                                                      <input type="checkbox" class="custom-control-input" onchange="habilitar2(this.checked);" id="checkboxMartes" value="Martes" name="dias[1]">
                                                      <label class="custom-control-label" for="checkboxMartes">Martes</label>
                                                    </div>
                                                  </div>
                                                  <div class="col-4">
                                                    <input class="form-control" type="time" value="05:00" id="Martes1" disabled name="desde[1]" onchange ="lvd1(this.value)">
                                                  </div>
                                                  <div class="col-4">
                                                    <input class="form-control" type="time" value="15:00" id="Martes2" disabled name="hasta[1]" onchange ="lvh1(this.value)">
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="row" style="height:72px;" >
                                              <div class="col-12">
                                                <div class="form-group row">
                                                  <div class="col-4 col-form-label">
                                                    <div class="custom-control custom-checkbox mr-sm-2 m-b-15">
                                                      <input type="checkbox" class="custom-control-input" onchange="habilitar3(this.checked);" id="checkboxMiercoles" value="Miercoles" name="dias[2]">
                                                      <label class="custom-control-label" for="checkboxMiercoles">Miercoles</label>
                                                    </div>
                                                  </div>
                                                  <div class="col-4">
                                                    <input class="form-control" type="time" value="05:00" id="Miercoles1" disabled name="desde[2]" onchange ="lvd1(this.value)">
                                                  </div>
                                                  <div class="col-4">
                                                    <input class="form-control" type="time" value="15:00" id="Miercoles2" disabled name="hasta[2]" onchange ="lvh1(this.value)">
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="row" style="height:72px;" >
                                              <div class="col-12">
                                                <div class="form-group row">
                                                  <div class="col-4 col-form-label">
                                                    <div class="custom-control custom-checkbox mr-sm-2 m-b-15">
                                                      <input type="checkbox" class="custom-control-input" onchange="habilitar4(this.checked);" id="checkboxJueves" value="Jueves" name="dias[3]">
                                                      <label class="custom-control-label" for="checkboxJueves">Jueves</label>
                                                    </div>
                                                  </div>
                                                  <div class="col-4">
                                                    <input class="form-control" type="time" value="05:00" id="Jueves1" disabled name="desde[3]" onchange ="lvd1(this.value)">
                                                  </div>
                                                  <div class="col-4">
                                                    <input class="form-control" type="time" value="15:00" id="Jueves2" disabled name="hasta[3]" onchange ="lvh1(this.value)">
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="row" style="height:72px;" >
                                              <div class="col-12">
                                                <div class="form-group row">
                                                  <div class="col-4 col-form-label">
                                                    <div class="custom-control custom-checkbox mr-sm-2 m-b-15">
                                                      <input type="checkbox" class="custom-control-input" onchange="habilitar5(this.checked);" id="checkboxViernes" value="Viernes" name="dias[4]">
                                                      <label class="custom-control-label" for="checkboxViernes">Viernes</label>
                                                    </div>
                                                  </div>
                                                  <div class="col-4">
                                                    <input class="form-control" type="time" value="05:00" id="Viernes1" disabled name="desde[4]" onchange ="lvd1(this.value)">
                                                  </div>
                                                  <div class="col-4">
                                                    <input class="form-control" type="time" value="15:00" id="Viernes2" disabled name="hasta[4]" onchange ="lvh1(this.value)">
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="row" style="height:72px;" >
                                              <div class="col-12">
                                                <div class="form-group row">
                                                  <div class="col-4 col-form-label">
                                                    <div class="custom-control custom-checkbox mr-sm-2 m-b-15">
                                                      <input type="checkbox" class="custom-control-input" onchange="habilitar6(this.checked);" id="checkboxSabado" value="Sabado" name="dias[5]">
                                                      <label class="custom-control-label" for="checkboxSabado">Sabado</label>
                                                    </div>
                                                  </div>
                                                  <div class="col-4">
                                                    <input class="form-control" type="time" value="05:00" id="Sabado1" disabled name="desde[5]" onchange ="sdd1(this.value)">
                                                  </div>
                                                  <div class="col-4">
                                                    <input class="form-control" type="time" value="15:00" id="Sabado2" disabled name="hasta[5]" onchange ="sdh1(this.value)">
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="row" style="height:72px;" >
                                              <div class="col-12">
                                                <div class="form-group row">
                                                  <div class="col-4 col-form-label">
                                                    <div class="custom-control custom-checkbox mr-sm-2 m-b-15">
                                                      <input type="checkbox" class="custom-control-input" onchange="habilitar7(this.checked);" id="checkboxDomingo" value="Domingo" name="dias[6]">
                                                      <label class="custom-control-label" for="checkboxDomingo">Domingo</label>
                                                    </div>
                                                  </div>
                                                  <div class="col-4">
                                                    <input class="form-control" type="time" value="05:00" id="Domingo1" disabled name="desde[6]" onchange ="sdd1(this.value)">
                                                  </div>
                                                  <div class="col-4">
                                                    <input class="form-control" type="time" value="15:00" id="Domingo2" disabled name="hasta[6]" onchange ="sdh1(this.value)">
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>

                                          <div class="col-md-4" style="display:none;" id="tarde">
                                            <div class="row">
                                              <div class="col-12">
                                                <div class="row">
                                                  <div class="col-2">

                                                  </div>
                                                  <div class="col-4 col-form-label">
                                                    <div class="custom-control custom-checkbox mr-sm-2 m-b-15">
                                                      <input type="checkbox" class="custom-control-input" id="LV2" name="lv2">
                                                      <label class="custom-control-label" for="LV2" style="{background-color : #FFFFFF;">L-V</label>
                                                    </div>
                                                  </div>
                                                  <div class="col-4 col-form-label">
                                                    <div class="custom-control custom-checkbox mr-sm-2 m-b-15">
                                                      <input type="checkbox" class="custom-control-input" id="SD2" name="sd2">
                                                      <label class="custom-control-label" for="SD2" style="{background-color : #FFFFFF;">S-D</label>
                                                    </div>
                                                  </div>
                                                </div>
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

                                            <div class="row" style="height:72px;" >
                                              <div class="col-12">
                                                <div class="form-group row">
                                                  <div class="col-2 ">
                                                  </div>
                                                  <div class="col-4">
                                                    <input class="form-control" type="time" value="05:00" id="Lunes3" disabled name="desde[7]"  onchange ="lvd2(this.value)">
                                                  </div>
                                                  <div class="col-4">
                                                    <input class="form-control" type="time" value="15:00" id="Lunes4" disabled name="hasta[7]" onchange ="lvh2(this.value)">
                                                  </div>
                                                </div>
                                                <div class="col-2">
                                                </div>
                                              </div>
                                            </div>
                                            <div class="row" style="height:72px;" >
                                              <div class="col-12">
                                                <div class="form-group row">
                                                  <div class="col-2">
                                                  </div>
                                                  <div class="col-4">
                                                    <input class="form-control" type="time" value="05:00" id="Martes3" disabled name="desde[8]" onchange ="lvd2(this.value)">
                                                  </div>
                                                  <div class="col-4">
                                                    <input class="form-control" type="time" value="15:00" id="Martes4" disabled name="hasta[8]" onchange ="lvh2(this.value)">
                                                  </div>
                                                  <div class="col-2">
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="row" style="height:72px;" >
                                              <div class="col-12">
                                                <div class="form-group row">
                                                  <div class="col-2 ">
                                                  </div>
                                                  <div class="col-4">
                                                    <input class="form-control" type="time" value="05:00" id="Miercoles3" disabled name="desde[9]" onchange ="lvd2(this.value)">
                                                  </div>
                                                  <div class="col-4">
                                                    <input class="form-control" type="time" value="15:00" id="Miercoles4" disabled name="hasta[9]" onchange ="lvh2(this.value)">
                                                  </div>
                                                  <div class="col-2 ">
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="row" style="height:72px;" >
                                              <div class="col-12">
                                                <div class="form-group row">
                                                  <div class="col-2 ">
                                                  </div>
                                                  <div class="col-4">
                                                    <input class="form-control" type="time" value="05:00" id="Jueves3" disabled name="desde[10]" onchange ="lvd2(this.value)">
                                                  </div>
                                                  <div class="col-4">
                                                    <input class="form-control" type="time" value="15:00" id="Jueves4" disabled name="hasta[10]" onchange ="lvh2(this.value)">
                                                  </div>
                                                  <div class="col-2 ">
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="row" style="height:72px;" >
                                              <div class="col-12">
                                                <div class="form-group row">
                                                  <div class="col-2 ">
                                                  </div>
                                                  <div class="col-4">
                                                    <input class="form-control" type="time" value="05:00" id="Viernes3" disabled name="desde[11]" onchange ="lvd2(this.value)">
                                                  </div>
                                                  <div class="col-4">
                                                    <input class="form-control" type="time" value="15:00" id="Viernes4" disabled name="hasta[11]" onchange ="lvh2(this.value)">
                                                  </div>
                                                  <div class="col-2 ">
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="row" style="height:72px;" >
                                              <div class="col-12">
                                                <div class="form-group row">
                                                  <div class="col-2 ">
                                                  </div>
                                                  <div class="col-4">
                                                    <input class="form-control" type="time" value="05:00" id="Sabado3" disabled name="desde[12]" onchange ="sdd2(this.value)">
                                                  </div>
                                                  <div class="col-4">
                                                    <input class="form-control" type="time" value="15:00" id="Sabado4" disabled name="hasta[12]" onchange ="sdh2(this.value)">
                                                  </div>
                                                  <div class="col-2 ">
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="row" style="height:72px;" >
                                              <div class="col-12">
                                                <div class="form-group row">
                                                  <div class="col-2 ">
                                                  </div>
                                                  <div class="col-4">
                                                    <input class="form-control" type="time" value="05:00" id="Domingo3" disabled name="desde[13]" onchange ="sdd2(this.value)">
                                                  </div>
                                                  <div class="col-4">
                                                    <input class="form-control" type="time" value="15:00" id="Domingo4" disabled name="hasta[13]" onchange ="sdh2(this.value)">
                                                  </div>
                                                  <div class="col-2 ">
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>

                                          <div class="col-md-4" style="display:none;" id="noche" >
                                            <div class="row">
                                              <div class="col-12">
                                                <div class="row">
                                                  <div class="col-2">

                                                  </div>
                                                  <div class="col-4 col-form-label">
                                                    <div class="custom-control custom-checkbox mr-sm-2 m-b-15">
                                                      <input type="checkbox" class="custom-control-input" id="LV3" name="lv3">
                                                      <label class="custom-control-label" for="LV3" style="{background-color : #FFFFFF;">L-V</label>
                                                    </div>
                                                  </div>
                                                  <div class="col-4 col-form-label">
                                                    <div class="custom-control custom-checkbox mr-sm-2 m-b-15">
                                                      <input type="checkbox" class="custom-control-input" id="SD3" name="sd3">
                                                      <label class="custom-control-label" for="SD3" style="{background-color : #FFFFFF;">S-D</label>
                                                    </div>
                                                  </div>
                                                </div>
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

                                            <div class="row" style="height:72px;" >
                                              <div class="col-12">
                                                <div class="form-group row">
                                                  <div class="col-2 ">
                                                  </div>
                                                  <div class="col-4">
                                                    <input class="form-control" type="time" value="05:00" id="Lunes5" disabled name="desde[14]" onchange ="lvd3(this.value)">
                                                  </div>
                                                  <div class="col-4">
                                                    <input class="form-control" type="time" value="15:00" id="Lunes6" disabled name="hasta[14]" onchange ="lvh3(this.value)">
                                                  </div>
                                                </div>
                                                <div class="col-2">
                                                </div>
                                              </div>
                                            </div>
                                            <div class="row" style="height:72px;" >
                                              <div class="col-12">
                                                <div class="form-group row">
                                                  <div class="col-2">
                                                  </div>
                                                  <div class="col-4">
                                                    <input class="form-control" type="time" value="05:00" id="Martes5" disabled name="desde[15]" onchange ="lvd3(this.value)">
                                                  </div>
                                                  <div class="col-4">
                                                    <input class="form-control" type="time" value="15:00" id="Martes6" disabled name="hasta[15]" onchange ="lvh3(this.value)">
                                                  </div>
                                                  <div class="col-2">
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="row" style="height:72px;" >
                                              <div class="col-12">
                                                <div class="form-group row">
                                                  <div class="col-2 ">
                                                  </div>
                                                  <div class="col-4">
                                                    <input class="form-control" type="time" value="05:00" id="Miercoles5" disabled name="desde[16]" onchange ="lvd3(this.value)">
                                                  </div>
                                                  <div class="col-4">
                                                    <input class="form-control" type="time" value="15:00" id="Miercoles6" disabled name="hasta[16]" onchange ="lvh3(this.value)">
                                                  </div>
                                                  <div class="col-2 ">
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="row" style="height:72px;" >
                                              <div class="col-12">
                                                <div class="form-group row">
                                                  <div class="col-2 ">
                                                  </div>
                                                  <div class="col-4">
                                                    <input class="form-control" type="time" value="05:00" id="Jueves5" disabled name="desde[17]" onchange ="lvd3(this.value)">
                                                  </div>
                                                  <div class="col-4">
                                                    <input class="form-control" type="time" value="15:00" id="Jueves6" disabled name="hasta[17]" onchange ="lvh3(this.value)">
                                                  </div>
                                                  <div class="col-2 ">
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="row" style="height:72px;" >
                                              <div class="col-12">
                                                <div class="form-group row">
                                                  <div class="col-2 ">
                                                  </div>
                                                  <div class="col-4">
                                                    <input class="form-control" type="time" value="05:00" id="Viernes5" disabled name="desde[18]" onchange ="lvd3(this.value)">
                                                  </div>
                                                  <div class="col-4">
                                                    <input class="form-control" type="time" value="15:00" id="Viernes6" disabled name="hasta[18]" onchange ="lvh3(this.value)">
                                                  </div>
                                                  <div class="col-2 ">
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="row" style="height:72px;" >
                                              <div class="col-12">
                                                <div class="form-group row">
                                                  <div class="col-2 ">
                                                  </div>
                                                  <div class="col-4">
                                                    <input class="form-control" type="time" value="05:00" id="Sabado5" disabled name="desde[19]" onchange ="sdd3(this.value)">
                                                  </div>
                                                  <div class="col-4">
                                                    <input class="form-control" type="time" value="15:00" id="Sabado6" disabled name="hasta[19]" onchange ="sdh3(this.value)">
                                                  </div>
                                                  <div class="col-2 ">
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="row" style="height:72px;" >
                                              <div class="col-12">
                                                <div class="form-group row">
                                                  <div class="col-2 ">
                                                  </div>
                                                  <div class="col-4">
                                                    <input class="form-control" type="time" value="05:00" id="Domingo5" disabled name="desde[20]" onchange ="sdd3(this.value)">
                                                  </div>
                                                  <div class="col-4">
                                                    <input class="form-control" type="time" value="15:00" id="Domingo6" disabled name="hasta[20]" onchange ="sdh3(this.value)">
                                                  </div>
                                                  <div class="col-2 ">
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>










                                    </section>
                                    <!-- Step 3 -->
                                    <h6>Ubicación</h6>
                                    <section>
                                      <div class="row" style="display:none;" id="mapas">
                                        <div class="col-md-12">
                                          <div class="form-group">
                                            <div class="google-maps">
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
                                              <label class="control-label">Dirección de la Venta Ambulante*</label>
                                              <input type="text" class="form-control " placeholder="Ejemplo: Calle 35 #12, Col. Centro" name="direccion" maxlength="50s">
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label class="control-label">Zona Solicitada*</label>
                                                <select class="form-control custom-select " id="SelectID" data-placeholder="Elegir Zona" tabindex="0" name="zona">
                                                    <option value="">Selecciona una estructura</option>
                                                    <option value="Zona 1">Zona 1</option>
                                                    <option value="Zona 2">Zona 2</option>
                                                    <option value="Zona 3">Zona 3</option>
                                                    <option value="Zona 4">Zona 4</option>
                                                    <option value="Zona 5">Zona 5</option>
                                                    <option value="Zona 6">Zona 6</option>
                                                </select>
                                            </div>
                                        </div>
                                          <!--/span-->
                                          <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Coordenadas</label>
                                                <input class="form-control" type="text" value="18.638110341302593,-91.83651733862303" readonly id="coords" name="coordenadas">
                                            </div>
                                          </div>
                                          <div class="col-md-2">
                                            <label>Metros a Ocupar*</label>
                                            <input class="form-control" type="number" min="1" max="10" value="1" id="example-number-input" name="metros">
                                          </div>
                                          <!--/span-->
                                      </div>
                                      <div class="row">
                                        <div class="col-md-2">
                                          <div class="form-group">
                                              <label class="control-label">Tipo de estructura*</label>
                                              <select class="form-control custom-select " data-placeholder="Elegir Zona" tabindex="0" name="estructura">
                                                  <option value="">Selecciona una estructura</option>
                                                <?php
                                                foreach ($consulta2->result() as $estructura) {
                                                  ?>
                                                <option value="<?= $estructura->estructura ?>"><?= $estructura->estructura ?></option>
                                                <?php
                                                }
                                                ?>
                                              </select>
                                          </div>
                                        </div>
                                      </div>

                                    </section>
                                    <!-- Step 4 -->
                                    <h6>Finalizar Registro</h6>
                                    <section>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="participants1">Estado de la Solicitud del Permiso Ambulante</label>
                                                    <select class="custom-select form-control " id="estado" name="estado">
                                                        <option value="Activo">Activo</option>
                                                        <option value="Renovante">Renovante</option>
                                                        <option value="Inactivo">Inactivo</option>
                                                        <option value="Rechazado">Rechazado</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="decisions1">Comentarios / Observaciones Adicionales (100)</label>
                                                    <input type="text" name="comentario" class="form-control" maxlength="100"></input>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
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
                <!-- Row -->
                <!-- .row -->

                <!-- Row -->
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
