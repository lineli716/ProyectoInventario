{include file="templates/Cabeceras/header.tpl"}
    <div class="row">
        <div class="input-field col s12">
            <h1 class="center-align blue-text">Ver Inventario</h1>
        </div>
    </div>

    <div class="row">
        {include file='Navs/BarraLateral.tpl'}
        <div class="col s8">
            <table>
                <thead>
                    <tr>
                        <th>Nombre Producto</th>
                        <th>Descripcion</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                    </tr>
                </thead>
                <tbody>
                    {{foreach from=$inventario item=$invent }
                        <tr>
                            <td>
                                {$invent['nombre']}
                            </td>
                            <td>
                                {$invent['descripcion']}
                            </td>
                            <td>
                                {$invent['precio']}
                            </td>
                            <td>
                                {$invent['cantidad']}
                            </td>
                        </tr>
                    {/foreach}
                </tbody>
            </table>
        </div>
    </div>

{include file="templates/Cabeceras/footer.tpl"}