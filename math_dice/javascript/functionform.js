
	        var cajadiv=document.getElementById("calc");
		      //var vectorsuma = new Array();
		      //var vectorresta = new Array();
		      var vectoroperacion = new Array();
		      var vector = new Array();
		      var contador=0;
		      
		     
		    console.log(contador);
		      function calc(){
		         var encontrado=true;
		         var validacion1=true;
		        var validacion2=true;
			      var d1 = document.forms.formulario.dado1.value;
			      var d2 = document.forms.formulario.dado2.value;
			      
			      var numd1 = document.forms.formulario.numdado1.value;
			      var operador = document.forms.formulario.operacion.value;
			      var numd2 = document.forms.formulario.numdado2.value;
			      
			      var hidden1 = document.forms.formulario.valor1oculto.value;
			      var hidden2 = document.forms.formulario.valor2oculto.value;
			      var hidden3 = document.forms.formulario.valor3oculto.value;
			      var hidden4 = document.forms.formulario.valor4oculto.value;
			      var hidden5 = document.forms.formulario.valor5oculto.value;
			      
			      
			      if(d1==hidden1 || d1==hidden2 || d1==hidden3 || d1==hidden4 || d1==hidden5 && d2==hidden1 || d2==hidden2 || d2==hidden3 || d2==hidden4 || d2==hidden5){
			        if(numd1<6 && numd2 <6 && numd1!=0 && numd1!=0){
			          
			          switch(parseInt(numd1)){
			            case 1:
			              if(d1==hidden1){console.log("hola")}else{cajadiv.innerHTML="Error: El valor no corresponde con el dado"; validacion1=false;}
			              break;
			            case 2:
			              if(d1==hidden2){}else{cajadiv.innerHTML="Error: El valor no corresponde con el dado"; validacion1=false;}
			              break;
			            case 3:
			              if(d1==hidden3){}else{cajadiv.innerHTML="Error: El valor no corresponde con el dado"; validacion1=false;}
			              break;
			            case 4:
			              if(d1==hidden4){}else{cajadiv.innerHTML="Error: El valor no corresponde con el dado"; validacion1=false;}
			              break;
			            case 5:
			              if(d1==hidden5){}else{cajadiv.innerHTML="Error: El valor no corresponde con el dado"; validacion1=false;}
			              break;
			            
			            
			          }
			          switch(parseInt(numd2)){
			            case 1:
			              if(d2==hidden1){}else{cajadiv.innerHTML="Error: El valor no corresponde con el dado"; validacion2=false;}
			              break;
			            case 2:
			              if(d2==hidden2){}else{cajadiv.innerHTML="Error: El valor no corresponde con el dado"; validacion2=false;}
			              break;
			            case 3:
			              if(d2==hidden3){}else{cajadiv.innerHTML="Error: El valor no corresponde con el dado"; validacion2=false;}
			              break;
			            case 4:
			              if(d2==hidden4){}else{cajadiv.innerHTML="Error: El valor no corresponde con el dado"; validacion2=false;}
			              break;
			            case 5:
			              if(d2==hidden5){}else{cajadiv.innerHTML="Error: El valor no corresponde con el dado"; validacion2=false;}
			              break;
			            
			          }
			          if(validacion1==true && validacion2==true){
			            console.log(validacion1);
			            console.log(validacion2);
			        var suma = parseInt(d1) + parseInt(d2);
			        var resta = parseInt(d1) - parseInt(d2);
			        var operacion = numd1+numd2;
			        vector.push(operacion);
			        console.log(numd1+numd2);
			        console.table(vector);
			        
			        for (var i = 0; i < vector.length && encontrado==true && operador=="+"; i++) {
			          if(contador==0){
			             // vectorsuma.push(suma);
			            //  cajadiv.innerHTML=vectorsuma;
			             
			            vectoroperacion.push(suma);
			            for (var j = 0; j < vectoroperacion.length; j++) {
			             var mostrar = "Total "+(i+1)+": "+vectoroperacion[i]+" ";
			              cajadiv.innerHTML=mostrar;
			            }
			         }else{
	          	  if(vector[contador]===vector[i-1]){
	          	    cajadiv.innerHTML="Error: ya ha introducido esta operación";
	          	    encontrado=false;
	          	    vector.pop();
	          	    contador--;
	          	  }else{ if(i==vector.length-1){
	          	        //    vectorsuma.push(suma);
			                //    cajadiv.innerHTML=vectorsuma;
			                vectoroperacion.push(suma);
			           for (var j = 0; j < vectoroperacion.length; j++) {
			             var mostrar = "Total: "+vectoroperacion[i]+" ";
			              cajadiv.innerHTML=mostrar;
			            }
	          	         }
	          	    
	          	  }
	            }
			        };
			        
			         for (var i = 0; i < vector.length && encontrado==true && operador=="-"; i++) {
			          if(contador==0){
			           //   vectorresta.push(resta);
			           //   cajadiv.innerHTML=vectorresta;
			           vectoroperacion.push(resta);
			           for (var j = 0; j < vectoroperacion.length; j++) {
			             var mostrar = "Total "+(i+1)+": "+vectoroperacion[i]+" ";
			              cajadiv.innerHTML=mostrar;
			            }
			         }else{
	          	  if(vector[contador]===vector[i-1]){
	          	    cajadiv.innerHTML="Error: ya ha introducido esta operación";
	          	    encontrado=false;
	          	    vector.pop();
	          	    contador--;
	          	  }else{ if(i==vector.length-1){
	          	    //        vectorresta.push(resta);
			             //       cajadiv.innerHTML=vectorresta;
			             vectoroperacion.push(resta);
			           for (var j = 0; j < vectoroperacion.length; j++) {
			             var mostrar = "Total "+(i+1)+": "+vectoroperacion[i]+" ";
			              cajadiv.innerHTML=mostrar;
			            }
	          	         }
	          	    
	          	  }
	            }
			        };
			        contador++;
			        console.log(contador);
			        }else{cajadiv.innerHTML="Error: Los valores de los dados no son correctos";}
			        }
			      }else{
			        cajadiv.innerHTML="Error: Los valores de los dados no son correctos";
			      }
			      
			      
		      }
