<?php

class TurnosModel extends FranelaModel
{

  function guardarTurno($cliente,$turno,$paquete){
    $sentencia = $this->db->prepare("INSERT INTO turno(cliente,turno,fk_paquete) VALUES(?,?,?)");
    $sentencia->execute(array($cliente,$turno,$paquete));
    header("Location: index.php");
  }
}
?>
