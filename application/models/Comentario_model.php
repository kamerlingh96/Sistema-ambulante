<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comentario_model extends CI_Model{

  function setComentario($id = ''){
    $this->db->where('id_comerciante', $id);
    $this->db->order_by('id', 'DESC');
    return $this->db->get('comentarios');
  }

}
