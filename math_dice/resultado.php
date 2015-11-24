<?php
    $valor1oculto=$_GET["valor1oculto"];
    $valor2oculto=$_GET["valor2oculto"];
    $valor3oculto=$_GET["valor3oculto"];
    $valor4oculto=$_GET["valor4oculto"];
    $valor5oculto=$_GET["valor5oculto"];
    $operador=$_GET["operacion"];
    $numd1=$_GET["numdado1"];
    $numd2=$_GET["numdado2"];
    $d1=$_GET["dado1"];
    $d2=$_GET["dado2"];
    
    
    
   $encontrado=true;
	$validacion1=true;
	$validacion2=true;
	$contador=0;
	$vectoroperacion = array();
	$vector = array();
    //array_push($pila, "manzana", "arándano");
    //print_r($pila);
	
			     
			      if($d1==$valor1oculto || $d1==$valor2oculto || $d1==$valor3oculto || $d1==$valor4oculto || $d1==$valor5oculto && $d2==$valor1oculto || $d2==$valor2oculto || $d2==$valor3oculto || $d2==$valor4oculto || $d2==$valor5oculto){
			        if($numd1<6 && $numd2 <6 && $numd1!=0 && $numd1!=0){
			          
			          switch($numd1){
			            case 1:
			              if($d1==$valor1oculto){}else{echo "Error: El valor no corresponde con el dado"; $validacion1=false;}
			              break;
			            case 2:
			              if($d1==$valor2oculto){}else{echo "Error: El valor no corresponde con el dado"; $validacion1=false;}
			              break;
			            case 3:
			              if($d1==$valor3oculto){}else{echo "Error: El valor no corresponde con el dado"; $validacion1=false;}
			              break;
			            case 4:
			              if($d1==$valor4oculto){}else{echo "Error: El valor no corresponde con el dado"; $validacion1=false;}
			              break;
			            case 5:
			              if($d1==$valor5oculto){}else{echo "Error: El valor no corresponde con el dado"; $validacion1=false;}
			              break;
			          }
			          switch($numd2){
			            case 1:
			              if($d2==$valor1oculto){}else{echo "Error: El valor no corresponde con el dado"; $validacion2=false;}
			              break;
			            case 2:
			              if($d2==$valor2oculto){}else{echo "Error: El valor no corresponde con el dado"; $validacion2=false;}
			              break;
			            case 3:
			              if($d2==$valor3oculto){}else{echo "Error: El valor no corresponde con el dado"; $validacion2=false;}
			              break;
			            case 4:
			              if($d2==$valor4oculto){}else{echo "Error: El valor no corresponde con el dado"; $validacion2=false;}
			              break;
			            case 5:
			              if($d2==$valor5oculto){}else{echo "Error: El valor no corresponde con el dado"; $validacion2=false;}
			              break;
			          }
    if($validacion1==true && $validacion2==true){
    	
			        $suma = $d1 + $d2;
			        $resta = $d1- $d2;
			        
			        
			        $operacion = "Num1: ".$numd1."Num2: ".$numd2;
			        array_push($vector, $operacion);
			        
			        
			        for ( $i = 0; $i < count($vector) && $encontrado==true && $operador=="+"; $i++) {
			        	
			          if($contador==0){
			             // vectorsuma.push(suma);
			            //  cajadiv.innerHTML=vectorsuma;
			             array_push($vectoroperacion, $suma);
			            
			            for ( $j = 0; $j < count($vectoroperacion); $j++) {
			              $mostrar = "Total : ".$vectoroperacion[$j]." ";
			              echo $mostrar;
			            }
			         }else{
	          	  if($vector[$contador]==$vector[$i-1]){
	          	  	
	          	    echo "Error: ya ha introducido esta operación";
	          	    $encontrado=false;
	          	    unset($vector[count($vector)]);
	          	    $contador--;
	          	  }else{ if(count($i==$vector)-1){
	          	        //    vectorsuma.push(suma);
			                //    cajadiv.innerHTML=vectorsuma;
			                array_push($vectoroperacion, $suma);
			           for ($j = 0; $j < count($vectoroperacion); $j++) {
			             $mostrar = "Total: ".$vectoroperacion[$j]." ";
			              echo $mostrar;
			            }
	          	         }
	          	    
	          	  }
	            }
			        };
			       
			        for ( $i = 0; $i < count($vector) && $encontrado==true && $operador=="-"; $i++) {
			        	
			          if($contador==0){
			             // vectorsuma.push(suma);
			            //  cajadiv.innerHTML=vectorsuma;
			             array_push($vectoroperacion, $resta);
			            
			            for ( $j = 0; $j < count($vectoroperacion); $j++) {
			              $mostrar = "Total : ".$vectoroperacion[$j]." ";
			              echo $mostrar;
			            }
			         }else{
	          	  if($vector[$contador]==$vector[$i-1]){
	          	    echo "Error: ya ha introducido esta operación";
	          	    $encontrado=false;
	          	    unset($vector[count($vector)]);
	          	    $contador--;
	          	  }else{ if(count($i==$vector)-1){
	          	        //    vectorsuma.push(suma);
			                //    cajadiv.innerHTML=vectorsuma;
			                array_push($vectoroperacion, $resta);
			           for ($j = 0; $j < count($vectoroperacion); $j++) {
			             $mostrar = "Total: ".$vectoroperacion[$i]." ";
			              echo $mostrar;
			            }
	          	         }
	          	    
	          	  }
	            }
			        };
			        $contador++;
			        
			        }else{echo "Error: Los valores de los dados no son correctos";}
			        }
			      }else{
			        echo "Error: Los valores de los dados no son correctos";
			      }
			      
			      
		      
			        
    /*
    if($dado1==$valor1oculto && $dado2==$valor2oculto){
        if($operacion=="+"){
            $resultado=$dado1+$dado2;
            print("Operación: ".$dado1." ".$operacion." ".$dado2." = ".$resultado);
        }else{
            $resultado=$dado1-$dado2;
            print("Operación: ".$dado1." ".$operacion." ".$dado2." = ".$resultado);
        }
    }else{
        
        print("Error: El valor introducido no es el mismo al de los dados.");
    }
    
    
}else{
    $error="No hay nada definido";
    print($error);
}*/
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