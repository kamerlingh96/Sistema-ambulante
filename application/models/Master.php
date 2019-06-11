<?php

class Master extends CI_Model
{

  public function getMaster($email = ''){
    $result =  $this->db->query("SELECT * FROM master WHERE email = '" . $email . "' LIMIT 1");
    if($result->num_rows() > 0){
        return $result->row();
    }else{
      return null;
    }
  }


}
