<?php

abstract class FranelaModel
{
  protected $db;

  function __construct()
  {
    $this->db = new PDO('mysql:host=localhost;dbname=franela;charset=utf8', 'root', '');
  }

  function getTurnos(){
  $sentencia = $this->db->prepare( "select * from turno");
  $sentencia->execute();
  $turnos = $sentencia->fetchAll(PDO::FETCH_ASSOC);
  return $turnos;
}
}

 ?>
