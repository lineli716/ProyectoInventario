<?php
/* Smarty version 3.1.39, created on 2021-07-09 10:34:54
  from 'C:\xampp\htdocs\ProyectoInventario\templates\Navs\BarraLateral.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60e80a2e3b52f1_01360680',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e678a4bc5899d0fa3fcda3e1645f273ad334a002' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ProyectoInventario\\templates\\Navs\\BarraLateral.tpl',
      1 => 1625819691,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60e80a2e3b52f1_01360680 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col s3">
    <nav class = "center-align">Opciones</nav>
    <div class="collection">
        <!--<a href="?class=DireccionesVistas&method=VistaIngresarInvent" class="collection-item">Ingresar Inventario</a>-->
        <a href="?class=Inventario&method=IngresoInventario" class="collection-item">Ingresar Inventario</a>
        <a href="?class=DireccionesVistas&method=VistaVerInvent" class="collection-item">Ver Inventario</a>
        <a href="#!" class="collection-item">Buscar Producto</a>
        <a href="#!" class="collection-item">Modificar Producto</a>
        <a href="#!" class="collection-item">Eliminar Producto</a>
       
    </div>
    
</div><?php }
}
