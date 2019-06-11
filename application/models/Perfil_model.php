<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perfil_model extends CI_Model{

  public function getPerfil($email = ''){
    $result =  $this->db->query("SELECT * FROM master WHERE email = '" . $email . "' LIMIT 1");
    if($result->num_rows() > 0){
        return $result->row();
    }else{
      return null;
    }
  }

  public function getPerfilId($id = ''){
    $result =  $this->db->query("SELECT * FROM master WHERE id = '" . $id . "' LIMIT 1");
    if($result->num_rows() > 0){
        return $result->row();
    }else{
      return null;
    }
  }

  public function getPerfilCuenta($id = ''){
    $result =  $this->db->query("SELECT * FROM master WHERE id = '" . $id . "' LIMIT 1");
    if($result->num_rows() > 0){
        return $result->row();
    }else{
      return null;
    }
  }

}
