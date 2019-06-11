<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Renovacion_model extends CI_Model{

  public function renovante($id = '',$fecha = '')
  {
    $SQL = "INSERT INTO renovaciones(id,id_comerciante,year_renovacion) VALUES (null,'$id','$fecha')";
    if ($this->db->query($SQL)) {
      $data['estado'] = "Activo";
      $this->db->where('id', $id);
      $this->db->update('ambulante', $data);
      return true;
    }else {
      return false;
    }

  }

  public function renovaciones($id = '')
  {
    return $this->db->query("SELECT * FROM renovaciones WHERE id_comerciante = '" . $id . "'");
  }


}
