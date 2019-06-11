<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comerciante_create_model extends CI_Model{

  public function insert($post = null)
  {
    if ($post != null) {
      $id_master = $this->session->userdata('id');
      $user_master = $this->session->userdata('userName');
      $nombre = $post['nombre'];
      $nombre_segundo = $post['nombre_segundo'];
      $email = $post['email'];
      $tel = $post['tel'];
      $cel = $post['cel'];
      $curp = $post['curp'];
      $genero = $post['genero'];
      $giro = $post['giro'];
      $tags = $post['tags'];
      $tipo = $post['tipo'];
      if ($post['tarjeton'] != null) {
        $tarjeton = "Si";
      }else {
        $tarjeton = "No";
      }

      if ($post['sindicato'] != null) {
        $sindicato = "Si";
      }else {
        $sindicato = "No";
      }
      $tarjetonsindicato = $tarjeton."/".$sindicato;
      $horario = $post['horario'];
      $dias = $post['dias'];
      $desde = $post['desde'];
      $hasta = $post['hasta'];
      $descripcion = $post['descripcion'];
      $direccion = $post['direccion'];
      $zona = $post['zona'];
      $coordenadas = $post['coordenadas'];
      $metros = $post['metros'];
      $estructura = $post['estructura'];
      $estado = $post['estado'];
      $comentario = $post['comentario'];

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

      $vigencia = date("Y");

      date_default_timezone_set('America/Mexico_City');
      $fecha_creado = date("Y-m-d");

      $SQL = "INSERT INTO ambulante(id,nombre,nombre_segundo,email,curp,telefono,celular,genero,giro,tags,tipo,tarjetonsindicato,horario,descripcion,zona,direccion,coordenadas,metros,estructura,comentario,estado,vigencia,fecha_creado) VALUES (null,'$nombre','$nombre_segundo','$email','$curp','$tel','$cel','$genero','$giro','$tags','$tipo','$tarjetonsindicato','$horario','$descripcion','$zona','$direccion','$coordenadas','$metros','$estructura','$comentario','$estado','$vigencia','$fecha_creado')";

      if ($this->db->query($SQL)) {

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





        $this->load->model('Create_fecha_hora_model');
        $fila_curp = $this->Create_fecha_hora_model->fecha_hora($curp);

        $year_renovacion = date("Y")-1;

        if ($post['estado'] == "Renovante") {
          $this->load->model('Renovacion_model');
          $this->Renovacion_model->renovante($fila_curp->id,$year_renovacion);
        }else {

        }

      $archivo = $fila_curp->id;

      $year = date("Y");

      $foto_credencial = "./uploads/". $year ."/credencial/";
      $foto_domicilio = "./uploads/". $year ."/domicilio/";
      $foto_copriscam = "./uploads/". $year ."/copriscam/";
      $foto_lugar = "./uploads/". $year ."/lugar/";
      $foto_estructura = "./uploads/". $year ."/estructura/";
      $foto_dueno = "./uploads/". $year ."/foto_dueno/";


        $file_name = $this->cargar_archivo1($archivo,$foto_dueno);
        $this->cargar_archivo2($archivo,$foto_credencial);
        $this->cargar_archivo3($archivo,$foto_domicilio);
        $this->cargar_archivo4($archivo,$foto_copriscam);
        $this->cargar_archivo5($archivo,$foto_lugar);
        $this->cargar_archivo6($archivo,$foto_estructura);
        $data['img'] = $file_name;
        $data['pdf'] = $archivo.".pdf";
        $data['png'] = $archivo.".png";

        $this->db->where('id', $fila_curp->id);
        $this->db->update('ambulante', $data);

        if($fila_curp != null){
          $id_comerciante = $fila_curp->id;


          $SQL_creador = "INSERT INTO creados(id,id_master,nombre_master,id_comerciante) VALUES (null,'$id_master','$user_master','$id_comerciante')";

          if ($this->db->query($SQL_creador)) {
            if ($horario == 1) {
              for ($i=0; $i <= 6 ; $i++) {
                if (isset($dias[$i])) {
                  $SQL_fecha = "INSERT INTO fecha_hora(id_comerciante,fecha,desde,hasta,dia_laboral,horario,desde2,hasta2,desde3,hasta3) VALUES ($id_comerciante,'$dias[$i]','$desde[$i]','$hasta[$i]', '$verdadero','$horario','$hora','$hora','$hora','$hora')";
                  if ($this->db->query($SQL_fecha)) {
                    $valor = true;
                  }else {
                    $valor = false;
                  }
                }else {
                  switch ($i) {
                    case 0:
                    $SQL_fecha = "INSERT INTO fecha_hora(id_comerciante,fecha,desde,hasta,dia_laboral,horario,desde2,hasta2,desde3,hasta3) VALUES ($id_comerciante,'$Lunes','$hora','$hora', '$falso','$horario','$hora','$hora','$hora','$hora')";
                    if ($this->db->query($SQL_fecha)) {
                      $valor = true;
                    }else {
                      $valor = false;
                    }
                    break;
                    case 1:
                    $SQL_fecha = "INSERT INTO fecha_hora(id_comerciante,fecha,desde,hasta,dia_laboral,horario,desde2,hasta2,desde3,hasta3) VALUES ($id_comerciante,'$Martes','$hora','$hora', '$falso','$horario','$hora','$hora','$hora','$hora')";
                    if ($this->db->query($SQL_fecha)) {
                      $valor = true;
                    }else {
                      $valor = false;
                    }
                    break;
                    case 2:
                    $SQL_fecha = "INSERT INTO fecha_hora(id_comerciante,fecha,desde,hasta,dia_laboral,horario,desde2,hasta2,desde3,hasta3) VALUES ($id_comerciante,'$Miercoles','$hora','$hora', '$falso','$horario','$hora','$hora','$hora','$hora')";
                    if ($this->db->query($SQL_fecha)) {
                      $valor = true;
                    }else {
                      $valor = false;
                    }
                    break;
                    case 3:
                    $SQL_fecha = "INSERT INTO fecha_hora(id_comerciante,fecha,desde,hasta,dia_laboral,horario,desde2,hasta2,desde3,hasta3) VALUES ($id_comerciante,'$Jueves','$hora','$hora', '$falso','$horario','$hora','$hora','$hora','$hora')";
                    if ($this->db->query($SQL_fecha)) {
                      $valor = true;
                    }else {
                      $valor = false;
                    }
                    break;
                    case 4:
                    $SQL_fecha = "INSERT INTO fecha_hora(id_comerciante,fecha,desde,hasta,dia_laboral,horario,desde2,hasta2,desde3,hasta3) VALUES ($id_comerciante,'$Viernes','$hora','$hora', '$falso','$horario','$hora','$hora','$hora','$hora')";
                    if ($this->db->query($SQL_fecha)) {
                      $valor = true;
                    }else {
                      $valor = false;
                    }
                    break;
                    case 5:
                    $SQL_fecha = "INSERT INTO fecha_hora(id_comerciante,fecha,desde,hasta,dia_laboral,horario,desde2,hasta2,desde3,hasta3) VALUES ($id_comerciante,'$Sabado','$hora','$hora', '$falso','$horario','$hora','$hora','$hora','$hora')";
                    if ($this->db->query($SQL_fecha)) {
                      $valor = true;
                    }else {
                      $valor = false;
                    }
                    break;
                    case 6:
                    $SQL_fecha = "INSERT INTO fecha_hora(id_comerciante,fecha,desde,hasta,dia_laboral,horario,desde2,hasta2,desde3,hasta3) VALUES ($id_comerciante,'$Domingo','$hora','$hora', '$falso','$horario','$hora','$hora','$hora','$hora')";
                    if ($this->db->query($SQL_fecha)) {
                      $valor = true;
                    }else {
                      $valor = false;
                    }
                    break;
                    default:
                    return false;
                    break;
                  }
                }
              }
            }else{
              if ($horario == 2) {
                for ($i=0; $i <= 6 ; $i++) {
                  $j = $i + 7;
                  $z = $j + 7;
                  if (isset($dias[$i])) {
                    $SQL_fecha = "INSERT INTO fecha_hora(id_comerciante,fecha,desde,hasta,dia_laboral,horario,desde2,hasta2,desde3,hasta3) VALUES ($id_comerciante,'$dias[$i]','$desde[$i]','$hasta[$i]', '$verdadero','$horario','$desde[$j]','$hasta[$j]','$hora','$hora')";
                    if ($this->db->query($SQL_fecha)) {
                      $valor = true;
                    }else {
                      $valor = false;
                    }
                  }else {
                    switch ($i) {
                      case 0:
                      $SQL_fecha = "INSERT INTO fecha_hora(id_comerciante,fecha,desde,hasta,dia_laboral,horario,desde2,hasta2,desde3,hasta3) VALUES ($id_comerciante,'$Lunes','$hora','$hora', '$falso','$horario','$hora','$hora','$hora','$hora')";
                      if ($this->db->query($SQL_fecha)) {
                        $valor = true;
                      }else {
                        $valor = false;
                      }
                      break;
                      case 1:
                      $SQL_fecha = "INSERT INTO fecha_hora(id_comerciante,fecha,desde,hasta,dia_laboral,horario,desde2,hasta2,desde3,hasta3) VALUES ($id_comerciante,'$Martes','$hora','$hora', '$falso','$horario','$hora','$hora','$hora','$hora')";
                      if ($this->db->query($SQL_fecha)) {
                        $valor = true;
                      }else {
                        $valor = false;
                      }
                      break;
                      case 2:
                      $SQL_fecha = "INSERT INTO fecha_hora(id_comerciante,fecha,desde,hasta,dia_laboral,horario,desde2,hasta2,desde3,hasta3) VALUES ($id_comerciante,'$Miercoles','$hora','$hora', '$falso','$horario','$hora','$hora','$hora','$hora')";
                      if ($this->db->query($SQL_fecha)) {
                        $valor = true;
                      }else {
                        $valor = false;
                      }
                      break;
                      case 3:
                      $SQL_fecha = "INSERT INTO fecha_hora(id_comerciante,fecha,desde,hasta,dia_laboral,horario,desde2,hasta2,desde3,hasta3) VALUES ($id_comerciante,'$Jueves','$hora','$hora', '$falso','$horario','$hora','$hora','$hora','$hora')";
                      if ($this->db->query($SQL_fecha)) {
                        $valor = true;
                      }else {
                        $valor = false;
                      }
                      break;
                      case 4:
                      $SQL_fecha = "INSERT INTO fecha_hora(id_comerciante,fecha,desde,hasta,dia_laboral,horario,desde2,hasta2,desde3,hasta3) VALUES ($id_comerciante,'$Viernes','$hora','$hora', '$falso','$horario','$hora','$hora','$hora','$hora')";
                      if ($this->db->query($SQL_fecha)) {
                        $valor = true;
                      }else {
                        $valor = false;
                      }
                      break;
                      case 5:
                      $SQL_fecha = "INSERT INTO fecha_hora(id_comerciante,fecha,desde,hasta,dia_laboral,horario,desde2,hasta2,desde3,hasta3) VALUES ($id_comerciante,'$Sabado','$hora','$hora', '$falso','$horario','$hora','$hora','$hora','$hora')";
                      if ($this->db->query($SQL_fecha)) {
                        $valor = true;
                      }else {
                        $valor = false;
                      }
                      break;
                      case 6:
                      $SQL_fecha = "INSERT INTO fecha_hora(id_comerciante,fecha,desde,hasta,dia_laboral,horario,desde2,hasta2,desde3,hasta3) VALUES ($id_comerciante,'$Domingo','$hora','$hora', '$falso','$horario','$hora','$hora','$hora','$hora')";
                      if ($this->db->query($SQL_fecha)) {
                        $valor = true;
                      }else {
                        $valor = false;
                      }
                      break;
                      default:
                      return false;
                      break;
                    }
                  }
                }
              }else {
                if ($horario == 3) {
                  for ($i=0; $i <= 6 ; $i++) {
                    $j = $i + 7;
                    $z = $j + 7;
                    if (isset($dias[$i])) {
                      $SQL_fecha = "INSERT INTO fecha_hora(id_comerciante,fecha,desde,hasta,dia_laboral,horario,desde2,hasta2,desde3,hasta3) VALUES ($id_comerciante,'$dias[$i]','$desde[$i]','$hasta[$i]', '$verdadero','$horario','$desde[$j]','$hasta[$j]','$desde[$z]','$hasta[$z]')";
                      if ($this->db->query($SQL_fecha)) {
                        $valor = true;
                      }else {
                        $valor = false;
                      }
                    }else {
                      switch ($i) {
                        case 0:
                        $SQL_fecha = "INSERT INTO fecha_hora(id_comerciante,fecha,desde,hasta,dia_laboral,horario,desde2,hasta2,desde3,hasta3) VALUES ($id_comerciante,'$Lunes','$hora','$hora', '$falso','$horario','$hora','$hora','$hora','$hora')";
                        if ($this->db->query($SQL_fecha)) {
                          $valor = true;
                        }else {
                          $valor = false;
                        }
                        break;
                        case 1:
                        $SQL_fecha = "INSERT INTO fecha_hora(id_comerciante,fecha,desde,hasta,dia_laboral,horario,desde2,hasta2,desde3,hasta3) VALUES ($id_comerciante,'$Martes','$hora','$hora', '$falso','$horario','$hora','$hora','$hora','$hora')";
                        if ($this->db->query($SQL_fecha)) {
                          $valor = true;
                        }else {
                          $valor = false;
                        }
                        break;
                        case 2:
                        $SQL_fecha = "INSERT INTO fecha_hora(id_comerciante,fecha,desde,hasta,dia_laboral,horario,desde2,hasta2,desde3,hasta3) VALUES ($id_comerciante,'$Miercoles','$hora','$hora', '$falso','$horario','$hora','$hora','$hora','$hora')";
                        if ($this->db->query($SQL_fecha)) {
                          $valor = true;
                        }else {
                          $valor = false;
                        }
                        break;
                        case 3:
                        $SQL_fecha = "INSERT INTO fecha_hora(id_comerciante,fecha,desde,hasta,dia_laboral,horario,desde2,hasta2,desde3,hasta3) VALUES ($id_comerciante,'$Jueves','$hora','$hora', '$falso','$horario','$hora','$hora','$hora','$hora')";
                        if ($this->db->query($SQL_fecha)) {
                          $valor = true;
                        }else {
                          $valor = false;
                        }
                        break;
                        case 4:
                        $SQL_fecha = "INSERT INTO fecha_hora(id_comerciante,fecha,desde,hasta,dia_laboral,horario,desde2,hasta2,desde3,hasta3) VALUES ($id_comerciante,'$Viernes','$hora','$hora', '$falso','$horario','$hora','$hora','$hora','$hora')";
                        if ($this->db->query($SQL_fecha)) {
                          $valor = true;
                        }else {
                          $valor = false;
                        }
                        break;
                        case 5:
                        $SQL_fecha = "INSERT INTO fecha_hora(id_comerciante,fecha,desde,hasta,dia_laboral,horario,desde2,hasta2,desde3,hasta3) VALUES ($id_comerciante,'$Sabado','$hora','$hora', '$falso','$horario','$hora','$hora','$hora','$hora')";
                        if ($this->db->query($SQL_fecha)) {
                          $valor = true;
                        }else {
                          $valor = false;
                        }
                        break;
                        case 6:
                        $SQL_fecha = "INSERT INTO fecha_hora(id_comerciante,fecha,desde,hasta,dia_laboral,horario,desde2,hasta2,desde3,hasta3) VALUES ($id_comerciante,'$Domingo','$hora','$hora', '$falso','$horario','$hora','$hora','$hora','$hora')";
                        if ($this->db->query($SQL_fecha)) {
                          $valor = true;
                        }else {
                          $valor = false;
                        }
                        break;
                        default:
                        return false;
                        break;
                      }
                    }
                  }
                }
              }
            }
          }else {
            header("Location: " . base_url());
          }








        }else{
          header("Location: " . base_url());
        }

        return true;
      }
    }
    return false;
  }

  function cargar_archivo1($nombre_foto = '',$lugar1 = '') {

        $mi_archivo1 = 'nombre_archivo1';
        $config1['upload_path'] = $lugar1;
        $config1['allowed_types'] = "gif|jpg|png";
        $config1['file_name'] = $nombre_foto;
        $config1['max_size'] = "50000";

        $this->load->library('upload', $config1);

        if (!$this->upload->do_upload($mi_archivo1)) {
            //*** ocurrio un error
            $data['uploadError'] = $this->upload->display_errors();
            echo $this->upload->display_errors();
            return;
        }

        $file_data = $this->upload->data();
        return $file_data['file_name'];
    }

    function cargar_archivo2($nombre_foto = '',$lugar2 = '') {

          $mi_archivo2 = 'nombre_archivo2';
          $config2['upload_path'] = $lugar2;
          $config2['allowed_types'] = "gif|jpg|png|pdf";
          $config2['file_name'] = $nombre_foto;
          $config2['max_size'] = "50000";

          $this->upload->initialize($config2);

          if (!$this->upload->do_upload($mi_archivo2)) {
              //*** ocurrio un error
              $data['uploadError'] = $this->upload->display_errors();
              echo $this->upload->display_errors();
              return;
          }
          return;
      }

      function cargar_archivo3($nombre_foto = '',$lugar3 = '') {

            $mi_archivo3 = 'nombre_archivo3';
            $config3['upload_path'] = $lugar3;
            $config3['allowed_types'] = "gif|jpg|png|pdf";
            $config3['file_name'] = $nombre_foto;
            $config3['max_size'] = "50000";

            $this->upload->initialize($config3);

            if (!$this->upload->do_upload($mi_archivo3)) {
                //*** ocurrio un error
                $data['uploadError'] = $this->upload->display_errors();
                echo $this->upload->display_errors();
                return;
            }
            return;
        }

        function cargar_archivo4($nombre_foto = '',$lugar4 = '') {

              $mi_archivo4 = 'nombre_archivo4';
              $config4['upload_path'] = $lugar4;
              $config4['allowed_types'] = "gif|jpg|png|pdf";
              $config4['file_name'] = $nombre_foto;
              $config4['max_size'] = "50000";

              $this->upload->initialize($config4);

              if (!$this->upload->do_upload($mi_archivo4)) {
                  //*** ocurrio un error

                  return;
              }
              return;
          }

          function cargar_archivo5($nombre_foto = '',$lugar5 = '') {

                $mi_archivo5 = 'nombre_archivo5';
                $config5['upload_path'] = $lugar5;
                $config5['allowed_types'] = "gif|jpg|png|pdf";
                $config5['file_name'] = $nombre_foto;
                $config5['max_size'] = "50000";

                $this->upload->initialize($config5);

                if (!$this->upload->do_upload($mi_archivo5)) {
                    //*** ocurrio un error
                    $data['uploadError'] = $this->upload->display_errors();
                    echo $this->upload->display_errors();
                    return;
                }
                return;
            }

            function cargar_archivo6($nombre_foto = '',$lugar6 = '') {

                  $mi_archivo6 = 'nombre_archivo6';
                  $config6['upload_path'] = $lugar6;
                  $config6['allowed_types'] = "gif|jpg|png|pdf";
                  $config6['file_name'] = $nombre_foto;
                  $config6['max_size'] = "50000";

                  $this->upload->initialize($config6);

                  if (!$this->upload->do_upload($mi_archivo6)) {
                      //*** ocurrio un error
                      $data['uploadError'] = $this->upload->display_errors();
                      echo $this->upload->display_errors();
                      return;
                  }
                  return;
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
