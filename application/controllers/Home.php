<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *
 */
class Home extends CI_Controller
{

  public function index()
  {
    $data = array('title' => 'Dashboard');
    if ($this->session->userdata('login')) {

      $userName = $this->session->userdata('userName');
      $correo = $this->session->userdata('email');
      $nivel = $this->session->userdata('nivel');
      $img = $this->session->userdata('img');


      $this->load->model('Comerciantes_list_model');

      $result = $this->Comerciantes_list_model->getComerciantes();

      $resultActivos = $this->Comerciantes_list_model->getComerciantesActivos();
      $activos = 0;
      foreach ($resultActivos->result() as $value) {
        $activos++;
      }

      $resultInactivos = $this->Comerciantes_list_model->getComerciantesInactivos();
      $inactivos = 0;
      foreach ($resultInactivos->result() as $value) {
        $inactivos++;
      }

      $resultRechazados = $this->Comerciantes_list_model->getComerciantesRechazados();
      $rechazados = 0;
      foreach ($resultRechazados->result() as $value) {
        $rechazados++;
      }

      $resultVencidos = $this->Comerciantes_list_model->getComerciantesVencidos();
      $vencidos = 0;
      foreach ($resultVencidos->result() as $value) {
        $vencidos++;
      }

      $resultMesActual = $this->Comerciantes_list_model->getComerciantesMesActual();
      $mesactual = 0;
      foreach ($resultMesActual->result() as $value) {
        $mesactual++;
      }

      $resultInspeccionesHoy = $this->Comerciantes_list_model->getComerciantesInspeccionesHoy();
      $inspeccioneshoy = 0;
      foreach ($resultInspeccionesHoy->result() as $value) {
        $inspeccioneshoy++;
      }

      $resultInspeccionesSemana = $this->Comerciantes_list_model->getComerciantesInspeccionesSemana();
      $inspeccionessemana = 0;
      foreach ($resultInspeccionesSemana->result() as $value) {
        $inspeccionessemana++;
      }

      $resultInspeccionesMesActual = $this->Comerciantes_list_model->getComerciantesInspeccionesMesActual();
      $inspeccionesmesactual = 0;
      foreach ($resultInspeccionesMesActual->result() as $value) {
        $inspeccionesmesactual++;
      }


      //date_default_timezone_set('America/Mexico_City');
      //$fecha_creado = date("Y-m-d");


      $dataUser = array('consulta' => $result, 'nombre' => $userName, 'correo' => $correo, 'nivel' => $nivel, 'img' => $img, 'activos' => $activos, 'vencidos' => $vencidos, 'mesactual' => $mesactual, 'inspeccioneshoy' => $inspeccioneshoy, 'inspeccionessemana' => $inspeccionessemana, 'inspeccionesmesactual' => $inspeccionesmesactual);

      $this->load->view("header/Header", $data);
      $this->load->view("nav/Nav", $dataUser);
      //El unico que cambia del dashboard
      $this->load->view("dashboard/Dashboard",$dataUser);
      //------------------------------------
      $this->load->view("footer/Footer");
    }else{
      $data = array('title' => 'Iniciar Sesión');
      $this->load->view("login2/Login2" , $data);
    }

    $this->load->view("Home");
  }


}
