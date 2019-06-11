<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *
 */
class Comerciantes_list_controller extends CI_Controller
{

  public function list()
  {
    if ($this->session->userdata('login')) {

      $userName = $this->session->userdata('userName');
      $correo = $this->session->userdata('email');
      $nivel = $this->session->userdata('nivel');
      $img = $this->session->userdata('img');
      $dataUser = array('nombre' => $userName, 'correo' => $correo, 'nivel' => $nivel, 'img' => $img);

      $data = array('title' => 'Lista de Comerciantes');

        $this->load->view("header/Header", $data);
        $this->load->view("nav/Nav",$dataUser);

        $this->load->model('Comerciantes_list_model');
        $result = $this->Comerciantes_list_model->getComerciantes();
        if ($this->input->post() != null) {
          $post = $this->input->post();
          $year = $post['year'];
        }else {
          $year = null;
        }
        $data_comerciante = array('consulta' => $result, 'nivel' => $nivel);
        //El unico que cambia del dashboard
        $this->load->view("comerciantes_list/Comerciantes_list", $data_comerciante);
        //------------------------------------
        $this->load->view("footer/Footer");

    }else {
      $data = array('title' => 'Login');
      $this->load->view("login/Login" , $data);
    }
  }


}
