<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Configuracion extends CI_Controller{



  function index()
  {
    if ($this->session->userdata('login')) {

    		//header ("Location: ".base_url()."uploads/respaldo.php"); // Redireccionamos para descargar el Arcivo ZIP

        $userName = $this->session->userdata('userName');
        $correo = $this->session->userdata('email');
        $nivel = $this->session->userdata('nivel');
        $img = $this->session->userdata('img');
        $dataUser = array('nombre' => $userName, 'correo' => $correo, 'nivel' => $nivel, 'img' => $img);

        $data = array('title' => 'Configuración');

        $this->load->view("header/Header", $data);
        $this->load->view("nav/Nav",$dataUser);

        $this->load->view("configuracion/Configuracion",$dataUser);
        //------------------------------------
        $this->load->view("footer/Footer");


    }else {
      $data = array('title' => 'Login');
      $this->load->view("login/Login" , $data);
    }
  }



}
