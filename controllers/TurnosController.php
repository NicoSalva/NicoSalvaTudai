<?php
require_once('models/TurnosModel.php');

class TurnosController
{
  private $model;

  function __construct()

  {

    $this->model = new TurnosModel();
  }
  function guardarTurno(){
    $cliente = $_POST['cliente'];
    $turno = $_POST['turno'];
    $paquete =  $_POST['paquete'];;

    $this->model->guardarTurno($cliente,$turno,$paquete);

  }
}
?>
