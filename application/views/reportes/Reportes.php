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
                    <h3 class="page-title">REPORTES</h3>
                    <div class="d-flex align-items-center">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                                <li class="breadcrumb-item active" aria-current="page">REPORTES</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <style media="screen">
          .card-body h4,.card-body h3{
            color: #0faaae;
          }
        </style>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <?php
        if (isset($fecha)) {
          if ($fecha == "1") {
            ?>
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->


                <?php

                $dia1 = date("Y-m-d");
                $dia2 = date("Y-m-d",mktime(0, 0, 0, date('m'),date('d')-1,date('Y')));
                $dia3 = date("Y-m-d",mktime(0, 0, 0, date('m'),date('d')-2,date('Y')));
                $dia4 = date("Y-m-d",mktime(0, 0, 0, date('m'),date('d')-3,date('Y')));
                $dia5 = date("Y-m-d",mktime(0, 0, 0, date('m'),date('d')-4,date('Y')));
                $dia6 = date("Y-m-d",mktime(0, 0, 0, date('m'),date('d')-5,date('Y')));
                $dia7 = date("Y-m-d",mktime(0, 0, 0, date('m'),date('d')-6,date('Y')));

                $dias_semana = array($dia1,$dia2,$dia3,$dia4,$dia5,$dia6,$dia7);

                $dias_activos_fijos = array(0, 0, 0, 0, 0, 0, 0);
                $total_activos_fijos = 0;

                foreach ($consulta->result() as $sparklinedash) {
                  if ($sparklinedash->tipo == "Fijo") {
                    $total_activos_fijos++;
                  }
                  if ($sparklinedash->fecha_creado == $dias_semana[6] && $sparklinedash->tipo == "Fijo") {
                    $dias_activos_fijos[0] ++;
                  }elseif ($sparklinedash->fecha_creado == $dias_semana[5] && $sparklinedash->tipo == "Fijo") {
                    $dias_activos_fijos[1] ++;
                  }elseif ($sparklinedash->fecha_creado == $dias_semana[4] && $sparklinedash->tipo == "Fijo") {
                    $dias_activos_fijos[2] ++;
                  }elseif ($sparklinedash->fecha_creado == $dias_semana[3] && $sparklinedash->tipo == "Fijo") {
                    $dias_activos_fijos[3] ++;
                  }elseif ($sparklinedash->fecha_creado == $dias_semana[2] && $sparklinedash->tipo == "Fijo") {
                    $dias_activos_fijos[4] ++;
                  }elseif ($sparklinedash->fecha_creado == $dias_semana[1] && $sparklinedash->tipo == "Fijo") {
                    $dias_activos_fijos[5] ++;
                  }elseif ($sparklinedash->fecha_creado == $dias_semana[0] && $sparklinedash->tipo == "Fijo") {
                    $dias_activos_fijos[6] ++;
                  }
                }



                $dias_activos_semifijos = array(0, 0, 0, 0, 0, 0, 0);
                $total_activos_semifijos = 0;

                foreach ($consulta->result() as $sparklinedash) {
                  if ($sparklinedash->tipo == "Semifijo") {
                    $total_activos_semifijos++;
                  }
                  if ($sparklinedash->fecha_creado == $dias_semana[6] && $sparklinedash->tipo == "Semifijo") {
                    $dias_activos_semifijos[0] ++;
                  }elseif ($sparklinedash->fecha_creado == $dias_semana[5] && $sparklinedash->tipo == "Semifijo") {
                    $dias_activos_semifijos[1] ++;
                  }elseif ($sparklinedash->fecha_creado == $dias_semana[4] && $sparklinedash->tipo == "Semifijo") {
                    $dias_activos_semifijos[2] ++;
                  }elseif ($sparklinedash->fecha_creado == $dias_semana[3] && $sparklinedash->tipo == "Semifijo") {
                    $dias_activos_semifijos[3] ++;
                  }elseif ($sparklinedash->fecha_creado == $dias_semana[2] && $sparklinedash->tipo == "Semifijo") {
                    $dias_activos_semifijos[4] ++;
                  }elseif ($sparklinedash->fecha_creado == $dias_semana[1] && $sparklinedash->tipo == "Semifijo") {
                    $dias_activos_semifijos[5] ++;
                  }elseif ($sparklinedash->fecha_creado == $dias_semana[0] && $sparklinedash->tipo == "Semifijo") {
                    $dias_activos_semifijos[6] ++;
                  }
                }


                $dias_activos_ambulantes = array(0, 0, 0, 0, 0, 0, 0);
                $total_activos_ambulantes = 0;

                foreach ($consulta->result() as $sparklinedash) {
                  if ($sparklinedash->tipo == "Ambulante") {
                    $total_activos_ambulantes++;
                  }
                  if ($sparklinedash->fecha_creado == $dias_semana[6] && $sparklinedash->tipo == "Ambulante") {
                    $dias_activos_ambulantes[0] ++;
                  }elseif ($sparklinedash->fecha_creado == $dias_semana[5] && $sparklinedash->tipo == "Ambulante") {
                    $dias_activos_ambulantes[1] ++;
                  }elseif ($sparklinedash->fecha_creado == $dias_semana[4] && $sparklinedash->tipo == "Ambulante") {
                    $dias_activos_ambulantes[2] ++;
                  }elseif ($sparklinedash->fecha_creado == $dias_semana[3] && $sparklinedash->tipo == "Ambulante") {
                    $dias_activos_ambulantes[3] ++;
                  }elseif ($sparklinedash->fecha_creado == $dias_semana[2] && $sparklinedash->tipo == "Ambulante") {
                    $dias_activos_ambulantes[4] ++;
                  }elseif ($sparklinedash->fecha_creado == $dias_semana[1] && $sparklinedash->tipo == "Ambulante") {
                    $dias_activos_ambulantes[5] ++;
                  }elseif ($sparklinedash->fecha_creado == $dias_semana[0] && $sparklinedash->tipo == "Ambulante") {
                    $dias_activos_ambulantes[6] ++;
                  }
                }

                $lat = array();
                $lng = array();

                foreach ($consulta->result() as $sparklinedash) {
                  $coordenadas = $sparklinedash->coordenadas;
                  list($lat_coordenadas, $lng_coordenadas) = explode(",",$coordenadas);

                  $lat[] = $lat_coordenadas;
                  $lng[] = $lng_coordenadas;
                }


                $zona1 = 0;
                $zona2 = 0;
                $zona3 = 0;
                $zona4 = 0;
                $zona5 = 0;
                $zona6 = 0;


                foreach ($consulta->result() as $sparklinedash) {
                  if ($sparklinedash->zona == "Zona 1") {
                    $zona1++;
                  }elseif ($sparklinedash->zona == "Zona 2") {
                    $zona2++;
                  }elseif ($sparklinedash->zona == "Zona 3") {
                    $zona3++;
                  }elseif ($sparklinedash->zona == "Zona 4") {
                    $zona4++;
                  }elseif ($sparklinedash->zona == "Zona 5") {
                    $zona5++;
                  }elseif ($sparklinedash->zona == "Zona 6") {
                    $zona6++;
                  }
                }





                ?>


                <script type="text/javascript">
                  var dias_activos_fijos = [<?php foreach ($dias_activos_fijos as $key => $value) {
                    echo $dias_activos_fijos[$key].",";
                  }?>];

                  var dias_activos_semifijos = [<?php foreach ($dias_activos_semifijos as $key => $value) {
                    echo $dias_activos_semifijos[$key].",";
                  }?>];

                  var dias_activos_ambulantes = [<?php foreach ($dias_activos_ambulantes as $key => $value) {
                    echo $dias_activos_ambulantes[$key].",";
                  }?>];


                  var lat = [<?php foreach ($lat as $key => $value) {
                    echo $lat[$key].",";
                  }?>];
                  var lng = [<?php foreach ($lng as $key => $value) {
                    echo $lng[$key].",";
                  }?>];


                  var reportes = true;
                  var crear_comerciante = false;

                </script>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">REPORTE</h3>
                                <?php
                                //if (isset($giro)) {
                                  //foreach ($giro as $value) {
                                    //echo $value;
                                  //}
                                //}

                                 ?>
                                <form class="m-t-30" action="<?= base_url() ?>Reportes_controller/reportes" method="post"  enctype="multipart/form-data">
                                  <div class="row">
                                    <div class="col-md-4">

                                    </div>
                                    <div class="col-md-4 text-center">
                                      <h3>FILTRO</h3>
                                    </div>
                                    <div class="col-md-2">
                                      <div class="form-group">
                                          <select class="form-control custom-select" data-placeholder="Elegir fecha" tabindex="0" name="fecha" required onchange="cargar_imagen(this.value)">
                                            <option value="1" selected>Semana</option>
                                            <option value="2">Mes</option>
                                            <option value="3">Año</option>
                                            <option value="4">Fecha</option>
                                          </select>
                                      </div>
                                    </div>
                                    <div class="col-md-2 text-center">
                                      <button type="submit" class="btn btn-light">Filtrar</button>
                                    </div>
                                  </div><div class="row" style="display:none;" id="selecfechareporte">
                                    <div class="col-md-4">

                                    </div>
                                    <div class="col-md-4 text-center">

                                    </div>
                                    <div class="col-md-2">
                                      <div class="form-group">
                                        <label for="">Desde</label>
                                          <input type="date" class="form-control" name="desde" value="2019-01-01" min="2019-01-01" max="<?= $dia1?>">
                                      </div>
                                    </div>
                                    <div class="col-md-2">
                                      <div class="form-group">
                                        <label for="">Hasta</label>
                                          <input type="date" class="form-control" name="hasta" value="<?= $dia1?>" min="2019-01-01" max="<?= $dia1?>">
                                      </div>
                                    </div>
                                  </div>

                                  <script type="text/javascript">
                                  function cargar_imagen(imagen) {
                                    if (imagen == 4) {
                                     document.getElementById('selecfechareporte').style.display = "";
                                   }else{
                                     document.getElementById('selecfechareporte').style.display = "none";
                                   }
                                   }
                                  </script>



                                  <?php
                                  if (isset($giros)) {
                                    foreach ($giros as $key => $giro_select) {
                                      // code...
                                      //echo $giro_select."<br/>";
                                      $giros_select[] = $giro_select;
                                    }
                                  //print_r(count($giros));
                                  //echo $giros_select[0];
                                  }


                                  if (isset($tags_s)) {
                                    foreach ($tags_s as $key => $tag_select) {
                                      // code...
                                      //echo $tag_select."<br/>";
                                      $tags_select[] = $tag_select;
                                    }
                                  //print_r(count($tags_s));
                                  //echo $tags_select[0];
                                  }


                                  if (isset($zonas)) {
                                    foreach ($zonas as $key => $zona_select) {
                                      // code...
                                      //echo $zona_select."<br/>";
                                      $zonas_select[] = $zona_select;
                                    }
                                  //print_r(count($zonas));
                                  //echo $zonas_select[0];
                                  }

                                  if (isset($estructuras)) {
                                    foreach ($estructuras as $key => $estructura_select) {
                                      // code...
                                      //echo $estructura_select."<br/>";
                                      $estructuras_select[] = $estructura_select;
                                    }
                                  //print_r(count($zonas));
                                  //echo $zonas_select[0];
                                  }

                                  if (isset($estados)) {
                                    foreach ($estados as $key => $estado_select) {
                                      // code...
                                      //echo $estado_select."<br/>";
                                      $estados_select[] = $estado_select;
                                    }
                                  //print_r(count($zonas));
                                  //echo $zonas_select[0];
                                  }

                                  if (isset($observaciones)) {
                                    foreach ($observaciones as $key => $observacion_select) {
                                      // code...
                                      //echo $estado_select."<br/>";
                                      $observaciones_select[] = $observacion_select;
                                    }
                                  //print_r(count($zonas));
                                  //echo $zonas_select[0];
                                  }




                                   ?>
                                   <div class="row">
                                     <div class="col-md-12">
                                       <div class="custom-control custom-checkbox">
                                         <input type="checkbox" class="custom-control-input" id="seleccionarTodo" value="seleccionarTodo">
                                         <label class="custom-control-label" for="seleccionarTodo">Seleccionar Todo</label>
                                       </div>
                                     </div>
                                   </div>
                                  <br>
                                  <div class="row">
                                    <div class="col-md-4" style="border-style: groove;">
                                      <div class="">
                                        <h4>Género</h4>
                                      </div>
                                      <div class="custom-control custom-radio">
                                          <input type="radio" id="genero" name="genero" class="custom-control-input" value="Ambos" <?php if(isset($genero)){if($genero == "Ambos"){echo "checked";}}else{echo "checked";} ?>>
                                          <label class="custom-control-label" for="genero">Ambos</label>
                                      </div>
                                      <div class="custom-control custom-radio">
                                          <input type="radio" id="genero1" name="genero" class="custom-control-input" value="Masculino" <?php if(isset($genero)){if($genero == "Masculino"){echo "checked";}} ?>>
                                          <label class="custom-control-label" for="genero1">Masculino</label>
                                      </div>
                                      <div class="custom-control custom-radio">
                                          <input type="radio" id="genero2" name="genero" class="custom-control-input" value="Femenino" <?php if(isset($genero)){if($genero == "Femenino"){echo "checked";}} ?>>
                                          <label class="custom-control-label" for="genero2">Femenino</label>
                                      </div>
                                    </div>
                                    <div class="col-md-4" style="border-style: groove;">
                                      <div class="">
                                        <h4>Giro</h4>
                                      </div>
                                      <div class="row">
                                      <?php
                                      $rep1 = 0;
                                      foreach ($consulta2->result() as $key => $giro) {
                                        if ($rep1 == 0) {
                                          // code...
                                        ?>
                                        <div class="col-md-6">
                                          <div class="custom-control custom-checkbox">
                                            <?php
                                             ?>
                                            <input type="checkbox" class="custom-control-input seleccionarTodo" id="<?= $giro->nombre_giro ?>1" value="<?= $giro->nombre_giro ?>" name="giro[<?=$key?>]" <?php if(isset($giros)){if($giro->nombre_giro == $giros_select[$key]){echo "checked";}} ?>>
                                            <label class="custom-control-label" for="<?= $giro->nombre_giro ?>1"><?= $giro->nombre_giro ?></label>
                                          </div>
                                        </div>
                                      <?php
                                      $rep1 = 1;
                                    }else {
                                      ?>
                                      <div class="col-md-6">
                                        <div class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input seleccionarTodo" id="<?= $giro->nombre_giro ?>1" value="<?= $giro->nombre_giro ?>" name="giro[<?=$key?>]" <?php if(isset($giros)){if($giro->nombre_giro == $giros_select[$key]){echo "checked";}} ?>>
                                          <label class="custom-control-label" for="<?= $giro->nombre_giro ?>1"><?= $giro->nombre_giro ?></label>
                                        </div>
                                      </div>

                                      <?php
                                      $rep1 = 0;
                                      }
                                      }
                                      ?>

                                    </div>
                                    </div>
                                    <div class="col-md-4" style="border-style: groove;">
                                      <div class="">
                                        <h4>Tags</h4>
                                      </div>
                                      <div class="row">
                                        <?php
                                        $rep1 = 0;
                                        foreach ($consulta3->result() as $key => $tags) {
                                          if ($rep1 == 0) {
                                            // code...
                                          ?>
                                          <div class="col-md-6">
                                            <div class="custom-control custom-checkbox">
                                              <input type="checkbox" class="custom-control-input seleccionarTodo" id="<?= $tags->tag ?>1" value="<?= $tags->tag ?>" name="tags[<?=$key?>]" <?php if(isset($tags_s)){if($tags->tag == $tags_select[$key]){echo "checked";}} ?>>
                                              <label class="custom-control-label" for="<?= $tags->tag ?>1"><?= $tags->tag ?></label>
                                            </div>
                                          </div>
                                        <?php
                                        $rep1 = 1;
                                      }else {
                                        ?>
                                        <div class="col-md-6">
                                          <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input seleccionarTodo" id="<?= $tags->tag ?>1" value="<?= $tags->tag ?>" name="tags[<?=$key?>]" <?php if(isset($tags_s)){if($tags->tag == $tags_select[$key]){echo "checked";}} ?>>
                                            <label class="custom-control-label" for="<?= $tags->tag ?>1"><?= $tags->tag ?></label>
                                          </div>
                                        </div>

                                        <?php
                                        $rep1 = 0;
                                      }
                                        }
                                        ?>
                                      </div>
                                    </div>
                                  </div>
                                  <br>
                                  <br>
                                  <div class="row">
                                    <div class="col-md-4" style="border-style: groove;">
                                      <div class="">
                                        <h4>Zona</h4>
                                      </div>
                                      <div class="row">
                                        <div class="col-md-6">
                                          <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input seleccionarTodo" id="zona1" value="Zona 1" name="zona[0]" <?php if(isset($zonas)){if("Zona 1" == $zonas_select[0]){echo "checked";}} ?>>
                                            <label class="custom-control-label" for="zona1">Zona 1</label>
                                          </div>
                                          <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input seleccionarTodo" id="zona2" value="Zona 2" name="zona[1]" <?php if(isset($zonas)){if("Zona 2" == $zonas_select[1]){echo "checked";}} ?>>
                                            <label class="custom-control-label" for="zona2">Zona 2</label>
                                          </div>
                                          <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input seleccionarTodo" id="zona3" value="Zona 3" name="zona[2]" <?php if(isset($zonas)){if("Zona 3" == $zonas_select[2]){echo "checked";}} ?>>
                                            <label class="custom-control-label" for="zona3">Zona 3</label>
                                          </div>
                                        </div>
                                        <div class="col-md-6">
                                          <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input seleccionarTodo" id="zona4" value="Zona 4" name="zona[3]" <?php if(isset($zonas)){if("Zona 4" == $zonas_select[3]){echo "checked";}} ?>>
                                            <label class="custom-control-label" for="zona4">Zona 4</label>
                                          </div>
                                          <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input seleccionarTodo" id="zona5" value="Zona 5" name="zona[4]" <?php if(isset($zonas)){if("Zona 5" == $zonas_select[4]){echo "checked";}} ?>>
                                            <label class="custom-control-label" for="zona5">Zona 5</label>
                                          </div>
                                          <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input seleccionarTodo" id="zona6" value="Zona 6" name="zona[5]" <?php if(isset($zonas)){if("Zona 6" == $zonas_select[5]){echo "checked";}} ?>>
                                            <label class="custom-control-label" for="zona6">Zona 6</label>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-4" style="border-style: groove;">
                                      <div class="">
                                        <h4>Estructura</h4>
                                      </div>
                                      <div class="row">
                                        <?php
                                        $rep1 = 0;
                                        foreach ($consulta5->result() as $key => $estructura) {
                                          if ($rep1 == 0) {
                                            // code...
                                          ?>
                                          <div class="col-md-6">
                                            <div class="custom-control custom-checkbox">
                                              <input type="checkbox" class="custom-control-input seleccionarTodo" id="<?= $estructura->estructura ?>1" value="<?= $estructura->estructura ?>" name="estructura[<?=$key?>]" <?php if(isset($estructuras)){if($estructura->estructura == $estructuras_select[$key]){echo "checked";}} ?>>
                                              <label class="custom-control-label" for="<?= $estructura->estructura ?>1"><?= $estructura->estructura ?></label>
                                            </div>
                                          </div>
                                        <?php
                                        $rep1 = 1;
                                      }else {
                                        ?>
                                        <div class="col-md-6">
                                          <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input seleccionarTodo" id="<?= $estructura->estructura ?>1" value="<?= $estructura->estructura ?>" name="estructura[<?=$key?>]" <?php if(isset($estructuras)){if($estructura->estructura == $estructuras_select[$key]){echo "checked";}} ?>>
                                            <label class="custom-control-label" for="<?= $estructura->estructura ?>1"><?= $estructura->estructura ?></label>
                                          </div>
                                        </div>

                                        <?php
                                        $rep1 = 0;
                                      }
                                        }
                                        ?>
                                      </div>
                                    </div>
                                    <div class="col-md-4" style="border-style: groove;">
                                      <div class="">
                                        <h4>Estado</h4>
                                      </div>
                                      <div class="col-md-12">
                                        <div class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input seleccionarTodo" id="Activo1" value="Activo" name="estado[0]" <?php if(isset($estados)){if($estados_select[0] == "Activo"){echo "checked";}} ?>>
                                          <label class="custom-control-label" for="Activo1">Activo</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input seleccionarTodo" id="Inactivo1" value="Inactivo" name="estado[1]" <?php if(isset($estados)){if($estados_select[1] == "Inactivo"){echo "checked";}} ?>>
                                          <label class="custom-control-label" for="Inactivo1">Inactivo</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input seleccionarTodo" id="Vencido1" value="Vencido" name="estado[2]" <?php if(isset($estados)){if($estados_select[2] == "Vencido"){echo "checked";}} ?>>
                                          <label class="custom-control-label" for="Vencido1">Vencido</label>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4" style="border-style: groove;">
                                      <div class="">
                                        <h4>Observaciones</h4>
                                      </div>
                                      <div class="col-md-12">
                                        <div class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input seleccionarTodo" id="Observaciones1" value="Todo en Orden" name="observaciones[0]" <?php if(isset($observaciones)){if($observaciones_select[0] == "Todo en Orden"){echo "checked";}} ?>>
                                          <label class="custom-control-label" for="Observaciones1">Todo en Orden</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input seleccionarTodo" id="Observaciones2" value="Fuera de horario" name="observaciones[1]" <?php if(isset($observaciones)){if($observaciones_select[1] == "Fuera de horario"){echo "checked";}} ?>>
                                          <label class="custom-control-label" for="Observaciones2">Fuera de horario</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input seleccionarTodo" id="Observaciones3" value="Reincidencia" name="observaciones[2]" <?php if(isset($observaciones)){if($observaciones_select[2] == "Reincidencia"){echo "checked";}} ?>>
                                          <label class="custom-control-label" for="Observaciones3">Reincidencia</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input seleccionarTodo" id="Observaciones4" value="Fuera de zona" name="observaciones[3]" <?php if(isset($observaciones)){if($observaciones_select[3] == "Fuera de zona"){echo "checked";}} ?>>
                                          <label class="custom-control-label" for="Observaciones4">Fuera de zona</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input seleccionarTodo" id="Observaciones5" value="No cuenta con permiso" name="observaciones[4]" <?php if(isset($observaciones)){if($observaciones_select[4] == "No cuenta con permiso"){echo "checked";}} ?>>
                                          <label class="custom-control-label" for="Observaciones5">No cuenta con permiso</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input seleccionarTodo" id="Observaciones6" value="Estado de ebriedad" name="observaciones[5]" <?php if(isset($observaciones)){if($observaciones_select[5] == "Estado de ebriedad"){echo "checked";}} ?>>
                                          <label class="custom-control-label" for="Observaciones6">Estado de ebriedad</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input seleccionarTodo" id="Observaciones7" value="Invadir banqueta" name="observaciones[6]" <?php if(isset($observaciones)){if($observaciones_select[6] == "Invadir banqueta"){echo "checked";}} ?>>
                                          <label class="custom-control-label" for="Observaciones7">Invadir banqueta</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input seleccionarTodo" id="Observaciones8" value="Hacer caso omiso a las recomendaciones" name="observaciones[7]" <?php if(isset($observaciones)){if($observaciones_select[7] == "Hacer caso omiso a las recomendaciones"){echo "checked";}} ?>>
                                          <label class="custom-control-label" for="Observaciones8">Hacer caso omiso a las recomendaciones</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input seleccionarTodo" id="Observaciones9" value="Amenazas y/o insulto a la autoridad" name="observaciones[8]" <?php if(isset($observaciones)){if($observaciones_select[8] == "Amenazas y/o insulto a la autoridad"){echo "checked";}} ?>>
                                          <label class="custom-control-label" for="Observaciones9">Amenazas y/o insulto a la autoridad</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input seleccionarTodo" id="Observaciones10" value="Otro" name="observaciones[9]" <?php if(isset($observaciones)){if($observaciones_select[9] == "Otro"){echo "checked";}} ?>>
                                          <label class="custom-control-label" for="Observaciones10">Otro</label>
                                        </div>
                                      </div>
                                    </div>
                                  </div>

                                </form>





                                <?php
                                if (isset($genero) || isset($giros) || isset($tags_s) ||isset($zonas) || isset($estructuras) || isset($estados)) {
                                  ?>

                                  <br>
                                  <br>
                                  <?php
                                  if (isset($genero)) {


                                    if (isset($genero)) {
                                      $cont_ambos = 0;
                                      $cont_masculino = 0;
                                      $cont_femenino = 0;
                                      $dias_masculino = array("'Masculino'", 0, 0, 0, 0, 0, 0, 0);
                                      $dias_femenino = array("'Femenino'", 0, 0, 0, 0, 0, 0, 0);
                                      foreach ($consulta->result() as $comerciante) {
                                        if ($comerciante->fecha_creado == $dias_semana[6] && $comerciante->genero == "Masculino") {
                                          $cont_masculino ++;
                                          $cont_ambos ++;
                                          $dias_masculino[1] ++;
                                        }elseif ($comerciante->fecha_creado == $dias_semana[5] && $comerciante->genero == "Masculino") {
                                          $cont_masculino ++;
                                          $cont_ambos ++;
                                          $dias_masculino[2] ++;
                                        }elseif ($comerciante->fecha_creado == $dias_semana[4] && $comerciante->genero == "Masculino") {
                                          $cont_masculino ++;
                                          $cont_ambos ++;
                                          $dias_masculino[3] ++;
                                        }elseif ($comerciante->fecha_creado == $dias_semana[3] && $comerciante->genero == "Masculino") {
                                          $cont_masculino ++;
                                          $cont_ambos ++;
                                          $dias_masculino[4] ++;
                                        }elseif ($comerciante->fecha_creado == $dias_semana[2] && $comerciante->genero == "Masculino") {
                                          $cont_masculino ++;
                                          $cont_ambos ++;
                                          $dias_masculino[5] ++;
                                        }elseif ($comerciante->fecha_creado == $dias_semana[1] && $comerciante->genero == "Masculino") {
                                          $cont_masculino ++;
                                          $cont_ambos ++;
                                          $dias_masculino[6] ++;
                                        }elseif ($comerciante->fecha_creado == $dias_semana[0] && $comerciante->genero == "Masculino") {
                                          $cont_masculino ++;
                                          $cont_ambos ++;
                                          $dias_masculino[7] ++;
                                        }

                                        if ($comerciante->fecha_creado == $dias_semana[6] && $comerciante->genero == "Femenino") {
                                          $cont_femenino ++;
                                          $cont_ambos ++;
                                          $dias_femenino[1] ++;
                                        }elseif ($comerciante->fecha_creado == $dias_semana[5] && $comerciante->genero == "Femenino") {
                                          $cont_femenino ++;
                                          $cont_ambos ++;
                                          $dias_femenino[2] ++;
                                        }elseif ($comerciante->fecha_creado == $dias_semana[4] && $comerciante->genero == "Femenino") {
                                          $cont_femenino ++;
                                          $cont_ambos ++;
                                          $dias_femenino[3] ++;
                                        }elseif ($comerciante->fecha_creado == $dias_semana[3] && $comerciante->genero == "Femenino") {
                                          $cont_femenino ++;
                                          $cont_ambos ++;
                                          $dias_femenino[4] ++;
                                        }elseif ($comerciante->fecha_creado == $dias_semana[2] && $comerciante->genero == "Femenino") {
                                          $cont_femenino ++;
                                          $cont_ambos ++;
                                          $dias_femenino[5] ++;
                                        }elseif ($comerciante->fecha_creado == $dias_semana[1] && $comerciante->genero == "Femenino") {
                                          $cont_femenino ++;
                                          $cont_ambos ++;
                                          $dias_femenino[6] ++;
                                        }elseif ($comerciante->fecha_creado == $dias_semana[0] && $comerciante->genero == "Femenino") {
                                          $cont_femenino ++;
                                          $cont_ambos ++;
                                          $dias_femenino[7] ++;
                                        }
                                      }
                                    }
                                  }


                                  if (isset($giros)) {
                                    $cont_giros = array();
                                    foreach ($giros_select as $key => $giro) {
                                      $cont_giros[] = 0;
                                    }
                                    foreach ($giros_select as $key => $giro) {
                                      foreach ($consulta->result() as $comerciante) {
                                        if ($comerciante->giro == $giro && $comerciante->fecha_creado >= $dia7) {
                                          $cont_giros[$key]++;
                                        }
                                      }
                                    }
                                  }

                                  if (isset($tags_s)) {
                                    $cont_tags = array();
                                    foreach ($tags_select as $key => $tag_select) {
                                      $cont_tags[] = 0;
                                    }
                                    foreach ($tags_select as $key => $tag_select) {
                                      foreach ($consulta->result() as $comerciante) {
                                        if ($tag_select != "") {
                                          if (strpos($comerciante->tags, $tag_select) !== false && $comerciante->fecha_creado >= $dia7) {
                                            $cont_tags[$key]++;
                                          }
                                        }
                                      }
                                    }
                                  }

                                  if (isset($zonas)) {
                                    $cont_zonas = array();
                                    foreach ($zonas_select as $key => $zona) {
                                      $cont_zonas[] = 0;
                                    }
                                    foreach ($zonas_select as $key => $zona) {
                                      foreach ($consulta->result() as $comerciante) {
                                        if ($comerciante->zona == $zona && $comerciante->fecha_creado >= $dia7) {
                                          $cont_zonas[$key]++;
                                        }
                                      }
                                    }
                                  }

                                  if (isset($estructuras)) {
                                    $cont_estructuras = array();
                                    foreach ($estructuras as $key => $estructura) {
                                      $cont_estructuras[] = 0;
                                    }
                                    foreach ($estructuras as $key => $estructura) {
                                      foreach ($consulta->result() as $comerciante) {
                                        if ($comerciante->estructura == $estructura && $comerciante->fecha_creado >= $dia7) {
                                          $cont_estructuras[$key]++;
                                        }
                                      }
                                    }
                                  }

                                  if (isset($estados)) {
                                    $cont_estados = array();
                                    foreach ($estados as $key => $estado) {
                                      $cont_estados[] = 0;
                                    }
                                    foreach ($estados as $key => $estado) {
                                      foreach ($consulta->result() as $comerciante) {
                                        if ($comerciante->estado == $estado && $comerciante->fecha_creado >= $dia7) {
                                          $cont_estados[$key]++;
                                        }
                                      }
                                    }
                                  }

                                  if (isset($observaciones)) {
                                    $cont_observaciones = array();
                                    foreach ($observaciones as $key => $observacion) {
                                      $cont_observaciones[] = 0;
                                    }
                                    foreach ($comentarios->result() as $key => $comentario) {
                                      $porciones = explode(" ", $comentario->fecha);
                                      if ($comentario->reporte == "Todo en Orden" && $porciones[0] >= $dia7) {
                                        $cont_observaciones[$key]++;
                                      }else if ($comentario->reporte == "Fuera de horario" && $porciones[0] >= $dia7) {
                                        $cont_observaciones[$key]++;
                                      }else if ($comentario->reporte == "Reincidencia" && $porciones[0] >= $dia7) {
                                        $cont_observaciones[$key]++;
                                      }else if ($comentario->reporte == "Fuera de zona" && $porciones[0] >= $dia7) {
                                        $cont_observaciones[$key]++;
                                      }else if ($comentario->reporte == "No cuenta con permiso" && $porciones[0] >= $dia7) {
                                        $cont_observaciones[$key]++;
                                      }else if ($comentario->reporte == "Estado de ebriedad" && $porciones[0] >= $dia7) {
                                        $cont_observaciones[$key]++;
                                      }else if ($comentario->reporte == "Invadir banqueta" && $porciones[0] >= $dia7) {
                                        $cont_observaciones[$key]++;
                                      }else if ($comentario->reporte == "Hacer caso omiso a las recomendaciones" && $porciones[0] >= $dia7) {
                                        $cont_observaciones[$key]++;
                                      }else if ($comentario->reporte == "Amenazas y/o insulto a la autoridad" && $porciones[0] >= $dia7) {
                                        $cont_observaciones[$key]++;
                                      }else if ($comentario->reporte == "Otro" && $porciones[0] >= $dia7) {
                                        $cont_observaciones[$key]++;
                                      }
                                    }
                                  }


                                  // if ($dia1 < $dia7) {
                                  //   echo "1";
                                  // }else {
                                  //   echo "2";
                                  // }

                                   ?>



                                   <script type="text/javascript">
                                   <?php
                                   if (isset($genero)) {

                                     ?>
                                     var x_dias = ["x"];
                                     <?php
                                     for ($i=1; $i <= 7; $i++) {
                                       ?>
                                       x_dias.push(<?php echo $i; ?>)
                                       <?php
                                     }

                                      ?>

                                     var genero = "<?= $genero ?>";
                                     <?php
                                   }
                                   if ($genero == "Ambos") {
                                     ?>
                                     var dias_masculino = [<?php foreach ($dias_masculino as $key => $value) {
                                       echo $dias_masculino[$key].",";
                                     }?>];

                                     var dias_femenino = [<?php foreach ($dias_femenino as $key => $value) {
                                       echo $dias_femenino[$key].",";
                                     }?>];

                                     var grafica = [dias_masculino,dias_femenino];
                                     grafica.forEach(function(element,index){
                                       console.log(grafica[index]);
                                     });
                                     <?php
                                   }
                                   if ($genero == "Masculino") {
                                     ?>
                                     var dias_masculino = [<?php foreach ($dias_masculino as $key => $value) {
                                       echo $dias_masculino[$key].",";
                                     }?>];

                                     var dias_femenino = [<?php foreach ($dias_femenino as $key => $value) {
                                       echo $dias_femenino[$key].",";
                                     }?>];

                                     var grafica = [dias_masculino,dias_femenino];
                                     grafica.forEach(function(element,index){
                                       console.log(grafica[index]);
                                     });
                                     <?php
                                   }
                                   if ($genero == "Femenino") {
                                     ?>
                                     var dias_masculino = [<?php foreach ($dias_masculino as $key => $value) {
                                       echo $dias_masculino[$key].",";
                                     }?>];

                                     var dias_femenino = [<?php foreach ($dias_femenino as $key => $value) {
                                       echo $dias_femenino[$key].",";
                                     }?>];


                                     <?php
                                   }

                                    ?>


                                   </script>


                                  <h3 class="card-title">Grafica Comparativa</h3>
                                  <div class="row">
                                    <!-- <div class="col-md-8">
                                      <div id="area-chart"></div>
                                    </div> -->
                                    <!-- <div class="col-md-4"> -->

                                      <?php
                                      if ($genero == "Ambos") {
                                        ?>
                                        <!-- <h4>Total: <?=$cont_ambos?></h4>
                                        <h4>Masculinos: <?=$cont_masculino?></h4>
                                        <h4>Femeninos: <?=$cont_femenino?></h4> -->

                                        <?php
                                      }
                                       ?>
                                       <?php
                                       if ($genero == "Masculino") {
                                         ?>
                                         <!-- <h4>Total: <?=$cont_ambos?></h4>
                                         <h4>Masculinos: <?=$cont_masculino?></h4> -->

                                         <?php
                                       }
                                        ?>
                                        <?php
                                        if ($genero == "Femenino") {
                                          ?>
                                          <!-- <h4>Total: <?=$cont_ambos?></h4>
                                          <h4>Femeninos: <?=$cont_femenino?></h4> -->

                                          <?php
                                        }
                                         ?>
                                    <!-- </div> -->
                                  </div>


                                  <script type="text/javascript">
                                    var ambulantesMasculino = <?php echo $cont_masculino;?>;
                                    var ambulantesFemenino = <?php echo $cont_femenino;?>;
                                  </script>

                                  <div class="row">
                                    <div class="col-md-6">
                                      <div id="basic-pie" style="height:400px;"></div>
                                    </div>
                                    <div class="col-md-6">
                                      <div id="basic-pie2" style="height:400px;"></div>
                                    </div>
                                  </div>
                                  <br>
                                  <div class="row">
                                    <div class="col-md-12">
                                      <div id="stacked-bar" style="height:400px;"></div>
                                    </div>
                                  </div>
                                  <br>
                                  <div class="row">
                                    <div class="col-md-12">
                                      <div id="stacked-bar2" style="height:400px;"></div>
                                    </div>
                                  </div>
                                  <br>
                                  <div class="row">
                                    <div class="col-md-12">
                                      <div id="stacked-bar3" style="height:200px;"></div>
                                    </div>
                                  </div>





                                  <?php
                                  if (isset($genero) || isset($giros) || isset($tags_s) ||isset($zonas) || isset($estructuras) || isset($estados)) {
                                    ?>
                                    <div class="row">
                                    <?php
                                    if (isset($giros)) {
                                      ?>
                                      <br>
                                      <br>
                                        <div class="col-md-4 text-left">
                                          <br>
                                          <h3>Giro</h3>
                                          <?php
                                          foreach ($giros_select as $key => $giro) {
                                            if ($giro != "null") {
                                              echo $giro.": ".$cont_giros[$key];
                                              echo "<br>";
                                            }
                                          }

                                           ?>

                                           <script type="text/javascript">
                                             var girosSeleccionados=<?php echo json_encode($giros_select);?>;
                                             var girosCantidad=<?php echo json_encode($cont_giros);?>;
                                           </script>
                                        </div>
                                      <?php
                                    }

                                    if (isset($tags_s)) {
                                      ?>
                                      <br>
                                      <br>
                                        <div class="col-md-4 text-left">
                                          <br>
                                          <h3>Tags</h3>
                                          <?php
                                          foreach ($tags_select as $key => $tag) {
                                            if ($tag != "null") {
                                              echo $tag.": ".$cont_tags[$key];
                                              echo "<br>";
                                            }
                                          }
                                           ?>
                                        </div>
                                      <?php
                                    }

                                    if (isset($zonas)) {
                                      ?>
                                      <br>
                                      <br>
                                        <div class="col-md-4 text-left">
                                          <br>
                                          <h3>Zonas</h3>
                                          <?php
                                          foreach ($zonas_select as $key => $zona) {
                                            if ($zona != "null") {
                                              echo $zona.": ".$cont_zonas[$key];
                                              echo "<br>";
                                            }
                                          }
                                           ?>
                                           <script type="text/javascript">
                                             var zonasSeleccionados=<?php echo json_encode($zonas_select);?>;
                                             var zonasCantidad=<?php echo json_encode($cont_zonas);?>;
                                           </script>

                                        </div>
                                      <?php
                                    }

                                    if (isset($estructuras)) {
                                      ?>
                                      <br>
                                      <br>
                                        <div class="col-md-4 text-left">
                                          <br>
                                          <h3>Estructuras</h3>
                                          <?php
                                          foreach ($estructuras_select as $key => $estructura) {
                                            if ($estructura != "null") {
                                              echo $estructura.": ".$cont_estructuras[$key];
                                              echo "<br>";
                                            }
                                          }
                                           ?>

                                           <script type="text/javascript">
                                             var estructurasSeleccionados=<?php echo json_encode($estructuras_select);?>;
                                             var estructurasCantidad=<?php echo json_encode($cont_estructuras);?>;
                                           </script>
                                        </div>
                                      <?php
                                    }

                                    if (isset($estados)) {
                                      ?>
                                      <br>
                                      <br>
                                        <div class="col-md-4 text-left">
                                          <br>
                                          <h3>Estados</h3>
                                          <?php
                                          foreach ($estados as $key => $estado) {
                                            if ($estado != "null") {
                                              echo $estado.": ".$cont_estados[$key];
                                              echo "<br>";
                                            }
                                          }
                                           ?>
                                           <script type="text/javascript">
                                             var estadoSeleccionados=<?php echo json_encode($estados);?>;
                                             var estadoCantidad=<?php echo json_encode($cont_estados);?>;
                                           </script>
                                        </div>
                                      <?php
                                    }
                                    if (isset($estados)) {
                                    ?>
                                    <br>
                                    <br>
                                      <div class="col-md-4 text-left">
                                        <br>
                                        <h3>Observaciones</h3>
                                        <?php
                                        foreach ($observaciones as $key => $estado) {
                                          if ($estado != "null") {
                                            echo $estado.": ".$cont_observaciones[$key];
                                            echo "<br>";
                                          }
                                        }
                                         ?>
                                      </div>
                                    <?php
                                    }
                                     ?>
                                  </div>
                                    <?php
                                  }
                                   ?>
                                  <?php
                                }
                                 ?>


                            </div>
                        </div>
                    </div>
                </div>



                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body analytics-info">
                                <h3 class="card-title">Fijos</h3>
                                <ul class="list-inline two-part">
                                    <li>
                                        <div id="sparklinedash"></div>
                                    </li>
                                    <li class="text-right"><i class="ti-arrow-up text-success"></i> <span class="counter text-success"><?= $total_activos_fijos?></span></li>
                                </ul>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body analytics-info">
                                <h3 class="card-title">Semifijos</h3>
                                <ul class="list-inline two-part">
                                    <li>
                                        <div id="sparklinedash2"></div>
                                    </li>
                                    <li class="text-right"><i class="ti-arrow-up text-purple"></i> <span class="counter text-purple"><?= $total_activos_semifijos?></span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-body analytics-info">
                                <h3 class="card-title">Ambulantes</h3>
                                <ul class="list-inline two-part">
                                    <li>
                                        <div id="sparklinedash3"></div>
                                    </li>
                                    <li class="text-right"><i class="ti-arrow-up text-info"></i> <span class="counter text-info"><?= $total_activos_ambulantes?></span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card" style="height:100%;">
                            <div class="card-body">
                                <h3 class="card-title">Ubicaciones de comerciantes</h3>
                                <div id="map" class="gmaps" style="display:none;"></div>
                                <div id="map_2" class="gmaps"></div>
                                <br>
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="row">
                                      <div class="col-md-2">
                                        <h3>Zona 1: <span class="font-weight-normal"><?= $zona1 ?> Comerciantes</span></h3>
                                      </div>
                                      <div class="col-md-2">
                                        <h3>Zona 2: <span class="font-weight-normal"><?= $zona2 ?> Comerciantes</span></h3>
                                      </div>
                                      <div class="col-md-2">
                                        <h3>Zona 3: <span class="font-weight-normal"><?= $zona3 ?> Comerciantes</span></h3>
                                      </div>
                                      <div class="col-md-2">
                                        <h3>Zona 4: <span class="font-weight-normal"><?= $zona4 ?> Comerciantes</span></h3>
                                      </div>
                                      <div class="col-md-2">
                                        <h3>Zona 5: <span class="font-weight-normal"><?= $zona5 ?> Comerciantes</span></h3>
                                      </div>
                                      <div class="col-md-2">
                                        <h3>Zona 6: <span class="font-weight-normal"><?= $zona6 ?> Comerciantes</span></h3>
                                      </div>

                                    </div>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>





                <br>


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
            <?php
          }else if($fecha == "2"){
            ?>
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->


                <?php

                $delmes = date("Y-m");
                $dia1 = date("Y-m-d");
                $dia2 = date("Y-m-d",mktime(0, 0, 0, date('m'),date('d')-1,date('Y')));
                $dia3 = date("Y-m-d",mktime(0, 0, 0, date('m'),date('d')-2,date('Y')));
                $dia4 = date("Y-m-d",mktime(0, 0, 0, date('m'),date('d')-3,date('Y')));
                $dia5 = date("Y-m-d",mktime(0, 0, 0, date('m'),date('d')-4,date('Y')));
                $dia6 = date("Y-m-d",mktime(0, 0, 0, date('m'),date('d')-5,date('Y')));
                $dia7 = date("Y-m-d",mktime(0, 0, 0, date('m'),date('d')-6,date('Y')));

                $dias_semana = array($dia1,$dia2,$dia3,$dia4,$dia5,$dia6,$dia7);

                $dias_activos_fijos = array(0, 0, 0, 0, 0, 0, 0);
                $total_activos_fijos = 0;

                foreach ($consulta->result() as $sparklinedash) {
                  if ($sparklinedash->tipo == "Fijo") {
                    $total_activos_fijos++;
                  }
                  if ($sparklinedash->fecha_creado == $dias_semana[6] && $sparklinedash->tipo == "Fijo") {
                    $dias_activos_fijos[0] ++;
                  }elseif ($sparklinedash->fecha_creado == $dias_semana[5] && $sparklinedash->tipo == "Fijo") {
                    $dias_activos_fijos[1] ++;
                  }elseif ($sparklinedash->fecha_creado == $dias_semana[4] && $sparklinedash->tipo == "Fijo") {
                    $dias_activos_fijos[2] ++;
                  }elseif ($sparklinedash->fecha_creado == $dias_semana[3] && $sparklinedash->tipo == "Fijo") {
                    $dias_activos_fijos[3] ++;
                  }elseif ($sparklinedash->fecha_creado == $dias_semana[2] && $sparklinedash->tipo == "Fijo") {
                    $dias_activos_fijos[4] ++;
                  }elseif ($sparklinedash->fecha_creado == $dias_semana[1] && $sparklinedash->tipo == "Fijo") {
                    $dias_activos_fijos[5] ++;
                  }elseif ($sparklinedash->fecha_creado == $dias_semana[0] && $sparklinedash->tipo == "Fijo") {
                    $dias_activos_fijos[6] ++;
                  }
                }



                $dias_activos_semifijos = array(0, 0, 0, 0, 0, 0, 0);
                $total_activos_semifijos = 0;

                foreach ($consulta->result() as $sparklinedash) {
                  if ($sparklinedash->tipo == "Semifijo") {
                    $total_activos_semifijos++;
                  }
                  if ($sparklinedash->fecha_creado == $dias_semana[6] && $sparklinedash->tipo == "Semifijo") {
                    $dias_activos_semifijos[0] ++;
                  }elseif ($sparklinedash->fecha_creado == $dias_semana[5] && $sparklinedash->tipo == "Semifijo") {
                    $dias_activos_semifijos[1] ++;
                  }elseif ($sparklinedash->fecha_creado == $dias_semana[4] && $sparklinedash->tipo == "Semifijo") {
                    $dias_activos_semifijos[2] ++;
                  }elseif ($sparklinedash->fecha_creado == $dias_semana[3] && $sparklinedash->tipo == "Semifijo") {
                    $dias_activos_semifijos[3] ++;
                  }elseif ($sparklinedash->fecha_creado == $dias_semana[2] && $sparklinedash->tipo == "Semifijo") {
                    $dias_activos_semifijos[4] ++;
                  }elseif ($sparklinedash->fecha_creado == $dias_semana[1] && $sparklinedash->tipo == "Semifijo") {
                    $dias_activos_semifijos[5] ++;
                  }elseif ($sparklinedash->fecha_creado == $dias_semana[0] && $sparklinedash->tipo == "Semifijo") {
                    $dias_activos_semifijos[6] ++;
                  }
                }


                $dias_activos_ambulantes = array(0, 0, 0, 0, 0, 0, 0);
                $total_activos_ambulantes = 0;

                foreach ($consulta->result() as $sparklinedash) {
                  if ($sparklinedash->tipo == "Ambulante") {
                    $total_activos_ambulantes++;
                  }
                  if ($sparklinedash->fecha_creado == $dias_semana[6] && $sparklinedash->tipo == "Ambulante") {
                    $dias_activos_ambulantes[0] ++;
                  }elseif ($sparklinedash->fecha_creado == $dias_semana[5] && $sparklinedash->tipo == "Ambulante") {
                    $dias_activos_ambulantes[1] ++;
                  }elseif ($sparklinedash->fecha_creado == $dias_semana[4] && $sparklinedash->tipo == "Ambulante") {
                    $dias_activos_ambulantes[2] ++;
                  }elseif ($sparklinedash->fecha_creado == $dias_semana[3] && $sparklinedash->tipo == "Ambulante") {
                    $dias_activos_ambulantes[3] ++;
                  }elseif ($sparklinedash->fecha_creado == $dias_semana[2] && $sparklinedash->tipo == "Ambulante") {
                    $dias_activos_ambulantes[4] ++;
                  }elseif ($sparklinedash->fecha_creado == $dias_semana[1] && $sparklinedash->tipo == "Ambulante") {
                    $dias_activos_ambulantes[5] ++;
                  }elseif ($sparklinedash->fecha_creado == $dias_semana[0] && $sparklinedash->tipo == "Ambulante") {
                    $dias_activos_ambulantes[6] ++;
                  }
                }

                $lat = array();
                $lng = array();

                foreach ($consulta->result() as $sparklinedash) {
                  $coordenadas = $sparklinedash->coordenadas;
                  list($lat_coordenadas, $lng_coordenadas) = explode(",",$coordenadas);

                  $lat[] = $lat_coordenadas;
                  $lng[] = $lng_coordenadas;
                }


                $zona1 = 0;
                $zona2 = 0;
                $zona3 = 0;
                $zona4 = 0;
                $zona5 = 0;
                $zona6 = 0;


                foreach ($consulta->result() as $sparklinedash) {
                  if ($sparklinedash->zona == "Zona 1") {
                    $zona1++;
                  }elseif ($sparklinedash->zona == "Zona 2") {
                    $zona2++;
                  }elseif ($sparklinedash->zona == "Zona 3") {
                    $zona3++;
                  }elseif ($sparklinedash->zona == "Zona 4") {
                    $zona4++;
                  }elseif ($sparklinedash->zona == "Zona 5") {
                    $zona5++;
                  }elseif ($sparklinedash->zona == "Zona 6") {
                    $zona6++;
                  }
                }





                ?>


                <script type="text/javascript">
                  var dias_activos_fijos = [<?php foreach ($dias_activos_fijos as $key => $value) {
                    echo $dias_activos_fijos[$key].",";
                  }?>];

                  var dias_activos_semifijos = [<?php foreach ($dias_activos_semifijos as $key => $value) {
                    echo $dias_activos_semifijos[$key].",";
                  }?>];

                  var dias_activos_ambulantes = [<?php foreach ($dias_activos_ambulantes as $key => $value) {
                    echo $dias_activos_ambulantes[$key].",";
                  }?>];


                  var lat = [<?php foreach ($lat as $key => $value) {
                    echo $lat[$key].",";
                  }?>];
                  var lng = [<?php foreach ($lng as $key => $value) {
                    echo $lng[$key].",";
                  }?>];


                  var reportes = true;
                  var crear_comerciante = false;

                </script>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">REPORTE</h3>
                                <?php
                                //if (isset($giro)) {
                                  //foreach ($giro as $value) {
                                    //echo $value;
                                  //}
                                //}

                                 ?>
                                <form class="m-t-30" action="<?= base_url() ?>Reportes_controller/reportes" method="post"  enctype="multipart/form-data">
                                  <div class="row">
                                    <div class="col-md-4">

                                    </div>
                                    <div class="col-md-4 text-center">
                                      <h3>FILTRO</h3>
                                    </div>
                                    <div class="col-md-2">
                                      <div class="form-group">
                                          <select class="form-control custom-select" data-placeholder="Elegir fecha" tabindex="0" name="fecha" required onchange="cargar_imagen(this.value)">
                                            <option value="1">Semana</option>
                                            <option value="2" selected>Mes</option>
                                            <option value="3">Año</option>
                                            <option value="4">Fecha</option>
                                          </select>
                                      </div>
                                    </div>
                                    <div class="col-md-2 text-center">
                                      <button type="submit" class="btn btn-light">Filtrar</button>
                                    </div>
                                  </div><div class="row" style="display:none;" id="selecfechareporte">
                                    <div class="col-md-4">

                                    </div>
                                    <div class="col-md-4 text-center">

                                    </div>
                                    <div class="col-md-2">
                                      <div class="form-group">
                                        <label for="">Desde</label>
                                          <input type="date" class="form-control" name="desde" value="2019-01-01" min="2019-01-01" max="<?= $dia1?>">
                                      </div>
                                    </div>
                                    <div class="col-md-2">
                                      <div class="form-group">
                                        <label for="">Hasta</label>
                                          <input type="date" class="form-control" name="hasta" value="<?= $dia1?>" min="2019-01-01" max="<?= $dia1?>">
                                      </div>
                                    </div>
                                  </div>

                                  <script type="text/javascript">
                                  function cargar_imagen(imagen) {
                                    if (imagen == 4) {
                                     document.getElementById('selecfechareporte').style.display = "";
                                   }else{
                                     document.getElementById('selecfechareporte').style.display = "none";
                                   }
                                   }
                                  </script>



                                  <?php
                                  if (isset($giros)) {
                                    foreach ($giros as $key => $giro_select) {
                                      // code...
                                      //echo $giro_select."<br/>";
                                      $giros_select[] = $giro_select;
                                    }
                                  //print_r(count($giros));
                                  //echo $giros_select[0];
                                  }


                                  if (isset($tags_s)) {
                                    foreach ($tags_s as $key => $tag_select) {
                                      // code...
                                      //echo $tag_select."<br/>";
                                      $tags_select[] = $tag_select;
                                    }
                                  //print_r(count($tags_s));
                                  //echo $tags_select[0];
                                  }


                                  if (isset($zonas)) {
                                    foreach ($zonas as $key => $zona_select) {
                                      // code...
                                      //echo $zona_select."<br/>";
                                      $zonas_select[] = $zona_select;
                                    }
                                  //print_r(count($zonas));
                                  //echo $zonas_select[0];
                                  }

                                  if (isset($estructuras)) {
                                    foreach ($estructuras as $key => $estructura_select) {
                                      // code...
                                      //echo $estructura_select."<br/>";
                                      $estructuras_select[] = $estructura_select;
                                    }
                                  //print_r(count($zonas));
                                  //echo $zonas_select[0];
                                  }

                                  if (isset($estados)) {
                                    foreach ($estados as $key => $estado_select) {
                                      // code...
                                      //echo $estado_select."<br/>";
                                      $estados_select[] = $estado_select;
                                    }
                                  //print_r(count($zonas));
                                  //echo $zonas_select[0];
                                  }

                                  if (isset($observaciones)) {
                                    foreach ($observaciones as $key => $observacion_select) {
                                      // code...
                                      //echo $estado_select."<br/>";
                                      $observaciones_select[] = $observacion_select;
                                    }
                                  //print_r(count($zonas));
                                  //echo $zonas_select[0];
                                  }




                                   ?>
                                   <div class="row">
                                     <div class="col-md-12">
                                       <div class="custom-control custom-checkbox">
                                         <input type="checkbox" class="custom-control-input" id="seleccionarTodo" value="seleccionarTodo">
                                         <label class="custom-control-label" for="seleccionarTodo">Seleccionar Todo</label>
                                       </div>
                                     </div>
                                   </div>
                                  <br>
                                  <div class="row">
                                    <div class="col-md-4" style="border-style: groove;">
                                      <div class="">
                                        <h4>Género</h4>
                                      </div>
                                      <div class="custom-control custom-radio">
                                          <input type="radio" id="genero" name="genero" class="custom-control-input" value="Ambos" <?php if(isset($genero)){if($genero == "Ambos"){echo "checked";}}else{echo "checked";} ?>>
                                          <label class="custom-control-label" for="genero">Ambos</label>
                                      </div>
                                      <div class="custom-control custom-radio">
                                          <input type="radio" id="genero1" name="genero" class="custom-control-input" value="Masculino" <?php if(isset($genero)){if($genero == "Masculino"){echo "checked";}} ?>>
                                          <label class="custom-control-label" for="genero1">Masculino</label>
                                      </div>
                                      <div class="custom-control custom-radio">
                                          <input type="radio" id="genero2" name="genero" class="custom-control-input" value="Femenino" <?php if(isset($genero)){if($genero == "Femenino"){echo "checked";}} ?>>
                                          <label class="custom-control-label" for="genero2">Femenino</label>
                                      </div>
                                    </div>
                                    <div class="col-md-4" style="border-style: groove;">
                                      <div class="">
                                        <h4>Giro</h4>
                                      </div>
                                      <div class="row">
                                      <?php
                                      $rep1 = 0;
                                      foreach ($consulta2->result() as $key => $giro) {
                                        if ($rep1 == 0) {
                                          // code...
                                        ?>
                                        <div class="col-md-6">
                                          <div class="custom-control custom-checkbox">
                                            <?php
                                             ?>
                                            <input type="checkbox" class="custom-control-input seleccionarTodo" id="<?= $giro->nombre_giro ?>1" value="<?= $giro->nombre_giro ?>" name="giro[<?=$key?>]" <?php if(isset($giros)){if($giro->nombre_giro == $giros_select[$key]){echo "checked";}} ?>>
                                            <label class="custom-control-label" for="<?= $giro->nombre_giro ?>1"><?= $giro->nombre_giro ?></label>
                                          </div>
                                        </div>
                                      <?php
                                      $rep1 = 1;
                                    }else {
                                      ?>
                                      <div class="col-md-6">
                                        <div class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input seleccionarTodo" id="<?= $giro->nombre_giro ?>1" value="<?= $giro->nombre_giro ?>" name="giro[<?=$key?>]" <?php if(isset($giros)){if($giro->nombre_giro == $giros_select[$key]){echo "checked";}} ?>>
                                          <label class="custom-control-label" for="<?= $giro->nombre_giro ?>1"><?= $giro->nombre_giro ?></label>
                                        </div>
                                      </div>

                                      <?php
                                      $rep1 = 0;
                                      }
                                      }
                                      ?>

                                    </div>
                                    </div>
                                    <div class="col-md-4" style="border-style: groove;">
                                      <div class="">
                                        <h4>Tags</h4>
                                      </div>
                                      <div class="row">
                                        <?php
                                        $rep1 = 0;
                                        foreach ($consulta3->result() as $key => $tags) {
                                          if ($rep1 == 0) {
                                            // code...
                                          ?>
                                          <div class="col-md-6">
                                            <div class="custom-control custom-checkbox">
                                              <input type="checkbox" class="custom-control-input seleccionarTodo" id="<?= $tags->tag ?>1" value="<?= $tags->tag ?>" name="tags[<?=$key?>]" <?php if(isset($tags_s)){if($tags->tag == $tags_select[$key]){echo "checked";}} ?>>
                                              <label class="custom-control-label" for="<?= $tags->tag ?>1"><?= $tags->tag ?></label>
                                            </div>
                                          </div>
                                        <?php
                                        $rep1 = 1;
                                      }else {
                                        ?>
                                        <div class="col-md-6">
                                          <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input seleccionarTodo" id="<?= $tags->tag ?>1" value="<?= $tags->tag ?>" name="tags[<?=$key?>]" <?php if(isset($tags_s)){if($tags->tag == $tags_select[$key]){echo "checked";}} ?>>
                                            <label class="custom-control-label" for="<?= $tags->tag ?>1"><?= $tags->tag ?></label>
                                          </div>
                                        </div>

                                        <?php
                                        $rep1 = 0;
                                      }
                                        }
                                        ?>
                                      </div>
                                    </div>
                                  </div>
                                  <br>
                                  <br>
                                  <div class="row">
                                    <div class="col-md-4" style="border-style: groove;">
                                      <div class="">
                                        <h4>Zona</h4>
                                      </div>
                                      <div class="row">
                                        <div class="col-md-6">
                                          <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input seleccionarTodo" id="zona1" value="Zona 1" name="zona[0]" <?php if(isset($zonas)){if("Zona 1" == $zonas_select[0]){echo "checked";}} ?>>
                                            <label class="custom-control-label" for="zona1">Zona 1</label>
                                          </div>
                                          <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input seleccionarTodo" id="zona2" value="Zona 2" name="zona[1]" <?php if(isset($zonas)){if("Zona 2" == $zonas_select[1]){echo "checked";}} ?>>
                                            <label class="custom-control-label" for="zona2">Zona 2</label>
                                          </div>
                                          <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input seleccionarTodo" id="zona3" value="Zona 3" name="zona[2]" <?php if(isset($zonas)){if("Zona 3" == $zonas_select[2]){echo "checked";}} ?>>
                                            <label class="custom-control-label" for="zona3">Zona 3</label>
                                          </div>
                                        </div>
                                        <div class="col-md-6">
                                          <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input seleccionarTodo" id="zona4" value="Zona 4" name="zona[3]" <?php if(isset($zonas)){if("Zona 4" == $zonas_select[3]){echo "checked";}} ?>>
                                            <label class="custom-control-label" for="zona4">Zona 4</label>
                                          </div>
                                          <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input seleccionarTodo" id="zona5" value="Zona 5" name="zona[4]" <?php if(isset($zonas)){if("Zona 5" == $zonas_select[4]){echo "checked";}} ?>>
                                            <label class="custom-control-label" for="zona5">Zona 5</label>
                                          </div>
                                          <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input seleccionarTodo" id="zona6" value="Zona 6" name="zona[5]" <?php if(isset($zonas)){if("Zona 6" == $zonas_select[5]){echo "checked";}} ?>>
                                            <label class="custom-control-label" for="zona6">Zona 6</label>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-4" style="border-style: groove;">
                                      <div class="">
                                        <h4>Estructura</h4>
                                      </div>
                                      <div class="row">
                                        <?php
                                        $rep1 = 0;
                                        foreach ($consulta5->result() as $key => $estructura) {
                                          if ($rep1 == 0) {
                                            // code...
                                          ?>
                                          <div class="col-md-6">
                                            <div class="custom-control custom-checkbox">
                                              <input type="checkbox" class="custom-control-input seleccionarTodo" id="<?= $estructura->estructura ?>1" value="<?= $estructura->estructura ?>" name="estructura[<?=$key?>]" <?php if(isset($estructuras)){if($estructura->estructura == $estructuras_select[$key]){echo "checked";}} ?>>
                                              <label class="custom-control-label" for="<?= $estructura->estructura ?>1"><?= $estructura->estructura ?></label>
                                            </div>
                                          </div>
                                        <?php
                                        $rep1 = 1;
                                      }else {
                                        ?>
                                        <div class="col-md-6">
                                          <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input seleccionarTodo" id="<?= $estructura->estructura ?>1" value="<?= $estructura->estructura ?>" name="estructura[<?=$key?>]" <?php if(isset($estructuras)){if($estructura->estructura == $estructuras_select[$key]){echo "checked";}} ?>>
                                            <label class="custom-control-label" for="<?= $estructura->estructura ?>1"><?= $estructura->estructura ?></label>
                                          </div>
                                        </div>

                                        <?php
                                        $rep1 = 0;
                                      }
                                        }
                                        ?>
                                      </div>
                                    </div>
                                    <div class="col-md-4" style="border-style: groove;">
                                      <div class="">
                                        <h4>Estado</h4>
                                      </div>
                                      <div class="col-md-12">
                                        <div class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input seleccionarTodo" id="Activo1" value="Activo" name="estado[0]" <?php if(isset($estados)){if($estados_select[0] == "Activo"){echo "checked";}} ?>>
                                          <label class="custom-control-label" for="Activo1">Activo</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input seleccionarTodo" id="Inactivo1" value="Inactivo" name="estado[1]" <?php if(isset($estados)){if($estados_select[1] == "Inactivo"){echo "checked";}} ?>>
                                          <label class="custom-control-label" for="Inactivo1">Inactivo</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input seleccionarTodo" id="Vencido1" value="Vencido" name="estado[2]" <?php if(isset($estados)){if($estados_select[2] == "Vencido"){echo "checked";}} ?>>
                                          <label class="custom-control-label" for="Vencido1">Vencido</label>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4" style="border-style: groove;">
                                      <div class="">
                                        <h4>Observaciones</h4>
                                      </div>
                                      <div class="col-md-12">
                                        <div class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input seleccionarTodo" id="Observaciones1" value="Todo en Orden" name="observaciones[0]" <?php if(isset($observaciones)){if($observaciones_select[0] == "Todo en Orden"){echo "checked";}} ?>>
                                          <label class="custom-control-label" for="Observaciones1">Todo en Orden</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input seleccionarTodo" id="Observaciones2" value="Fuera de horario" name="observaciones[1]" <?php if(isset($observaciones)){if($observaciones_select[1] == "Fuera de horario"){echo "checked";}} ?>>
                                          <label class="custom-control-label" for="Observaciones2">Fuera de horario</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input seleccionarTodo" id="Observaciones3" value="Reincidencia" name="observaciones[2]" <?php if(isset($observaciones)){if($observaciones_select[2] == "Reincidencia"){echo "checked";}} ?>>
                                          <label class="custom-control-label" for="Observaciones3">Reincidencia</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input seleccionarTodo" id="Observaciones4" value="Fuera de zona" name="observaciones[3]" <?php if(isset($observaciones)){if($observaciones_select[3] == "Fuera de zona"){echo "checked";}} ?>>
                                          <label class="custom-control-label" for="Observaciones4">Fuera de zona</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input seleccionarTodo" id="Observaciones5" value="No cuenta con permiso" name="observaciones[4]" <?php if(isset($observaciones)){if($observaciones_select[4] == "No cuenta con permiso"){echo "checked";}} ?>>
                                          <label class="custom-control-label" for="Observaciones5">No cuenta con permiso</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input seleccionarTodo" id="Observaciones6" value="Estado de ebriedad" name="observaciones[5]" <?php if(isset($observaciones)){if($observaciones_select[5] == "Estado de ebriedad"){echo "checked";}} ?>>
                                          <label class="custom-control-label" for="Observaciones6">Estado de ebriedad</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input seleccionarTodo" id="Observaciones7" value="Invadir banqueta" name="observaciones[6]" <?php if(isset($observaciones)){if($observaciones_select[6] == "Invadir banqueta"){echo "checked";}} ?>>
                                          <label class="custom-control-label" for="Observaciones7">Invadir banqueta</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input seleccionarTodo" id="Observaciones8" value="Hacer caso omiso a las recomendaciones" name="observaciones[7]" <?php if(isset($observaciones)){if($observaciones_select[7] == "Hacer caso omiso a las recomendaciones"){echo "checked";}} ?>>
                                          <label class="custom-control-label" for="Observaciones8">Hacer caso omiso a las recomendaciones</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input seleccionarTodo" id="Observaciones9" value="Amenazas y/o insulto a la autoridad" name="observaciones[8]" <?php if(isset($observaciones)){if($observaciones_select[8] == "Amenazas y/o insulto a la autoridad"){echo "checked";}} ?>>
                                          <label class="custom-control-label" for="Observaciones9">Amenazas y/o insulto a la autoridad</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input seleccionarTodo" id="Observaciones10" value="Otro" name="observaciones[9]" <?php if(isset($observaciones)){if($observaciones_select[9] == "Otro"){echo "checked";}} ?>>
                                          <label class="custom-control-label" for="Observaciones10">Otro</label>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </form>





                                <?php
                                if (isset($genero) || isset($giros) || isset($tags_s) ||isset($zonas) || isset($estructuras) || isset($estados) || isset($observaciones)) {
                                  ?>

                                  <br>
                                  <br>
                                  <?php
                                  if (isset($genero)) {


                                    if (isset($genero)) {
                                      $year = date("Y");
                                      $mes = date("m");
                                      $n_day = cal_days_in_month(CAL_GREGORIAN, $mes, $year); // 31
                                      //echo "Hubo {$n_day} días ";

                                      $dias_masculino = array("'Masculino'");
                                      $dias_femenino = array("'Femenino'");

                                      for ($i=0; $i < $n_day; $i++) {
                                        $dias_masculino[] = 0;
                                        $dias_femenino[] = 0;
                                      }

                                      //print_r($dias_masculino);

                                      $cont_ambos = 0;
                                      $cont_masculino = 0;
                                      $cont_femenino = 0;


                                      foreach ($consulta->result() as $comerciante) {

                                        for ($i=1; $i <= $n_day ; $i++) {

                                          $time = strtotime($mes.'/'.$i.'/'.$year);

                                          $newformat = date('Y-m-d',$time);

                                          //echo "<br>";
                                          if ($comerciante->fecha_creado == $newformat && $comerciante->genero == "Masculino") {
                                            $cont_masculino ++;
                                            $cont_ambos ++;
                                            $dias_masculino[$i] ++;
                                          }
                                          //echo $newformat . " - " . $dias_masculino[$i];
                                        }
                                      }

                                      foreach ($consulta->result() as $comerciante) {

                                        for ($i=1; $i <= $n_day ; $i++) {

                                          $time = strtotime($mes.'/'.$i.'/'.$year);

                                          $newformat = date('Y-m-d',$time);

                                          //echo "<br>";
                                          if ($comerciante->fecha_creado == $newformat && $comerciante->genero == "Femenino") {
                                            $cont_femenino ++;
                                            $cont_ambos ++;
                                            $dias_femenino[$i] ++;
                                          }
                                          //echo $newformat . " - " . $dias_masculino[$i];
                                        }
                                      }

                                      for ($i=1; $i <= $n_day ; $i++) {
                                        $time = strtotime($mes.'/'.$i.'/'.$year);

                                        $newformat = date('Y-m-d',$time);
                                        //echo $newformat . ": " . $dias_masculino[$i] . " - " . $dias_femenino[$i];
                                        //echo "<br>";
                                      }
                                    }
                                  }


                                  if (isset($giros)) {
                                    $cont_giros = array();
                                    foreach ($giros_select as $key => $giro) {
                                      $cont_giros[] = 0;
                                    }
                                    foreach ($giros_select as $key => $giro) {
                                      foreach ($consulta->result() as $comerciante) {
                                        if ($comerciante->giro == $giro && $comerciante->fecha_creado >= $delmes) {
                                          $cont_giros[$key]++;
                                        }
                                      }
                                    }
                                  }

                                  if (isset($tags_s)) {
                                    $cont_tags = array();
                                    foreach ($tags_select as $key => $tag_select) {
                                      $cont_tags[] = 0;
                                    }
                                    foreach ($tags_select as $key => $tag_select) {
                                      foreach ($consulta->result() as $comerciante) {
                                        if ($tag_select != "") {

                                          if (strpos($comerciante->tags, $tag_select) !== false && $comerciante->fecha_creado >= $delmes) {
                                            $cont_tags[$key]++;
                                          }
                                        }
                                      }
                                    }
                                  }

                                  if (isset($zonas)) {
                                    $cont_zonas = array();
                                    foreach ($zonas_select as $key => $zona) {
                                      $cont_zonas[] = 0;
                                    }
                                    foreach ($zonas_select as $key => $zona) {
                                      foreach ($consulta->result() as $comerciante) {
                                        if ($comerciante->zona == $zona && $comerciante->fecha_creado >= $delmes) {
                                          $cont_zonas[$key]++;
                                        }
                                      }
                                    }
                                  }

                                  if (isset($estructuras)) {
                                    $cont_estructuras = array();
                                    foreach ($estructuras as $key => $estructura) {
                                      $cont_estructuras[] = 0;
                                    }
                                    foreach ($estructuras as $key => $estructura) {
                                      foreach ($consulta->result() as $comerciante) {
                                        if ($comerciante->estructura == $estructura && $comerciante->fecha_creado >= $delmes) {
                                          $cont_estructuras[$key]++;
                                        }
                                      }
                                    }
                                  }

                                  if (isset($estados)) {
                                    $cont_estados = array();
                                    foreach ($estados as $key => $estado) {
                                      $cont_estados[] = 0;
                                    }
                                    foreach ($estados as $key => $estado) {
                                      foreach ($consulta->result() as $comerciante) {
                                        if ($comerciante->estado == $estado && $comerciante->fecha_creado >= $delmes) {
                                          $cont_estados[$key]++;
                                        }
                                      }
                                    }
                                  }



                                  if (isset($observaciones)) {
                                    $cont_observaciones = array();
                                    foreach ($observaciones as $key => $observacion) {
                                      $cont_observaciones[] = 0;
                                    }
                                    foreach ($comentarios->result() as $key => $comentario) {
                                      $porciones = explode(" ", $comentario->fecha);
                                      echo $porciones[0];
                                      if ($comentario->reporte == "Todo en Orden" && $porciones[0] >= $delmes) {
                                        $cont_observaciones[$key]++;
                                      }else if ($comentario->reporte == "Fuera de horario" && $porciones[0] >= $delmes) {
                                        $cont_observaciones[$key]++;
                                      }else if ($comentario->reporte == "Reincidencia" && $porciones[0] >= $delmes) {
                                        $cont_observaciones[$key]++;
                                      }else if ($comentario->reporte == "Fuera de zona" && $porciones[0] >= $delmes) {
                                        $cont_observaciones[$key]++;
                                      }else if ($comentario->reporte == "No cuenta con permiso" && $porciones[0] >= $delmes) {
                                        $cont_observaciones[$key]++;
                                      }else if ($comentario->reporte == "Estado de ebriedad" && $porciones[0] >= $delmes) {
                                        $cont_observaciones[$key]++;
                                      }else if ($comentario->reporte == "Invadir banqueta" && $porciones[0] >= $delmes) {
                                        $cont_observaciones[$key]++;
                                      }else if ($comentario->reporte == "Hacer caso omiso a las recomendaciones" && $porciones[0] >= $delmes) {
                                        $cont_observaciones[$key]++;
                                      }else if ($comentario->reporte == "Amenazas y/o insulto a la autoridad" && $porciones[0] >= $delmes) {
                                        $cont_observaciones[$key]++;
                                      }else if ($comentario->reporte == "Otro" && $porciones[0] >= $delmes) {
                                        $cont_observaciones[$key]++;
                                      }
                                    }
                                  }


                                  // if ($dia1 < $dia7) {
                                  //   echo "1";
                                  // }else {
                                  //   echo "2";
                                  // }

                                   ?>



                                   <script type="text/javascript">
                                   <?php
                                   if (isset($genero)) {
                                     ?>
                                     var x_dias = ["x"];
                                     <?php
                                     for ($i=1; $i <= $n_day; $i++) {
                                       ?>
                                       x_dias.push(<?php echo $i; ?>)
                                       <?php
                                     }

                                      ?>

                                     var genero = "<?= $genero ?>";
                                     <?php
                                   }
                                   if ($genero == "Ambos") {
                                     ?>
                                     var dias_masculino = [<?php foreach ($dias_masculino as $key => $value) {
                                       echo $dias_masculino[$key].",";
                                     }?>];

                                     var dias_femenino = [<?php foreach ($dias_femenino as $key => $value) {
                                       echo $dias_femenino[$key].",";
                                     }?>];

                                     var grafica = [dias_masculino,dias_femenino];
                                     grafica.forEach(function(element,index){
                                       console.log(grafica[index]);
                                     });
                                     <?php
                                   }
                                   if ($genero == "Masculino") {
                                     ?>
                                     var dias_masculino = [<?php foreach ($dias_masculino as $key => $value) {
                                       echo $dias_masculino[$key].",";
                                     }?>];

                                     var dias_femenino = [<?php foreach ($dias_femenino as $key => $value) {
                                       echo $dias_femenino[$key].",";
                                     }?>];

                                     var grafica = [dias_masculino,dias_femenino];
                                     grafica.forEach(function(element,index){
                                       console.log(grafica[index]);
                                     });
                                     <?php
                                   }
                                   if ($genero == "Femenino") {
                                     ?>
                                     var dias_masculino = [<?php foreach ($dias_masculino as $key => $value) {
                                       echo $dias_masculino[$key].",";
                                     }?>];

                                     var dias_femenino = [<?php foreach ($dias_femenino as $key => $value) {
                                       echo $dias_femenino[$key].",";
                                     }?>];


                                     <?php
                                   }

                                    ?>


                                   </script>

                                  <h3 class="card-title">Grafica Comparativa</h3>
                                  <!-- <div class="row">
                                    <div class="col-md-8">
                                      <div id="area-chart"></div>
                                    </div>
                                    <div class="col-md-4">

                                      <?php
                                      if ($genero == "Ambos") {
                                        ?>
                                        <h4>Total: <?=$cont_ambos?></h4>
                                        <h4>Masculinos: <?=$cont_masculino?></h4>
                                        <h4>Femeninos: <?=$cont_femenino?></h4>

                                        <?php
                                      }
                                       ?>
                                       <?php
                                       if ($genero == "Masculino") {
                                         ?>
                                         <h4>Total: <?=$cont_ambos?></h4>
                                         <h4>Masculinos: <?=$cont_masculino?></h4>

                                         <?php
                                       }
                                        ?>
                                        <?php
                                        if ($genero == "Femenino") {
                                          ?>
                                          <h4>Total: <?=$cont_ambos?></h4>
                                          <h4>Femeninos: <?=$cont_femenino?></h4>

                                          <?php
                                        }
                                         ?>
                                    </div>
                                  </div> -->



                                  <script type="text/javascript">
                                    var ambulantesMasculino = <?php echo $cont_masculino;?>;
                                    var ambulantesFemenino = <?php echo $cont_femenino;?>;
                                  </script>

                                  <div class="row">
                                    <div class="col-md-6">
                                      <div id="basic-pie" style="height:400px;"></div>
                                    </div>
                                    <div class="col-md-6">
                                      <div id="basic-pie2" style="height:400px;"></div>
                                    </div>
                                  </div>
                                  <br>
                                  <div class="row">
                                    <div class="col-md-12">
                                      <div id="stacked-bar" style="height:400px;"></div>
                                    </div>
                                  </div>
                                  <br>
                                  <div class="row">
                                    <div class="col-md-12">
                                      <div id="stacked-bar2" style="height:400px;"></div>
                                    </div>
                                  </div>
                                  <br>
                                  <div class="row">
                                    <div class="col-md-12">
                                      <div id="stacked-bar3" style="height:200px;"></div>
                                    </div>
                                  </div>


                                  <?php
                                  if (isset($genero) || isset($giros) || isset($tags_s) ||isset($zonas) || isset($estructuras) || isset($estados)) {
                                    ?>
                                    <div class="row">
                                    <?php
                                    if (isset($giros)) {
                                      ?>
                                      <br>
                                      <br>
                                        <div class="col-md-4 text-left">
                                          <br>
                                          <h3>Giro</h3>
                                          <?php
                                          foreach ($giros_select as $key => $giro) {
                                            if ($giro != "null") {
                                              echo $giro.": ".$cont_giros[$key];
                                              echo "<br>";
                                            }
                                          }
                                           ?>
                                           <script type="text/javascript">
                                             var girosSeleccionados=<?php echo json_encode($giros_select);?>;
                                             var girosCantidad=<?php echo json_encode($cont_giros);?>;
                                           </script>
                                        </div>
                                      <?php
                                    }

                                    if (isset($tags_s)) {
                                      ?>
                                      <br>
                                      <br>
                                        <div class="col-md-4 text-left">
                                          <br>
                                          <h3>Tags</h3>
                                          <?php
                                          foreach ($tags_select as $key => $tag) {
                                            if ($tag != "null") {
                                              echo $tag.": ".$cont_tags[$key];
                                              echo "<br>";
                                            }
                                          }
                                           ?>
                                        </div>
                                      <?php
                                    }

                                    if (isset($zonas)) {
                                      ?>
                                      <br>
                                      <br>
                                        <div class="col-md-4 text-left">
                                          <br>
                                          <h3>Zonas</h3>
                                          <?php
                                          foreach ($zonas_select as $key => $zona) {
                                            if ($zona != "null") {
                                              echo $zona.": ".$cont_zonas[$key];
                                              echo "<br>";
                                            }
                                          }
                                           ?>
                                           <script type="text/javascript">
                                             var zonasSeleccionados=<?php echo json_encode($zonas_select);?>;
                                             var zonasCantidad=<?php echo json_encode($cont_zonas);?>;
                                           </script>
                                        </div>
                                      <?php
                                    }

                                    if (isset($estructuras)) {
                                      ?>
                                      <br>
                                      <br>
                                        <div class="col-md-4 text-left">
                                          <br>
                                          <h3>Estructuras</h3>
                                          <?php
                                          foreach ($estructuras_select as $key => $estructura) {
                                            if ($estructura != "null") {
                                              echo $estructura.": ".$cont_estructuras[$key];
                                              echo "<br>";
                                            }
                                          }
                                           ?>
                                           <script type="text/javascript">
                                             var estructurasSeleccionados=<?php echo json_encode($estructuras_select);?>;
                                             var estructurasCantidad=<?php echo json_encode($cont_estructuras);?>;
                                           </script>
                                        </div>
                                      <?php
                                    }

                                    if (isset($estados)) {
                                      ?>
                                      <br>
                                      <br>
                                        <div class="col-md-4 text-left">
                                          <br>
                                          <h3>Estados</h3>
                                          <?php
                                          foreach ($estados as $key => $estado) {
                                            if ($estado != "null") {
                                              echo $estado.": ".$cont_estados[$key];
                                              echo "<br>";
                                            }
                                          }
                                           ?>
                                           <script type="text/javascript">
                                             var estadoSeleccionados=<?php echo json_encode($estados);?>;
                                             var estadoCantidad=<?php echo json_encode($cont_estados);?>;
                                           </script>
                                        </div>
                                      <?php
                                    }
                                    if (isset($observaciones)) {
                                    ?>
                                    <br>
                                    <br>
                                      <div class="col-md-4 text-left">
                                        <br>
                                        <h3>Observaciones</h3>
                                        <?php
                                        foreach ($observaciones as $key => $estado) {
                                          if ($estado != "null") {
                                            echo $estado.": ".$cont_observaciones[$key];
                                            echo "<br>";
                                          }
                                        }
                                         ?>
                                      </div>
                                    <?php
                                    }
                                    ?>
                                  </div>
                                    <?php
                                  }
                                   ?>
                                  <?php
                                }
                                 ?>


                            </div>
                        </div>
                    </div>
                </div>






                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body analytics-info">
                                <h3 class="card-title">Fijos</h3>
                                <ul class="list-inline two-part">
                                    <li>
                                        <div id="sparklinedash"></div>
                                    </li>
                                    <li class="text-right"><i class="ti-arrow-up text-success"></i> <span class="counter text-success"><?= $total_activos_fijos?></span></li>
                                </ul>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body analytics-info">
                                <h3 class="card-title">Semifijos</h3>
                                <ul class="list-inline two-part">
                                    <li>
                                        <div id="sparklinedash2"></div>
                                    </li>
                                    <li class="text-right"><i class="ti-arrow-up text-purple"></i> <span class="counter text-purple"><?= $total_activos_semifijos?></span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-body analytics-info">
                                <h3 class="card-title">Ambulantes</h3>
                                <ul class="list-inline two-part">
                                    <li>
                                        <div id="sparklinedash3"></div>
                                    </li>
                                    <li class="text-right"><i class="ti-arrow-up text-info"></i> <span class="counter text-info"><?= $total_activos_ambulantes?></span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card" style="height:100%;">
                            <div class="card-body">
                                <h3 class="card-title">Ubicaciones de comerciantes</h3>
                                <div id="map" class="gmaps" style="display:none;"></div>
                                <div id="map_2" class="gmaps"></div>
                                <br>
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="row">
                                      <div class="col-md-2">
                                        <h3>Zona 1: <span class="font-weight-normal"><?= $zona1 ?> Comerciantes</span></h3>
                                      </div>
                                      <div class="col-md-2">
                                        <h3>Zona 2: <span class="font-weight-normal"><?= $zona2 ?> Comerciantes</span></h3>
                                      </div>
                                      <div class="col-md-2">
                                        <h3>Zona 3: <span class="font-weight-normal"><?= $zona3 ?> Comerciantes</span></h3>
                                      </div>
                                      <div class="col-md-2">
                                        <h3>Zona 4: <span class="font-weight-normal"><?= $zona4 ?> Comerciantes</span></h3>
                                      </div>
                                      <div class="col-md-2">
                                        <h3>Zona 5: <span class="font-weight-normal"><?= $zona5 ?> Comerciantes</span></h3>
                                      </div>
                                      <div class="col-md-2">
                                        <h3>Zona 6: <span class="font-weight-normal"><?= $zona6 ?> Comerciantes</span></h3>
                                      </div>

                                    </div>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>





                <br>


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
            <?php
          }else if($fecha == "3"){
            ?>
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->


                <?php
                $delmes = date("Y");
                $dia1 = date("Y-m-d");
                $dia2 = date("Y-m-d",mktime(0, 0, 0, date('m'),date('d')-1,date('Y')));
                $dia3 = date("Y-m-d",mktime(0, 0, 0, date('m'),date('d')-2,date('Y')));
                $dia4 = date("Y-m-d",mktime(0, 0, 0, date('m'),date('d')-3,date('Y')));
                $dia5 = date("Y-m-d",mktime(0, 0, 0, date('m'),date('d')-4,date('Y')));
                $dia6 = date("Y-m-d",mktime(0, 0, 0, date('m'),date('d')-5,date('Y')));
                $dia7 = date("Y-m-d",mktime(0, 0, 0, date('m'),date('d')-6,date('Y')));

                $dias_semana = array($dia1,$dia2,$dia3,$dia4,$dia5,$dia6,$dia7);
                //echo $delmes;

                $dias_activos_fijos = array(0, 0, 0, 0, 0, 0, 0);
                $total_activos_fijos = 0;

                foreach ($consulta->result() as $sparklinedash) {
                  if ($sparklinedash->tipo == "Fijo") {
                    $total_activos_fijos++;
                  }
                  if ($sparklinedash->fecha_creado == $dias_semana[6] && $sparklinedash->tipo == "Fijo") {
                    $dias_activos_fijos[0] ++;
                  }elseif ($sparklinedash->fecha_creado == $dias_semana[5] && $sparklinedash->tipo == "Fijo") {
                    $dias_activos_fijos[1] ++;
                  }elseif ($sparklinedash->fecha_creado == $dias_semana[4] && $sparklinedash->tipo == "Fijo") {
                    $dias_activos_fijos[2] ++;
                  }elseif ($sparklinedash->fecha_creado == $dias_semana[3] && $sparklinedash->tipo == "Fijo") {
                    $dias_activos_fijos[3] ++;
                  }elseif ($sparklinedash->fecha_creado == $dias_semana[2] && $sparklinedash->tipo == "Fijo") {
                    $dias_activos_fijos[4] ++;
                  }elseif ($sparklinedash->fecha_creado == $dias_semana[1] && $sparklinedash->tipo == "Fijo") {
                    $dias_activos_fijos[5] ++;
                  }elseif ($sparklinedash->fecha_creado == $dias_semana[0] && $sparklinedash->tipo == "Fijo") {
                    $dias_activos_fijos[6] ++;
                  }
                }



                $dias_activos_semifijos = array(0, 0, 0, 0, 0, 0, 0);
                $total_activos_semifijos = 0;

                foreach ($consulta->result() as $sparklinedash) {
                  if ($sparklinedash->tipo == "Semifijo") {
                    $total_activos_semifijos++;
                  }
                  if ($sparklinedash->fecha_creado == $dias_semana[6] && $sparklinedash->tipo == "Semifijo") {
                    $dias_activos_semifijos[0] ++;
                  }elseif ($sparklinedash->fecha_creado == $dias_semana[5] && $sparklinedash->tipo == "Semifijo") {
                    $dias_activos_semifijos[1] ++;
                  }elseif ($sparklinedash->fecha_creado == $dias_semana[4] && $sparklinedash->tipo == "Semifijo") {
                    $dias_activos_semifijos[2] ++;
                  }elseif ($sparklinedash->fecha_creado == $dias_semana[3] && $sparklinedash->tipo == "Semifijo") {
                    $dias_activos_semifijos[3] ++;
                  }elseif ($sparklinedash->fecha_creado == $dias_semana[2] && $sparklinedash->tipo == "Semifijo") {
                    $dias_activos_semifijos[4] ++;
                  }elseif ($sparklinedash->fecha_creado == $dias_semana[1] && $sparklinedash->tipo == "Semifijo") {
                    $dias_activos_semifijos[5] ++;
                  }elseif ($sparklinedash->fecha_creado == $dias_semana[0] && $sparklinedash->tipo == "Semifijo") {
                    $dias_activos_semifijos[6] ++;
                  }
                }


                $dias_activos_ambulantes = array(0, 0, 0, 0, 0, 0, 0);
                $total_activos_ambulantes = 0;

                foreach ($consulta->result() as $sparklinedash) {
                  if ($sparklinedash->tipo == "Ambulante") {
                    $total_activos_ambulantes++;
                  }
                  if ($sparklinedash->fecha_creado == $dias_semana[6] && $sparklinedash->tipo == "Ambulante") {
                    $dias_activos_ambulantes[0] ++;
                  }elseif ($sparklinedash->fecha_creado == $dias_semana[5] && $sparklinedash->tipo == "Ambulante") {
                    $dias_activos_ambulantes[1] ++;
                  }elseif ($sparklinedash->fecha_creado == $dias_semana[4] && $sparklinedash->tipo == "Ambulante") {
                    $dias_activos_ambulantes[2] ++;
                  }elseif ($sparklinedash->fecha_creado == $dias_semana[3] && $sparklinedash->tipo == "Ambulante") {
                    $dias_activos_ambulantes[3] ++;
                  }elseif ($sparklinedash->fecha_creado == $dias_semana[2] && $sparklinedash->tipo == "Ambulante") {
                    $dias_activos_ambulantes[4] ++;
                  }elseif ($sparklinedash->fecha_creado == $dias_semana[1] && $sparklinedash->tipo == "Ambulante") {
                    $dias_activos_ambulantes[5] ++;
                  }elseif ($sparklinedash->fecha_creado == $dias_semana[0] && $sparklinedash->tipo == "Ambulante") {
                    $dias_activos_ambulantes[6] ++;
                  }
                }

                $lat = array();
                $lng = array();

                foreach ($consulta->result() as $sparklinedash) {
                  $coordenadas = $sparklinedash->coordenadas;
                  list($lat_coordenadas, $lng_coordenadas) = explode(",",$coordenadas);

                  $lat[] = $lat_coordenadas;
                  $lng[] = $lng_coordenadas;
                }


                $zona1 = 0;
                $zona2 = 0;
                $zona3 = 0;
                $zona4 = 0;
                $zona5 = 0;
                $zona6 = 0;


                foreach ($consulta->result() as $sparklinedash) {
                  if ($sparklinedash->zona == "Zona 1") {
                    $zona1++;
                  }elseif ($sparklinedash->zona == "Zona 2") {
                    $zona2++;
                  }elseif ($sparklinedash->zona == "Zona 3") {
                    $zona3++;
                  }elseif ($sparklinedash->zona == "Zona 4") {
                    $zona4++;
                  }elseif ($sparklinedash->zona == "Zona 5") {
                    $zona5++;
                  }elseif ($sparklinedash->zona == "Zona 6") {
                    $zona6++;
                  }
                }





                ?>


                <script type="text/javascript">
                  var dias_activos_fijos = [<?php foreach ($dias_activos_fijos as $key => $value) {
                    echo $dias_activos_fijos[$key].",";
                  }?>];

                  var dias_activos_semifijos = [<?php foreach ($dias_activos_semifijos as $key => $value) {
                    echo $dias_activos_semifijos[$key].",";
                  }?>];

                  var dias_activos_ambulantes = [<?php foreach ($dias_activos_ambulantes as $key => $value) {
                    echo $dias_activos_ambulantes[$key].",";
                  }?>];


                  var lat = [<?php foreach ($lat as $key => $value) {
                    echo $lat[$key].",";
                  }?>];
                  var lng = [<?php foreach ($lng as $key => $value) {
                    echo $lng[$key].",";
                  }?>];


                  var reportes = true;
                  var crear_comerciante = false;

                </script>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">REPORTE</h3>
                                <?php
                                //if (isset($giro)) {
                                  //foreach ($giro as $value) {
                                    //echo $value;
                                  //}
                                //}

                                 ?>
                                <form class="m-t-30" action="<?= base_url() ?>Reportes_controller/reportes" method="post"  enctype="multipart/form-data">
                                  <div class="row">
                                    <div class="col-md-4">

                                    </div>
                                    <div class="col-md-4 text-center">
                                      <h3>FILTRO</h3>
                                    </div>
                                    <div class="col-md-2">
                                      <div class="form-group">
                                          <select class="form-control custom-select" data-placeholder="Elegir fecha" tabindex="0" name="fecha" required onchange="cargar_imagen(this.value)">
                                            <option value="1">Semana</option>
                                            <option value="2">Mes</option>
                                            <option value="3" selected>Año</option>
                                            <option value="4">Fecha</option>
                                          </select>
                                      </div>
                                    </div>
                                    <div class="col-md-2 text-center">
                                      <button type="submit" class="btn btn-light">Filtrar</button>
                                    </div>
                                  </div><div class="row" style="display:none;" id="selecfechareporte">
                                    <div class="col-md-4">

                                    </div>
                                    <div class="col-md-4 text-center">

                                    </div>
                                    <div class="col-md-2">
                                      <div class="form-group">
                                        <label for="">Desde</label>
                                          <input type="date" class="form-control" name="desde" value="2019-01-01" min="2019-01-01" max="<?= $dia1?>">
                                      </div>
                                    </div>
                                    <div class="col-md-2">
                                      <div class="form-group">
                                        <label for="">Hasta</label>
                                          <input type="date" class="form-control" name="hasta" value="<?= $dia1?>" min="2019-01-01" max="<?= $dia1?>">
                                      </div>
                                    </div>
                                  </div>

                                  <script type="text/javascript">
                                  function cargar_imagen(imagen) {
                                    if (imagen == 4) {
                                     document.getElementById('selecfechareporte').style.display = "";
                                   }else{
                                     document.getElementById('selecfechareporte').style.display = "none";
                                   }
                                   }
                                  </script>



                                  <?php
                                  if (isset($giros)) {
                                    foreach ($giros as $key => $giro_select) {
                                      // code...
                                      //echo $giro_select."<br/>";
                                      $giros_select[] = $giro_select;
                                    }
                                  //print_r(count($giros));
                                  //echo $giros_select[0];
                                  }


                                  if (isset($tags_s)) {
                                    foreach ($tags_s as $key => $tag_select) {
                                      // code...
                                      //echo $tag_select."<br/>";
                                      $tags_select[] = $tag_select;
                                    }
                                  //print_r(count($tags_s));
                                  //echo $tags_select[0];
                                  }


                                  if (isset($zonas)) {
                                    foreach ($zonas as $key => $zona_select) {
                                      // code...
                                      //echo $zona_select."<br/>";
                                      $zonas_select[] = $zona_select;
                                    }
                                  //print_r(count($zonas));
                                  //echo $zonas_select[0];
                                  }

                                  if (isset($estructuras)) {
                                    foreach ($estructuras as $key => $estructura_select) {
                                      // code...
                                      //echo $estructura_select."<br/>";
                                      $estructuras_select[] = $estructura_select;
                                    }
                                  //print_r(count($zonas));
                                  //echo $zonas_select[0];
                                  }

                                  if (isset($estados)) {
                                    foreach ($estados as $key => $estado_select) {
                                      // code...
                                      //echo $estado_select."<br/>";
                                      $estados_select[] = $estado_select;
                                    }
                                  //print_r(count($zonas));
                                  //echo $zonas_select[0];
                                  }

                                  if (isset($observaciones)) {
                                    foreach ($observaciones as $key => $observacion_select) {
                                      // code...
                                      //echo $estado_select."<br/>";
                                      $observaciones_select[] = $observacion_select;
                                    }
                                  //print_r(count($zonas));
                                  //echo $zonas_select[0];
                                  }



                                   ?>
                                   <div class="row">
                                     <div class="col-md-12">
                                       <div class="custom-control custom-checkbox">
                                         <input type="checkbox" class="custom-control-input" id="seleccionarTodo" value="seleccionarTodo">
                                         <label class="custom-control-label" for="seleccionarTodo">Seleccionar Todo</label>
                                       </div>
                                     </div>
                                   </div>
                                  <br>
                                  <div class="row">
                                    <div class="col-md-4" style="border-style: groove;">
                                      <div class="">
                                        <h4>Género</h4>
                                      </div>
                                      <div class="custom-control custom-radio">
                                          <input type="radio" id="genero" name="genero" class="custom-control-input" value="Ambos" <?php if(isset($genero)){if($genero == "Ambos"){echo "checked";}}else{echo "checked";} ?>>
                                          <label class="custom-control-label" for="genero">Ambos</label>
                                      </div>
                                      <div class="custom-control custom-radio">
                                          <input type="radio" id="genero1" name="genero" class="custom-control-input" value="Masculino" <?php if(isset($genero)){if($genero == "Masculino"){echo "checked";}} ?>>
                                          <label class="custom-control-label" for="genero1">Masculino</label>
                                      </div>
                                      <div class="custom-control custom-radio">
                                          <input type="radio" id="genero2" name="genero" class="custom-control-input" value="Femenino" <?php if(isset($genero)){if($genero == "Femenino"){echo "checked";}} ?>>
                                          <label class="custom-control-label" for="genero2">Femenino</label>
                                      </div>
                                    </div>
                                    <div class="col-md-4" style="border-style: groove;">
                                      <div class="">
                                        <h4>Giro</h4>
                                      </div>
                                      <div class="row">
                                      <?php
                                      $rep1 = 0;
                                      foreach ($consulta2->result() as $key => $giro) {
                                        if ($rep1 == 0) {
                                          // code...
                                        ?>
                                        <div class="col-md-6">
                                          <div class="custom-control custom-checkbox">
                                            <?php
                                             ?>
                                            <input type="checkbox" class="custom-control-input seleccionarTodo" id="<?= $giro->nombre_giro ?>1" value="<?= $giro->nombre_giro ?>" name="giro[<?=$key?>]" <?php if(isset($giros)){if($giro->nombre_giro == $giros_select[$key]){echo "checked";}} ?>>
                                            <label class="custom-control-label" for="<?= $giro->nombre_giro ?>1"><?= $giro->nombre_giro ?></label>
                                          </div>
                                        </div>
                                      <?php
                                      $rep1 = 1;
                                    }else {
                                      ?>
                                      <div class="col-md-6">
                                        <div class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input seleccionarTodo" id="<?= $giro->nombre_giro ?>1" value="<?= $giro->nombre_giro ?>" name="giro[<?=$key?>]" <?php if(isset($giros)){if($giro->nombre_giro == $giros_select[$key]){echo "checked";}} ?>>
                                          <label class="custom-control-label" for="<?= $giro->nombre_giro ?>1"><?= $giro->nombre_giro ?></label>
                                        </div>
                                      </div>

                                      <?php
                                      $rep1 = 0;
                                      }
                                      }
                                      ?>

                                    </div>
                                    </div>
                                    <div class="col-md-4" style="border-style: groove;">
                                      <div class="">
                                        <h4>Tags</h4>
                                      </div>
                                      <div class="row">
                                        <?php
                                        $rep1 = 0;
                                        foreach ($consulta3->result() as $key => $tags) {
                                          if ($rep1 == 0) {
                                            // code...
                                          ?>
                                          <div class="col-md-6">
                                            <div class="custom-control custom-checkbox">
                                              <input type="checkbox" class="custom-control-input seleccionarTodo" id="<?= $tags->tag ?>1" value="<?= $tags->tag ?>" name="tags[<?=$key?>]" <?php if(isset($tags_s)){if($tags->tag == $tags_select[$key]){echo "checked";}} ?>>
                                              <label class="custom-control-label" for="<?= $tags->tag ?>1"><?= $tags->tag ?></label>
                                            </div>
                                          </div>
                                        <?php
                                        $rep1 = 1;
                                      }else {
                                        ?>
                                        <div class="col-md-6">
                                          <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input seleccionarTodo" id="<?= $tags->tag ?>1" value="<?= $tags->tag ?>" name="tags[<?=$key?>]" <?php if(isset($tags_s)){if($tags->tag == $tags_select[$key]){echo "checked";}} ?>>
                                            <label class="custom-control-label" for="<?= $tags->tag ?>1"><?= $tags->tag ?></label>
                                          </div>
                                        </div>

                                        <?php
                                        $rep1 = 0;
                                      }
                                        }
                                        ?>
                                      </div>
                                    </div>
                                  </div>
                                  <br>
                                  <br>
                                  <div class="row">
                                    <div class="col-md-4" style="border-style: groove;">
                                      <div class="">
                                        <h4>Zona</h4>
                                      </div>
                                      <div class="row">
                                        <div class="col-md-6">
                                          <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input seleccionarTodo" id="zona1" value="Zona 1" name="zona[0]" <?php if(isset($zonas)){if("Zona 1" == $zonas_select[0]){echo "checked";}} ?>>
                                            <label class="custom-control-label" for="zona1">Zona 1</label>
                                          </div>
                                          <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input seleccionarTodo" id="zona2" value="Zona 2" name="zona[1]" <?php if(isset($zonas)){if("Zona 2" == $zonas_select[1]){echo "checked";}} ?>>
                                            <label class="custom-control-label" for="zona2">Zona 2</label>
                                          </div>
                                          <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input seleccionarTodo" id="zona3" value="Zona 3" name="zona[2]" <?php if(isset($zonas)){if("Zona 3" == $zonas_select[2]){echo "checked";}} ?>>
                                            <label class="custom-control-label" for="zona3">Zona 3</label>
                                          </div>
                                        </div>
                                        <div class="col-md-6">
                                          <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input seleccionarTodo" id="zona4" value="Zona 4" name="zona[3]" <?php if(isset($zonas)){if("Zona 4" == $zonas_select[3]){echo "checked";}} ?>>
                                            <label class="custom-control-label" for="zona4">Zona 4</label>
                                          </div>
                                          <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input seleccionarTodo" id="zona5" value="Zona 5" name="zona[4]" <?php if(isset($zonas)){if("Zona 5" == $zonas_select[4]){echo "checked";}} ?>>
                                            <label class="custom-control-label" for="zona5">Zona 5</label>
                                          </div>
                                          <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input seleccionarTodo" id="zona6" value="Zona 6" name="zona[5]" <?php if(isset($zonas)){if("Zona 6" == $zonas_select[5]){echo "checked";}} ?>>
                                            <label class="custom-control-label" for="zona6">Zona 6</label>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-4" style="border-style: groove;">
                                      <div class="">
                                        <h4>Estructura</h4>
                                      </div>
                                      <div class="row">
                                        <?php
                                        $rep1 = 0;
                                        foreach ($consulta5->result() as $key => $estructura) {
                                          if ($rep1 == 0) {
                                            // code...
                                          ?>
                                          <div class="col-md-6">
                                            <div class="custom-control custom-checkbox">
                                              <input type="checkbox" class="custom-control-input seleccionarTodo" id="<?= $estructura->estructura ?>1" value="<?= $estructura->estructura ?>" name="estructura[<?=$key?>]" <?php if(isset($estructuras)){if($estructura->estructura == $estructuras_select[$key]){echo "checked";}} ?>>
                                              <label class="custom-control-label" for="<?= $estructura->estructura ?>1"><?= $estructura->estructura ?></label>
                                            </div>
                                          </div>
                                        <?php
                                        $rep1 = 1;
                                      }else {
                                        ?>
                                        <div class="col-md-6">
                                          <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input seleccionarTodo" id="<?= $estructura->estructura ?>1" value="<?= $estructura->estructura ?>" name="estructura[<?=$key?>]" <?php if(isset($estructuras)){if($estructura->estructura == $estructuras_select[$key]){echo "checked";}} ?>>
                                            <label class="custom-control-label" for="<?= $estructura->estructura ?>1"><?= $estructura->estructura ?></label>
                                          </div>
                                        </div>

                                        <?php
                                        $rep1 = 0;
                                      }
                                        }
                                        ?>
                                      </div>
                                    </div>
                                    <div class="col-md-4" style="border-style: groove;">
                                      <div class="">
                                        <h4>Estado</h4>
                                      </div>
                                      <div class="col-md-12">
                                        <div class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input seleccionarTodo" id="Activo1" value="Activo" name="estado[0]" <?php if(isset($estados)){if($estados_select[0] == "Activo"){echo "checked";}} ?>>
                                          <label class="custom-control-label" for="Activo1">Activo</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input seleccionarTodo" id="Inactivo1" value="Inactivo" name="estado[1]" <?php if(isset($estados)){if($estados_select[1] == "Inactivo"){echo "checked";}} ?>>
                                          <label class="custom-control-label" for="Inactivo1">Inactivo</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input seleccionarTodo" id="Vencido1" value="Vencido" name="estado[2]" <?php if(isset($estados)){if($estados_select[2] == "Vencido"){echo "checked";}} ?>>
                                          <label class="custom-control-label" for="Vencido1">Vencido</label>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4" style="border-style: groove;">
                                      <div class="">
                                        <h4>Observaciones</h4>
                                      </div>
                                      <div class="col-md-12">
                                        <div class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input seleccionarTodo" id="Observaciones1" value="Todo en Orden" name="observaciones[0]" <?php if(isset($observaciones)){if($observaciones_select[0] == "Todo en Orden"){echo "checked";}} ?>>
                                          <label class="custom-control-label" for="Observaciones1">Todo en Orden</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input seleccionarTodo" id="Observaciones2" value="Fuera de horario" name="observaciones[1]" <?php if(isset($observaciones)){if($observaciones_select[1] == "Fuera de horario"){echo "checked";}} ?>>
                                          <label class="custom-control-label" for="Observaciones2">Fuera de horario</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input seleccionarTodo" id="Observaciones3" value="Reincidencia" name="observaciones[2]" <?php if(isset($observaciones)){if($observaciones_select[2] == "Reincidencia"){echo "checked";}} ?>>
                                          <label class="custom-control-label" for="Observaciones3">Reincidencia</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input seleccionarTodo" id="Observaciones4" value="Fuera de zona" name="observaciones[3]" <?php if(isset($observaciones)){if($observaciones_select[3] == "Fuera de zona"){echo "checked";}} ?>>
                                          <label class="custom-control-label" for="Observaciones4">Fuera de zona</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input seleccionarTodo" id="Observaciones5" value="No cuenta con permiso" name="observaciones[4]" <?php if(isset($observaciones)){if($observaciones_select[4] == "No cuenta con permiso"){echo "checked";}} ?>>
                                          <label class="custom-control-label" for="Observaciones5">No cuenta con permiso</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input seleccionarTodo" id="Observaciones6" value="Estado de ebriedad" name="observaciones[5]" <?php if(isset($observaciones)){if($observaciones_select[5] == "Estado de ebriedad"){echo "checked";}} ?>>
                                          <label class="custom-control-label" for="Observaciones6">Estado de ebriedad</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input seleccionarTodo" id="Observaciones7" value="Invadir banqueta" name="observaciones[6]" <?php if(isset($observaciones)){if($observaciones_select[6] == "Invadir banqueta"){echo "checked";}} ?>>
                                          <label class="custom-control-label" for="Observaciones7">Invadir banqueta</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input seleccionarTodo" id="Observaciones8" value="Hacer caso omiso a las recomendaciones" name="observaciones[7]" <?php if(isset($observaciones)){if($observaciones_select[7] == "Hacer caso omiso a las recomendaciones"){echo "checked";}} ?>>
                                          <label class="custom-control-label" for="Observaciones8">Hacer caso omiso a las recomendaciones</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input seleccionarTodo" id="Observaciones9" value="Amenazas y/o insulto a la autoridad" name="observaciones[8]" <?php if(isset($observaciones)){if($observaciones_select[8] == "Amenazas y/o insulto a la autoridad"){echo "checked";}} ?>>
                                          <label class="custom-control-label" for="Observaciones9">Amenazas y/o insulto a la autoridad</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input seleccionarTodo" id="Observaciones10" value="Otro" name="observaciones[9]" <?php if(isset($observaciones)){if($observaciones_select[9] == "Otro"){echo "checked";}} ?>>
                                          <label class="custom-control-label" for="Observaciones10">Otro</label>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </form>





                                <?php
                                if (isset($genero) || isset($giros) || isset($tags_s) ||isset($zonas) || isset($estructuras) || isset($estados) || isset($observaciones)) {
                                  ?>

                                  <br>
                                  <br>
                                  <?php
                                  if (isset($genero)) {


                                    if (isset($genero)) {
                                      $year = date("Y");
                                      $mes = date("m");
                                      $n_day = cal_days_in_month(CAL_GREGORIAN, $mes, $year); // 31
                                      //echo "Hubo {$n_day} días ";

                                      $dias_masculino = array("'Masculino'");
                                      $dias_femenino = array("'Femenino'");

                                      for ($i=0; $i < 12; $i++) {
                                        $dias_masculino[] = 0;
                                        $dias_femenino[] = 0;
                                      }

                                      //print_r($dias_masculino);

                                      $cont_ambos = 0;
                                      $cont_masculino = 0;
                                      $cont_femenino = 0;


                                      foreach ($consulta->result() as $comerciante) {
                                        for ($i=1; $i <= 12; $i++) {

                                          if ($i <= 9) {
                                            $time = '0'.$i.'-'.$year;
                                          }else {
                                            $time = $i.'-'.$year;
                                          }


                                          $dato = explode("-",$comerciante->fecha_creado);
                                          $time2 = $dato[1].'-'.$dato[0];

                                          //echo "<br>";
                                          if ($time == $time2 && $comerciante->genero == "Masculino") {
                                            $cont_masculino ++;
                                            $cont_ambos ++;
                                            $dias_masculino[$i] ++;
                                          }
                                          //echo $newformat . " - " . $dias_masculino[$i];
                                        }
                                      }

                                      foreach ($consulta->result() as $comerciante) {

                                        for ($i=1; $i <= 12 ; $i++) {

                                          if ($i <= 9) {
                                            $time = '0'.$i.'-'.$year;
                                          }else {
                                            $time = $i.'-'.$year;
                                          }


                                          $dato = explode("-",$comerciante->fecha_creado);
                                          $time2 = $dato[1].'-'.$dato[0];

                                          //echo "<br>";
                                          if ($time == $time2 && $comerciante->genero == "Femenino") {
                                            $cont_femenino ++;
                                            $cont_ambos ++;
                                            $dias_femenino[$i] ++;
                                          }
                                          //echo $newformat . " - " . $dias_masculino[$i];
                                        }
                                      }

                                      for ($i=1; $i <= 12 ; $i++) {
                                        $time = strtotime($mes.'/'.$i.'/'.$year);

                                        $newformat = date('Y-m-d',$time);
                                        //echo $newformat . ": " . $dias_masculino[$i] . " - " . $dias_femenino[$i];
                                        //echo "<br>";
                                      }
                                    }
                                  }


                                  if (isset($giros)) {
                                    $cont_giros = array();
                                    foreach ($giros_select as $key => $giro) {
                                      $cont_giros[] = 0;
                                    }
                                    foreach ($giros_select as $key => $giro) {
                                      foreach ($consulta->result() as $comerciante) {
                                        if ($comerciante->giro == $giro && $comerciante->fecha_creado >= $delmes) {
                                          $cont_giros[$key]++;
                                        }
                                      }
                                    }
                                  }

                                  if (isset($tags_s)) {
                                    $cont_tags = array();
                                    foreach ($tags_select as $key => $tag_select) {
                                      $cont_tags[] = 0;
                                    }
                                    foreach ($tags_select as $key => $tag_select) {
                                      foreach ($consulta->result() as $comerciante) {
                                        if ($tag_select != "") {

                                          if (strpos($comerciante->tags, $tag_select) !== false && $comerciante->fecha_creado >= $delmes) {
                                            $cont_tags[$key]++;
                                          }
                                        }
                                      }
                                    }
                                  }

                                  if (isset($zonas)) {
                                    $cont_zonas = array();
                                    foreach ($zonas_select as $key => $zona) {
                                      $cont_zonas[] = 0;
                                    }
                                    foreach ($zonas_select as $key => $zona) {
                                      foreach ($consulta->result() as $comerciante) {
                                        if ($comerciante->zona == $zona && $comerciante->fecha_creado >= $delmes) {
                                          $cont_zonas[$key]++;
                                        }
                                      }
                                    }
                                  }

                                  if (isset($estructuras)) {
                                    $cont_estructuras = array();
                                    foreach ($estructuras as $key => $estructura) {
                                      $cont_estructuras[] = 0;
                                    }
                                    foreach ($estructuras as $key => $estructura) {
                                      foreach ($consulta->result() as $comerciante) {
                                        if ($comerciante->estructura == $estructura && $comerciante->fecha_creado >= $delmes) {
                                          $cont_estructuras[$key]++;
                                        }
                                      }
                                    }
                                  }

                                  if (isset($estados)) {
                                    $cont_estados = array();
                                    foreach ($estados as $key => $estado) {
                                      $cont_estados[] = 0;
                                    }
                                    foreach ($estados as $key => $estado) {
                                      foreach ($consulta->result() as $comerciante) {
                                        if ($comerciante->estado == $estado && $comerciante->fecha_creado >= $delmes) {
                                          $cont_estados[$key]++;
                                        }
                                      }
                                    }
                                  }


                                  if (isset($observaciones)) {
                                    $cont_observaciones = array();
                                    foreach ($observaciones as $key => $observacion) {
                                      $cont_observaciones[] = 0;
                                    }
                                    foreach ($comentarios->result() as $key => $comentario) {
                                      $porciones = explode(" ", $comentario->fecha);
                                      echo $porciones[0];
                                      if ($comentario->reporte == "Todo en Orden" && $porciones[0] >= $delmes) {
                                        $cont_observaciones[$key]++;
                                      }else if ($comentario->reporte == "Fuera de horario" && $porciones[0] >= $delmes) {
                                        $cont_observaciones[$key]++;
                                      }else if ($comentario->reporte == "Reincidencia" && $porciones[0] >= $delmes) {
                                        $cont_observaciones[$key]++;
                                      }else if ($comentario->reporte == "Fuera de zona" && $porciones[0] >= $delmes) {
                                        $cont_observaciones[$key]++;
                                      }else if ($comentario->reporte == "No cuenta con permiso" && $porciones[0] >= $delmes) {
                                        $cont_observaciones[$key]++;
                                      }else if ($comentario->reporte == "Estado de ebriedad" && $porciones[0] >= $delmes) {
                                        $cont_observaciones[$key]++;
                                      }else if ($comentario->reporte == "Invadir banqueta" && $porciones[0] >= $delmes) {
                                        $cont_observaciones[$key]++;
                                      }else if ($comentario->reporte == "Hacer caso omiso a las recomendaciones" && $porciones[0] >= $delmes) {
                                        $cont_observaciones[$key]++;
                                      }else if ($comentario->reporte == "Amenazas y/o insulto a la autoridad" && $porciones[0] >= $delmes) {
                                        $cont_observaciones[$key]++;
                                      }else if ($comentario->reporte == "Otro" && $porciones[0] >= $delmes) {
                                        $cont_observaciones[$key]++;
                                      }
                                    }
                                  }


                                  // if ($dia1 < $dia7) {
                                  //   echo "1";
                                  // }else {
                                  //   echo "2";
                                  // }

                                   ?>



                                   <script type="text/javascript">
                                   <?php
                                   if (isset($genero)) {
                                     ?>
                                     var x_dias = ["x"];
                                     <?php
                                     for ($i=1; $i <= $n_day; $i++) {
                                       ?>
                                       x_dias.push(<?php echo $i; ?>)
                                       <?php
                                     }

                                      ?>

                                     var genero = "<?= $genero ?>";
                                     <?php
                                   }
                                   if ($genero == "Ambos") {
                                     ?>
                                     var dias_masculino = [<?php foreach ($dias_masculino as $key => $value) {
                                       echo $dias_masculino[$key].",";
                                     }?>];

                                     var dias_femenino = [<?php foreach ($dias_femenino as $key => $value) {
                                       echo $dias_femenino[$key].",";
                                     }?>];

                                     var grafica = [dias_masculino,dias_femenino];
                                     grafica.forEach(function(element,index){
                                       console.log(grafica[index]);
                                     });
                                     <?php
                                   }
                                   if ($genero == "Masculino") {
                                     ?>
                                     var dias_masculino = [<?php foreach ($dias_masculino as $key => $value) {
                                       echo $dias_masculino[$key].",";
                                     }?>];

                                     var dias_femenino = [<?php foreach ($dias_femenino as $key => $value) {
                                       echo $dias_femenino[$key].",";
                                     }?>];

                                     var grafica = [dias_masculino,dias_femenino];
                                     grafica.forEach(function(element,index){
                                       console.log(grafica[index]);
                                     });
                                     <?php
                                   }
                                   if ($genero == "Femenino") {
                                     ?>
                                     var dias_masculino = [<?php foreach ($dias_masculino as $key => $value) {
                                       echo $dias_masculino[$key].",";
                                     }?>];

                                     var dias_femenino = [<?php foreach ($dias_femenino as $key => $value) {
                                       echo $dias_femenino[$key].",";
                                     }?>];


                                     <?php
                                   }

                                    ?>


                                   </script>

                                  <h3 class="card-title">Grafica Comparativa</h3>
                                  <!-- <div class="row">
                                    <div class="col-md-8">
                                      <div id="area-chart"></div>
                                    </div>
                                    <div class="col-md-4">

                                      <?php
                                      if ($genero == "Ambos") {
                                        ?>
                                        <h4>Total: <?=$cont_ambos?></h4>
                                        <h4>Masculinos: <?=$cont_masculino?></h4>
                                        <h4>Femeninos: <?=$cont_femenino?></h4>

                                        <?php
                                      }
                                       ?>
                                       <?php
                                       if ($genero == "Masculino") {
                                         ?>
                                         <h4>Total: <?=$cont_ambos?></h4>
                                         <h4>Masculinos: <?=$cont_masculino?></h4>

                                         <?php
                                       }
                                        ?>
                                        <?php
                                        if ($genero == "Femenino") {
                                          ?>
                                          <h4>Total: <?=$cont_ambos?></h4>
                                          <h4>Femeninos: <?=$cont_femenino?></h4>

                                          <?php
                                        }
                                         ?>
                                    </div>
                                  </div> -->

                                  <script type="text/javascript">
                                    var ambulantesMasculino = <?php echo $cont_masculino;?>;
                                    var ambulantesFemenino = <?php echo $cont_femenino;?>;
                                  </script>

                                  <div class="row">
                                    <div class="col-md-6">
                                      <div id="basic-pie" style="height:400px;"></div>
                                    </div>
                                    <div class="col-md-6">
                                      <div id="basic-pie2" style="height:400px;"></div>
                                    </div>
                                  </div>
                                  <br>
                                  <div class="row">
                                    <div class="col-md-12">
                                      <div id="stacked-bar" style="height:400px;"></div>
                                    </div>
                                  </div>
                                  <br>
                                  <div class="row">
                                    <div class="col-md-12">
                                      <div id="stacked-bar2" style="height:400px;"></div>
                                    </div>
                                  </div>
                                  <br>
                                  <div class="row">
                                    <div class="col-md-12">
                                      <div id="stacked-bar3" style="height:200px;"></div>
                                    </div>
                                  </div>


                                  <?php
                                  if (isset($genero) || isset($giros) || isset($tags_s) ||isset($zonas) || isset($estructuras) || isset($estados)) {
                                    ?>
                                    <div class="row">
                                    <?php
                                    if (isset($giros)) {
                                      ?>
                                      <br>
                                      <br>
                                        <div class="col-md-4 text-left">
                                          <br>
                                          <h3>Giro</h3>
                                          <?php
                                          foreach ($giros_select as $key => $giro) {
                                            if ($giro != "null") {
                                              echo $giro.": ".$cont_giros[$key];
                                              echo "<br>";
                                            }
                                          }

                                           ?>

                                           <script type="text/javascript">
                                             var girosSeleccionados=<?php echo json_encode($giros_select);?>;
                                             var girosCantidad=<?php echo json_encode($cont_giros);?>;
                                           </script>
                                        </div>
                                      <?php
                                    }

                                    if (isset($tags_s)) {
                                      ?>
                                      <br>
                                      <br>
                                        <div class="col-md-4 text-left">
                                          <br>
                                          <h3>Tags</h3>
                                          <?php
                                          foreach ($tags_select as $key => $tag) {
                                            if ($tag != "null") {
                                              echo $tag.": ".$cont_tags[$key];
                                              echo "<br>";
                                            }
                                          }
                                           ?>
                                        </div>
                                      <?php
                                    }

                                    if (isset($zonas)) {
                                      ?>
                                      <br>
                                      <br>
                                        <div class="col-md-4 text-left">
                                          <br>
                                          <h3>Zonas</h3>
                                          <?php
                                          foreach ($zonas_select as $key => $zona) {
                                            if ($zona != "null") {
                                              echo $zona.": ".$cont_zonas[$key];
                                              echo "<br>";
                                            }
                                          }
                                           ?>
                                           <script type="text/javascript">
                                             var zonasSeleccionados=<?php echo json_encode($zonas_select);?>;
                                             var zonasCantidad=<?php echo json_encode($cont_zonas);?>;
                                           </script>

                                        </div>
                                      <?php
                                    }

                                    if (isset($estructuras)) {
                                      ?>
                                      <br>
                                      <br>
                                        <div class="col-md-4 text-left">
                                          <br>
                                          <h3>Estructuras</h3>
                                          <?php
                                          foreach ($estructuras_select as $key => $estructura) {
                                            if ($estructura != "null") {
                                              echo $estructura.": ".$cont_estructuras[$key];
                                              echo "<br>";
                                            }
                                          }
                                           ?>

                                           <script type="text/javascript">
                                             var estructurasSeleccionados=<?php echo json_encode($estructuras_select);?>;
                                             var estructurasCantidad=<?php echo json_encode($cont_estructuras);?>;
                                           </script>
                                        </div>
                                      <?php
                                    }

                                    if (isset($estados)) {
                                      ?>
                                      <br>
                                      <br>
                                        <div class="col-md-4 text-left">
                                          <br>
                                          <h3>Estados</h3>
                                          <?php
                                          foreach ($estados as $key => $estado) {
                                            if ($estado != "null") {
                                              echo $estado.": ".$cont_estados[$key];
                                              echo "<br>";
                                            }
                                          }
                                           ?>
                                           <script type="text/javascript">
                                             var estadoSeleccionados=<?php echo json_encode($estados);?>;
                                             var estadoCantidad=<?php echo json_encode($cont_estados);?>;
                                           </script>
                                        </div>
                                      <?php
                                    }
                                    if (isset($estados)) {
                                    ?>
                                    <br>
                                    <br>
                                      <div class="col-md-4 text-left">
                                        <br>
                                        <h3>Observaciones</h3>
                                        <?php
                                        foreach ($observaciones as $key => $estado) {
                                          if ($estado != "null") {
                                            echo $estado.": ".$cont_observaciones[$key];
                                            echo "<br>";
                                          }
                                        }
                                         ?>
                                      </div>
                                    <?php
                                    }
                                     ?>
                                  </div>
                                    <?php
                                  }
                                   ?>
                                  <?php
                                }
                                 ?>


                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body analytics-info">
                                <h3 class="card-title">Fijos</h3>
                                <ul class="list-inline two-part">
                                    <li>
                                        <div id="sparklinedash"></div>
                                    </li>
                                    <li class="text-right"><i class="ti-arrow-up text-success"></i> <span class="counter text-success"><?= $total_activos_fijos?></span></li>
                                </ul>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body analytics-info">
                                <h3 class="card-title">Semifijos</h3>
                                <ul class="list-inline two-part">
                                    <li>
                                        <div id="sparklinedash2"></div>
                                    </li>
                                    <li class="text-right"><i class="ti-arrow-up text-purple"></i> <span class="counter text-purple"><?= $total_activos_semifijos?></span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-body analytics-info">
                                <h3 class="card-title">Ambulantes</h3>
                                <ul class="list-inline two-part">
                                    <li>
                                        <div id="sparklinedash3"></div>
                                    </li>
                                    <li class="text-right"><i class="ti-arrow-up text-info"></i> <span class="counter text-info"><?= $total_activos_ambulantes?></span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card" style="height:100%;">
                            <div class="card-body">
                                <h3 class="card-title">Ubicaciones de comerciantes</h3>
                                <div id="map" class="gmaps" style="display:none;"></div>
                                <div id="map_2" class="gmaps"></div>
                                <br>
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="row">
                                      <div class="col-md-2">
                                        <h3>Zona 1: <span class="font-weight-normal"><?= $zona1 ?> Comerciantes</span></h3>
                                      </div>
                                      <div class="col-md-2">
                                        <h3>Zona 2: <span class="font-weight-normal"><?= $zona2 ?> Comerciantes</span></h3>
                                      </div>
                                      <div class="col-md-2">
                                        <h3>Zona 3: <span class="font-weight-normal"><?= $zona3 ?> Comerciantes</span></h3>
                                      </div>
                                      <div class="col-md-2">
                                        <h3>Zona 4: <span class="font-weight-normal"><?= $zona4 ?> Comerciantes</span></h3>
                                      </div>
                                      <div class="col-md-2">
                                        <h3>Zona 5: <span class="font-weight-normal"><?= $zona5 ?> Comerciantes</span></h3>
                                      </div>
                                      <div class="col-md-2">
                                        <h3>Zona 6: <span class="font-weight-normal"><?= $zona6 ?> Comerciantes</span></h3>
                                      </div>

                                    </div>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>





                <br>


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
            <?php
          }else if($fecha == "4"){
            ?>
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->


                <?php
                $desde1=$desde;
                $hasta1=$hasta;

                 ?>


                <?php

                $dia1 = date("Y-m-d");
                $dia2 = date("Y-m-d",mktime(0, 0, 0, date('m'),date('d')-1,date('Y')));
                $dia3 = date("Y-m-d",mktime(0, 0, 0, date('m'),date('d')-2,date('Y')));
                $dia4 = date("Y-m-d",mktime(0, 0, 0, date('m'),date('d')-3,date('Y')));
                $dia5 = date("Y-m-d",mktime(0, 0, 0, date('m'),date('d')-4,date('Y')));
                $dia6 = date("Y-m-d",mktime(0, 0, 0, date('m'),date('d')-5,date('Y')));
                $dia7 = date("Y-m-d",mktime(0, 0, 0, date('m'),date('d')-6,date('Y')));


                //echo $dia1;
                $dias_semana = array($dia1,$dia2,$dia3,$dia4,$dia5,$dia6,$dia7);

                $dias_activos_fijos = array(0, 0, 0, 0, 0, 0, 0);
                $total_activos_fijos = 0;

                foreach ($consulta->result() as $sparklinedash) {
                  if ($sparklinedash->tipo == "Fijo") {
                    $total_activos_fijos++;
                  }
                  if ($sparklinedash->fecha_creado == $dias_semana[6] && $sparklinedash->tipo == "Fijo") {
                    $dias_activos_fijos[0] ++;
                  }elseif ($sparklinedash->fecha_creado == $dias_semana[5] && $sparklinedash->tipo == "Fijo") {
                    $dias_activos_fijos[1] ++;
                  }elseif ($sparklinedash->fecha_creado == $dias_semana[4] && $sparklinedash->tipo == "Fijo") {
                    $dias_activos_fijos[2] ++;
                  }elseif ($sparklinedash->fecha_creado == $dias_semana[3] && $sparklinedash->tipo == "Fijo") {
                    $dias_activos_fijos[3] ++;
                  }elseif ($sparklinedash->fecha_creado == $dias_semana[2] && $sparklinedash->tipo == "Fijo") {
                    $dias_activos_fijos[4] ++;
                  }elseif ($sparklinedash->fecha_creado == $dias_semana[1] && $sparklinedash->tipo == "Fijo") {
                    $dias_activos_fijos[5] ++;
                  }elseif ($sparklinedash->fecha_creado == $dias_semana[0] && $sparklinedash->tipo == "Fijo") {
                    $dias_activos_fijos[6] ++;
                  }
                }



                $dias_activos_semifijos = array(0, 0, 0, 0, 0, 0, 0);
                $total_activos_semifijos = 0;

                foreach ($consulta->result() as $sparklinedash) {
                  if ($sparklinedash->tipo == "Semifijo") {
                    $total_activos_semifijos++;
                  }
                  if ($sparklinedash->fecha_creado == $dias_semana[6] && $sparklinedash->tipo == "Semifijo") {
                    $dias_activos_semifijos[0] ++;
                  }elseif ($sparklinedash->fecha_creado == $dias_semana[5] && $sparklinedash->tipo == "Semifijo") {
                    $dias_activos_semifijos[1] ++;
                  }elseif ($sparklinedash->fecha_creado == $dias_semana[4] && $sparklinedash->tipo == "Semifijo") {
                    $dias_activos_semifijos[2] ++;
                  }elseif ($sparklinedash->fecha_creado == $dias_semana[3] && $sparklinedash->tipo == "Semifijo") {
                    $dias_activos_semifijos[3] ++;
                  }elseif ($sparklinedash->fecha_creado == $dias_semana[2] && $sparklinedash->tipo == "Semifijo") {
                    $dias_activos_semifijos[4] ++;
                  }elseif ($sparklinedash->fecha_creado == $dias_semana[1] && $sparklinedash->tipo == "Semifijo") {
                    $dias_activos_semifijos[5] ++;
                  }elseif ($sparklinedash->fecha_creado == $dias_semana[0] && $sparklinedash->tipo == "Semifijo") {
                    $dias_activos_semifijos[6] ++;
                  }
                }


                $dias_activos_ambulantes = array(0, 0, 0, 0, 0, 0, 0);
                $total_activos_ambulantes = 0;

                foreach ($consulta->result() as $sparklinedash) {
                  if ($sparklinedash->tipo == "Ambulante") {
                    $total_activos_ambulantes++;
                  }
                  if ($sparklinedash->fecha_creado == $dias_semana[6] && $sparklinedash->tipo == "Ambulante") {
                    $dias_activos_ambulantes[0] ++;
                  }elseif ($sparklinedash->fecha_creado == $dias_semana[5] && $sparklinedash->tipo == "Ambulante") {
                    $dias_activos_ambulantes[1] ++;
                  }elseif ($sparklinedash->fecha_creado == $dias_semana[4] && $sparklinedash->tipo == "Ambulante") {
                    $dias_activos_ambulantes[2] ++;
                  }elseif ($sparklinedash->fecha_creado == $dias_semana[3] && $sparklinedash->tipo == "Ambulante") {
                    $dias_activos_ambulantes[3] ++;
                  }elseif ($sparklinedash->fecha_creado == $dias_semana[2] && $sparklinedash->tipo == "Ambulante") {
                    $dias_activos_ambulantes[4] ++;
                  }elseif ($sparklinedash->fecha_creado == $dias_semana[1] && $sparklinedash->tipo == "Ambulante") {
                    $dias_activos_ambulantes[5] ++;
                  }elseif ($sparklinedash->fecha_creado == $dias_semana[0] && $sparklinedash->tipo == "Ambulante") {
                    $dias_activos_ambulantes[6] ++;
                  }
                }

                $lat = array();
                $lng = array();

                foreach ($consulta->result() as $sparklinedash) {
                  $coordenadas = $sparklinedash->coordenadas;
                  list($lat_coordenadas, $lng_coordenadas) = explode(",",$coordenadas);

                  $lat[] = $lat_coordenadas;
                  $lng[] = $lng_coordenadas;
                }


                $zona1 = 0;
                $zona2 = 0;
                $zona3 = 0;
                $zona4 = 0;
                $zona5 = 0;
                $zona6 = 0;


                foreach ($consulta->result() as $sparklinedash) {
                  if ($sparklinedash->zona == "Zona 1") {
                    $zona1++;
                  }elseif ($sparklinedash->zona == "Zona 2") {
                    $zona2++;
                  }elseif ($sparklinedash->zona == "Zona 3") {
                    $zona3++;
                  }elseif ($sparklinedash->zona == "Zona 4") {
                    $zona4++;
                  }elseif ($sparklinedash->zona == "Zona 5") {
                    $zona5++;
                  }elseif ($sparklinedash->zona == "Zona 6") {
                    $zona6++;
                  }
                }





                ?>


                <script type="text/javascript">
                  var dias_activos_fijos = [<?php foreach ($dias_activos_fijos as $key => $value) {
                    echo $dias_activos_fijos[$key].",";
                  }?>];

                  var dias_activos_semifijos = [<?php foreach ($dias_activos_semifijos as $key => $value) {
                    echo $dias_activos_semifijos[$key].",";
                  }?>];

                  var dias_activos_ambulantes = [<?php foreach ($dias_activos_ambulantes as $key => $value) {
                    echo $dias_activos_ambulantes[$key].",";
                  }?>];


                  var lat = [<?php foreach ($lat as $key => $value) {
                    echo $lat[$key].",";
                  }?>];
                  var lng = [<?php foreach ($lng as $key => $value) {
                    echo $lng[$key].",";
                  }?>];


                  var reportes = true;
                  var crear_comerciante = false;

                </script>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">REPORTE</h3>
                                <?php
                                //if (isset($giro)) {
                                  //foreach ($giro as $value) {
                                    //echo $value;
                                  //}
                                //}

                                 ?>
                                <form class="m-t-30" action="<?= base_url() ?>Reportes_controller/reportes" method="post"  enctype="multipart/form-data">
                                  <div class="row">
                                    <div class="col-md-4">

                                    </div>
                                    <div class="col-md-4 text-center">
                                      <h3>FILTRO</h3>
                                    </div>
                                    <div class="col-md-2">
                                      <div class="form-group">
                                          <select class="form-control custom-select" data-placeholder="Elegir fecha" tabindex="0" name="fecha" required onchange="cargar_imagen(this.value)">
                                            <option value="1">Semana</option>
                                            <option value="2">Mes</option>
                                            <option value="3">Año</option>
                                            <option value="4" selected>Fecha</option>
                                          </select>
                                      </div>
                                    </div>
                                    <div class="col-md-2 text-center">
                                      <button type="submit" class="btn btn-light">Filtrar</button>
                                    </div>
                                  </div>
                                  <div class="row" style="display:;" id="selecfechareporte">
                                    <div class="col-md-4">

                                    </div>
                                    <div class="col-md-4 text-center">

                                    </div>
                                    <div class="col-md-2">
                                      <div class="form-group">
                                        <label for="">Desde</label>
                                          <input type="date" class="form-control" name="desde" value="<?= $desde1?>" min="2019-01-01" max="<?= $dia1?>">
                                      </div>
                                    </div>
                                    <div class="col-md-2">
                                      <div class="form-group">
                                        <label for="">Hasta</label>
                                          <input type="date" class="form-control" name="hasta" value="<?= $hasta1?>" min="2019-01-01" max="<?= $dia1?>">
                                      </div>
                                    </div>
                                  </div>

                                  <script type="text/javascript">
                                  function cargar_imagen(imagen) {
                                    if (imagen == 4) {
                                     document.getElementById('selecfechareporte').style.display = "";
                                   }else{
                                     document.getElementById('selecfechareporte').style.display = "none";
                                   }
                                   }
                                  </script>



                                  <?php
                                  if (isset($giros)) {
                                    foreach ($giros as $key => $giro_select) {
                                      // code...
                                      //echo $giro_select."<br/>";
                                      $giros_select[] = $giro_select;
                                    }
                                  //print_r(count($giros));
                                  //echo $giros_select[0];
                                  }


                                  if (isset($tags_s)) {
                                    foreach ($tags_s as $key => $tag_select) {
                                      // code...
                                      //echo $tag_select."<br/>";
                                      $tags_select[] = $tag_select;
                                    }
                                  //print_r(count($tags_s));
                                  //echo $tags_select[0];
                                  }


                                  if (isset($zonas)) {
                                    foreach ($zonas as $key => $zona_select) {
                                      // code...
                                      //echo $zona_select."<br/>";
                                      $zonas_select[] = $zona_select;
                                    }
                                  //print_r(count($zonas));
                                  //echo $zonas_select[0];
                                  }

                                  if (isset($estructuras)) {
                                    foreach ($estructuras as $key => $estructura_select) {
                                      // code...
                                      //echo $estructura_select."<br/>";
                                      $estructuras_select[] = $estructura_select;
                                    }
                                  //print_r(count($zonas));
                                  //echo $zonas_select[0];
                                  }

                                  if (isset($estados)) {
                                    foreach ($estados as $key => $estado_select) {
                                      // code...
                                      //echo $estado_select."<br/>";
                                      $estados_select[] = $estado_select;
                                    }
                                  //print_r(count($zonas));
                                  //echo $zonas_select[0];
                                  }

                                  if (isset($observaciones)) {
                                    foreach ($observaciones as $key => $observacion_select) {
                                      // code...
                                      //echo $estado_select."<br/>";
                                      $observaciones_select[] = $observacion_select;
                                    }
                                  //print_r(count($zonas));
                                  //echo $zonas_select[0];
                                  }




                                   ?>
                                   <div class="row">
                                     <div class="col-md-12">
                                       <div class="custom-control custom-checkbox">
                                         <input type="checkbox" class="custom-control-input" id="seleccionarTodo" value="seleccionarTodo">
                                         <label class="custom-control-label" for="seleccionarTodo">Seleccionar Todo</label>
                                       </div>
                                     </div>
                                   </div>
                                  <br>
                                  <div class="row">
                                    <div class="col-md-4" style="border-style: groove;">
                                      <div class="">
                                        <h4>Género</h4>
                                      </div>
                                      <div class="custom-control custom-radio">
                                          <input type="radio" id="genero" name="genero" class="custom-control-input" value="Ambos" <?php if(isset($genero)){if($genero == "Ambos"){echo "checked";}}else{echo "checked";} ?>>
                                          <label class="custom-control-label" for="genero">Ambos</label>
                                      </div>
                                      <div class="custom-control custom-radio">
                                          <input type="radio" id="genero1" name="genero" class="custom-control-input" value="Masculino" <?php if(isset($genero)){if($genero == "Masculino"){echo "checked";}} ?>>
                                          <label class="custom-control-label" for="genero1">Masculino</label>
                                      </div>
                                      <div class="custom-control custom-radio">
                                          <input type="radio" id="genero2" name="genero" class="custom-control-input" value="Femenino" <?php if(isset($genero)){if($genero == "Femenino"){echo "checked";}} ?>>
                                          <label class="custom-control-label" for="genero2">Femenino</label>
                                      </div>
                                    </div>
                                    <div class="col-md-4" style="border-style: groove;">
                                      <div class="">
                                        <h4>Giro</h4>
                                      </div>
                                      <div class="row">
                                      <?php
                                      $rep1 = 0;
                                      foreach ($consulta2->result() as $key => $giro) {
                                        if ($rep1 == 0) {
                                          // code...
                                        ?>
                                        <div class="col-md-6">
                                          <div class="custom-control custom-checkbox">
                                            <?php
                                             ?>
                                            <input type="checkbox" class="custom-control-input seleccionarTodo" id="<?= $giro->nombre_giro ?>1" value="<?= $giro->nombre_giro ?>" name="giro[<?=$key?>]" <?php if(isset($giros)){if($giro->nombre_giro == $giros_select[$key]){echo "checked";}} ?>>
                                            <label class="custom-control-label" for="<?= $giro->nombre_giro ?>1"><?= $giro->nombre_giro ?></label>
                                          </div>
                                        </div>
                                      <?php
                                      $rep1 = 1;
                                    }else {
                                      ?>
                                      <div class="col-md-6">
                                        <div class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input seleccionarTodo" id="<?= $giro->nombre_giro ?>1" value="<?= $giro->nombre_giro ?>" name="giro[<?=$key?>]" <?php if(isset($giros)){if($giro->nombre_giro == $giros_select[$key]){echo "checked";}} ?>>
                                          <label class="custom-control-label" for="<?= $giro->nombre_giro ?>1"><?= $giro->nombre_giro ?></label>
                                        </div>
                                      </div>

                                      <?php
                                      $rep1 = 0;
                                      }
                                      }
                                      ?>

                                    </div>
                                    </div>
                                    <div class="col-md-4" style="border-style: groove;">
                                      <div class="">
                                        <h4>Tags</h4>
                                      </div>
                                      <div class="row">
                                        <?php
                                        $rep1 = 0;
                                        foreach ($consulta3->result() as $key => $tags) {
                                          if ($rep1 == 0) {
                                            // code...
                                          ?>
                                          <div class="col-md-6">
                                            <div class="custom-control custom-checkbox">
                                              <input type="checkbox" class="custom-control-input seleccionarTodo" id="<?= $tags->tag ?>1" value="<?= $tags->tag ?>" name="tags[<?=$key?>]" <?php if(isset($tags_s)){if($tags->tag == $tags_select[$key]){echo "checked";}} ?>>
                                              <label class="custom-control-label" for="<?= $tags->tag ?>1"><?= $tags->tag ?></label>
                                            </div>
                                          </div>
                                        <?php
                                        $rep1 = 1;
                                      }else {
                                        ?>
                                        <div class="col-md-6">
                                          <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input seleccionarTodo" id="<?= $tags->tag ?>1" value="<?= $tags->tag ?>" name="tags[<?=$key?>]" <?php if(isset($tags_s)){if($tags->tag == $tags_select[$key]){echo "checked";}} ?>>
                                            <label class="custom-control-label" for="<?= $tags->tag ?>1"><?= $tags->tag ?></label>
                                          </div>
                                        </div>

                                        <?php
                                        $rep1 = 0;
                                      }
                                        }
                                        ?>
                                      </div>
                                    </div>
                                  </div>
                                  <br>
                                  <br>
                                  <div class="row">
                                    <div class="col-md-4" style="border-style: groove;">
                                      <div class="">
                                        <h4>Zona</h4>
                                      </div>
                                      <div class="row">
                                        <div class="col-md-6">
                                          <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input seleccionarTodo" id="zona1" value="Zona 1" name="zona[0]" <?php if(isset($zonas)){if("Zona 1" == $zonas_select[0]){echo "checked";}} ?>>
                                            <label class="custom-control-label" for="zona1">Zona 1</label>
                                          </div>
                                          <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input seleccionarTodo" id="zona2" value="Zona 2" name="zona[1]" <?php if(isset($zonas)){if("Zona 2" == $zonas_select[1]){echo "checked";}} ?>>
                                            <label class="custom-control-label" for="zona2">Zona 2</label>
                                          </div>
                                          <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input seleccionarTodo" id="zona3" value="Zona 3" name="zona[2]" <?php if(isset($zonas)){if("Zona 3" == $zonas_select[2]){echo "checked";}} ?>>
                                            <label class="custom-control-label" for="zona3">Zona 3</label>
                                          </div>
                                        </div>
                                        <div class="col-md-6">
                                          <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input seleccionarTodo" id="zona4" value="Zona 4" name="zona[3]" <?php if(isset($zonas)){if("Zona 4" == $zonas_select[3]){echo "checked";}} ?>>
                                            <label class="custom-control-label" for="zona4">Zona 4</label>
                                          </div>
                                          <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input seleccionarTodo" id="zona5" value="Zona 5" name="zona[4]" <?php if(isset($zonas)){if("Zona 5" == $zonas_select[4]){echo "checked";}} ?>>
                                            <label class="custom-control-label" for="zona5">Zona 5</label>
                                          </div>
                                          <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input seleccionarTodo" id="zona6" value="Zona 6" name="zona[5]" <?php if(isset($zonas)){if("Zona 6" == $zonas_select[5]){echo "checked";}} ?>>
                                            <label class="custom-control-label" for="zona6">Zona 6</label>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-4" style="border-style: groove;">
                                      <div class="">
                                        <h4>Estructura</h4>
                                      </div>
                                      <div class="row">
                                        <?php
                                        $rep1 = 0;
                                        foreach ($consulta5->result() as $key => $estructura) {
                                          if ($rep1 == 0) {
                                            // code...
                                          ?>
                                          <div class="col-md-6">
                                            <div class="custom-control custom-checkbox">
                                              <input type="checkbox" class="custom-control-input seleccionarTodo" id="<?= $estructura->estructura ?>1" value="<?= $estructura->estructura ?>" name="estructura[<?=$key?>]" <?php if(isset($estructuras)){if($estructura->estructura == $estructuras_select[$key]){echo "checked";}} ?>>
                                              <label class="custom-control-label" for="<?= $estructura->estructura ?>1"><?= $estructura->estructura ?></label>
                                            </div>
                                          </div>
                                        <?php
                                        $rep1 = 1;
                                      }else {
                                        ?>
                                        <div class="col-md-6">
                                          <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input seleccionarTodo" id="<?= $estructura->estructura ?>1" value="<?= $estructura->estructura ?>" name="estructura[<?=$key?>]" <?php if(isset($estructuras)){if($estructura->estructura == $estructuras_select[$key]){echo "checked";}} ?>>
                                            <label class="custom-control-label" for="<?= $estructura->estructura ?>1"><?= $estructura->estructura ?></label>
                                          </div>
                                        </div>

                                        <?php
                                        $rep1 = 0;
                                      }
                                        }
                                        ?>
                                      </div>
                                    </div>
                                    <div class="col-md-4" style="border-style: groove;">
                                      <div class="">
                                        <h4>Estado</h4>
                                      </div>
                                      <div class="col-md-12">
                                        <div class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input seleccionarTodo" id="Activo1" value="Activo" name="estado[0]" <?php if(isset($estados)){if($estados_select[0] == "Activo"){echo "checked";}} ?>>
                                          <label class="custom-control-label" for="Activo1">Activo</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input seleccionarTodo" id="Inactivo1" value="Inactivo" name="estado[1]" <?php if(isset($estados)){if($estados_select[1] == "Inactivo"){echo "checked";}} ?>>
                                          <label class="custom-control-label" for="Inactivo1">Inactivo</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input seleccionarTodo" id="Vencido1" value="Vencido" name="estado[2]" <?php if(isset($estados)){if($estados_select[2] == "Vencido"){echo "checked";}} ?>>
                                          <label class="custom-control-label" for="Vencido1">Vencido</label>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4" style="border-style: groove;">
                                      <div class="">
                                        <h4>Observaciones</h4>
                                      </div>
                                      <div class="col-md-12">
                                        <div class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input seleccionarTodo" id="Observaciones1" value="Todo en Orden" name="observaciones[0]" <?php if(isset($observaciones)){if($observaciones_select[0] == "Todo en Orden"){echo "checked";}} ?>>
                                          <label class="custom-control-label" for="Observaciones1">Todo en Orden</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input seleccionarTodo" id="Observaciones2" value="Fuera de horario" name="observaciones[1]" <?php if(isset($observaciones)){if($observaciones_select[1] == "Fuera de horario"){echo "checked";}} ?>>
                                          <label class="custom-control-label" for="Observaciones2">Fuera de horario</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input seleccionarTodo" id="Observaciones3" value="Reincidencia" name="observaciones[2]" <?php if(isset($observaciones)){if($observaciones_select[2] == "Reincidencia"){echo "checked";}} ?>>
                                          <label class="custom-control-label" for="Observaciones3">Reincidencia</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input seleccionarTodo" id="Observaciones4" value="Fuera de zona" name="observaciones[3]" <?php if(isset($observaciones)){if($observaciones_select[3] == "Fuera de zona"){echo "checked";}} ?>>
                                          <label class="custom-control-label" for="Observaciones4">Fuera de zona</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input seleccionarTodo" id="Observaciones5" value="No cuenta con permiso" name="observaciones[4]" <?php if(isset($observaciones)){if($observaciones_select[4] == "No cuenta con permiso"){echo "checked";}} ?>>
                                          <label class="custom-control-label" for="Observaciones5">No cuenta con permiso</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input seleccionarTodo" id="Observaciones6" value="Estado de ebriedad" name="observaciones[5]" <?php if(isset($observaciones)){if($observaciones_select[5] == "Estado de ebriedad"){echo "checked";}} ?>>
                                          <label class="custom-control-label" for="Observaciones6">Estado de ebriedad</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input seleccionarTodo" id="Observaciones7" value="Invadir banqueta" name="observaciones[6]" <?php if(isset($observaciones)){if($observaciones_select[6] == "Invadir banqueta"){echo "checked";}} ?>>
                                          <label class="custom-control-label" for="Observaciones7">Invadir banqueta</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input seleccionarTodo" id="Observaciones8" value="Hacer caso omiso a las recomendaciones" name="observaciones[7]" <?php if(isset($observaciones)){if($observaciones_select[7] == "Hacer caso omiso a las recomendaciones"){echo "checked";}} ?>>
                                          <label class="custom-control-label" for="Observaciones8">Hacer caso omiso a las recomendaciones</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input seleccionarTodo" id="Observaciones9" value="Amenazas y/o insulto a la autoridad" name="observaciones[8]" <?php if(isset($observaciones)){if($observaciones_select[8] == "Amenazas y/o insulto a la autoridad"){echo "checked";}} ?>>
                                          <label class="custom-control-label" for="Observaciones9">Amenazas y/o insulto a la autoridad</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input seleccionarTodo" id="Observaciones10" value="Otro" name="observaciones[9]" <?php if(isset($observaciones)){if($observaciones_select[9] == "Otro"){echo "checked";}} ?>>
                                          <label class="custom-control-label" for="Observaciones10">Otro</label>
                                        </div>
                                      </div>
                                    </div>
                                  </div>

                                </form>





                                <?php
                                if (isset($genero) || isset($giros) || isset($tags_s) ||isset($zonas) || isset($estructuras) || isset($estados)) {
                                  ?>

                                  <br>
                                  <br>
                                  <?php
                                  if (isset($genero)) {


                                    if (isset($genero)) {
                                      $cont_ambos = 0;
                                      $cont_masculino = 0;
                                      $cont_femenino = 0;
                                      $dias_masculino = array("'Masculino'", 0, 0, 0, 0, 0, 0, 0);
                                      $dias_femenino = array("'Femenino'", 0, 0, 0, 0, 0, 0, 0);
                                      foreach ($consulta->result() as $comerciante) {
                                        if ($comerciante->fecha_creado == $dias_semana[6] && $comerciante->genero == "Masculino") {
                                          $cont_masculino ++;
                                          $cont_ambos ++;
                                          $dias_masculino[1] ++;
                                        }elseif ($comerciante->fecha_creado == $dias_semana[5] && $comerciante->genero == "Masculino") {
                                          $cont_masculino ++;
                                          $cont_ambos ++;
                                          $dias_masculino[2] ++;
                                        }elseif ($comerciante->fecha_creado == $dias_semana[4] && $comerciante->genero == "Masculino") {
                                          $cont_masculino ++;
                                          $cont_ambos ++;
                                          $dias_masculino[3] ++;
                                        }elseif ($comerciante->fecha_creado == $dias_semana[3] && $comerciante->genero == "Masculino") {
                                          $cont_masculino ++;
                                          $cont_ambos ++;
                                          $dias_masculino[4] ++;
                                        }elseif ($comerciante->fecha_creado == $dias_semana[2] && $comerciante->genero == "Masculino") {
                                          $cont_masculino ++;
                                          $cont_ambos ++;
                                          $dias_masculino[5] ++;
                                        }elseif ($comerciante->fecha_creado == $dias_semana[1] && $comerciante->genero == "Masculino") {
                                          $cont_masculino ++;
                                          $cont_ambos ++;
                                          $dias_masculino[6] ++;
                                        }elseif ($comerciante->fecha_creado == $dias_semana[0] && $comerciante->genero == "Masculino") {
                                          $cont_masculino ++;
                                          $cont_ambos ++;
                                          $dias_masculino[7] ++;
                                        }

                                        if ($comerciante->fecha_creado == $dias_semana[6] && $comerciante->genero == "Femenino") {
                                          $cont_femenino ++;
                                          $cont_ambos ++;
                                          $dias_femenino[1] ++;
                                        }elseif ($comerciante->fecha_creado == $dias_semana[5] && $comerciante->genero == "Femenino") {
                                          $cont_femenino ++;
                                          $cont_ambos ++;
                                          $dias_femenino[2] ++;
                                        }elseif ($comerciante->fecha_creado == $dias_semana[4] && $comerciante->genero == "Femenino") {
                                          $cont_femenino ++;
                                          $cont_ambos ++;
                                          $dias_femenino[3] ++;
                                        }elseif ($comerciante->fecha_creado == $dias_semana[3] && $comerciante->genero == "Femenino") {
                                          $cont_femenino ++;
                                          $cont_ambos ++;
                                          $dias_femenino[4] ++;
                                        }elseif ($comerciante->fecha_creado == $dias_semana[2] && $comerciante->genero == "Femenino") {
                                          $cont_femenino ++;
                                          $cont_ambos ++;
                                          $dias_femenino[5] ++;
                                        }elseif ($comerciante->fecha_creado == $dias_semana[1] && $comerciante->genero == "Femenino") {
                                          $cont_femenino ++;
                                          $cont_ambos ++;
                                          $dias_femenino[6] ++;
                                        }elseif ($comerciante->fecha_creado == $dias_semana[0] && $comerciante->genero == "Femenino") {
                                          $cont_femenino ++;
                                          $cont_ambos ++;
                                          $dias_femenino[7] ++;
                                        }
                                      }
                                    }
                                  }


                                  if (isset($giros)) {
                                    $cont_giros = array();
                                    foreach ($giros_select as $key => $giro) {
                                      $cont_giros[] = 0;
                                    }
                                    foreach ($giros_select as $key => $giro) {
                                      foreach ($consulta->result() as $comerciante) {
                                        if ($comerciante->giro == $giro && $comerciante->fecha_creado >= $desde && $comerciante->fecha_creado <= $hasta) {
                                          $cont_giros[$key]++;
                                        }
                                      }
                                    }
                                  }

                                  if (isset($tags_s)) {
                                    $cont_tags = array();
                                    foreach ($tags_select as $key => $tag_select) {
                                      $cont_tags[] = 0;
                                    }
                                    foreach ($tags_select as $key => $tag_select) {
                                      foreach ($consulta->result() as $comerciante) {
                                        if ($tag_select != "") {

                                          if (strpos($comerciante->tags, $tag_select) !== false && $comerciante->fecha_creado >= $desde && $comerciante->fecha_creado <= $hasta) {
                                            $cont_tags[$key]++;
                                          }
                                        }
                                      }
                                    }
                                  }

                                  if (isset($zonas)) {
                                    $cont_zonas = array();
                                    foreach ($zonas_select as $key => $zona) {
                                      $cont_zonas[] = 0;
                                    }
                                    foreach ($zonas_select as $key => $zona) {
                                      foreach ($consulta->result() as $comerciante) {
                                        if ($comerciante->zona == $zona && $comerciante->fecha_creado >=  $desde && $comerciante->fecha_creado <= $hasta) {
                                          $cont_zonas[$key]++;
                                        }
                                      }
                                    }
                                  }

                                  if (isset($estructuras)) {
                                    $cont_estructuras = array();
                                    foreach ($estructuras as $key => $estructura) {
                                      $cont_estructuras[] = 0;
                                    }
                                    foreach ($estructuras as $key => $estructura) {
                                      foreach ($consulta->result() as $comerciante) {
                                        if ($comerciante->estructura == $estructura && $comerciante->fecha_creado >=  $desde && $comerciante->fecha_creado <= $hasta) {
                                          $cont_estructuras[$key]++;
                                        }
                                      }
                                    }
                                  }

                                  if (isset($estados)) {
                                    $cont_estados = array();
                                    foreach ($estados as $key => $estado) {
                                      $cont_estados[] = 0;
                                    }
                                    foreach ($estados as $key => $estado) {
                                      foreach ($consulta->result() as $comerciante) {
                                        if ($comerciante->estado == $estado && $comerciante->fecha_creado >=  $desde && $comerciante->fecha_creado <= $hasta) {
                                          $cont_estados[$key]++;
                                        }
                                      }
                                    }
                                  }

                                  if (isset($observaciones)) {
                                    $cont_observaciones = array();
                                    foreach ($observaciones as $key => $observacion) {
                                      $cont_observaciones[] = 0;
                                    }
                                    foreach ($comentarios->result() as $key => $comentario) {
                                      $porciones = explode(" ", $comentario->fecha);
                                      if ($comentario->reporte == "Todo en Orden" && $porciones[0] >=  $desde && $comerciante->fecha_creado <= $hasta) {
                                        $cont_observaciones[$key]++;
                                      }else if ($comentario->reporte == "Fuera de horario" && $porciones[0] >=  $desde && $comerciante->fecha_creado <= $hasta) {
                                        $cont_observaciones[$key]++;
                                      }else if ($comentario->reporte == "Reincidencia" && $porciones[0] >=  $desde && $comerciante->fecha_creado <= $hasta) {
                                        $cont_observaciones[$key]++;
                                      }else if ($comentario->reporte == "Fuera de zona" && $porciones[0] >=  $desde && $comerciante->fecha_creado <= $hasta) {
                                        $cont_observaciones[$key]++;
                                      }else if ($comentario->reporte == "No cuenta con permiso" && $porciones[0] >=  $desde && $comerciante->fecha_creado <= $hasta) {
                                        $cont_observaciones[$key]++;
                                      }else if ($comentario->reporte == "Estado de ebriedad" && $porciones[0] >=  $desde && $comerciante->fecha_creado <= $hasta) {
                                        $cont_observaciones[$key]++;
                                      }else if ($comentario->reporte == "Invadir banqueta" && $porciones[0] >=  $desde && $comerciante->fecha_creado <= $hasta) {
                                        $cont_observaciones[$key]++;
                                      }else if ($comentario->reporte == "Hacer caso omiso a las recomendaciones" && $porciones[0] >=  $desde && $comerciante->fecha_creado <= $hasta) {
                                        $cont_observaciones[$key]++;
                                      }else if ($comentario->reporte == "Amenazas y/o insulto a la autoridad" && $porciones[0] >=  $desde && $comerciante->fecha_creado <= $hasta) {
                                        $cont_observaciones[$key]++;
                                      }else if ($comentario->reporte == "Otro" && $porciones[0] >=  $desde && $comerciante->fecha_creado <= $hasta) {
                                        $cont_observaciones[$key]++;
                                      }
                                    }
                                  }


                                  // if ($dia1 < $dia7) {
                                  //   echo "1";
                                  // }else {
                                  //   echo "2";
                                  // }

                                   ?>



                                   <script type="text/javascript">
                                   <?php
                                   if (isset($genero)) {

                                     ?>
                                     var x_dias = ["x"];
                                     <?php
                                     for ($i=1; $i <= 7; $i++) {
                                       ?>
                                       x_dias.push(<?php echo $i; ?>)
                                       <?php
                                     }

                                      ?>

                                     var genero = "<?= $genero ?>";
                                     <?php
                                   }
                                   if ($genero == "Ambos") {
                                     ?>
                                     var dias_masculino = [<?php foreach ($dias_masculino as $key => $value) {
                                       echo $dias_masculino[$key].",";
                                     }?>];

                                     var dias_femenino = [<?php foreach ($dias_femenino as $key => $value) {
                                       echo $dias_femenino[$key].",";
                                     }?>];

                                     var grafica = [dias_masculino,dias_femenino];
                                     grafica.forEach(function(element,index){
                                       console.log(grafica[index]);
                                     });
                                     <?php
                                   }
                                   if ($genero == "Masculino") {
                                     ?>
                                     var dias_masculino = [<?php foreach ($dias_masculino as $key => $value) {
                                       echo $dias_masculino[$key].",";
                                     }?>];

                                     var dias_femenino = [<?php foreach ($dias_femenino as $key => $value) {
                                       echo $dias_femenino[$key].",";
                                     }?>];

                                     var grafica = [dias_masculino,dias_femenino];
                                     grafica.forEach(function(element,index){
                                       console.log(grafica[index]);
                                     });
                                     <?php
                                   }
                                   if ($genero == "Femenino") {
                                     ?>
                                     var dias_masculino = [<?php foreach ($dias_masculino as $key => $value) {
                                       echo $dias_masculino[$key].",";
                                     }?>];

                                     var dias_femenino = [<?php foreach ($dias_femenino as $key => $value) {
                                       echo $dias_femenino[$key].",";
                                     }?>];


                                     <?php
                                   }

                                    ?>


                                   </script>

                                  <h3 class="card-title">Grafica Comparativa</h3>
                                  <!-- <div class="row">
                                    <div class="col-md-8">
                                      <div id="area-chart"></div>
                                    </div>
                                    <div class="col-md-4">

                                      <?php
                                      if ($genero == "Ambos") {
                                        ?>
                                        <h4>Total: <?=$cont_ambos?></h4>
                                        <h4>Masculinos: <?=$cont_masculino?></h4>
                                        <h4>Femeninos: <?=$cont_femenino?></h4>

                                        <?php
                                      }
                                       ?>
                                       <?php
                                       if ($genero == "Masculino") {
                                         ?>
                                         <h4>Total: <?=$cont_ambos?></h4>
                                         <h4>Masculinos: <?=$cont_masculino?></h4>

                                         <?php
                                       }
                                        ?>
                                        <?php
                                        if ($genero == "Femenino") {
                                          ?>
                                          <h4>Total: <?=$cont_ambos?></h4>
                                          <h4>Femeninos: <?=$cont_femenino?></h4>

                                          <?php
                                        }
                                         ?>
                                    </div>
                                  </div> -->

                                  <script type="text/javascript">
                                    var ambulantesMasculino = <?php echo $cont_masculino;?>;
                                    var ambulantesFemenino = <?php echo $cont_femenino;?>;
                                  </script>

                                  <div class="row">
                                    <div class="col-md-6">
                                      <div id="basic-pie" style="height:400px;"></div>
                                    </div>
                                    <div class="col-md-6">
                                      <div id="basic-pie2" style="height:400px;"></div>
                                    </div>
                                  </div>
                                  <br>
                                  <div class="row">
                                    <div class="col-md-12">
                                      <div id="stacked-bar" style="height:400px;"></div>
                                    </div>
                                  </div>
                                  <br>
                                  <div class="row">
                                    <div class="col-md-12">
                                      <div id="stacked-bar2" style="height:400px;"></div>
                                    </div>
                                  </div>
                                  <br>
                                  <div class="row">
                                    <div class="col-md-12">
                                      <div id="stacked-bar3" style="height:200px;"></div>
                                    </div>
                                  </div>


                                  <?php
                                  if (isset($genero) || isset($giros) || isset($tags_s) ||isset($zonas) || isset($estructuras) || isset($estados)) {
                                    ?>
                                    <div class="row">
                                    <?php
                                    if (isset($giros)) {
                                      ?>
                                      <br>
                                      <br>
                                        <div class="col-md-4 text-left">
                                          <br>
                                          <h3>Giro</h3>
                                          <?php
                                          foreach ($giros_select as $key => $giro) {
                                            if ($giro != "null") {
                                              echo $giro.": ".$cont_giros[$key];
                                              echo "<br>";
                                            }
                                          }

                                           ?>

                                           <script type="text/javascript">
                                             var girosSeleccionados=<?php echo json_encode($giros_select);?>;
                                             var girosCantidad=<?php echo json_encode($cont_giros);?>;
                                           </script>
                                        </div>
                                      <?php
                                    }

                                    if (isset($tags_s)) {
                                      ?>
                                      <br>
                                      <br>
                                        <div class="col-md-4 text-left">
                                          <br>
                                          <h3>Tags</h3>
                                          <?php
                                          foreach ($tags_select as $key => $tag) {
                                            if ($tag != "null") {
                                              echo $tag.": ".$cont_tags[$key];
                                              echo "<br>";
                                            }
                                          }
                                           ?>
                                        </div>
                                      <?php
                                    }

                                    if (isset($zonas)) {
                                      ?>
                                      <br>
                                      <br>
                                        <div class="col-md-4 text-left">
                                          <br>
                                          <h3>Zonas</h3>
                                          <?php
                                          foreach ($zonas_select as $key => $zona) {
                                            if ($zona != "null") {
                                              echo $zona.": ".$cont_zonas[$key];
                                              echo "<br>";
                                            }
                                          }
                                           ?>
                                           <script type="text/javascript">
                                             var zonasSeleccionados=<?php echo json_encode($zonas_select);?>;
                                             var zonasCantidad=<?php echo json_encode($cont_zonas);?>;
                                           </script>

                                        </div>
                                      <?php
                                    }

                                    if (isset($estructuras)) {
                                      ?>
                                      <br>
                                      <br>
                                        <div class="col-md-4 text-left">
                                          <br>
                                          <h3>Estructuras</h3>
                                          <?php
                                          foreach ($estructuras_select as $key => $estructura) {
                                            if ($estructura != "null") {
                                              echo $estructura.": ".$cont_estructuras[$key];
                                              echo "<br>";
                                            }
                                          }
                                           ?>

                                           <script type="text/javascript">
                                             var estructurasSeleccionados=<?php echo json_encode($estructuras_select);?>;
                                             var estructurasCantidad=<?php echo json_encode($cont_estructuras);?>;
                                           </script>
                                        </div>
                                      <?php
                                    }

                                    if (isset($estados)) {
                                      ?>
                                      <br>
                                      <br>
                                        <div class="col-md-4 text-left">
                                          <br>
                                          <h3>Estados</h3>
                                          <?php
                                          foreach ($estados as $key => $estado) {
                                            if ($estado != "null") {
                                              echo $estado.": ".$cont_estados[$key];
                                              echo "<br>";
                                            }
                                          }
                                           ?>
                                           <script type="text/javascript">
                                             var estadoSeleccionados=<?php echo json_encode($estados);?>;
                                             var estadoCantidad=<?php echo json_encode($cont_estados);?>;
                                           </script>
                                        </div>
                                      <?php
                                    }
                                    if (isset($estados)) {
                                    ?>
                                    <br>
                                    <br>
                                      <div class="col-md-4 text-left">
                                        <br>
                                        <h3>Observaciones</h3>
                                        <?php
                                        foreach ($observaciones as $key => $estado) {
                                          if ($estado != "null") {
                                            echo $estado.": ".$cont_observaciones[$key];
                                            echo "<br>";
                                          }
                                        }
                                         ?>
                                      </div>
                                    <?php
                                    }
                                     ?>
                                  </div>
                                    <?php
                                  }
                                   ?>
                                  <?php
                                }
                                 ?>


                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body analytics-info">
                                <h3 class="card-title">Fijos</h3>
                                <ul class="list-inline two-part">
                                    <li>
                                        <div id="sparklinedash"></div>
                                    </li>
                                    <li class="text-right"><i class="ti-arrow-up text-success"></i> <span class="counter text-success"><?= $total_activos_fijos?></span></li>
                                </ul>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body analytics-info">
                                <h3 class="card-title">Semifijos</h3>
                                <ul class="list-inline two-part">
                                    <li>
                                        <div id="sparklinedash2"></div>
                                    </li>
                                    <li class="text-right"><i class="ti-arrow-up text-purple"></i> <span class="counter text-purple"><?= $total_activos_semifijos?></span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-body analytics-info">
                                <h3 class="card-title">Ambulantes</h3>
                                <ul class="list-inline two-part">
                                    <li>
                                        <div id="sparklinedash3"></div>
                                    </li>
                                    <li class="text-right"><i class="ti-arrow-up text-info"></i> <span class="counter text-info"><?= $total_activos_ambulantes?></span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card" style="height:100%;">
                            <div class="card-body">
                                <h3 class="card-title">Ubicaciones de comerciantes</h3>
                                <div id="map" class="gmaps" style="display:none;"></div>
                                <div id="map_2" class="gmaps"></div>
                                <br>
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="row">
                                      <div class="col-md-2">
                                        <h3>Zona 1: <span class="font-weight-normal"><?= $zona1 ?> Comerciantes</span></h3>
                                      </div>
                                      <div class="col-md-2">
                                        <h3>Zona 2: <span class="font-weight-normal"><?= $zona2 ?> Comerciantes</span></h3>
                                      </div>
                                      <div class="col-md-2">
                                        <h3>Zona 3: <span class="font-weight-normal"><?= $zona3 ?> Comerciantes</span></h3>
                                      </div>
                                      <div class="col-md-2">
                                        <h3>Zona 4: <span class="font-weight-normal"><?= $zona4 ?> Comerciantes</span></h3>
                                      </div>
                                      <div class="col-md-2">
                                        <h3>Zona 5: <span class="font-weight-normal"><?= $zona5 ?> Comerciantes</span></h3>
                                      </div>
                                      <div class="col-md-2">
                                        <h3>Zona 6: <span class="font-weight-normal"><?= $zona6 ?> Comerciantes</span></h3>
                                      </div>

                                    </div>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>





                <br>


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
            <?php
          }


        }else {
          ?>
          <div class="container-fluid">
              <!-- ============================================================== -->
              <!-- Start Page Content -->
              <!-- ============================================================== -->


              <?php

              $dia1 = date("Y-m-d");
              $dia2 = date("Y-m-d",mktime(0, 0, 0, date('m'),date('d')-1,date('Y')));
              $dia3 = date("Y-m-d",mktime(0, 0, 0, date('m'),date('d')-2,date('Y')));
              $dia4 = date("Y-m-d",mktime(0, 0, 0, date('m'),date('d')-3,date('Y')));
              $dia5 = date("Y-m-d",mktime(0, 0, 0, date('m'),date('d')-4,date('Y')));
              $dia6 = date("Y-m-d",mktime(0, 0, 0, date('m'),date('d')-5,date('Y')));
              $dia7 = date("Y-m-d",mktime(0, 0, 0, date('m'),date('d')-6,date('Y')));

              $dias_semana = array($dia1,$dia2,$dia3,$dia4,$dia5,$dia6,$dia7);

              $dias_activos_fijos = array(0, 0, 0, 0, 0, 0, 0);
              $total_activos_fijos = 0;

              foreach ($consulta->result() as $sparklinedash) {
                if ($sparklinedash->tipo == "Fijo") {
                  $total_activos_fijos++;
                }
                if ($sparklinedash->fecha_creado == $dias_semana[6] && $sparklinedash->tipo == "Fijo") {
                  $dias_activos_fijos[0] ++;
                }elseif ($sparklinedash->fecha_creado == $dias_semana[5] && $sparklinedash->tipo == "Fijo") {
                  $dias_activos_fijos[1] ++;
                }elseif ($sparklinedash->fecha_creado == $dias_semana[4] && $sparklinedash->tipo == "Fijo") {
                  $dias_activos_fijos[2] ++;
                }elseif ($sparklinedash->fecha_creado == $dias_semana[3] && $sparklinedash->tipo == "Fijo") {
                  $dias_activos_fijos[3] ++;
                }elseif ($sparklinedash->fecha_creado == $dias_semana[2] && $sparklinedash->tipo == "Fijo") {
                  $dias_activos_fijos[4] ++;
                }elseif ($sparklinedash->fecha_creado == $dias_semana[1] && $sparklinedash->tipo == "Fijo") {
                  $dias_activos_fijos[5] ++;
                }elseif ($sparklinedash->fecha_creado == $dias_semana[0] && $sparklinedash->tipo == "Fijo") {
                  $dias_activos_fijos[6] ++;
                }
              }



              $dias_activos_semifijos = array(0, 0, 0, 0, 0, 0, 0);
              $total_activos_semifijos = 0;

              foreach ($consulta->result() as $sparklinedash) {
                if ($sparklinedash->tipo == "Semifijo") {
                  $total_activos_semifijos++;
                }
                if ($sparklinedash->fecha_creado == $dias_semana[6] && $sparklinedash->tipo == "Semifijo") {
                  $dias_activos_semifijos[0] ++;
                }elseif ($sparklinedash->fecha_creado == $dias_semana[5] && $sparklinedash->tipo == "Semifijo") {
                  $dias_activos_semifijos[1] ++;
                }elseif ($sparklinedash->fecha_creado == $dias_semana[4] && $sparklinedash->tipo == "Semifijo") {
                  $dias_activos_semifijos[2] ++;
                }elseif ($sparklinedash->fecha_creado == $dias_semana[3] && $sparklinedash->tipo == "Semifijo") {
                  $dias_activos_semifijos[3] ++;
                }elseif ($sparklinedash->fecha_creado == $dias_semana[2] && $sparklinedash->tipo == "Semifijo") {
                  $dias_activos_semifijos[4] ++;
                }elseif ($sparklinedash->fecha_creado == $dias_semana[1] && $sparklinedash->tipo == "Semifijo") {
                  $dias_activos_semifijos[5] ++;
                }elseif ($sparklinedash->fecha_creado == $dias_semana[0] && $sparklinedash->tipo == "Semifijo") {
                  $dias_activos_semifijos[6] ++;
                }
              }


              $dias_activos_ambulantes = array(0, 0, 0, 0, 0, 0, 0);
              $total_activos_ambulantes = 0;

              foreach ($consulta->result() as $sparklinedash) {
                if ($sparklinedash->tipo == "Ambulante") {
                  $total_activos_ambulantes++;
                }
                if ($sparklinedash->fecha_creado == $dias_semana[6] && $sparklinedash->tipo == "Ambulante") {
                  $dias_activos_ambulantes[0] ++;
                }elseif ($sparklinedash->fecha_creado == $dias_semana[5] && $sparklinedash->tipo == "Ambulante") {
                  $dias_activos_ambulantes[1] ++;
                }elseif ($sparklinedash->fecha_creado == $dias_semana[4] && $sparklinedash->tipo == "Ambulante") {
                  $dias_activos_ambulantes[2] ++;
                }elseif ($sparklinedash->fecha_creado == $dias_semana[3] && $sparklinedash->tipo == "Ambulante") {
                  $dias_activos_ambulantes[3] ++;
                }elseif ($sparklinedash->fecha_creado == $dias_semana[2] && $sparklinedash->tipo == "Ambulante") {
                  $dias_activos_ambulantes[4] ++;
                }elseif ($sparklinedash->fecha_creado == $dias_semana[1] && $sparklinedash->tipo == "Ambulante") {
                  $dias_activos_ambulantes[5] ++;
                }elseif ($sparklinedash->fecha_creado == $dias_semana[0] && $sparklinedash->tipo == "Ambulante") {
                  $dias_activos_ambulantes[6] ++;
                }
              }

              $lat = array();
              $lng = array();

              foreach ($consulta->result() as $sparklinedash) {
                $coordenadas = $sparklinedash->coordenadas;
                list($lat_coordenadas, $lng_coordenadas) = explode(",",$coordenadas);

                $lat[] = $lat_coordenadas;
                $lng[] = $lng_coordenadas;
              }


              $zona1 = 0;
              $zona2 = 0;
              $zona3 = 0;
              $zona4 = 0;
              $zona5 = 0;
              $zona6 = 0;


              foreach ($consulta->result() as $sparklinedash) {
                if ($sparklinedash->zona == "Zona 1") {
                  $zona1++;
                }elseif ($sparklinedash->zona == "Zona 2") {
                  $zona2++;
                }elseif ($sparklinedash->zona == "Zona 3") {
                  $zona3++;
                }elseif ($sparklinedash->zona == "Zona 4") {
                  $zona4++;
                }elseif ($sparklinedash->zona == "Zona 5") {
                  $zona5++;
                }elseif ($sparklinedash->zona == "Zona 6") {
                  $zona6++;
                }
              }





              ?>


              <script type="text/javascript">
                var dias_activos_fijos = [<?php foreach ($dias_activos_fijos as $key => $value) {
                  echo $dias_activos_fijos[$key].",";
                }?>];

                var dias_activos_semifijos = [<?php foreach ($dias_activos_semifijos as $key => $value) {
                  echo $dias_activos_semifijos[$key].",";
                }?>];

                var dias_activos_ambulantes = [<?php foreach ($dias_activos_ambulantes as $key => $value) {
                  echo $dias_activos_ambulantes[$key].",";
                }?>];


                var lat = [<?php foreach ($lat as $key => $value) {
                  echo $lat[$key].",";
                }?>];
                var lng = [<?php foreach ($lng as $key => $value) {
                  echo $lng[$key].",";
                }?>];


                var reportes = true;
                var crear_comerciante = false;

              </script>

              <div class="row">
                  <div class="col-12">
                      <div class="card">
                          <div class="card-body">
                              <h3 class="card-title">REPORTE</h3>
                              <?php
                              //if (isset($giro)) {
                                //foreach ($giro as $value) {
                                  //echo $value;
                                //}
                              //}

                               ?>
                              <form class="m-t-30" action="<?= base_url() ?>Reportes_controller/reportes" method="post"  enctype="multipart/form-data">
                                <div class="row">
                                  <div class="col-md-4">

                                  </div>
                                  <div class="col-md-4 text-center">
                                    <h3>FILTRO</h3>
                                  </div>
                                  <div class="col-md-2">
                                    <div class="form-group">
                                        <select class="form-control custom-select" data-placeholder="Elegir fecha" tabindex="0" name="fecha" required onchange="cargar_imagen(this.value)">
                                          <option value="1" selected>Semana</option>
                                          <option value="2">Mes</option>
                                          <option value="3">Año</option>
                                          <option value="4">Fecha</option>
                                        </select>
                                    </div>
                                  </div>
                                  <div class="col-md-2 text-center">
                                    <button type="submit" class="btn btn-light">Filtrar</button>
                                  </div>
                                </div>
                                <div class="row" style="display:none;" id="selecfechareporte">
                                  <div class="col-md-4">

                                  </div>
                                  <div class="col-md-4 text-center">

                                  </div>
                                  <div class="col-md-2">
                                    <div class="form-group">
                                      <label for="">Desde</label>
                                        <input type="date" class="form-control" name="desde" value="2019-01-01" min="2019-01-01" max="<?= $dia1?>">
                                    </div>
                                  </div>
                                  <div class="col-md-2">
                                    <div class="form-group">
                                      <label for="">Hasta</label>
                                        <input type="date" class="form-control" name="hasta" value="<?= $dia1?>" min="2019-01-01" max="<?= $dia1?>">
                                    </div>
                                  </div>
                                </div>

                                <script type="text/javascript">
                                function cargar_imagen(imagen) {
                                  if (imagen == 4) {
                                   document.getElementById('selecfechareporte').style.display = "";
                                 }else{
                                   document.getElementById('selecfechareporte').style.display = "none";
                                 }
                                 }
                                </script>

                                <div class="row">
                                  <div class="col-12">
                                    <?php
                                    if (isset($fecha)) {
                                      // code...
                                      echo $fecha;
                                    }

                                     ?>
                                  </div>
                                </div>

                                <?php
                                if (isset($giros)) {
                                  foreach ($giros as $key => $giro_select) {
                                    // code...
                                    //echo $giro_select."<br/>";
                                    $giros_select[] = $giro_select;
                                  }
                                //print_r(count($giros));
                                //echo $giros_select[0];
                                }


                                if (isset($tags_s)) {
                                  foreach ($tags_s as $key => $tag_select) {
                                    // code...
                                    //echo $tag_select."<br/>";
                                    $tags_select[] = $tag_select;
                                  }
                                //print_r(count($tags_s));
                                //echo $tags_select[0];
                                }


                                if (isset($zonas)) {
                                  foreach ($zonas as $key => $zona_select) {
                                    // code...
                                    //echo $zona_select."<br/>";
                                    $zonas_select[] = $zona_select;
                                  }
                                //print_r(count($zonas));
                                //echo $zonas_select[0];
                                }

                                if (isset($estructuras)) {
                                  foreach ($estructuras as $key => $estructura_select) {
                                    // code...
                                    //echo $estructura_select."<br/>";
                                    $estructuras_select[] = $estructura_select;
                                  }
                                //print_r(count($zonas));
                                //echo $zonas_select[0];
                                }

                                if (isset($estados)) {
                                  foreach ($estados as $key => $estado_select) {
                                    // code...
                                    //echo $estado_select."<br/>";
                                    $estados_select[] = $estado_select;
                                  }
                                //print_r(count($zonas));
                                //echo $zonas_select[0];
                                }

                                if (isset($observaciones)) {
                                  foreach ($observaciones as $key => $observacion_select) {
                                    // code...
                                    //echo $estado_select."<br/>";
                                    $observaciones_select[] = $observacion_select;
                                  }
                                //print_r(count($zonas));
                                //echo $zonas_select[0];
                                }






                                 ?>

                                 <div class="row">
                                   <div class="col-md-12">
                                     <div class="custom-control custom-checkbox">
                                       <input type="checkbox" class="custom-control-input" id="seleccionarTodo" value="seleccionarTodo">
                                       <label class="custom-control-label" for="seleccionarTodo">Seleccionar Todo</label>
                                     </div>
                                   </div>
                                 </div>
                                <br>
                                <div class="row">
                                  <div class="col-md-4" style="border-style: groove;">
                                    <div class="">
                                      <h4>Género</h4>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="genero" name="genero" class="custom-control-input" value="Ambos" <?php if(isset($genero)){if($genero == "Ambos"){echo "checked";}}else{echo "checked";} ?>>
                                        <label class="custom-control-label" for="genero">Ambos</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="genero1" name="genero" class="custom-control-input" value="Masculino" <?php if(isset($genero)){if($genero == "Masculino"){echo "checked";}} ?>>
                                        <label class="custom-control-label" for="genero1">Masculino</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="genero2" name="genero" class="custom-control-input" value="Femenino" <?php if(isset($genero)){if($genero == "Femenino"){echo "checked";}} ?>>
                                        <label class="custom-control-label" for="genero2">Femenino</label>
                                    </div>
                                  </div>
                                  <div class="col-md-4" style="border-style: groove;">
                                    <div class="">
                                      <h4>Giro</h4>
                                    </div>
                                    <div class="row">
                                    <?php
                                    $rep1 = 0;
                                    foreach ($consulta2->result() as $key => $giro) {
                                      if ($rep1 == 0) {
                                        // code...
                                      ?>
                                      <div class="col-md-6">
                                        <div class="custom-control custom-checkbox">
                                          <?php
                                           ?>
                                          <input type="checkbox" class="custom-control-input seleccionarTodo" id="<?= $giro->nombre_giro ?>1" value="<?= $giro->nombre_giro ?>" name="giro[<?=$key?>]" <?php if(isset($giros)){if($giro->nombre_giro == $giros_select[$key]){echo "checked";}}else{echo "checked";}?>>
                                          <label class="custom-control-label" for="<?= $giro->nombre_giro ?>1"><?= $giro->nombre_giro ?></label>
                                        </div>
                                      </div>
                                    <?php
                                    $rep1 = 1;
                                  }else {
                                    ?>
                                    <div class="col-md-6">
                                      <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input seleccionarTodo" id="<?= $giro->nombre_giro ?>1" value="<?= $giro->nombre_giro ?>" name="giro[<?=$key?>]" <?php if(isset($giros)){if($giro->nombre_giro == $giros_select[$key]){echo "checked";}}else{echo "checked";} ?>>
                                        <label class="custom-control-label" for="<?= $giro->nombre_giro ?>1"><?= $giro->nombre_giro ?></label>
                                      </div>
                                    </div>

                                    <?php
                                    $rep1 = 0;
                                    }
                                    }
                                    ?>

                                  </div>
                                  </div>
                                  <div class="col-md-4" style="border-style: groove;">
                                    <div class="">
                                      <h4>Tags</h4>
                                    </div>
                                    <div class="row">
                                      <?php
                                      $rep1 = 0;
                                      foreach ($consulta3->result() as $key => $tags) {
                                        if ($rep1 == 0) {
                                          // code...
                                        ?>
                                        <div class="col-md-6">
                                          <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input seleccionarTodo" id="<?= $tags->tag ?>1" value="<?= $tags->tag ?>" name="tags[<?=$key?>]" <?php if(isset($tags_s)){if($tags->tag == $tags_select[$key]){echo "checked";}}else{echo "checked";} ?>>
                                            <label class="custom-control-label" for="<?= $tags->tag ?>1"><?= $tags->tag ?></label>
                                          </div>
                                        </div>
                                      <?php
                                      $rep1 = 1;
                                    }else {
                                      ?>
                                      <div class="col-md-6">
                                        <div class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input seleccionarTodo" id="<?= $tags->tag ?>1" value="<?= $tags->tag ?>" name="tags[<?=$key?>]" <?php if(isset($tags_s)){if($tags->tag == $tags_select[$key]){echo "checked";}}else{echo "checked";} ?>>
                                          <label class="custom-control-label" for="<?= $tags->tag ?>1"><?= $tags->tag ?></label>
                                        </div>
                                      </div>

                                      <?php
                                      $rep1 = 0;
                                    }
                                      }
                                      ?>
                                    </div>
                                  </div>
                                </div>
                                <br>
                                <br>
                                <div class="row">
                                  <div class="col-md-4" style="border-style: groove;">
                                    <div class="">
                                      <h4>Zona</h4>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-6">
                                        <div class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input seleccionarTodo" id="zona1" value="Zona 1" name="zona[0]" <?php if(isset($zonas)){if("Zona 1" == $zonas_select[0]){echo "checked";}}else{echo "checked";} ?>>
                                          <label class="custom-control-label" for="zona1">Zona 1</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input seleccionarTodo" id="zona2" value="Zona 2" name="zona[1]" <?php if(isset($zonas)){if("Zona 2" == $zonas_select[1]){echo "checked";}}else{echo "checked";} ?>>
                                          <label class="custom-control-label" for="zona2">Zona 2</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input seleccionarTodo" id="zona3" value="Zona 3" name="zona[2]" <?php if(isset($zonas)){if("Zona 3" == $zonas_select[2]){echo "checked";}}else{echo "checked";} ?>>
                                          <label class="custom-control-label" for="zona3">Zona 3</label>
                                        </div>
                                      </div>
                                      <div class="col-md-6">
                                        <div class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input seleccionarTodo" id="zona4" value="Zona 4" name="zona[3]" <?php if(isset($zonas)){if("Zona 4" == $zonas_select[3]){echo "checked";}}else{echo "checked";} ?>>
                                          <label class="custom-control-label" for="zona4">Zona 4</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input seleccionarTodo" id="zona5" value="Zona 5" name="zona[4]" <?php if(isset($zonas)){if("Zona 5" == $zonas_select[4]){echo "checked";}}else{echo "checked";} ?>>
                                          <label class="custom-control-label" for="zona5">Zona 5</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input seleccionarTodo" id="zona6" value="Zona 6" name="zona[5]" <?php if(isset($zonas)){if("Zona 6" == $zonas_select[5]){echo "checked";}}else{echo "checked";} ?>>
                                          <label class="custom-control-label" for="zona6">Zona 6</label>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-4" style="border-style: groove;">
                                    <div class="">
                                      <h4>Estructura</h4>
                                    </div>
                                    <div class="row">
                                      <?php
                                      $rep1 = 0;
                                      foreach ($consulta5->result() as $key => $estructura) {
                                        if ($rep1 == 0) {
                                          // code...
                                        ?>
                                        <div class="col-md-6">
                                          <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input seleccionarTodo" id="<?= $estructura->estructura ?>1" value="<?= $estructura->estructura ?>" name="estructura[<?=$key?>]" <?php if(isset($estructuras)){if($estructura->estructura == $estructuras_select[$key]){echo "checked";}}else{echo "checked";} ?>>
                                            <label class="custom-control-label" for="<?= $estructura->estructura ?>1"><?= $estructura->estructura ?></label>
                                          </div>
                                        </div>
                                      <?php
                                      $rep1 = 1;
                                    }else {
                                      ?>
                                      <div class="col-md-6">
                                        <div class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input seleccionarTodo" id="<?= $estructura->estructura ?>1" value="<?= $estructura->estructura ?>" name="estructura[<?=$key?>]" <?php if(isset($estructuras)){if($estructura->estructura == $estructuras_select[$key]){echo "checked";}}else{echo "checked";} ?>>
                                          <label class="custom-control-label" for="<?= $estructura->estructura ?>1"><?= $estructura->estructura ?></label>
                                        </div>
                                      </div>

                                      <?php
                                      $rep1 = 0;
                                    }
                                      }
                                      ?>
                                    </div>
                                  </div>
                                  <div class="col-md-4" style="border-style: groove;">
                                    <div class="">
                                      <h4>Estado</h4>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input seleccionarTodo" id="Activo1" value="Activo" name="estado[0]" <?php if(isset($estados)){if($estados_select[0] == "Activo"){echo "checked";}}else{echo "checked";} ?>>
                                        <label class="custom-control-label" for="Activo1">Activo</label>
                                      </div>
                                      <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input seleccionarTodo" id="Inactivo1" value="Inactivo" name="estado[1]" <?php if(isset($estados)){if($estados_select[1] == "Inactivo"){echo "checked";}}else{echo "checked";} ?>>
                                        <label class="custom-control-label" for="Inactivo1">Inactivo</label>
                                      </div>
                                      <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input seleccionarTodo" id="Vencido1" value="Vencido" name="estado[2]" <?php if(isset($estados)){if($estados_select[2] == "Vencido"){echo "checked";}}else{echo "checked";} ?>>
                                        <label class="custom-control-label" for="Vencido1">Vencido</label>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <br>
                                <br>
                                <div class="row">
                                  <div class="col-md-4" style="border-style: groove;">
                                    <div class="">
                                      <h4>Observaciones</h4>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input seleccionarTodo" id="Observaciones1" value="Todo en Orden" name="observaciones[0]" <?php if(isset($observaciones)){if($observaciones_select[0] == "Todo en Orden"){echo "checked";}}else{echo "checked";} ?>>
                                        <label class="custom-control-label" for="Observaciones1">Todo en Orden</label>
                                      </div>
                                      <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input seleccionarTodo" id="Observaciones2" value="Fuera de horario" name="observaciones[1]" <?php if(isset($observaciones)){if($observaciones_select[1] == "Todo en Orden"){echo "checked";}}else{echo "checked";} ?>>
                                        <label class="custom-control-label" for="Observaciones2">Fuera de horario</label>
                                      </div>
                                      <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input seleccionarTodo" id="Observaciones3" value="Reincidencia" name="observaciones[2]" <?php if(isset($observaciones)){if($observaciones_select[2] == "Todo en Orden"){echo "checked";}}else{echo "checked";} ?>>
                                        <label class="custom-control-label" for="Observaciones3">Reincidencia</label>
                                      </div>
                                      <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input seleccionarTodo" id="Observaciones4" value="Fuera de zona" name="observaciones[3]" <?php if(isset($observaciones)){if($observaciones_select[3] == "Todo en Orden"){echo "checked";}}else{echo "checked";} ?>>
                                        <label class="custom-control-label" for="Observaciones4">Fuera de zona</label>
                                      </div>
                                      <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input seleccionarTodo" id="Observaciones5" value="No cuenta con permiso" name="observaciones[4]" <?php if(isset($observaciones)){if($observaciones_select[4] == "Todo en Orden"){echo "checked";}}else{echo "checked";} ?>>
                                        <label class="custom-control-label" for="Observaciones5">No cuenta con permiso</label>
                                      </div>

                                      <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input seleccionarTodo" id="Observaciones6" value="Estado de ebriedad" name="observaciones[5]" <?php if(isset($observaciones)){if($observaciones_select[5] == "Todo en Orden"){echo "checked";}}else{echo "checked";} ?>>
                                        <label class="custom-control-label" for="Observaciones6">Estado de ebriedad</label>
                                      </div>
                                      <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input seleccionarTodo" id="Observaciones7" value="Invadir banqueta" name="observaciones[6]" <?php if(isset($observaciones)){if($observaciones_select[6] == "Todo en Orden"){echo "checked";}}else{echo "checked";} ?>>
                                        <label class="custom-control-label" for="Observaciones7">Invadir banqueta</label>
                                      </div>
                                      <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input seleccionarTodo" id="Observaciones8" value="Hacer caso omiso a las recomendaciones" name="observaciones[7]" <?php if(isset($observaciones)){if($observaciones_select[7] == "Todo en Orden"){echo "checked";}}else{echo "checked";} ?>>
                                        <label class="custom-control-label" for="Observaciones8">Hacer caso omiso a las recomendaciones</label>
                                      </div>
                                      <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input seleccionarTodo" id="Observaciones9" value="Amenazas y/o insulto a la autoridad" name="observaciones[8]" <?php if(isset($observaciones)){if($observaciones_select[8] == "Todo en Orden"){echo "checked";}}else{echo "checked";} ?>>
                                        <label class="custom-control-label" for="Observaciones9">Amenazas y/o insulto a la autoridad</label>
                                      </div>
                                      <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input seleccionarTodo" id="Observaciones10" value="Otro" name="observaciones[9]" <?php if(isset($observaciones)){if($observaciones_select[9] == "Todo en Orden"){echo "checked";}}else{echo "checked";} ?>>
                                        <label class="custom-control-label" for="Observaciones10">Otro</label>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </form>





                              <?php
                              if (isset($genero) || isset($giros) || isset($tags_s) ||isset($zonas) || isset($estructuras) || isset($estados)) {
                                ?>

                                <br>
                                <br>
                                <?php
                                if (isset($genero)) {


                                  if (isset($genero)) {
                                    $cont_ambos = 0;
                                    $cont_masculino = 0;
                                    $cont_femenino = 0;
                                    $dias_masculino = array("'Masculino'", 0, 0, 0, 0, 0, 0, 0);
                                    $dias_femenino = array("'Femenino'", 0, 0, 0, 0, 0, 0, 0);
                                    foreach ($consulta->result() as $comerciante) {
                                      if ($comerciante->fecha_creado == $dias_semana[6] && $comerciante->genero == "Masculino") {
                                        $cont_masculino ++;
                                        $cont_ambos ++;
                                        $dias_masculino[1] ++;
                                      }elseif ($comerciante->fecha_creado == $dias_semana[5] && $comerciante->genero == "Masculino") {
                                        $cont_masculino ++;
                                        $cont_ambos ++;
                                        $dias_masculino[2] ++;
                                      }elseif ($comerciante->fecha_creado == $dias_semana[4] && $comerciante->genero == "Masculino") {
                                        $cont_masculino ++;
                                        $cont_ambos ++;
                                        $dias_masculino[3] ++;
                                      }elseif ($comerciante->fecha_creado == $dias_semana[3] && $comerciante->genero == "Masculino") {
                                        $cont_masculino ++;
                                        $cont_ambos ++;
                                        $dias_masculino[4] ++;
                                      }elseif ($comerciante->fecha_creado == $dias_semana[2] && $comerciante->genero == "Masculino") {
                                        $cont_masculino ++;
                                        $cont_ambos ++;
                                        $dias_masculino[5] ++;
                                      }elseif ($comerciante->fecha_creado == $dias_semana[1] && $comerciante->genero == "Masculino") {
                                        $cont_masculino ++;
                                        $cont_ambos ++;
                                        $dias_masculino[6] ++;
                                      }elseif ($comerciante->fecha_creado == $dias_semana[0] && $comerciante->genero == "Masculino") {
                                        $cont_masculino ++;
                                        $cont_ambos ++;
                                        $dias_masculino[7] ++;
                                      }

                                      if ($comerciante->fecha_creado == $dias_semana[6] && $comerciante->genero == "Femenino") {
                                        $cont_femenino ++;
                                        $cont_ambos ++;
                                        $dias_femenino[1] ++;
                                      }elseif ($comerciante->fecha_creado == $dias_semana[5] && $comerciante->genero == "Femenino") {
                                        $cont_femenino ++;
                                        $cont_ambos ++;
                                        $dias_femenino[2] ++;
                                      }elseif ($comerciante->fecha_creado == $dias_semana[4] && $comerciante->genero == "Femenino") {
                                        $cont_femenino ++;
                                        $cont_ambos ++;
                                        $dias_femenino[3] ++;
                                      }elseif ($comerciante->fecha_creado == $dias_semana[3] && $comerciante->genero == "Femenino") {
                                        $cont_femenino ++;
                                        $cont_ambos ++;
                                        $dias_femenino[4] ++;
                                      }elseif ($comerciante->fecha_creado == $dias_semana[2] && $comerciante->genero == "Femenino") {
                                        $cont_femenino ++;
                                        $cont_ambos ++;
                                        $dias_femenino[5] ++;
                                      }elseif ($comerciante->fecha_creado == $dias_semana[1] && $comerciante->genero == "Femenino") {
                                        $cont_femenino ++;
                                        $cont_ambos ++;
                                        $dias_femenino[6] ++;
                                      }elseif ($comerciante->fecha_creado == $dias_semana[0] && $comerciante->genero == "Femenino") {
                                        $cont_femenino ++;
                                        $cont_ambos ++;
                                        $dias_femenino[7] ++;
                                      }
                                    }
                                  }
                                }


                                if (isset($giros)) {
                                  $cont_giros = array();
                                  foreach ($giros_select as $key => $giro) {
                                    $cont_giros[] = 0;
                                  }
                                  foreach ($giros_select as $key => $giro) {
                                    foreach ($consulta->result() as $comerciante) {
                                      if ($comerciante->giro == $giro && $comerciante->fecha_creado >= $dia7) {
                                        $cont_giros[$key]++;
                                      }
                                    }
                                  }
                                }

                                if (isset($tags_s)) {
                                  $cont_tags = array();
                                  foreach ($tags_select as $key => $tag_select) {
                                    $cont_tags[] = 0;
                                  }
                                  foreach ($tags_select as $key => $tag_select) {
                                    foreach ($consulta->result() as $comerciante) {
                                      if ($tag_select != "") {

                                        if (strpos($comerciante->tags, $tag_select) !== false && $comerciante->fecha_creado >= $dia7) {
                                          $cont_tags[$key]++;
                                        }
                                      }
                                    }
                                  }
                                }

                                if (isset($zonas)) {
                                  $cont_zonas = array();
                                  foreach ($zonas_select as $key => $zona) {
                                    $cont_zonas[] = 0;
                                  }
                                  foreach ($zonas_select as $key => $zona) {
                                    foreach ($consulta->result() as $comerciante) {
                                      if ($comerciante->zona == $zona && $comerciante->fecha_creado >= $dia7) {
                                        $cont_zonas[$key]++;
                                      }
                                    }
                                  }
                                }

                                if (isset($estructuras)) {
                                  $cont_estructuras = array();
                                  foreach ($estructuras as $key => $estructura) {
                                    $cont_estructuras[] = 0;
                                  }
                                  foreach ($estructuras as $key => $estructura) {
                                    foreach ($consulta->result() as $comerciante) {
                                      if ($comerciante->estructura == $estructura && $comerciante->fecha_creado >= $dia7) {
                                        $cont_estructuras[$key]++;
                                      }
                                    }
                                  }
                                }

                                if (isset($estados)) {
                                  $cont_estados = array();
                                  foreach ($estados as $key => $estado) {
                                    $cont_estados[] = 0;
                                  }
                                  foreach ($estados as $key => $estado) {
                                    foreach ($consulta->result() as $comerciante) {
                                      if ($comerciante->estado == $estado && $comerciante->fecha_creado >= $dia7) {
                                        $cont_estados[$key]++;
                                      }
                                    }
                                  }
                                }


                                // if ($dia1 < $dia7) {
                                //   echo "1";
                                // }else {
                                //   echo "2";
                                // }

                                 ?>



                                 <script type="text/javascript">
                                 <?php
                                 if (isset($genero)) {
                                   ?>
                                   var genero = "<?= $genero ?>";
                                   <?php
                                 }
                                 if ($genero == "Ambos") {
                                   ?>
                                   var dias_masculino = [<?php foreach ($dias_masculino as $key => $value) {
                                     echo $dias_masculino[$key].",";
                                   }?>];

                                   var dias_femenino = [<?php foreach ($dias_femenino as $key => $value) {
                                     echo $dias_femenino[$key].",";
                                   }?>];

                                   var grafica = [dias_masculino,dias_femenino];
                                   grafica.forEach(function(element,index){
                                     console.log(grafica[index]);
                                   });
                                   <?php
                                 }
                                 if ($genero == "Masculino") {
                                   ?>
                                   var dias_masculino = [<?php foreach ($dias_masculino as $key => $value) {
                                     echo $dias_masculino[$key].",";
                                   }?>];

                                   var dias_femenino = [<?php foreach ($dias_femenino as $key => $value) {
                                     echo $dias_femenino[$key].",";
                                   }?>];

                                   var grafica = [dias_masculino,dias_femenino];
                                   grafica.forEach(function(element,index){
                                     console.log(grafica[index]);
                                   });
                                   <?php
                                 }
                                 if ($genero == "Femenino") {
                                   ?>
                                   var dias_masculino = [<?php foreach ($dias_masculino as $key => $value) {
                                     echo $dias_masculino[$key].",";
                                   }?>];

                                   var dias_femenino = [<?php foreach ($dias_femenino as $key => $value) {
                                     echo $dias_femenino[$key].",";
                                   }?>];


                                   <?php
                                 }

                                  ?>


                                 </script>

                                <h3 class="card-title">Grafica Comparativa</h3>
                                <div class="row">
                                  <div class="col-md-8">
                                    <div id="area-chart"></div>
                                  </div>
                                  <div class="col-md-4">

                                    <?php
                                    if ($genero == "Ambos") {
                                      ?>
                                      <h4>Total: <?=$cont_ambos?></h4>
                                      <h4>Masculinos: <?=$cont_masculino?></h4>
                                      <h4>Femeninos: <?=$cont_femenino?></h4>

                                      <?php
                                    }
                                     ?>
                                     <?php
                                     if ($genero == "Masculino") {
                                       ?>
                                       <h4>Total: <?=$cont_ambos?></h4>
                                       <h4>Masculinos: <?=$cont_masculino?></h4>

                                       <?php
                                     }
                                      ?>
                                      <?php
                                      if ($genero == "Femenino") {
                                        ?>
                                        <h4>Total: <?=$cont_ambos?></h4>
                                        <h4>Femeninos: <?=$cont_femenino?></h4>

                                        <?php
                                      }
                                       ?>
                                  </div>
                                </div>


                                <?php
                                if (isset($genero) || isset($giros) || isset($tags_s) ||isset($zonas) || isset($estructuras) || isset($estados)) {
                                  ?>
                                  <div class="row">
                                  <?php
                                  if (isset($giros)) {
                                    ?>
                                    <br>
                                    <br>
                                      <div class="col-md-4 text-left">
                                        <br>
                                        <h3>Giro</h3>
                                        <?php
                                        foreach ($giros_select as $key => $giro) {
                                          if ($giro != "null") {
                                            echo $giro.": ".$cont_giros[$key];
                                            echo "<br>";
                                          }
                                        }
                                         ?>
                                      </div>
                                    <?php
                                  }

                                  if (isset($tags_s)) {
                                    ?>
                                    <br>
                                    <br>
                                      <div class="col-md-4 text-left">
                                        <br>
                                        <h3>Tags</h3>
                                        <?php
                                        foreach ($tags_select as $key => $tag) {
                                          if ($tag != "null") {
                                            echo $tag.": ".$cont_tags[$key];
                                            echo "<br>";
                                          }
                                        }
                                         ?>
                                      </div>
                                    <?php
                                  }

                                  if (isset($zonas)) {
                                    ?>
                                    <br>
                                    <br>
                                      <div class="col-md-4 text-left">
                                        <br>
                                        <h3>Zonas</h3>
                                        <?php
                                        foreach ($zonas_select as $key => $zona) {
                                          if ($zona != "null") {
                                            echo $zona.": ".$cont_zonas[$key];
                                            echo "<br>";
                                          }
                                        }
                                         ?>
                                      </div>
                                    <?php
                                  }

                                  if (isset($estructuras)) {
                                    ?>
                                    <br>
                                    <br>
                                      <div class="col-md-4 text-left">
                                        <br>
                                        <h3>Estructuras</h3>
                                        <?php
                                        foreach ($estructuras_select as $key => $estructura) {
                                          if ($estructura != "null") {
                                            echo $estructura.": ".$cont_estructuras[$key];
                                            echo "<br>";
                                          }
                                        }
                                         ?>
                                      </div>
                                    <?php
                                  }

                                  if (isset($estados)) {
                                    ?>
                                    <br>
                                    <br>
                                      <div class="col-md-4 text-left">
                                        <br>
                                        <h3>Estados</h3>
                                        <?php
                                        foreach ($estados as $key => $estado) {
                                          if ($estado != "null") {
                                            echo $estado.": ".$cont_estados[$key];
                                            echo "<br>";
                                          }
                                        }
                                         ?>
                                      </div>
                                    <?php
                                  }
                                  ?>
                                </div>
                                  <?php
                                }
                                 ?>
                                <?php
                              }
                               ?>


                          </div>
                      </div>
                  </div>
              </div>

              <div class="row">
                  <div class="col-lg-4 col-md-6">
                      <div class="card">
                          <div class="card-body analytics-info">
                              <h3 class="card-title">Fijos</h3>
                              <ul class="list-inline two-part">
                                  <li>
                                      <div id="sparklinedash"></div>
                                  </li>
                                  <li class="text-right"><i class="ti-arrow-up text-success"></i> <span class="counter text-success"><?= $total_activos_fijos?></span></li>
                              </ul>
                          </div>
                      </div>
                  </div>


                  <div class="col-lg-4 col-md-6">
                      <div class="card">
                          <div class="card-body analytics-info">
                              <h3 class="card-title">Semifijos</h3>
                              <ul class="list-inline two-part">
                                  <li>
                                      <div id="sparklinedash2"></div>
                                  </li>
                                  <li class="text-right"><i class="ti-arrow-up text-purple"></i> <span class="counter text-purple"><?= $total_activos_semifijos?></span></li>
                              </ul>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-12">
                      <div class="card">
                          <div class="card-body analytics-info">
                              <h3 class="card-title">Ambulantes</h3>
                              <ul class="list-inline two-part">
                                  <li>
                                      <div id="sparklinedash3"></div>
                                  </li>
                                  <li class="text-right"><i class="ti-arrow-up text-info"></i> <span class="counter text-info"><?= $total_activos_ambulantes?></span></li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="row">
                  <div class="col-12">
                      <div class="card" style="height:100%;">
                          <div class="card-body">
                              <h3 class="card-title">Ubicaciones de comerciantes</h3>
                              <div id="map" class="gmaps" style="display:none;"></div>
                              <div id="map_2" class="gmaps"></div>
                              <br>
                              <div class="row">
                                <div class="col-md-12">
                                  <div class="row">
                                    <div class="col-md-2">
                                      <h3>Zona 1: <span class="font-weight-normal"><?= $zona1 ?> Comerciantes</span></h3>
                                    </div>
                                    <div class="col-md-2">
                                      <h3>Zona 2: <span class="font-weight-normal"><?= $zona2 ?> Comerciantes</span></h3>
                                    </div>
                                    <div class="col-md-2">
                                      <h3>Zona 3: <span class="font-weight-normal"><?= $zona3 ?> Comerciantes</span></h3>
                                    </div>
                                    <div class="col-md-2">
                                      <h3>Zona 4: <span class="font-weight-normal"><?= $zona4 ?> Comerciantes</span></h3>
                                    </div>
                                    <div class="col-md-2">
                                      <h3>Zona 5: <span class="font-weight-normal"><?= $zona5 ?> Comerciantes</span></h3>
                                    </div>
                                    <div class="col-md-2">
                                      <h3>Zona 6: <span class="font-weight-normal"><?= $zona6 ?> Comerciantes</span></h3>
                                    </div>

                                  </div>
                                </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>





              <br>


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
          <?php
        }
         ?>
