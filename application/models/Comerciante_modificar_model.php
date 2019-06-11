<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comerciante_modificar_model extends CI_Model{

  public function update($id = '',$fecha = '')
  {
    $result = $this->db->query("SELECT * FROM fecha_hora WHERE id_comerciante = '" . $id . "' AND fecha = '" . $fecha . "' LIMIT 1");
    if ($result->num_rows() > 0) {
      return $result->row();
    }else {
      return false;
    }

  }

  public function curp_antigua($id = '')
  {
    $result = $this->db->query("SELECT * FROM ambulante WHERE id = '" . $id . "' LIMIT 1");
    if ($result->num_rows() > 0) {
      return $result->row();
    }else {
      return false;
    }

  }


}
