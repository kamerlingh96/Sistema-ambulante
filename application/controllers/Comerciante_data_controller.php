<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comerciante_data_controller extends CI_Controller{


  public function comerciante_data($id =''){
    if ($this->session->userdata('login')) {

      $userName = $this->session->userdata('userName');
      $correo = $this->session->userdata('email');
      $nivel = $this->session->userdata('nivel');
      $img = $this->session->userdata('img');
      $dataUser = array('nombre' => $userName, 'correo' => $correo, 'nivel' => $nivel, 'img' => $img);


      $this->load->model('Comerciante_data_model');
      $fila = $this->Comerciante_data_model->getComercianteData($id);
      $result = $this->Comerciante_data_model->getComercianteDataHorario($id);
      $creado = $this->Comerciante_data_model->getCreado($id);
      $this->load->model('Valores_create_model');
      $giros = $this->Valores_create_model->getGiros();
      $estructuras = $this->Valores_create_model->getEstructuras();
      $permisos = $this->Valores_create_model->getPermisos();
      $tags = $this->Valores_create_model->getTags();

      $this->load->model('Renovacion_model');
      $years_renovados = $this->Renovacion_model->renovaciones($id);


      $array_datos2 = array('consulta4' => $tags);

      $data_comerciante = array('consulta' => $fila, 'hora' => $result, 'consulta1' => $giros, 'consulta2' => $estructuras, 'consulta3' => $permisos, 'creador' => $creado, 'nivel' => $nivel, 'consulta5' => $years_renovados);

      $data = array('title' => 'Datos de ' . $fila->nombre );

        $this->load->view("header/Header", $data);
        $this->load->view("nav/Nav", $dataUser);

        //$this->load->model('Comerciantes_list_model');
        //$result = $this->Comerciantes_list_model->getComerciantes();
        //$data_comerciante = array('consulta' => $result);
        //El unico que cambia del dashboard
        $this->load->view("comerciante_data/Comerciante_data",$data_comerciante);
        //------------------------------------
        $this->load->view("footer/Footer",$array_datos2);
      }else {
        $data = array('title' => 'Login');
        $this->load->view("login/Login" , $data);
      }
  }

}
