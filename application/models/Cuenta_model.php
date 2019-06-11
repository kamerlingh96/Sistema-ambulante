<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cuenta_model extends CI_Model{

  public function insert($post = '')
  {
    if ($post != null) {
      $nombre = $post['name'];
      $nivel = $post['nivel'];
      $email = $post['email'];
      $pass = $post['pass'];
      $img = "default.jpg";

      $SQL = "INSERT INTO master(id,user,email,pass,nivel,img) VALUES (null,'$nombre','$email','$pass','$nivel','$img')";

      if ($this->db->query($SQL)) {
        return true;
      }
      else {
        return false;
      }

    }
  }

  function cuentas(){
    return $this->db->get('master');
  }

  function buscar($id = ''){
    $result =  $this->db->query("SELECT * FROM master WHERE id = '" . $id . "' LIMIT 1");
    if($result->num_rows() > 0){
        return $result->row();
    }else{
      return null;
    }
  }



}
