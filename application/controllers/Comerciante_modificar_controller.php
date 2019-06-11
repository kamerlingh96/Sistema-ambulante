<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comerciante_modificar_controller extends CI_Controller{


  function Actualizar()
  {
    $actualizar = $this->input->post();
    //$data[''] = $actualizar[''];

    $data['nombre'] = $actualizar['nombre'];
    $data['nombre_segundo'] = $actualizar['nombre_segundo'];
    $data['email'] = $actualizar['email'];
    $data['curp'] = $actualizar['curp'];
    $data['telefono'] = $actualizar['tel'];
    $data['celular'] = $actualizar['cel'];
    $data['giro'] = $actualizar['giro'];
    $data['tags'] = $actualizar['tags'];
    $data['tipo'] = $actualizar['tipo'];
    if ($actualizar['tarjeton'] != null) {
      $tarjeton = "Si";
    }else {
      $tarjeton = "No";
    }

    if ($actualizar['sindicato'] != null) {
      $sindicato = "Si";
    }else {
      $sindicato = "No";
    }

    $data['tarjetonsindicato'] = $tarjeton."/".$sindicato;

    $data['horario'] = $actualizar['horario'];
    //$datafecha['dias'] = $actualizar['dias'];
    //$datafecha['desde'] = $actualizar['desde'];
    //$datafecha['hasta'] = $actualizar['hasta'];
    $data['direccion'] = $actualizar['direccion'];
    $data['descripcion'] = $actualizar['descripcion'];
    $data['coordenadas'] = $actualizar['coordenadas'];
    $data['zona'] = $actualizar['zona'];
    $data['metros'] = $actualizar['metros'];
    $data['estructura'] = $actualizar['estructura'];
    $data['comentario'] = $actualizar['comentario'];
    $data['estado'] = $actualizar['estado'];

    $tags = $actualizar['tags'];

    $verdadero = "true";
    $falso = "false";

    $Lunes = "Lunes";
    $Martes = "Martes";
    $Miercoles = "Miercoles";
    $Jueves = "Jueves";
    $Viernes = "Viernes";
    $Sabado = "Sabado";
    $Domingo = "Domingo";

    $hora = "00:00";

    $id = $actualizar['id'];
    $dias = $actualizar['dias'];
    $desde = $actualizar['desde'];
    $hasta = $actualizar['hasta'];

    $horario = $actualizar['horario'];

    $this->load->model('Comerciante_modificar_model');
    $curpantigua = $this->Comerciante_modificar_model->curp_antigua($id);
    $curp_antigua = $curpantigua->curp;



    $this->db->where('id', $actualizar['id']);
    if ($this->db->update('ambulante', $data)) {
      $porciones = explode(",", $tags);
      foreach ($porciones as $key => $value) {
        $valor[] = $this->getTagComparar($value);
        if ($valor[$key]) {
          //echo "si esta". $value;
        }else {
          //echo "no esta";
          $tag_result = $this->setTag($value);
          if ($tag_result) {
            //echo "Hecho";
          }else {
            //echo "No hecho";
          }
        }
      }
      //header("Location: " . base_url());
    }else{
      echo "no se pudo actualizar";
    }

    $valor0 = $this->Comerciante_modificar_model->update($id,$Lunes);
    $valor1 = $this->Comerciante_modificar_model->update($id,$Martes);
    $valor2 = $this->Comerciante_modificar_model->update($id,$Miercoles);
    $valor3 = $this->Comerciante_modificar_model->update($id,$Jueves);
    $valor4 = $this->Comerciante_modificar_model->update($id,$Viernes);
    $valor5 = $this->Comerciante_modificar_model->update($id,$Sabado);
    $valor6 = $this->Comerciante_modificar_model->update($id,$Domingo);

    $dia = array(
      0 => $valor0->dia_laboral,
      1 => $valor1->dia_laboral,
      2 => $valor2->dia_laboral,
      3 => $valor3->dia_laboral,
      4 => $valor4->dia_laboral,
      5 => $valor5->dia_laboral,
      6 => $valor6->dia_laboral

    );

    if ($horario == 1) {
      for ($i=0;$i<=6;$i++)
      {

        if (isset($dias[$i])) {

          if ($desde[$i] != "00:00" || $hasta[$i] != "00:00") {
            $SQL_fecha = "UPDATE fecha_hora SET desde='$desde[$i]',hasta='$hasta[$i]',dia_laboral='$verdadero',horario='$horario',desde2='$hora',hasta2='$hora',desde3='$hora',hasta3='$hora' WHERE fecha='$dias[$i]'";
            if ($this->db->query($SQL_fecha)) {
              $subio = true;
            }else {
              $subio = false;
            }
          }else {
            $SQL_fecha = "UPDATE fecha_hora SET desde='$hora',hasta='$hora',horario='$horario',desde2='$hora',hasta2='$hora',desde3='$hora',hasta3='$hora' WHERE fecha='$dia[$i]'";
            if ($this->db->query($SQL_fecha)) {
              $subio = true;
            }else {
              $subio = false;
            }
          }
        }else {

          switch ($i) {
            case 0:
            if ($dia[$i] == "true") {
              $SQL_fecha = "UPDATE fecha_hora SET desde='$hora',hasta='$hora',dia_laboral='$falso',horario='$horario',desde2='$hora',hasta2='$hora',desde3='$hora',hasta3='$hora' WHERE fecha='$Lunes'";
              if ($this->db->query($SQL_fecha)) {
                $subio = true;
              }else {
                $subio = false;
              }
            }else {
              $SQL_fecha = "UPDATE fecha_hora SET desde='$hora',hasta='$hora',dia_laboral='$falso',horario='$horario',desde2='$hora',hasta2='$hora',desde3='$hora',hasta3='$hora' WHERE fecha='$Lunes'";
              if ($this->db->query($SQL_fecha)) {
                $subio = true;
              }else {
                $subio = false;
              }
            }
              break;
              case 1:
              if ($dia[$i] == "true") {
                $SQL_fecha = "UPDATE fecha_hora SET desde='$hora',hasta='$hora',dia_laboral='$falso',horario='$horario',desde2='$hora',hasta2='$hora',desde3='$hora',hasta3='$hora' WHERE fecha='$Martes'";
                if ($this->db->query($SQL_fecha)) {
                  $subio = true;
                }else {
                  $subio = false;
                }
              }else {
                $SQL_fecha = "UPDATE fecha_hora SET desde='$hora',hasta='$hora',dia_laboral='$falso',horario='$horario',desde2='$hora',hasta2='$hora',desde3='$hora',hasta3='$hora' WHERE fecha='$Martes'";
                if ($this->db->query($SQL_fecha)) {
                  $subio = true;
                }else {
                  $subio = false;
                }
              }
                break;
                case 2:
                if ($dia[$i] == "true") {
                  $SQL_fecha = "UPDATE fecha_hora SET desde='$hora',hasta='$hora',dia_laboral='$falso',horario='$horario',desde2='$hora',hasta2='$hora',desde3='$hora',hasta3='$hora' WHERE fecha='$Miercoles'";
                  if ($this->db->query($SQL_fecha)) {
                    $subio = true;
                  }else {
                    $subio = false;
                  }
                }else {
                  $SQL_fecha = "UPDATE fecha_hora SET desde='$hora',hasta='$hora',dia_laboral='$falso',horario='$horario',desde2='$hora',hasta2='$hora',desde3='$hora',hasta3='$hora' WHERE fecha='$Miercoles'";
                  if ($this->db->query($SQL_fecha)) {
                    $subio = true;
                  }else {
                    $subio = false;
                  }
                }
                  break;
                  case 3:
                  if ($dia[$i] == "true") {
                    $SQL_fecha = "UPDATE fecha_hora SET desde='$hora',hasta='$hora',dia_laboral='$falso',horario='$horario',desde2='$hora',hasta2='$hora',desde3='$hora',hasta3='$hora' WHERE fecha='$Jueves'";
                    if ($this->db->query($SQL_fecha)) {
                      $subio = true;
                    }else {
                      $subio = false;
                    }
                  }else {
                    $SQL_fecha = "UPDATE fecha_hora SET desde='$hora',hasta='$hora',dia_laboral='$falso',horario='$horario',desde2='$hora',hasta2='$hora',desde3='$hora',hasta3='$hora' WHERE fecha='$Jueves'";
                    if ($this->db->query($SQL_fecha)) {
                      $subio = true;
                    }else {
                      $subio = false;
                    }
                  }
                    break;
                    case 4:
                    if ($dia[$i] == "true") {
                      $SQL_fecha = "UPDATE fecha_hora SET desde='$hora',hasta='$hora',dia_laboral='$falso',horario='$horario',desde2='$hora',hasta2='$hora',desde3='$hora',hasta3='$hora' WHERE fecha='$Viernes'";
                      if ($this->db->query($SQL_fecha)) {
                        $subio = true;
                      }else {
                        $subio = false;
                      }
                    }else {
                      $SQL_fecha = "UPDATE fecha_hora SET desde='$hora',hasta='$hora',dia_laboral='$falso',horario='$horario',desde2='$hora',hasta2='$hora',desde3='$hora',hasta3='$hora' WHERE fecha='$Viernes'";
                      if ($this->db->query($SQL_fecha)) {
                        $subio = true;
                      }else {
                        $subio = false;
                      }
                    }
                      break;
                      case 5:
                      if ($dia[$i] == "true") {
                        $SQL_fecha = "UPDATE fecha_hora SET desde='$hora',hasta='$hora',dia_laboral='$falso',horario='$horario',desde2='$hora',hasta2='$hora',desde3='$hora',hasta3='$hora' WHERE fecha='$Sabado'";
                        if ($this->db->query($SQL_fecha)) {
                          $subio = true;
                        }else {
                          $subio = false;
                        }
                      }else {
                        $SQL_fecha = "UPDATE fecha_hora SET desde='$hora',hasta='$hora',dia_laboral='$falso',horario='$horario',desde2='$hora',hasta2='$hora',desde3='$hora',hasta3='$hora' WHERE fecha='$Sabado'";
                        if ($this->db->query($SQL_fecha)) {
                          $subio = true;
                        }else {
                          $subio = false;
                        }
                      }
                        break;
                        case 6:
                        if ($dia[$i] == "true") {
                          $SQL_fecha = "UPDATE fecha_hora SET desde='$hora',hasta='$hora',dia_laboral='$falso',horario='$horario',desde2='$hora',hasta2='$hora',desde3='$hora',hasta3='$hora' WHERE fecha='$Domingo'";
                          if ($this->db->query($SQL_fecha)) {
                            $subio = true;
                          }else {
                            $subio = false;
                          }
                        }else {
                          $SQL_fecha = "UPDATE fecha_hora SET desde='$hora',hasta='$hora',dia_laboral='$falso',horario='$horario',desde2='$hora',hasta2='$hora',desde3='$hora',hasta3='$hora' WHERE fecha='$Domingo'";
                          if ($this->db->query($SQL_fecha)) {
                            $subio = true;
                          }else {
                            $subio = false;
                          }
                        }
                          break;

            default:
              return false;
              break;
          }


        }
      }
    }

    if ($horario == 2) {
      $j=7;
      for ($i=0;$i<=6;$i++)
      {

        if (isset($dias[$i])) {

          if ($desde[$i] != "00:00" || $hasta[$i] != "00:00") {
            $SQL_fecha = "UPDATE fecha_hora SET desde='$desde[$i]',hasta='$hasta[$i]',dia_laboral='$verdadero',horario='$horario',desde2='$desde[$j]',hasta2='$hasta[$j]',desde3='$hora',hasta3='$hora' WHERE fecha='$dias[$i]'";
            if ($this->db->query($SQL_fecha)) {
              $subio = true;
            }else {
              $subio = false;
            }
          }else {
            $SQL_fecha = "UPDATE fecha_hora SET desde='$hora',hasta='$hora',horario='$horario',desde2='$hora',hasta2='$hora',desde3='$hora',hasta3='$hora' WHERE fecha='$dia[$i]'";
            if ($this->db->query($SQL_fecha)) {
              $subio = true;
            }else {
              $subio = false;
            }
          }
        }else {

          switch ($i) {
            case 0:
            if ($dia[$i] == "true") {
              $SQL_fecha = "UPDATE fecha_hora SET desde='$hora',hasta='$hora',dia_laboral='$falso',horario='$horario',desde2='$hora',hasta2='$hora',desde3='$hora',hasta3='$hora' WHERE fecha='$Lunes'";
              if ($this->db->query($SQL_fecha)) {
                $subio = true;
              }else {
                $subio = false;
              }
            }else {
              $SQL_fecha = "UPDATE fecha_hora SET desde='$hora',hasta='$hora',dia_laboral='$falso',horario='$horario',desde2='$hora',hasta2='$hora',desde3='$hora',hasta3='$hora' WHERE fecha='$Lunes'";
              if ($this->db->query($SQL_fecha)) {
                $subio = true;
              }else {
                $subio = false;
              }
            }
              break;
              case 1:
              if ($dia[$i] == "true") {
                $SQL_fecha = "UPDATE fecha_hora SET desde='$hora',hasta='$hora',dia_laboral='$falso',horario='$horario',desde2='$hora',hasta2='$hora',desde3='$hora',hasta3='$hora' WHERE fecha='$Martes'";
                if ($this->db->query($SQL_fecha)) {
                  $subio = true;
                }else {
                  $subio = false;
                }
              }else {
                $SQL_fecha = "UPDATE fecha_hora SET desde='$hora',hasta='$hora',dia_laboral='$falso',horario='$horario',desde2='$hora',hasta2='$hora',desde3='$hora',hasta3='$hora' WHERE fecha='$Martes'";
                if ($this->db->query($SQL_fecha)) {
                  $subio = true;
                }else {
                  $subio = false;
                }
              }
                break;
                case 2:
                if ($dia[$i] == "true") {
                  $SQL_fecha = "UPDATE fecha_hora SET desde='$hora',hasta='$hora',dia_laboral='$falso',horario='$horario',desde2='$hora',hasta2='$hora',desde3='$hora',hasta3='$hora' WHERE fecha='$Miercoles'";
                  if ($this->db->query($SQL_fecha)) {
                    $subio = true;
                  }else {
                    $subio = false;
                  }
                }else {
                  $SQL_fecha = "UPDATE fecha_hora SET desde='$hora',hasta='$hora',dia_laboral='$falso',horario='$horario',desde2='$hora',hasta2='$hora',desde3='$hora',hasta3='$hora' WHERE fecha='$Miercoles'";
                  if ($this->db->query($SQL_fecha)) {
                    $subio = true;
                  }else {
                    $subio = false;
                  }
                }
                  break;
                  case 3:
                  if ($dia[$i] == "true") {
                    $SQL_fecha = "UPDATE fecha_hora SET desde='$hora',hasta='$hora',dia_laboral='$falso',horario='$horario',desde2='$hora',hasta2='$hora',desde3='$hora',hasta3='$hora' WHERE fecha='$Jueves'";
                    if ($this->db->query($SQL_fecha)) {
                      $subio = true;
                    }else {
                      $subio = false;
                    }
                  }else {
                    $SQL_fecha = "UPDATE fecha_hora SET desde='$hora',hasta='$hora',dia_laboral='$falso',horario='$horario',desde2='$hora',hasta2='$hora',desde3='$hora',hasta3='$hora' WHERE fecha='$Jueves'";
                    if ($this->db->query($SQL_fecha)) {
                      $subio = true;
                    }else {
                      $subio = false;
                    }
                  }
                    break;
                    case 4:
                    if ($dia[$i] == "true") {
                      $SQL_fecha = "UPDATE fecha_hora SET desde='$hora',hasta='$hora',dia_laboral='$falso',horario='$horario',desde2='$hora',hasta2='$hora',desde3='$hora',hasta3='$hora' WHERE fecha='$Viernes'";
                      if ($this->db->query($SQL_fecha)) {
                        $subio = true;
                      }else {
                        $subio = false;
                      }
                    }else {
                      $SQL_fecha = "UPDATE fecha_hora SET desde='$hora',hasta='$hora',dia_laboral='$falso',horario='$horario',desde2='$hora',hasta2='$hora',desde3='$hora',hasta3='$hora' WHERE fecha='$Viernes'";
                      if ($this->db->query($SQL_fecha)) {
                        $subio = true;
                      }else {
                        $subio = false;
                      }
                    }
                      break;
                      case 5:
                      if ($dia[$i] == "true") {
                        $SQL_fecha = "UPDATE fecha_hora SET desde='$hora',hasta='$hora',dia_laboral='$falso',horario='$horario',desde2='$hora',hasta2='$hora',desde3='$hora',hasta3='$hora' WHERE fecha='$Sabado'";
                        if ($this->db->query($SQL_fecha)) {
                          $subio = true;
                        }else {
                          $subio = false;
                        }
                      }else {
                        $SQL_fecha = "UPDATE fecha_hora SET desde='$hora',hasta='$hora',dia_laboral='$falso',horario='$horario',desde2='$hora',hasta2='$hora',desde3='$hora',hasta3='$hora' WHERE fecha='$Sabado'";
                        if ($this->db->query($SQL_fecha)) {
                          $subio = true;
                        }else {
                          $subio = false;
                        }
                      }
                        break;
                        case 6:
                        if ($dia[$i] == "true") {
                          $SQL_fecha = "UPDATE fecha_hora SET desde='$hora',hasta='$hora',dia_laboral='$falso',horario='$horario',desde2='$hora',hasta2='$hora',desde3='$hora',hasta3='$hora' WHERE fecha='$Domingo'";
                          if ($this->db->query($SQL_fecha)) {
                            $subio = true;
                          }else {
                            $subio = false;
                          }
                        }else {
                          $SQL_fecha = "UPDATE fecha_hora SET desde='$hora',hasta='$hora',dia_laboral='$falso',horario='$horario',desde2='$hora',hasta2='$hora',desde3='$hora',hasta3='$hora' WHERE fecha='$Domingo'";
                          if ($this->db->query($SQL_fecha)) {
                            $subio = true;
                          }else {
                            $subio = false;
                          }
                        }
                          break;

            default:
              return false;
              break;
          }


        }
        $j++;
      }
    }


    if ($horario == 3) {
      $j=7;
      $z=14;
      for ($i=0;$i<=6;$i++)
      {

        if (isset($dias[$i])) {

          if ($desde[$i] != "00:00" || $hasta[$i] != "00:00") {
            $SQL_fecha = "UPDATE fecha_hora SET desde='$desde[$i]',hasta='$hasta[$i]',dia_laboral='$verdadero',horario='$horario',desde2='$desde[$j]',hasta2='$hasta[$j]',desde3='$desde[$z]',hasta3='$hasta[$z]' WHERE fecha='$dias[$i]'";
            if ($this->db->query($SQL_fecha)) {
              $subio = true;
            }else {
              $subio = false;
            }
          }else {
            $SQL_fecha = "UPDATE fecha_hora SET desde='$hora',hasta='$hora',horario='$horario',desde2='$hora',hasta2='$hora',desde3='$hora',hasta3='$hora' WHERE fecha='$dia[$i]'";
            if ($this->db->query($SQL_fecha)) {
              $subio = true;
            }else {
              $subio = false;
            }
          }
        }else {

          switch ($i) {
            case 0:
            if ($dia[$i] == "true") {
              $SQL_fecha = "UPDATE fecha_hora SET desde='$hora',hasta='$hora',dia_laboral='$falso',horario='$horario',desde2='$hora',hasta2='$hora',desde3='$hora',hasta3='$hora' WHERE fecha='$Lunes'";
              if ($this->db->query($SQL_fecha)) {
                $subio = true;
              }else {
                $subio = false;
              }
            }else {
              $SQL_fecha = "UPDATE fecha_hora SET desde='$hora',hasta='$hora',dia_laboral='$falso',horario='$horario',desde2='$hora',hasta2='$hora',desde3='$hora',hasta3='$hora' WHERE fecha='$Lunes'";
              if ($this->db->query($SQL_fecha)) {
                $subio = true;
              }else {
                $subio = false;
              }
            }
              break;
              case 1:
              if ($dia[$i] == "true") {
                $SQL_fecha = "UPDATE fecha_hora SET desde='$hora',hasta='$hora',dia_laboral='$falso',horario='$horario',desde2='$hora',hasta2='$hora',desde3='$hora',hasta3='$hora' WHERE fecha='$Martes'";
                if ($this->db->query($SQL_fecha)) {
                  $subio = true;
                }else {
                  $subio = false;
                }
              }else {
                $SQL_fecha = "UPDATE fecha_hora SET desde='$hora',hasta='$hora',dia_laboral='$falso',horario='$horario',desde2='$hora',hasta2='$hora',desde3='$hora',hasta3='$hora' WHERE fecha='$Martes'";
                if ($this->db->query($SQL_fecha)) {
                  $subio = true;
                }else {
                  $subio = false;
                }
              }
                break;
                case 2:
                if ($dia[$i] == "true") {
                  $SQL_fecha = "UPDATE fecha_hora SET desde='$hora',hasta='$hora',dia_laboral='$falso',horario='$horario',desde2='$hora',hasta2='$hora',desde3='$hora',hasta3='$hora' WHERE fecha='$Miercoles'";
                  if ($this->db->query($SQL_fecha)) {
                    $subio = true;
                  }else {
                    $subio = false;
                  }
                }else {
                  $SQL_fecha = "UPDATE fecha_hora SET desde='$hora',hasta='$hora',dia_laboral='$falso',horario='$horario',desde2='$hora',hasta2='$hora',desde3='$hora',hasta3='$hora' WHERE fecha='$Miercoles'";
                  if ($this->db->query($SQL_fecha)) {
                    $subio = true;
                  }else {
                    $subio = false;
                  }
                }
                  break;
                  case 3:
                  if ($dia[$i] == "true") {
                    $SQL_fecha = "UPDATE fecha_hora SET desde='$hora',hasta='$hora',dia_laboral='$falso',horario='$horario',desde2='$hora',hasta2='$hora',desde3='$hora',hasta3='$hora' WHERE fecha='$Jueves'";
                    if ($this->db->query($SQL_fecha)) {
                      $subio = true;
                    }else {
                      $subio = false;
                    }
                  }else {
                    $SQL_fecha = "UPDATE fecha_hora SET desde='$hora',hasta='$hora',dia_laboral='$falso',horario='$horario',desde2='$hora',hasta2='$hora',desde3='$hora',hasta3='$hora' WHERE fecha='$Jueves'";
                    if ($this->db->query($SQL_fecha)) {
                      $subio = true;
                    }else {
                      $subio = false;
                    }
                  }
                    break;
                    case 4:
                    if ($dia[$i] == "true") {
                      $SQL_fecha = "UPDATE fecha_hora SET desde='$hora',hasta='$hora',dia_laboral='$falso',horario='$horario',desde2='$hora',hasta2='$hora',desde3='$hora',hasta3='$hora' WHERE fecha='$Viernes'";
                      if ($this->db->query($SQL_fecha)) {
                        $subio = true;
                      }else {
                        $subio = false;
                      }
                    }else {
                      $SQL_fecha = "UPDATE fecha_hora SET desde='$hora',hasta='$hora',dia_laboral='$falso',horario='$horario',desde2='$hora',hasta2='$hora',desde3='$hora',hasta3='$hora' WHERE fecha='$Viernes'";
                      if ($this->db->query($SQL_fecha)) {
                        $subio = true;
                      }else {
                        $subio = false;
                      }
                    }
                      break;
                      case 5:
                      if ($dia[$i] == "true") {
                        $SQL_fecha = "UPDATE fecha_hora SET desde='$hora',hasta='$hora',dia_laboral='$falso',horario='$horario',desde2='$hora',hasta2='$hora',desde3='$hora',hasta3='$hora' WHERE fecha='$Sabado'";
                        if ($this->db->query($SQL_fecha)) {
                          $subio = true;
                        }else {
                          $subio = false;
                        }
                      }else {
                        $SQL_fecha = "UPDATE fecha_hora SET desde='$hora',hasta='$hora',dia_laboral='$falso',horario='$horario',desde2='$hora',hasta2='$hora',desde3='$hora',hasta3='$hora' WHERE fecha='$Sabado'";
                        if ($this->db->query($SQL_fecha)) {
                          $subio = true;
                        }else {
                          $subio = false;
                        }
                      }
                        break;
                        case 6:
                        if ($dia[$i] == "true") {
                          $SQL_fecha = "UPDATE fecha_hora SET desde='$hora',hasta='$hora',dia_laboral='$falso',horario='$horario',desde2='$hora',hasta2='$hora',desde3='$hora',hasta3='$hora' WHERE fecha='$Domingo'";
                          if ($this->db->query($SQL_fecha)) {
                            $subio = true;
                          }else {
                            $subio = false;
                          }
                        }else {
                          $SQL_fecha = "UPDATE fecha_hora SET desde='$hora',hasta='$hora',dia_laboral='$falso',horario='$horario',desde2='$hora',hasta2='$hora',desde3='$hora',hasta3='$hora' WHERE fecha='$Domingo'";
                          if ($this->db->query($SQL_fecha)) {
                            $subio = true;
                          }else {
                            $subio = false;
                          }
                        }
                          break;

            default:
              return false;
              break;
          }


        }
        $j++;
        $z++;
      }
    }

    $year_actual = date('Y');

    $foto_dueno = "./uploads/".$year_actual."/foto_dueno/";
    $foto_credencial = "./uploads/".$year_actual."/credencial/";
    $foto_domicilio = "./uploads/".$year_actual."/domicilio/";
    $foto_copriscam = "./uploads/".$year_actual."/copriscam/";
    $foto_lugar = "./uploads/".$year_actual."/lugar/";
    $foto_estructura = "./uploads/".$year_actual."/estructura/";




    if ($subio) {

      $file_name = $this->cargar_archivo($id,$foto_dueno);
      $this->cargar_archivo2($id,$foto_credencial,2);
      $this->cargar_archivo2($id,$foto_domicilio,3);
      $this->cargar_archivo2($id,$foto_copriscam,4);
      $this->cargar_archivo2($id,$foto_lugar,5);
      $this->cargar_archivo2($id,$foto_estructura,6);
      $actualizar['nombre_archivo'] = $file_name;
    }

    if ($subio) {
      $actualizado = "actualizado";
      header("Location:". base_url(). "Comerciante_data_controller/comerciante_data/". $id ."/?actualizado=". $actualizado);
    }






  }

  function cargar_archivo($nombre_foto = '',$lugar = '') {

        $mi_archivo = 'nombre_archivo1';
        $config['upload_path'] = $lugar;
        $config['allowed_types'] = "gif|jpg|png";
        $config['file_name'] = $nombre_foto;
        $config['max_size'] = "50000";
        $config['overwrite'] = true;


        $this->load->library('upload', $config);

        if (!$this->upload->do_upload($mi_archivo)) {
            //*** ocurrio un error
            $data['uploadError'] = $this->upload->display_errors();
        }

        $file_data = $this->upload->data();
        return $file_data['file_name'];
    }

    function cargar_archivo2($nombre_foto = '',$lugar = '',$i = '') {

          $mi_archivo = 'nombre_archivo'.$i;
          $config['upload_path'] = $lugar;
          $config['allowed_types'] = "gif|jpg|png|pdf";
          $config['file_name'] = $nombre_foto;
          $config['max_size'] = "50000";
          $config['overwrite'] = true;


          $this->upload->initialize($config);

          if (!$this->upload->do_upload($mi_archivo)) {
              //*** ocurrio un error
              $data['uploadError'] = $this->upload->display_errors();
          }

          $file_data = $this->upload->data();
          return $file_data['file_name'];
      }

      function getTagComparar($tag = ''){
        $result =  $this->db->query("SELECT * FROM tagslist WHERE tag = '" . $tag . "' LIMIT 1");
        if($result->num_rows() > 0){
            return true;
        }else{
          return false;
        }
      }

      function setTag($tag = ''){
        $SQL = "INSERT INTO tagslist(id,tag) VALUES (null,'$tag')";

        if ($this->db->query($SQL)){
          return true;
        }else {
          return false;
        }
      }

}
