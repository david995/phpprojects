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
include("configuracion.php");
?>
<!DOCTYPE html>
<html>
    <head>
  <link rel="stylesheet" type="text/css" href="css/estilo1.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </head>
    <body>
        	<img id="fondo" src="dices_img/fondo.png.jpg"></img>
        	<div class="borde">
        	    <?php
        	    if($lenguaje=='es'){
        	        ?><h3>INSTRUCCIONES:</h3>
        	        <br>
        	        Una vez se ha abierto la página del juego el jugador deberá hacer las operaciones según le parezca para poder llegar al valor del dado azul.<p></p>
        	        En total son 2 dados de 6, 3 de 3 y un dado de 12. Para hacer las operaciones se hará click a la imagen del dado que se quiera sumar o restar, a continuación se
        	        hará click en la imagen de la suma o de la resta y si queremos seguir sumando o restando volveremos a darle a uno de los dados naranja.<p></p>
        	        En cuanto el valor de la operación sea igual al dado azul, el jugador tendrá que darle al símbolo del igual para comprovar su resultado.
        	        <?php
        	    }else{
        	        ?>
        	        <h3>INSTRUCTIONS:</h3>
        	        <br>
        	        Once the page has opened the game the player must make the operations under para seems to reach the value of the blue die . <P> </p>
    In total son of 2 dice 6 , March 3 and the UN since 12. Making Operations will click on the image of the base you want to add or subtract a Continuation yes
    It will click on the image of the addition or subtraction and if we want to continue adding or subtracting 'll give you a one of the orange dice. <P > </p>
    Once the value of the transaction equals the given blue sea, the player can deduce we must give the same paragraph symbol to check his result.
    <?php
        	    }
        	    ?>
        	</div>
        	    
        	
    </body>
</html>