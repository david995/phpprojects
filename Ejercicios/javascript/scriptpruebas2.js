/*var url = document.getElementById("url").value;

sessionStorage.setItem("url", url);
var urlp = sessionStorage.getItem("url");*/
function abrirventana(){
var url=document.formulario.select1.value;
console.log(url);

	miventana=window.open(url, "", "width=400,height=300");
	
}