var juego = prompt("Introduce piedra, papel o tijeras");
var numero12= Math.random();

		
if(numero12<0.33){
	//document.write("maquina -- piedra"+"    tu -- "+juego)
	//alert("maquina -- piedra"+"    tu -- "+juego);

		document.write("<b>Elecci&oacute;n del usuario: </b> "+juego+"<br>");
		document.write("<b>Elecci&oacute;n de la m&aacute;quina:</b> piedra  <br>");

	if(juego==="piedra"){
		document.write("<h2 class='empate'> EMPATE </h2>");
	}
	if(juego==="papel"){
		
		document.write("<h2 class='ganausuario'> HAS GANADO</h2>");
	}
	if(juego==="tijeras"){
		
		document.write("<h2 class='pierdeusuario'> HAS PERDIDO</h2>");
	}
}
 if(numero12>0.33 && numero12<0.66){
	
		document.write("<b>Elecci&oacute;n del usuario: </b> "+juego+"<br>");
		document.write("<b>Elecci&oacute;n de la m&aacute;quina:</b> tijeras <br>");

	if(juego==="tijeras"){

		document.write("<h2 class='empate'> EMPATE </h2>");
	}
	if(juego==="piedra"){

		document.write("<h2 class='ganausuario'> HAS GANADO</h2>");
	}
	if(juego==="papel"){

		document.write("<h2 class='pierdeusuario'> HAS PERDIDO</h2>");
	}

 }
 if(numero12>0.66){

		document.write("<b>Elecci&oacute;n del usuario: </b> "+juego+"<br>");
		document.write("<b>Elecci&oacute;n de la m&aacute;quina:</b> papel   <br>");

	if(juego==="papel"){
		document.write("<h2 class='empate'> EMPATE </h2>");
	}
	if(juego==="tijeras"){
		document.write("<h2 class='ganausuario'> HAS GANADO</h2>");
	}
	if(juego==="piedra"){
		document.write("<h2 class='pierdeusuario'> HAS PERDIDO</h2>");
	}

 }

