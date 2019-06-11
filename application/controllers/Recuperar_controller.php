<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Recuperar_controller extends CI_Controller{


  function index()
  {
    $data = array('title' => 'Dashboard');
    if ($this->session->userdata('login')) {

      header("Location: " . base_url());
    }else{
      $data = array('title' => 'Recuperar Contraseña');
      $this->load->view("recuperar/Recuperar" , $data);
    }

    $this->load->view("Home");
  }

  function recuperar(){
    $email = $this->input->post('email');

    $this->load->model('Master');
    $fila_master = $this->Master->getMaster($email);

    if($fila_master != null){

      $this->load->library('email');

      $this->email->from('soporte@carmen.gob.mx', 'Soporte');
      $this->email->to($fila_master->email);
      $this->email->subject('Recuperar contraseña');
      $this->email->message('Ha solicitado la recuperacion de contraseña, su contraseña es: '.$fila_master->pass);
      $this->email->send();
      header("Location: " . base_url());
    }else{
      $error = true;
      header("Location: " . base_url() ."Recuperar_controller/?error=". $error );
    }
  }

}
