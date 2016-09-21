<?php
  require_once('views/PaquetesView.php');
  require_once('models/PaquetesModel.php');


  class PaquetesController
  {
    private $modelo;
    private $vista;

    function __construct()
    {
      $this->modelo = new PaquetesModel();
      $this->vista = new PaquetesView();
    }

    function mostrar () {
        $paquetes = $this->modelo->getPaquetes();
        $this->vista->mostrar($paquetes);
    }
  }

 ?>
