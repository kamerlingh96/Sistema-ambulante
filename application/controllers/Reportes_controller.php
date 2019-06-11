<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reportes_controller extends CI_Controller{


  function reportes()
  {
    if ($this->session->userdata('login')) {

      $userName = $this->session->userdata('userName');
      $correo = $this->session->userdata('email');
      $nivel = $this->session->userdata('nivel');
      $img = $this->session->userdata('img');
      $dataUser = array('nombre' => $userName, 'correo' => $correo, 'nivel' => $nivel, 'img' => $img);

      $data = array('title' => 'Reportes');

        $this->load->view("header/Header", $data);
        $this->load->view("nav/Nav",$dataUser);


        $this->load->model('Comerciantes_list_model');
        $resultActivos = $this->Comerciantes_list_model->getComerciantesActivos();
        $comentarios = $this->Comerciantes_list_model->getComentarios();

        $this->load->model('Valores_create_model');
        $giros = $this->Valores_create_model->getGiros();
        $tags = $this->Valores_create_model->getTags();
        $estructuras = $this->Valores_create_model->getEstructuras();



        if ($this->input->post()) {
          $filtro = $this->input->post();

          $data_comerciante = array('consulta' => $resultActivos, 'consulta2' => $giros, 'consulta3' => $tags, 'consulta5' => $estructuras,'comentarios6',$comentarios);

          $fecha = $filtro['fecha'];
          $data_comerciante['fecha'] = $fecha;
          $genero = $filtro['genero'];
          $data_comerciante['genero'] = $genero;
          //-----------------------------------------------------//
          if (isset($filtro['giro'])) {
            $cont = 0;
            foreach ($giros->result() as $value) {
              $cont++;
            }
             $giro = $filtro['giro'];
             $giro_select = array();
             for ($i=0; $i <= $cont-1; $i++) {
               if(isset($giro[$i])) {
                   $giro_select[] = $giro[$i];
               }
               else{
                 $giro_select[] = "null";
               }
             }
             $data_comerciante['giros'] = $giro_select;
           }

           //-----------------------------------------------------//
          if (isset($filtro['tags'])) {
            $cont = 0;
            foreach ($tags->result() as $value) {
              $cont++;
            }
            $tags = $filtro['tags'];
            $tag_select = array();
            for ($i=0; $i <= $cont-1; $i++) {
              if(isset($tags[$i])) {
                  $tag_select[] = $tags[$i];
              }
              else{
                $tag_select[] = "null";
              }
            }
            $data_comerciante['tags_s'] = $tag_select;
          }
          //-----------------------------------------------------//
          if (isset($filtro['zona'])) {
            $cont = 0;
            $zona = $filtro['zona'];
            $zona_select = array();
            for ($i=0; $i <= 5; $i++) {
              if(isset($zona[$i])) {
                  $zona_select[] = $zona[$i];
              }
              else{
                $zona_select[] = "null";
              }
            }
            $data_comerciante['zonas'] = $zona_select;
          }
          //-----------------------------------------------------//
          if (isset($filtro['estructura'])) {
            $cont = 0;
            foreach ($estructuras->result() as $value) {
              $cont++;
            }
            $estructura = $filtro['estructura'];
            $estructura_select = array();
            for ($i=0; $i <= $cont-1; $i++) {
              if(isset($estructura[$i])) {
                  $estructura_select[] = $estructura[$i];
              }
              else{
                $estructura_select[] = "null";
              }
            }
            $data_comerciante['estructuras'] = $estructura_select;
          }
          //-----------------------------------------------------//
          if (isset($filtro['estado'])) {
            $estado = $filtro['estado'];
            $estado_select = array();
            for ($i=0; $i <= 2; $i++) {
              if(isset($estado[$i])) {
                  $estado_select[] = $estado[$i];
              }
              else{
                $estado_select[] = "null";
              }
            }
            $data_comerciante['estados'] = $estado_select;
          }
          //-----------------------------------------------------//
          if(isset($filtro['observaciones'])){
            $observaciones = $filtro['observaciones'];
            $observaciones_select = array();
            for($i=0; $i <= 9; $i++){
              if(isset($observaciones[$i])){
                $observaciones_select[] = $observaciones[$i];
              }
              else{
                $observaciones_select[] = "null";
              }
            }
            $data_comerciante['observaciones'] = $observaciones_select;
          }


        }else {
          $data_comerciante = array('consulta' => $resultActivos, 'consulta2' => $giros, 'consulta3' => $tags, 'consulta5' => $estructuras);
        }




        //El unico que cambia del dashboard
        $this->load->view("reportes/Reportes", $data_comerciante);
        //------------------------------------
        $this->load->view("footer/Footer");

    }else {
      $data = array('title' => 'Login');
      $this->load->view("login/Login" , $data);
    }
  }

}
