<?php
require_once('libs/Smarty.class.php');

class PaquetesView
{
  private $smarty;
  function __construct()
  {
    $this->smarty = new Smarty();
  }

  function mostrar ($paquetes){
    $this->smarty->assign('paquetes',$paquetes);
    $this->smarty->display('paquetes.tpl');
  }
}

 ?>
