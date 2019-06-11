<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comentarios_controller extends CI_Controller{

  function comentario($id = ''){
    if ($this->session->userdata('login')) {

      $userName = $this->session->userdata('userName');
      $correo = $this->session->userdata('email');
      $nivel = $this->session->userdata('nivel');
      $img = $this->session->userdata('img');
      $dataUser = array('nombre' => $userName, 'correo' => $correo, 'nivel' => $nivel, 'img' => $img);

      $this->load->model('Master');
      $creador = $this->Master->getMaster($correo);
      $this->load->model('Comerciante_data_model');
      $fila = $this->Comerciante_data_model->getComercianteData($id);

      $this->load->model('Comentario_model');
      $result = $this->Comentario_model->setComentario($id);

      $data_comerciante = array('consulta' => $fila, 'consulta2' => $result, 'nivel' => $nivel);

      $data = array('title' => 'Comentarios de ' . $fila->nombre );

        $this->load->view("header/Header", $data);
        $this->load->view("nav/Nav", $dataUser);
        $this->load->view("comentario/Comentario",$data_comerciante);
        //------------------------------------
        $this->load->view("footer/Footer");
      }else {
        $data = array('title' => 'Login');
        $this->load->view("login/Login" , $data);
      }
  }

  function getComentario(){
    $correo = $this->session->userdata('email');

    $comentario = $this->input->post();

    $this->load->model('Master');
    $creador = $this->Master->getMaster($correo);

    $data['id_master'] = $creador->id;
    $data['nombre_master'] = $creador->user;
    $data['id_comerciante'] = $comentario['id'];
    $data['comentario'] = $comentario['comentario'];
    $data['reporte'] = $comentario['reporte'];

    date_default_timezone_set('America/Mexico_City');
    $fecha_actual = date("Y-m-d H:i:s");
    $data['fecha'] = $fecha_actual;

    if ($this->db->insert('comentarios', $data)) {
      $creado = "comentario";
      header("Location:". base_url(). "Comentarios_controller/comentario/".$comentario['id']."/?creado=". $creado);
    }else {
      $creado = "error_comentario";
      header("Location:". base_url(). "Comentarios_controller/comentario/".$comentario['id']."/?creado=". $creado);
    }

  }

  function eliminar($borrar = ''){
    $porciones = explode("-", $borrar);
    $id = $porciones[0];
    $id_comerciante = $porciones[1];
    $this->db->where('id',$id);
    $delete = $this->db->delete('comentarios');
    if ($delete) {
      $cuenta = "Comentario_eliminado";
      header("Location:". base_url(). "Comentarios_controller/comentario/".$id_comerciante."/?creado=". $cuenta);
    }else {
      $cuenta = "Comentario_no_eliminado";
      header("Location:". base_url(). "Comentarios_controller/comentario/".$id_comerciante."/?creado=". $cuenta);
    }
  }

}
