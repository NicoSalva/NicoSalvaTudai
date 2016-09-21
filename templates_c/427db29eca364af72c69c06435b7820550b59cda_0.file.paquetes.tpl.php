<?php
/* Smarty version 3.1.30, created on 2016-09-21 21:17:04
  from "C:\xampp\htdocs\xampp\WebEntrega\templates\paquetes.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57e2dcb061de02_19505758',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '427db29eca364af72c69c06435b7820550b59cda' => 
    array (
      0 => 'C:\\xampp\\htdocs\\xampp\\WebEntrega\\templates\\paquetes.tpl',
      1 => 1474485419,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57e2dcb061de02_19505758 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row paquetes">
  <div class="col-md-4">
    <div class="panel panel-primary">
      <div class="panel-body">
        <h3>Pack BASICO</h3>
      </div>
      <div class="panel-footer">
        <p>1 Servicio semanal<br>
          Sin insumos<br>
          299 $<br>
          <hr>
        </p>
      </div>
    </div>
  </div>

  <div class="col-md-4">
    <div class="panel panel-primary">
      <div class="panel-body">
        <h3>Pack MEDIUM</h3>
      </div>
      <div class="panel-footer">
        <p>2 Servicio semanal<br>
          Sin insumos<br>
          459 $<br>
          <hr>
        </p></div>
      </div>

    </div>

    <div class="col-md-4">
      <div class="panel panel-primary">
        <div class="panel-body">
          <h3>Pack FULL</h3>
        </div>
        <div class="panel-footer">
          <p>3 Servicio semanal<br>
            Con insumos<br>
            800 $<br>
            <hr>
          </p>
        </div>
      </div>
    </div>

  </div>

  <div class="row">
    <h2 class="package" >Solicite el Pack acorde a sus necesidades <span class="label label-default">New</span></h2>
  </div>

  <form class="" action="index.html" method="get">
    <div class="row">
      <div class="col-md-4">
        <input type="text" name="name" value="" placeholder="Ingrese su nombre">
      </div>
      <div class="col-md-4">
        <div class="dropdown">
          <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            TURNO
            <span class="caret"></span>
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li><a href="#">Mañana</a></li>
            <li><a href="#">Tarde</a></li>
            <li><a href="#">Noche</a></li>
          </ul>
        </div>

      </div>
      <div class="col-md-4">
        <div class="dropdown">
          <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            PACK
            <span class="caret"></span>
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li><a href="#">BASICO</a></li>
            <li><a href="#">MEDIUM</a></li>
            <li><a href="#">FULL</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3 col-md-offset-5">
        <input type="submit" name="enviar" value="ENVIAR">
      </div>
    </div>
  </form>
<?php }
}
