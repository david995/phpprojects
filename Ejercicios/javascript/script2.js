var cadena="kfs732has233";

var suma=0;


for (var i = 0; i < cadena.length; i++) {

	switch(cadena.charAt(i)){

        case "0":
		case "1":
		case "2":
		case "3":
		case "4":
		case "5":
		case "6":
		case "7":
		case "8":
		case "9":

			suma=suma + Number(cadena.charAt(i));
			console.log(suma);
		break;
	}
};
alert("la suma de la cadena es"+suma);