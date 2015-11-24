<?php
	include('Jugador.php');
	//Abrimos/reanudamos la sesion con la funcion session start
    session_start();
    //Comprobamos si realizamos la accion de crear el Jugador
    
   ?>
<html>
	<head>
		<title>POO SESSION
		</title>
	</head>
	<body>
	    <div>
    	    <h3>FORMULARIO DE JUGADOR</h3>
    		<form action="p_s2.php" method="post">
    		    <input type="hidden" name="jugador">
    			Nombre:<br>
    			<input type="text" name="nom">
    			<br>
    			Apellido:<br>
    			<input type="text" name="apell">
    			<br><br>
    			<input type="submit" value="Enviar">
    		</form>
		</div>
		
	</body>
</html>