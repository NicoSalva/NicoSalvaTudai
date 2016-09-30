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
    //Hacer if isset ...Saber si los POST existen
    $cliente = $_POST['cliente'];
    $turno = $_POST['turno'];
    $paquete =  $_POST['paquete'];

    $turnoprueba = array('cliente'=>$cliente,'turno'=>$turno,'paquete'=>$paquete);

    $this->model->guardarTurno($turnoprueba);
  //  header("Location: index.php"); // Mostrar turno guardo $this->vista......

  }
}
?>
