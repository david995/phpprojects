<?php

if(isset($_GET["valor1oculto"])){
    $valor1oculto=$_GET["valor1oculto"];
    $valor2oculto=$_GET["valor2oculto"];
    $operacion=$_GET["operacion"];
    $dado1=$_GET["dado1"];
    $dado2=$_GET["dado2"];
    $resultado=$dado1+$dado2;
    if($dado1==$valor1oculto && $dado2==$valor2oculto){
    print("Operación: ".$dado1." ".$operacion." ".$dado2." = ".$resultado);
    }else{
        print("Error: El valor introducido no es el mismo a los de los dados.");
    }
    
    
}else{
    $error="No hay nada definido";
    print($error);
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
    </body>
</html>