
<?php
	include('jugador.php');
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
 
 
?><center>
<div style="margin-top:15%;">
          <font size="35">¡¡¡HAS GANADO UN PUNTO!!!</font>
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
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilo1.css">
	</head>
	<body>
		<img id="fondo" src="dices_img/fondo.png.jpg"></img>
	</body>
</html>