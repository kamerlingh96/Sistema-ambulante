<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cuentas_controller extends CI_Controller{


  function index()
  {
    $data = array('title' => 'Crear cuentas');
    if ($this->session->userdata('login')) {

      $userName = $this->session->userdata('userName');
      $correo = $this->session->userdata('email');
      $nivel = $this->session->userdata('nivel');
      $img = $this->session->userdata('img');
      $dataUser = array('nombre' => $userName, 'correo' => $correo, 'nivel' => $nivel, 'img' => $img);

      if ($nivel == 1) {
        $this->load->view("header/Header", $data);
        $this->load->view("nav/Nav", $dataUser);
        //El unico que cambia del dashboard

        $this->load->model('Cuenta_model');
        $result = $this->Cuenta_model->cuentas();
        $cuentas = array('consulta' => $result);

        $this->load->view("create_cuenta/Create_cuenta",$cuentas);
        //------------------------------------
        $this->load->view("footer/Footer");
      }else {
        $this->load->view("404/404");
      }


    }else{
      $data = array('title' => 'Login');
      $this->load->view("login/Login" , $data);
    }

    $this->load->view("Home");
  }

  function crearusuario(){
    $master = $this->input->post();
    $validate = $this->comparar($master['email']);
    if (!$validate) {
      echo "no esta";
      $this->load->model('Cuenta_model');
      $bool = $this->Cuenta_model->insert($master);

      if ($bool) {
        $creado = "cuenta_creada";
        header("Location:". base_url(). "Cuentas_controller/"."?creado=". $creado);
      }else{
        $creado = "cuenta_no_creada";
        header("Location:". base_url(). "Cuentas_controller/"."?creado=". $creado);
      }
    }else {
      $creado = "correo_existente";
      header("Location:". base_url(). "Cuentas_controller/"."?creado=". $creado);
    }
  }

  function comparar($email = ''){
    $result =  $this->db->query("SELECT * FROM master WHERE email = '" . $email . "' LIMIT 1");
    if($result->num_rows() > 0){
        return true;
    }else{
      return false;
    }
  }

  function eliminar($id = ''){
    $this->db->where('id',$id);
    $this->load->model('Cuenta_model');
    $fila = $this->Cuenta_model->buscar($id);
    $imguser = $fila->img;
    $delete = $this->db->delete('master');
    if ($delete) {
      $this->eliminar_foto($imguser);
      $cuenta = "Cuenta_eliminada";
      header("Location:". base_url(). "Cuentas_controller/"."?creado=". $cuenta);
    }else {
      $cuenta = "Cuenta_no_eliminada";
      header("Location:". base_url(). "Cuentas_controller/"."?creado=". $cuenta);
    }
  }

  function eliminar_foto($img = ''){
    $this->load->library('ftp');

    $config['username'] = $this->config->item('username');
    $config['password'] = $this->config->item('password');

    $config['hostname'] = $this->config->item('hostname');
    $config['username'] = $this->config->item('username');
    $config['password'] = $this->config->item('password');
    $config['port']     = 21;
    $config['debug']	= TRUE;

    $this->ftp->connect($config);

    $dir_user = $this->config->item('dir_users');

    $this->ftp->delete_file($dir_user.'users/'.$img);

    $this->ftp->close();
  }




}
