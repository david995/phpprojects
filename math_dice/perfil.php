<?php
include('lib/jugador.php');
session_start();
if(isset($_GET['jugador'])){
        //Comprobamos un objeto creado en la sesion
        if (!isset($_SESSION['jugador'])) {
          $jugador1 = new Jugador();
          $jugador1->setNOMBRE($_GET['nombre']);
          $jugador1->setAPELLIDOS($_GET['apellidos']);
          $jugador1->setEDAD($_GET['edad']);
          $jugador1->setPUNTOS(0);
          //Inicializamos al jugador
          $_SESSION['jugador'] = $jugador1;
        }
    }
 //Comprobamos un objeto creado en la sesion
    if (isset($_SESSION['jugador'])) {
        $jugador1 = $_SESSION['jugador'];
        
    }



 
$jugador1->setNOMBRE($_GET['nombre']);
$jugador1->setEDAD($_GET['edad']);

 $nom1=$jugador1->getNOMBRE($_GET['nombre']);
    $edad1=$jugador1->getEDAD($_GET['edad']);


   
include('configuracion.php');
?>

<html>
<head> <meta charset="utf-8"> </head>
<link rel="stylesheet" type="text/css" href="css/estilo1.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <body>
      <img id="fondo" src="dices_img/fondo.png.jpg"></img>
<center>
<form id="formperfil" method="get" action="perfil.php" >
 <div style="padding:15px;">Nombre: <input id="black" type="text" name="nombre" style="width:100px;" value="<?=$nom1?>"/>
 

  <br>
  <br>
  
  Edad&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input id="black"  type="text" name="edad" maxlength="2" style="width:25px;" value="<?=$edad1?>"/>
  
  <br>
  <br>
  
  <center><input id="black" type="submit" value="Enviar" style="width:90px;"></center>
  </div>
</form>

</center>



  </body>
</html>


