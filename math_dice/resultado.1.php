<?php
	include('lib/jugador.php');
	session_start();
	$resultado=$_GET["resultado"];
	$dodecaedro=$_GET["dodecaedro"];
	
	
	if($resultado==$dodecaedro){
	
	
	
	if(isset($_POST['jugador'])){
	        //Comprobamos un objeto creado en la sesion
	        if (!isset($_SESSION['jugador'])) {
	          $jugador1 = new Jugador();
	          $jugador1->setNOMBRE($_POST['nombre']);
	          $jugador1->setAPELLIDOS($_POST['apellidos']);
	          $jugador1->setEDAD($_POST['edad']);
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
	$ptos=$jugador1->getPUNTOS();
	$ptos++;
	$jugador1->setPUNTOS($ptos);
	 include('configuracion.php');
	?><center>
	<div style="margin-top:7%;">
	          <font size="35">¡HAS GANADO UN PUNTO!!!</font>
	          <br>
	          <a href="Modalidades.php"><img src="dices_img/continuar.png" /></a>
	</div> 
	</center>
	<?php
	}else{
		echo "Intentalo de nuevo";
	}
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
		</body>
	</html>