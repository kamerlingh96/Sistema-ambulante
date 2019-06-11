<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Carpeta extends CI_Controller{



  function index()
  {
    if ($this->session->userdata('login')) {

      $userName = $this->session->userdata('userName');
      $correo = $this->session->userdata('email');
      $nivel = $this->session->userdata('nivel');
      $img = $this->session->userdata('img');
      $dataUser = array('nombre' => $userName, 'correo' => $correo, 'nivel' => $nivel, 'img' => $img);


      $anio_anterior = date('Y')-1;
      $anio_actual = date('Y');

      if ($anio_actual < $anio_anterior) {
        echo "true";
      }else {
        echo "false";
      }


      echo $anio_actual;
      echo $anio_anterior;
      echo "<br>";

      $anio_actual = date(Y);

      $Num = array("2018","2018","2018","2018","2018","2018","2018","2019","2019","2019","2019","2019","2019");

      $orden = 0;

      foreach ($Num as $key => $value) {
        if ($Num[$key] != $orden) {

        }
      }



      //================================[]=======================================//


      //$config['username'] = $this->config->item('username');
      //$config['password'] = $this->config->item('password');



      //echo $config['username'];
      //echo $config['password'];


      //================================[]=======================================//


      /*$texto = "Hamburguesas,Hot-dogs,Aguas,Piñas,Verduras,Naranja";

      $porciones = explode(",", $texto);
      foreach ($porciones as $key => $value) {
        echo "<br>";
        $valor[] = $this->getTagComparar($value);
        if ($valor[$key]) {
          echo "si esta". $value;

        }else {
          echo "no esta";
          $tag_result = $this->setTag($value);
          if ($tag_result) {
            echo "Hecho";
          }else {
            echo "No hecho";
          }
        }
      }*/


      //================================[]=======================================//


      /*$actual = "2019";

      $hoy = "2019";

      if ($hoy == $actual) {
        echo "todo normal";
      }else {
        echo "nuevo año";
        $this->load->library('ftp');

        $config['hostname'] = '127.0.0.1';
        $config['username'] = 'kamerlingh';
        $config['password'] = 'k11204030290006';
        $config['port']     = 21;
        $config['debug']	= TRUE;

        $this->ftp->connect($config);
        $result = $this->ftp->mkdir('/Creativo/todo/uploads/'.$hoy.'/');
        //$list['archivos'] = $this->ftp->list_files('/Creativo/todo/uploads/2019/credencial/');
        if ($result) {
          echo "string";
        }

        $this->ftp->close();
      }*/
      //================================[]=======================================//
/*
      $this->load->library('ftp');

      $config['hostname'] = '127.0.0.1';
      $config['username'] = 'kamerlingh';
      $config['password'] = 'k11204030290006';
      $config['port']     = 21;
      $config['debug']	= TRUE;

      $this->ftp->connect($config);
      $result = $this->ftp->mkdir('/Creativo/todo/uploads/2019/credencial/bar/', 0777);
      //$list['archivos'] = $this->ftp->list_files('/Creativo/todo/uploads/2019/credencial/');
      if ($result) {
        echo "string";
      }

      $this->ftp->close();
*/
    }else {
      $data = array('title' => 'Login');
      $this->load->view("login/Login" , $data);
    }
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
