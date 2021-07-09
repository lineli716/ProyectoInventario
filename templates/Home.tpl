{include file="templates/Cabeceras/Header.tpl"}
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
{include file="templates/Cabeceras/Footer.tpl"}