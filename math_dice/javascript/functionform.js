
	        var img1 = document.getElementById('img1');
            var img2 = document.getElementById('img2');
            var img3 = document.getElementById('img3');
            var img4 = document.getElementById('img4');
            var img5 = document.getElementById('img5');
            
            var in1 = document.getElementById('in1');
            var in2 = document.getElementById('in2');
            var in3 = document.getElementById('in3');
            var in4 = document.getElementById('in4');
            var in5 = document.getElementById('in5');
            
            var valor1=document.forms.formulario.v1oculto.value;console.log(valor1);
            var valor2=document.forms.formulario.v2oculto.value;console.log(valor2);
            var valor3=document.forms.formulario.v3oculto.value;console.log(valor3);
            var valor4=document.forms.formulario.v4oculto.value;console.log(valor4);
            var valor5=document.forms.formulario.v5oculto.value;console.log(valor5);
            var valor6=document.forms.formulario.v6oculto.value;console.log(valor6);
            
            var operacion = document.getElementById('operacion');
            var sumaop="";
            var resultado=0;
            
            function imagen1(){
              document.getElementById('in1').style.display = 'block';
              document.getElementById('img1').style.display = 'none';
              sumaop=sumaop+valor1;
              operacion.value=sumaop;
              
              //document.forms.formulario.dado1.value=document.forms.formulario.v1oculto.value;
            }
            function imagen2(){
              document.getElementById('in2').style.display = 'block';
              document.getElementById('img2').style.display = 'none';
              sumaop=sumaop+valor2;
              operacion.value=sumaop;
              //document.forms.formulario.dado2.value=document.forms.formulario.v2oculto.value;
            }
            function imagen3(){
              document.getElementById('in3').style.display = 'block';
              document.getElementById('img3').style.display = 'none';
              sumaop=sumaop+valor3;
              operacion.value=sumaop;
              
              //document.forms.formulario.dado3.value=document.forms.formulario.v3oculto.value;
            }
            function imagen4(){
              document.getElementById('in4').style.display = 'block';
              document.getElementById('img4').style.display = 'none';
              sumaop=sumaop+valor4;
              operacion.value=sumaop;
              
              //document.forms.formulario.dado4.value=document.forms.formulario.v4oculto.value;
            }
            function imagen5(){
              document.getElementById('in5').style.display = 'block';
              document.getElementById('img5').style.display = 'none';
               sumaop=sumaop+valor5;
              operacion.value=sumaop;
             
              //document.forms.formulario.dado5.value=document.forms.formulario.v5oculto.value;
              console.log(sumaop);
            }
            
            function imgsuma(){
              sumaop=sumaop+"+";
              operacion.value=sumaop;
            }
            
            function imgresta(){
              sumaop=sumaop+"-";
              operacion.value=sumaop;
            }
            
            function imgigual(){
              console.log(sumaop);
              console.log(typeof(sumaop));
              resultado=eval(sumaop);
              //operacion.value=resultado;
              window.location="resultado.1.php?resultado="+resultado+"&dodecaedro="+valor6;
            }
            