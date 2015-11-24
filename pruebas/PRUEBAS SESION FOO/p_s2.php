<?php

include('Jugador.php');
session_start();
if($_POST['nom']==null || $_POST['apell']==null){
  header("Location: poo_session.php");
};
if(isset($_POST['jugador'])){
        //Comprobamos un objeto creado en la sesion
        if (!isset($_SESSION['jugador'])) {
          $jugador1 = new Jugador();
          $jugador1->setNombre($_POST['nom']);
          //Inicializamos al jugador
          $_SESSION['jugador'] = $jugador1;
        }
    }
 //Comprobamos un objeto creado en la sesion
    if (isset($_SESSION['jugador'])) {
        $jugador1 = $_SESSION['jugador'];
        $jugador1->puntos=0;
    }
 ?>
 <!DOCTYPE html>
 <html>
     <head>
         
     </head>
     <body>
         <div>
         <h3>JUGADOR CREADO</h3>
		    <?php
		        if(isset($jugador1)){
		    ?>
	            El jugador con nombre <?=$jugador1->getNombre()?> tiene <?=$jugador1->puntos?> puntos
	       <?php
		        }else{
	       ?>
	           No hay jugadores definidos
	       <?php
		        }
	       ?>
		</div> 
     </body>
 </html>
    <div>
		   
