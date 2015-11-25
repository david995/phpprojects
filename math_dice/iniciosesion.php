<?php

include('lib/jugador.php');
session_start();

?>

<html>
<head> <meta charset="utf-8"> </head>
<link rel="stylesheet" type="text/css" href="css/estilo1.css">
  <body>
      <img id="fondo" src="dices_img/fondo.png.jpg"></img>

<form id="forminiciosesion" method="post" action="Modalidades.php" >
 <div style="padding:15px;">Nombre: <input id="black" type="text" name="nombre" style="width:100px;"/>
 <input type="hidden" name="jugador"><!-- HIDDEN PARA COMPROVAR EL JUGADOR MAS ADELANTE-->
  <br>
  <br>
  
  Edad&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input id="black"  type="text" name="edad" maxlength="2" style="width:25px;"/>
  <br>
  <br>
  
  <center><input id="black" type="submit" value="Enviar" style="width:90px;"></center>
  </div>
</form>





  </body>
</html>