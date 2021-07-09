<?php
/* Smarty version 3.1.39, created on 2021-07-09 10:44:41
  from 'C:\xampp\htdocs\ProyectoInventario\templates\Inventario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60e80c793cfaa8_87054760',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cdd1c1a79e2314745c93eb31d7c60a3d0548b442' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ProyectoInventario\\templates\\Inventario.tpl',
      1 => 1625820106,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/Cabeceras/Header.tpl' => 1,
    'file:Navs/BarraLateral.tpl' => 1,
    'file:templates/Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_60e80c793cfaa8_87054760 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="row">
        <div class="input-field col s12">
            <h1 class="center-align red-text">BIENVENIDOS A IVENPANIO </h1>
        </div>
</div>
    <br>
    <br>
<div class="row">
    <?php $_smarty_tpl->_subTemplateRender('file:Navs/BarraLateral.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="col s8">
        <form method="post" action="?class=Inventario$method=IngresoInventario">
            <div class="input-field col s8">
             <input id="nombre" type="text" name="nombre"/>
             <label for="nombre">Nombre del producto</label>
            </div>

            <div class="input-field col s8">
             <textarea id="descripcion" name="descripcion"></textarea>
              <label for="descripcion">Descripcion del producto</label>
            </div>

            <div class="input-field col s8">
                 <input id="cantidad" type="number" name="cantidad"/>
                 <label for="cantidad">Cantidad del producto</label>
            </div>


             <div class="input-field col s8">
                  <input id="precio" type="number" name="precio"/>
                  <label for="precio">Precio del producto</label>
             </div>


             <div class="input-field col s8">
                 <input id="fecha" type="date" name="fecha"/>
                  <label for="fecha">Fecha de registro</label>
               </div>


               <div class="row">
                    <div class="input-field col s8 center-align">
                      <input class="waves-effect waves-light btn" type="submit"value="Guardar Producto"/>
                    </div>
                </div>
        </form>
    </div>
</div>       

<?php $_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
