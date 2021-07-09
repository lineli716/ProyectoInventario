<?php
/* Smarty version 3.1.39, created on 2021-07-09 08:40:41
  from 'C:\xampp\htdocs\ProyectoInventario\templates\Cabeceras\Header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60e7ef699e88e5_41369254',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '74d1edf86f9d49baf6fa68269d1919b242adfb0b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ProyectoInventario\\templates\\Cabeceras\\Header.tpl',
      1 => 1625794715,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60e7ef699e88e5_41369254 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="Framework/Materialize/css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>
      <?php if ((isset($_smarty_tpl->tpl_vars['nombre']->value))) {?>
        <?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>

      <?php } else { ?>
        Home
      <?php }?>
      </title>
    
    </head>
    <body>

<?php }
}
