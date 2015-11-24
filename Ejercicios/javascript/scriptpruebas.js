/*with(document){
	write("La altura total "+ screen.height);
	write("<br>")
	write("La anchura total "+ screen.width);
	write("<br>")
	write("La altura disponible "+ screen.availHeight);
	write("<br>")
	write("La anchura disponible "+ screen.availWidth);
}

var ventananueva=window.open();*/

//ventananueva.document.write("<h1>Hola mundo</h1>");

//window.open("http://www.as.com");

//var ventananueva2=window.open(/*"URL"*/,/*"NOMBRE DE LA VENTANA"*/,"width=200,height=200");
function abrirventana(){
	window.open('', '_self', '');
	
}
function cerrarventana(cmd)
{   
    if (cmd=='open')
    {
       window.open("top","_self",""); 
    }
    if (cmd=='quit')
    {
       window.close(top,"_self");
    }
    return false;   
}