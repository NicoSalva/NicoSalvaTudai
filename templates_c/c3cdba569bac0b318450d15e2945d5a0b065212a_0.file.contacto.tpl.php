<?php
/* Smarty version 3.1.30, created on 2016-09-21 19:57:31
  from "C:\xampp\htdocs\xampp\WebEntrega\templates\contacto.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57e2ca0b7fa665_00466482',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c3cdba569bac0b318450d15e2945d5a0b065212a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\xampp\\WebEntrega\\templates\\contacto.tpl',
      1 => 1474480504,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57e2ca0b7fa665_00466482 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form  class="col-xs-8 col-xs-offset-1 col-md-5 col-md-offset-1 form-group formulario">
    <label for="nombreApellido">Nombre y Apellido</label>
    <input type="text" class="form-control" placeholder="Nombre y Apellido">
    <label for="mensaje">Su mensaje</label>
    <textarea class="form-control" rows="8" placeholder="Escriba aquí su mensaje"></textarea>
    <button type="submit" class="btn btn-default">Enviar</button>
</form>
<?php }
}
