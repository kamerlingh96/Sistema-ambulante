<?php
/**
 *
 */
class Login extends CI_Controller
{

  public function index()
  {
    $email = $this->input->post('email');
    $pass = $this->input->post('pass');

    $this->load->model('Master');
    $fila_master = $this->Master->getMaster($email);

    if($fila_master != null){
      if ($fila_master->pass == $pass) {
        $data = array(
          'userName' => $fila_master->user,
          'email' => $email,
          'id' => $fila_master->id,
          'nivel' => $fila_master->nivel,
          'img' => $fila_master->img,
          'login' => true
        );
        $this->session->set_userdata($data);
        header("Location: " . base_url());
      }else{
        $error = true;
        header("Location: " . base_url() ."?error=". $error );
      }
    }else{
      $error = true;
      header("Location: " . base_url() ."?error=". $error );
    }
  }


  public function logout(){
    $this->session->sess_destroy();
    header("Location: " . base_url());
  }
}
