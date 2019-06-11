<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Imprimir_comerciante_model extends CI_Model{


  public function getImprimirComerciante($id = ''){
    $result = $this->db->query("SELECT * FROM ambulante WHERE id = '" . $id . "' LIMIT 1");
    return $result->row();
  }

  public function getComercianteDataHorario($id = '')
  {
    return $this->db->query("SELECT * FROM fecha_hora WHERE id_comerciante = '" . $id . "'");
  }

}
