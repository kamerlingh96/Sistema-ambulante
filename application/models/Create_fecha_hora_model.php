<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Create_fecha_hora_model extends CI_Model{

  public function fecha_hora($curp = '')
  {
    $result =  $this->db->query("SELECT * FROM ambulante WHERE curp = '" . $curp . "' LIMIT 1");
    if($result->num_rows() > 0){
        return $result->row();
    }else{
      return null;
    }
  }

}
