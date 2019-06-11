<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comerciante_data_model extends CI_Model{

  public function getComercianteData($id = '')
  {
    $result = $this->db->query("SELECT * FROM ambulante WHERE id = '" . $id . "' LIMIT 1");
    return $result->row();
  }

  public function getComercianteDataHorario($id = '')
  {
    return $this->db->query("SELECT * FROM fecha_hora WHERE id_comerciante = '" . $id . "'");
  }

  public function getCreado($id = '')
  {
    $result = $this->db->query("SELECT * FROM creados WHERE id_comerciante = '" . $id . "'");
    return $result->row();
  }


}
