<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *
 */
class Create_comerciante_controller extends CI_Controller
{

  public function index()
  {
    $data = array('title' => 'Alta de Comerciante');
    if ($this->session->userdata('login')) {

      $userName = $this->session->userdata('userName');
      $correo = $this->session->userdata('email');
      $nivel = $this->session->userdata('nivel');
      $img = $this->session->userdata('img');
      $dataUser = array('nombre' => $userName, 'correo' => $correo, 'nivel' => $nivel, 'img' => $img);

      if ($nivel != 3) {

        $this->load->view("header/Header", $data);
        $this->load->view("nav/Nav", $dataUser);
        //El unico que cambia del dashboard
        $this->load->model('Valores_create_model');
        $giros = $this->Valores_create_model->getGiros();
        $estructuras = $this->Valores_create_model->getEstructuras();
        $permisos = $this->Valores_create_model->getPermisos();
        $tags = $this->Valores_create_model->getTags();
        $array_datos = array('consulta' => $giros, 'consulta2' => $estructuras, 'consulta3' => $permisos, 'consulta4' => $tags);
        $array_datos2 = array('consulta4' => $tags);

        $this->load->view("create_comerciante/Create_comerciante", $array_datos);
        //------------------------------------
        $this->load->view("footer_create_comerciante/Footer_create_comerciante", $array_datos2);
      }else {
        $this->load->view("404/404");
      }

    }else{
      $data = array('title' => 'Login');
      $this->load->view("login/Login" , $data);
    }

    $this->load->view("Home");
  }

  public function Create_comerciante(){

      $foto_credencial = "./uploads/2019/credencial/";
      $foto_domicilio = "./uploads/2019/domicilio/";
      $foto_copriscam = "./uploads/2019/copriscam/";
      $foto_lugar = "./uploads/2019/lugar/";
      $foto_estructura = "./uploads/2019/estructura/";
      $foto_dueno = "./uploads/2019/foto_dueno/";


    $comerciante = $this->input->post();
    if ($comerciante['curp'] != '') {
      $validate = $this->comparar($comerciante['curp']);
    }

    if ($validate == true) {
      $error = "curp";
      echo $error;
      return;
        //header("Location:". base_url(). "Create_comerciante_controller/"."?creado=". $error);
    }else {
      if ($comerciante['email'] != '') {
        // code...
        $validate = $this->compararCorreo($comerciante['email']);
        if ($validate == true) {
          $error = "email";
          header("Location:". base_url(). "Create_comerciante_controller/"."?creado=". $error);
        }else {
          $this->load->model('Comerciante_create_model');



          $bool = $this->Comerciante_create_model->insert($comerciante);

          if ($bool) {
            $creado = "creado";
            echo $creado;
            //header("Location:". base_url(). "Create_comerciante_controller/"."?creado=". $creado);
          }else{
            $creado = "error_creado";
            echo $creado;
            //header("Location:". base_url(). "Create_comerciante_controller/"."?creado=". $creado);
          }
        }
      }else {
        $this->load->model('Comerciante_create_model');



        $bool = $this->Comerciante_create_model->insert($comerciante);

        if ($bool) {
          $creado = "creado";
          echo $creado;
          //header("Location:". base_url(). "Create_comerciante_controller/"."?creado=". $creado);
        }else{
          $creado = "error_creado";
          echo $creado;
          //header("Location:". base_url(). "Create_comerciante_controller/"."?creado=". $creado);
        }
      }

    }
  }




    function comparar($curp = ''){
      $result =  $this->db->query("SELECT * FROM ambulante WHERE curp = '" . $curp . "' LIMIT 1");
      if($result->num_rows() > 0){
          return true;
      }else{
        return false;
      }
    }

    function compararCorreo($correo = ''){
      $result =  $this->db->query("SELECT * FROM ambulante WHERE email = '" . $correo . "' LIMIT 1");
      if($result->num_rows() > 0){
          return true;
      }else{
        return false;
      }
    }


}
