<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perfil_controller extends CI_Controller{


  function index()
  {
    if ($this->session->userdata('login')) {
      $id_user = $this->session->userdata('id');
      $userName = $this->session->userdata('userName');
      $correo = $this->session->userdata('email');
      $nivel = $this->session->userdata('nivel');
      $img = $this->session->userdata('img');
      $dataUser = array('nombre' => $userName, 'correo' => $correo, 'nivel' => $nivel, 'img' => $img);


      $this->load->model('Perfil_model');
      $result = $fila = $this->Perfil_model->getPerfil($correo);

      $dataPerfil = array('consulta' => $result, 'id_user' => $id_user);

      $data = array('title' => 'Perfil de ' . $result->user );

        $this->load->view("header/Header", $data);
        $this->load->view("nav/Nav", $dataUser);
        $this->load->view("perfil/Perfil",$dataPerfil);
        //------------------------------------
        $this->load->view("footer/Footer");




    }else {
      $data = array('title' => 'Login');
      $this->load->view("login/Login" , $data);
    }

  }


  public function setActualizar($id_cuenta = ''){
    $actualizar = $this->input->post();
    $data['user'] = $actualizar['nombre'];
    $data['email'] = $actualizar['email'];
    $data['pass'] = $actualizar['pass'];
    $data['telefono'] = $actualizar['telefono'];
    $this->load->model('Perfil_model');
    if ($id_cuenta == '') {
      $correo_original = $this->session->userdata('email');
      $fila = $this->Perfil_model->getPerfil($correo_original);
    }else {
      $fila = $this->Perfil_model->getPerfilId($id_cuenta);
    }

    $id = $fila->id;
    $img = $fila->img;

    $ubicacion = "./uploads/users/";
    if ($img == "default.jpg") {
      $file_name = $this->cargar_archivo($id,$ubicacion);
      if ($file_name != false) {
        $data['img'] = $file_name;
      }
    }else{
      $file_name = $this->actualizar_archivo($id,$ubicacion);
      if ($file_name != false) {
        $data['img'] = $file_name;
      }
    }


    if ($id_cuenta == '') {
      $correo = $this->session->userdata('email');

      $this->db->where('email', $correo);
      if ($this->db->update('master', $data)) {
        $this->session->sess_destroy();
        header("Location: " . base_url());
      }else{
        echo "no se pudo actualizar";
      }
    }else {
      $this->db->where('id', $id_cuenta);
      if ($this->db->update('master', $data)) {
        header("Location: " . base_url()."Perfil_controller/Cuenta_perfil/".$id_cuenta);
      }else{
        echo "no se pudo actualizar";
      }
    }
  }



  function actualizar_archivo($nombre_foto = '',$lugar = '') {

        $mi_archivo = 'perfil';
        $config['upload_path'] = $lugar;
        $config['allowed_types'] = "gif|jpg|png";
        $config['file_name'] = $nombre_foto;
        $config['max_size'] = "50000";
        $config['overwrite'] = true;


        $this->load->library('upload', $config);

        if (!$this->upload->do_upload($mi_archivo)) {
            //*** ocurrio un error
            $data['uploadError'] = $this->upload->display_errors();
            return false;
        }

        $file_data = $this->upload->data();
        //$archivo = array('nombre_archivo' => $file_data['file_name'], true);
        return $file_data['file_name'];
    }


    function cargar_archivo($nombre_foto = '',$lugar = '') {

          $mi_archivo = 'perfil';
          $config['upload_path'] = $lugar;
          $config['allowed_types'] = "gif|jpg|png";
          $config['file_name'] = $nombre_foto;
          $config['max_size'] = "50000";

          $this->load->library('upload', $config);

          if (!$this->upload->do_upload($mi_archivo)) {
              //*** ocurrio un error
              $data['uploadError'] = $this->upload->display_errors();
              echo $this->upload->display_errors();
              return false;
          }

          $file_data = $this->upload->data();
          return $file_data['file_name'];
      }



      /* ====================== Cuentas id ======================= */


      function Cuenta_perfil($id='')
      {
        if ($this->session->userdata('login')) {
          $id_user = $this->session->userdata('id');
          $userName = $this->session->userdata('userName');
          $correo = $this->session->userdata('email');
          $nivel = $this->session->userdata('nivel');
          $img = $this->session->userdata('img');
          $dataUser = array('nombre' => $userName, 'correo' => $correo, 'nivel' => $nivel, 'img' => $img);


          $this->load->model('Perfil_model');
          $fila = $this->Perfil_model->getPerfilCuenta($id);

          $dataPerfil = array('consulta' => $fila, 'id_user' => $id_user);

          $data = array('title' => 'Perfil de ' . $fila->user );

            $this->load->view("header/Header", $data);
            $this->load->view("nav/Nav", $dataUser);
            $this->load->view("perfil/Perfil",$dataPerfil);
            //------------------------------------
            $this->load->view("footer/Footer");




        }else {
          $data = array('title' => 'Login');
          $this->load->view("login/Login" , $data);
        }
      }

}
