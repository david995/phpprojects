<?php
//FUNCION PARA LAS IMAGENES DEL DADO DE 6 CARAS
			function random6(){
				$numrandom=rand(1, 6);
				return $numrandom;
			}
//FUNCION PARA LAS IMAGENES DEL DADO DE 3 CARAS
			function random3(){
				$numrandom=rand(1, 3);
				return $numrandom;
			}
//FUNCION PARA LAS IMAGENES DEL DADO DE 12 CARAS
			function random12(){
				$numrandom=rand(1, 12);
				return $numrandom;
			}
			$valor1=random6();
      $valor2=random6();
      $valor3=random3();
      $valor4=random3();
      $valor5=random3();
      $valor6=random12();
		?>
		<br>
		<br>
		<!-- PRIMER CONTENEDOR DE BOOSTRAP PARA MOSTRAR EL FORMULARIO Y LOS DADOS -->
		
<div class="container-fluid" style="margin-left:5%;">
  <div class="row">
    <!-- DADOS MOSTRADOS POR PANTALLA -->
    <div class="col-sm-1"><A HREF="javascript:imagen1()"><img id="img1" class="borde" src='dices_img/dado_<?=$valor1?>.png'></A></div>
    <div class="col-sm-1"><A HREF="javascript:imagen2()"><img id="img2" class="borde" src='dices_img/dado_<?=$valor2?>.png'></A></div>
    <div class="col-sm-1"><A HREF="javascript:imagen3()"><img id="img3" class="borde" src='dices_img/dado_<?=$valor3?>.png'></A></div>
    <div class="col-sm-1"><A HREF="javascript:imagen4()"><img id="img4" class="borde" src='dices_img/dado_<?=$valor4?>.png'></A></div>
    <div class="col-sm-1"><A HREF="javascript:imagen5()"><img id="img5" class="borde" src='dices_img/dado_<?=$valor5?>.png'></A></div>
    <div class="col-sm-3"><img id="img5" class="borde" src='dices_img/dodecaedro_<?=$valor6?>.png'></div>
    <div class="col-sm-4" >
      <form id="formdices" style="width:550px; height:125px;" name="formulario" ><!-- FORMULARIO PARA MOSTRAR LA OPERACION QUE SE VA HACIENDO -->
        
        <label>
          OPERACIÓN DE LOS DADOS
        </label>
        <br>
        <br>
       
         
         <center><input style="color:black; width:200px;" type="text" name="operacion" id="operacion" readonly="readonly" /></center>
         
       <!-- CAMPOS HIDDEN PARA GUARDAR EL VALOR DE CADA UNO DE LOS DADOS -->
       
        <input type="hidden" name="v1oculto" value="<?=$valor1;?>"/>
        <input type="hidden" name="v2oculto" value="<?=$valor2;?>"/>
        <input type="hidden" name="v3oculto" value="<?=$valor3;?>"/>
        <input type="hidden" name="v4oculto" value="<?=$valor4;?>"/>
        <input type="hidden" name="v5oculto" value="<?=$valor5;?>"/>
        <input type="hidden" name="v6oculto" value="<?=$valor6;?>"/>
        
      </form>
      
      <!-- SEGUNDO CONTENEDOR -->
      
      <br>
      <div class="container">
        <div class="row">
          <div style=" width:550px; height:420px;" id="calccc"  class="col-sm-1">
             <img id="in1" style='display:none; float:left;' class="borde" src='dices_img/dado_<?=$valor1?>.png'>
             <img id="in2" style='display:none; float:left;'class="borde" src='dices_img/dado_<?=$valor2?>.png'>
             <img id="in3" style='display:none; 'class="borde" src='dices_img/dado_<?=$valor3?>.png'>
             <img id="in4" style='display:none; float:left;'class="borde" src='dices_img/dado_<?=$valor4?>.png'>
             <img id="in5" style='display:none;'class="borde" src='dices_img/dado_<?=$valor5?>.png'>
             
              <A HREF="javascript:imgsuma()"><img id="suma"  style="position:absolute; bottom:40px;left:5px"  src='dices_img/suma.png'></A>
              <A HREF="javascript:imgresta()"><img id="resta" style="position:absolute; bottom:65px; left:150px" src='dices_img/resta.png'></A>
              <A HREF="javascript:imgigual()"><img id="igual" style="position:absolute; bottom:32px; left:350px" src='dices_img/igual.png'></A>
            
          </div>
          
          <script type="text/javascript" src="/math_dice/javascript/functionform.js"></script>
          
        </div>
      </div>
    </div>
     
  </div>
</div>
 