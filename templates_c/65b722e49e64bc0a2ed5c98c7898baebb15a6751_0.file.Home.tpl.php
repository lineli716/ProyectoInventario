<?php
/* Smarty version 3.1.39, created on 2021-07-09 08:35:18
  from 'C:\xampp\htdocs\Programa2\templates\Home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60e7ee2652c806_44471547',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '65b722e49e64bc0a2ed5c98c7898baebb15a6751' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Programa2\\templates\\Home.tpl',
      1 => 1625812515,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/Cabeceras/Header.tpl' => 1,
    'file:templates/Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_60e7ee2652c806_44471547 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="row">
    <div class="col s12 m6">
      <div class="card blue-grey darken-1">
      </div>
    </div>
</div>      
<div>
    <h1 class="center-align lime-text text- darken-1">Registro</h1>
  </div>


<div class="container">
    <form method="post" action="?class=user&method=login">
        <div class="row">
            <div class="input-field col s6">
            <input name="nombre" id="first_name2" type="text" class="validate">
            <label class="active" for="first_name2">Nombre</label>
            </div>

            <div class="input-field col s6">
                <input name="pass" id="first_name2" type="password" class="validate">
                <label class="active" for="first_name2">Pass</label>
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
