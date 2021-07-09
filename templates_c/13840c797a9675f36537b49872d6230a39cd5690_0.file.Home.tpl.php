<?php
/* Smarty version 3.1.39, created on 2021-07-09 10:12:31
  from 'C:\xampp\htdocs\ProyectoInventario\templates\Home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60e804ef064321_74195757',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '13840c797a9675f36537b49872d6230a39cd5690' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ProyectoInventario\\templates\\Home.tpl',
      1 => 1625818187,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/Cabeceras/Header.tpl' => 1,
    'file:templates/Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_60e804ef064321_74195757 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
<div class="row">
    <div class="col s12 m6">
      <div class="card blue-grey darken-1">
      </div>
    </div>
</div>      
<div>
    <h1 class="center-align lime-text text- darken-1">Registro</h1>
  </div>

    <form method="post" action="?class=user&method=login">
        <div class="row">
            <div class="input-field col s6">
            <input name="nombre" id="first_name2" type="text" class="validate">
            <label class="active" for="first_name2">Nombre</label>
            </div>

            <div class="input-field col s6">
                <input name="pass" id="first_name3" type="password" class="validate">
                <label class="active" for="first_name3">Pass</label>
            </div>
        </div>
        <div>
        
        <button class="btn waves-effect waves-light" type="submit" name="action">Enviar
         <i class="material-icons right">send</i>
        </button>
       </div>
    </form>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
