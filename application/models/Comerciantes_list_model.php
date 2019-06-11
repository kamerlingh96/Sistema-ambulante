<?php

class Comerciantes_list_model extends CI_Model{


  public function getComerciantes()
  {
    $this->db->order_by('id', 'DESC');
    return $this->db->get('ambulante');
  }

  public function getComerciantesActivos()
  {
    $this->db->where('estado', "Activo");
    return $this->db->get('ambulante');
  }

  public function getComerciantesInactivos()
  {
    $this->db->where('estado', "Inactivo");
    return $this->db->get('ambulante');
  }

  public function getComerciantesRechazados()
  {
    $this->db->where('estado', "Rechazado");
    return $this->db->get('ambulante');
  }

  public function getComerciantesVencidos()
  {
    $this->db->where('estado', "Vencido");
    return $this->db->get('ambulante');
  }

  public function getComerciantesActual()
  {
    $this->db->where('estado', "Vencido");
    return $this->db->get('ambulante');
  }

  public function getComerciantesMesActual()
  {
    $fecha = date('Y-m');
    $result =  $this->db->query("SELECT * FROM ambulante WHERE fecha_creado LIKE '%$fecha%'");

    return $result;
  }

  public function getComerciantesInspeccionesHoy()
  {
    $fecha = date('Y-m-d');
    $result =  $this->db->query("SELECT * FROM comentarios WHERE fecha LIKE '%$fecha%'");

    return $result;
  }

  public function getComerciantesInspeccionesSemana()
  {
    $fecha = date('Y-m-d');
    $diaInicio="Monday";
    $diaFin="Sunday";

    $strFecha = strtotime($fecha);

    $fechaInicio = date('Y-m-d',strtotime('last '.$diaInicio,$strFecha));
    $fechaFin = date('Y-m-d',strtotime('next '.$diaFin,$strFecha));

    if(date("l",$strFecha)==$diaInicio){
        $fechaInicio= date("Y-m-d",$strFecha);
    }
    if(date("l",$strFecha)==$diaFin){
        $fechaFin= date("Y-m-d",$strFecha);
    }
    $result =  $this->db->query("SELECT * FROM comentarios WHERE fecha >= '$fechaInicio'");

    return $result;
  }


  public function getComerciantesInspeccionesMesActual()
  {
    $fecha = date('Y-m');
    $result =  $this->db->query("SELECT * FROM comentarios WHERE fecha LIKE '%$fecha%'");

    return $result;
  }

  public function getComentarios()
  {
    return $this->db->get('comentarios');
  }



}
