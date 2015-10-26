<?php

if(isset($_GET["valor1oculto"])){
    $valor1oculto=$_GET["valor1oculto"];
    $operacion=$_GET["operacion"];
    $valor2oculto=$_GET["valor2oculto"];
    print("Valor 1: ".$valor1oculto."<br>");
    print("Operacion: ".$operacion."<br>");
    print("Valor 2: ".$valor2oculto."<br>");
    
    
}else{
    $operacion="No hay nada definido";
    print($operacion);
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
    </body>
</html>