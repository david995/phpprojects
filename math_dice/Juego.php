<!DOCTYPE html>
<?php 

include('lib/jugador.php');
session_start();

if(isset($_POST['jugador'])){
        //Comprobamos un objeto creado en la sesion
        if (!isset($_SESSION['jugador'])) {
          $jugador1 = new Jugador();
          $jugador1->setNOMBRE($_POST['nombre']);
          $jugador1->setAPELLIDOS($_POST['apellidos']);
          $jugador1->setEDAD($_POST['edad']);
          $jugador1->setPUNTOS(0);
          //Inicializamos al jugador
          $_SESSION['jugador'] = $jugador1;
        }
    }
 //Comprobamos un objeto creado en la sesion
    if (isset($_SESSION['jugador'])) {
        $jugador1 = $_SESSION['jugador'];
        
    }
    if($jugador1->getNOMBRE()==null || $jugador1->getEDAD()==null){
  header("Location: iniciosesion.php");
};
 ?>
 
 
<link rel="stylesheet" type="text/css" href="css/estilo1.css">

<html lang="en">
<head>
  <title>Bootstrap Case</title>
  <link rel="stylesheet" type="text/css" href="css/estilo1.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
 
</head>
<body>
  
<?php
include "configuracion.php";
include "dicesJuego.php";
?>

</body>
</html>