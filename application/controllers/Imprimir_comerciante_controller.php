<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Imprimir_comerciante_controller extends CI_Controller{


  function Imprimir($id= '')
  {

    if ($this->session->userdata('login')) {

      $this->load->model('Imprimir_comerciante_model');
      $fila = $this->Imprimir_comerciante_model->getImprimirComerciante($id);
      $result = $this->Imprimir_comerciante_model->getComercianteDataHorario($id);
      $data_comerciante = array('consulta' => $fila, 'hora' => $result, 'title' => 'Imprimir ' . $fila->nombre);

      if ($fila->estado != "Inactivo" && $fila->estado != "Rechazado") {
        $this->load->view('imprimir_tarjeton/Imprimir_tarjeton', $data_comerciante);
      }else {
        $this->load->view("404/404");
      }

    }else{
      $data = array('title' => 'Login');
      $this->load->view("login/Login" , $data);
    }


  }

}
