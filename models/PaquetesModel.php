<?php
require_once('models/FranelaModel.php');

class PaquetesModel extends FranelaModel
{

  function getPaquetes(){
    $sentencia = $this->db->prepare( "select * from paquete");
    $sentencia->execute();
    $paquetes = $sentencia->fetchAll(PDO::FETCH_ASSOC);
    return $paquetes;
  }
}


 ?>
