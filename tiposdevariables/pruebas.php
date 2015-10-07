<html>
    <head>
        <title></title>
    </head>
    <body>
       <?php
    $array_simple=array("rojo","azul","verde","magenta");
    
    $array_submenu=array("cosa1","cosa2","cosa3");
    
    $array = array("Inicio", "Juego", "Instrucciones");

    echo "El numero de elementos del array es ".count(array_simple);
    echo" <ul> ";
    for ($i = 0; $i < count($array_simple); $i++) {
        //echo "El valor de la posición $i es ".$array_simple[$i]."<br>";
        
        echo"   <li>".$array_simple[$i]."</li>";
        if($i==1){
        echo" <ul> ";
         for ($j = 0; $j < count($array_submenu) && $i==1; $j++) {
             
        echo"   <li>".$array_submenu[$j]."</li>";
        
         }//segundo for
         echo" </ul> ";
        }//if
    }// primer for
     echo" </ul>";

?> 
    </body>
</html>
