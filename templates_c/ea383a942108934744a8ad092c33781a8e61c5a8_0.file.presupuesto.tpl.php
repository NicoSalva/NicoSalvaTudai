<?php
/* Smarty version 3.1.30, created on 2016-09-21 19:50:10
  from "C:\xampp\htdocs\xampp\WebEntrega\templates\presupuesto.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57e2c852c505a6_08228164',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ea383a942108934744a8ad092c33781a8e61c5a8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\xampp\\WebEntrega\\templates\\presupuesto.tpl',
      1 => 1474479510,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57e2c852c505a6_08228164 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form action="index.html" method="post" class="col-xs-8 col-xs-offset-1 col-md-5 col-md-offset-1 form-group formulario">
  <label for="nombreApellido">Nombre y Apellido</label>
  <input type="text" class="form-control" placeholder="Nombre y Apellido">
  <label for="Telefono">Teléfono</label>
  <input type="text" class="form-control" placeholder="Tel">
  <label for="Pedido">Pedido</label>
  <textarea class="form-control" rows="8" placeholder="Escriba aquí su mensaje"></textarea>
  <button type="submit" class="btn btn-default">Enviar</button>
</form>
<?php }
}
