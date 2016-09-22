<?php
require('controllers/FranelaController.php');
require('controllers/PaquetesController.php');
require('controllers/PresupuestoController.php');
require('controllers/ContactoController.php');
require('controllers/TurnosController.php');
require('config/ConfigApp.php');

$franelasController = new FranelaController();
$paquetesController = new PaquetesController();
$presupuestoController = new PresupuestoController();
$contactoController = new ContactoController();
$turnosController = new TurnosController();

if (!array_key_exists(ConfigApp::$ACTION,$_REQUEST)){
  $franelasController->iniciar();
  die();
}

switch ($_REQUEST[ConfigApp::$ACTION]) {
  case ConfigApp::$ACTION_MOSTRAR_PAQUETES:
  $paquetesController->mostrar();
  break;
  case ConfigApp::$ACTION_MOSTRAR_PRESUPUESTO:
  $presupuestoController->mostrar();
  break;
  case ConfigApp::$ACTION_MOSTRAR_CONTACTO:
  $contactoController->mostrar();
  break;
  case ConfigApp::$ACTION_GUARDAR_TURNO:
  $turnosController->guardarTurno();
  break;
  default:
  $franelasController->iniciar();
  break;
}
?>
