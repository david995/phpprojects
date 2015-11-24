/*var nombre = prompr("Dime tu nombre");

if(nombre.toUpperCase()=="Pepe"){
		console.log("Eres Pepe");
	}else{
		console.log("No eres Pepe");
	}
}*/

var v1="perro";
var v2="pera";
if(v1>v2){
	// para esta comparación pilla solamente la primera letra y el resto la descarta diciendo que la p es mayor que la g porque está antes en el alfabeto.
	console.log("el perro es mayor");

}else{
	console.log("la pera es mayor")
}
console.log(v1.localeCompare(v2)); //0 si son iguales, 1 si el primer valor (v1) es mayor que el segundo (v2), y -1 si el segundo valor (v2) es mayor que el primero (v1)

var texto="Hola a todos los alumnos de DAW, alumnos";
var subcadena="alumnos";
var valor=texto.indexOf(subcadena,18);
console.log(valor);

var cadena="Modulos: DWEC,DWES,PRG,BDA."
var inicio=cadena.indexOf(":");
var fin=cadena.indexOf(".");

//console.log(cadena.substring(inicio+1, fin));
listado=cadena.substring(inicio+1, fin);
var listadoFinal=listado.split(",");
console.log(listadoFinal);
/*
var texto1="Pepe   ";
console.log(texto1.trim().-length); //trim quita espacios finales e iniciales.

console.log(texto1.charAt(0));
*/
var cadena1="Hola a todos";
var nuevacadena="";

for (var i = 0; i < cadena1.length; i++) {

	switch(cadena1.charAt(i)){
		case "a":
		case "e":
		case "i":
		case "o":
		case "u":
			//document.write(cadena1.charAt(i).toUpperCase());
			nuevacadena=nuevacadena+cadena1.charAt(i).toUpperCase();
		break;
		
		default:
			nuevacadena=nuevacadena+cadena1.charAt(i);
		break;
	}
};

document.write(nuevacadena);