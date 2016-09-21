<?php
require_once('views/FranelaView.php');
require_once('models/FranelaModel.php');

class FranelaController
{
  private $vista;

  function __construct()
  {
    $this->vista = new FranelaView();
  }

  function iniciar () {

    $this->vista->mostrar();
  }

}

 ?>
