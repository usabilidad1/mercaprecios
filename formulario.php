<html lang='es' xml:lang='es' xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta charset="utf-8">
    <title>Mercaprecios</title>
    <link rel="STYLESHEET" type="text/css" href="estilojava.css">
    <link rel="STYLESHEET" type="text/css" href="960.css">
    <link rel="STYLESHEET" type="text/css" href="estilo_propio.css"> 
    <link rel="STYLESHEET" type="text/css" href="estilomenu.css">
    <script language="JavaScript" type="text/javascript" src="ajax.js"></script>
  </head>
  
  <body>
    <div id= "CONTENIDO" class= "container_12">
      <div id = "cabecera">
        <div id = "textoCab" class= "grid_12">
	       <p>MERCA PRECIOS</p>
        </div>
      </div>
      <div id = "DivMenu" class = "grid_12">
        <ul id = "menuHorizontal">
          <li><a style="filter:none" href="Index.html">Inicio</a></li>

          <li><a href="Clientes.html" style="#FFF21">Productos</a>
            <ul class="submenu">
              <li>Anadir</li>
              <li>Buscar</li>
            </ul>
          </li>

          <li><a href="instalacion.html">Ubicación</a>
          </li>
       
          <li><a href="contacto.html">Contactar</a>
            <ul class="submenu">
              <li>Localizacion</li>
              <li>Sus Datos</li>
              <li>Nuestros Datos</li>    
            </ul>
          </li>
       
          <li>Primera vez
            <ul class="submenu">
              <li>Registrate</li>
              <li>Facebook</li>
              <li>Twitter</li>
            </ul>
          </li>

        </ul>
      </div>
      <br>
      <div id="div_form" class= "grid_6">
        <form name="nuevo_producto" action="" onsubmit="enviarDatosProducto(); return false">
        <h2>Nuevo empleado</h2>
        <table>
          <tr>
            <td>Nombre:</td><td><label><input name="nombre" type="text" /></label></td>
          </tr>
          <tr>
            <td>Descripción: </td><td><label><textarea rows="6" cols="30" type="text" name="descripcion"></textarea></td>
          </tr>
          <tr>
            <td>Precio: </td><td><label><input name="precio" type="text" /></label></td>
          </tr>
          <tr>
            <td>&nbsp;</td><td><label><input type="submit" name="Submit" value="Grabar" /></label></td>
          </tr>
        </table>
        </form>
      </div>
        <div id="resultado" class="grid_6">
          <?php include('producto.php');?>
        </div>
 


      <div id = "linea" class = "grid_12">
        <br> 
        <hr>
      </div>
      <div id = "piepagina" class = "container_12">
        <div id="Nombre" class="grid_12">
          <p>Merca Precios: Mercado Online S.A. Santa Cruz de Tenerife, C/Molinos de Agua 5. 38649. Arona-Espana</p>
          <p>Telefono:(+34)667667667</p>
        </div>
      </div>
    </div>
  </body>
</html>