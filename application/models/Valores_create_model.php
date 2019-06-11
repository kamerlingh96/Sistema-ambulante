<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Valores_create_model extends CI_Model{

  public function getGiros(){
    return $this->db->get('giro');
  }
  public function getEstructuras(){
    return $this->db->get('estructuras');
  }
  public function getPermisos(){
    return $this->db->get('permisos');
  }
  public function getTags(){
    return $this->db->get('tagslist');
  }
}
