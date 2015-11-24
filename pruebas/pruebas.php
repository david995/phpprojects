<form id="formdices" name="formulario" ><!-- action="resultado.php" method="get -->
        
        <label>
          OPERACIÓN DE LOS DADOS
        </label>
        <br>
        <br>
        DADO <input id="black"  style="width:20px;" maxlength="1" type="text" name="numdado1"/> : <input id="black" type="text" name="dado1"/>
        <br>
        <br>
        + &nbsp;<input type="radio" name="operacion" value="+"/>
        - &nbsp;<input type="radio" name="operacion" value="-"/>
        <input type="hidden" name="valor1oculto" value="<?=$valor1;?>"/>
        <input type="hidden" name="valor2oculto" value="<?=$valor2;?>"/>
        <input type="hidden" name="valor3oculto" value="<?=$valor3;?>"/>
        <input type="hidden" name="valor4oculto" value="<?=$valor4;?>"/>
        <input type="hidden" name="valor5oculto" value="<?=$valor5;?>"/>
        <br>
        <br>
        DADO <input id="black" style="width:20px;" maxlength="1" type="text" name="numdado2"/> : <input id="black" type="text" name="dado2"/>
        <br>
        <br>
        <?php
          //$vcalc = calc();  
          //<input type="button" onclick="calc()" value="Calcular"></input>
          //<input type="button" name="btcalc" value="Calcular" onclick="getElementById('calc').innerHTML='hola'">
        ?>
        
        <input id="black" type="submit" name="submit" value="Calcular valores"/>
      <button id="black" onclick="calc">prueba</button>
      
       
      </form>
      
      
      
      <script type="text/javascript">
        function llamada(){
          var cajadiv=document.getElementById("calc");
           var formulario=document.getElementById("formdices");
           var cajaiframe=document.getElementById("FrameID");
           var ndado1=formulario.numdado1.value;
           console.log(ndado1);
           var ndado2=formulario.numdado2.value;
           console.log(ndado2);
           var dado1=formulario.dado1.value;
           console.log(dado1);
           var dado2=formulario.dado2.value;
           console.log(dado2);
           var op=formulario.operacion.value;
           console.log(op);
           var voculto1=formulario.valor1oculto.value;
           console.log(voculto1);
           var voculto2=formulario.valor2oculto.value;
           console.log(voculto2);
           var voculto3=formulario.valor3oculto.value;
           console.log(voculto3);
           var voculto4=formulario.valor4oculto.value;
           console.log(voculto4);
           var voculto5=formulario.valor5oculto.value;
           console.log(voculto5);
           //cajadiv.innerHTML="<iframe style='width:100%; height:96px;' src='resultado.php?numdado1="+String(ndado1)+"&dado1="+String(dado1)+"&operacion="+String(op)+"&valor1oculto="+String(voculto1)+"&valor2oculto="+String(voculto2)+"&valor3oculto="+String(voculto3)+"&valor4oculto="+String(voculto4)+"&valor5oculto="+String(voculto5)+"&numdado2="+String(ndado2)+"&dado2="+String(dado1)+"'></iframe>";
//cajadiv.innerHTML="<iframe style='width:100%; height:96px;' src='resultado.php?numdado1=1&dado1=1&operacion=%2B&valor1oculto=1&valor2oculto=5&valor3oculto=2&valor4oculto=1&valor5oculto=1&numdado2=2&dado2=5'></iframe>";
          cajaiframe.src="prueba.php?valor1oculto="+dado1+"&valor2oculto="+dado2+"";
          var iframe = document.getElementById('youriframe');
iframe.src = iframe.src;
        }
      </script>