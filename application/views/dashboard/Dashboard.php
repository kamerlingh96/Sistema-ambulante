

        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Temp - Earnings -->
            <!-- ============================================================== -->
            <div class="card gredient-info-bg m-t-0 m-b-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-12">
                      <h4 class="card-title text-white">Bienvenido <?= $nombre ?></h4>
                      <h5 class="card-subtitle text-white">Panel</h5>
                    </div>
                  </div>
                    <div class="row m-t-30 m-b-20">
                        <!-- col -->
                        <div class="col-sm-12 col-lg-4">
                            <div class="temp d-flex align-items-center flex-row">
                                <div class="m-l-2" style="width:200px;">
                                  <a class="weatherwidget-io" href="https://forecast7.com/es/18d65n91d81/ciudad-del-carmen/" data-font="Arial" data-mode="Current" data-days="3" data-textcolor="#ffffff" ></a>
                                  <script>
                                  !function(d,s,id){
                                    var js,fjs=d.getElementsByTagName(s)[0];
                                    if(!d.getElementById(id)){js=d.createElement(s);js.id=id;
                                      js.src='https://weatherwidget.io/js/widget.min.js';
                                      fjs.parentNode.insertBefore(js,fjs);
                                    }
                                  }(document,'script','weatherwidget-io-js');
                                  </script>
                                </div>
                                <div class="m-l-10">
                                  <?php
                                  date_default_timezone_set('America/Mexico_City');
                                  $dia_ingles = date("l");
                                  switch ($dia_ingles) {
                                    case 'Monday':
                                      $dia = "Lunes";
                                      break;
                                      case 'Tuesday':
                                        $dia = "Martes";
                                        break;
                                        case 'Wednesday':
                                          $dia = "Miercoles";
                                          break;
                                          case 'Thursday':
                                            $dia = "Jueves";
                                            break;
                                            case 'Friday':
                                              $dia = "Viernes";
                                              break;
                                              case 'Saturday':
                                                $dia = "Sabado";
                                                break;
                                                case 'Sunday':
                                                  $dia = "Domingo";
                                                  break;

                                    default:
                                      $dia = "Error";
                                      break;
                                  }


                                  $lat = array();
                                  $lng = array();

                                  foreach ($consulta->result() as $sparklinedash) {
                                    $coordenadas = $sparklinedash->coordenadas;
                                    list($lat_coordenadas, $lng_coordenadas) = explode(",",$coordenadas);

                                    $lat[] = $lat_coordenadas;
                                    $lng[] = $lng_coordenadas;
                                  }


                                   ?>

                                   <script type="text/javascript">
                                     


                                     var lat = [<?php foreach ($lat as $key => $value) {
                                       echo $lat[$key].",";
                                     }?>];
                                     var lng = [<?php foreach ($lng as $key => $value) {
                                       echo $lng[$key].",";
                                     }?>];


                                     var reportes = true;
                                     var crear_comerciante = false;

                                   </script>

                                    <h3 class="m-b-0 text-white"><?=$dia?></h3><small class="text-white">Ciudad del Carmen, Campeche</small>

                                </div>
                            </div>
                        </div>
                        <!-- col -->
                        <div class="col-sm-12 col-lg-8">
                            <div class="row">
                                <!-- col -->
                                <div class="col-sm-12 col-md-4">
                                    <div class="info d-flex align-items-center">
                                        <div class="m-r-10">
                                            <i class="mdi mdi-account-multiple text-white display-5 op-5"></i>
                                        </div>
                                        <div>
                                            <h3 class="text-white m-b-0"><?=$activos?></h3>
                                            <span class="text-white">Activos</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- col -->
                                <!-- col -->
                                <div class="col-sm-12 col-md-4">
                                    <div class="info d-flex align-items-center">
                                        <div class="m-r-10">
                                            <i class="mdi mdi-account-off text-white display-5 op-5"></i>
                                        </div>
                                        <div>
                                            <h3 class="text-white m-b-0"><?=$vencidos?></h3>
                                            <span class="text-white">Vencidos</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- col -->
                                <!-- col -->
                                <div class="col-sm-12 col-md-4">
                                    <div class="info d-flex align-items-center">
                                        <div class="m-r-10">
                                            <i class="mdi mdi-account-multiple-plus text-white display-5 op-5"></i>
                                        </div>
                                        <div>
                                            <h3 class="text-white m-b-0"><?=$mesactual?></h3>
                                            <span class="text-white">Nuevos de este mes</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- col -->
                            </div>
                            <br>
                            <div class="row">
                              <div class="col-sm-12 col-md-4">
                                  <div class="info d-flex align-items-center">
                                      <div class="m-r-10">
                                          <i class="mdi mdi-account-search text-white display-5 op-5"></i>
                                      </div>
                                      <div>
                                          <h3 class="text-white m-b-0"><?=$inspeccioneshoy?></h3>
                                          <span class="text-white">Inspecciones hoy</span>
                                      </div>
                                  </div>
                              </div>
                              <!-- col -->
                              <!-- col -->
                              <div class="col-sm-12 col-md-4">
                                  <div class="info d-flex align-items-center">
                                      <div class="m-r-10">
                                          <i class="mdi mdi-account-search text-white display-5 op-5"></i>
                                      </div>
                                      <div>
                                          <h3 class="text-white m-b-0"><?=$inspeccionessemana?></h3>
                                          <span class="text-white">Inspecciones esta semana</span>
                                      </div>
                                  </div>
                              </div>
                              <!-- col -->
                              <!-- col -->
                              <div class="col-sm-12 col-md-4">
                                  <div class="info d-flex align-items-center">
                                      <div class="m-r-10">
                                          <i class="mdi mdi-account-search text-white display-5 op-5"></i>
                                      </div>
                                      <div>
                                          <h3 class="text-white m-b-0"><?=$inspeccionesmesactual?></h3>
                                          <span class="text-white">Inspecciones este mes</span>
                                      </div>
                                  </div>
                              </div>
                              <!-- col -->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card" style="height:100%;">
                            <div class="card-body">
                                <h4 class="card-title">Ubicaciones de comerciantes</h4>
                                <div id="map" class="gmaps" style="display:none;"></div>
                                <div id="map_2" class="gmaps"></div>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
