<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModificarColumna_controller extends CI_Controller{



  function columna()
  {
    $data['jpeg'] = "00002.jpeg";
    $this->db->where('id', "00002");
    if ($this->db->update('ambulante', $data)) {
      echo "exito";
    }else {
      echo "no exito";
    }

    // $SQL = "ALTER table ambulante add (jpeg varchar(10) not null)";
    // if ($this->db->query($SQL)) {
    //   echo "exito";
    // }else {
    //   echo "no exito";
    // }
  }

}
