//no? (0+1=1 / 1+1=2 / 1+2=3 / 2+3=5 / 3+5=8 / 5+8=13 / 8+13=21 / 13+21=34...)

var num1=0;
var num2=1;
var resultado;
var aux;

var pregunta = Number(prompt("Introduce la posición de fibonacci que quieres"));
if(pregunta!=1){
for (var i = 1; i < pregunta; i++) {
	resultado=num1+num2;
	
	aux=resultado;
	num1=num2;
	num2=aux;

};

document.write(resultado);
}else{
	document.write(1);
}