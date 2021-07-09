<?php
/* Smarty version 3.1.39, created on 2021-07-09 03:38:37
  from 'C:\xampp\htdocs\Programa2\templates\Cabeceras\Header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60e7a89d9143a3_39278045',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a0610207150908bf9424246e2f566b2276b35e8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Programa2\\templates\\Cabeceras\\Header.tpl',
      1 => 1625794715,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60e7a89d9143a3_39278045 (Smarty_Internal_Template $_smarty_tpl) {
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
