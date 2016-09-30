<?php

class TurnosModel extends FranelaModel
{

  function guardarTurno($turnoprueba){
    print_r($turnoprueba);
    $sentencia = $this->db->prepare("INSERT INTO turno(cliente,turno,fk_paquete) VALUES(:cliente,:turno,:paquete)");
    $sentencia->execute($turnoprueba);
  }
}
?>
