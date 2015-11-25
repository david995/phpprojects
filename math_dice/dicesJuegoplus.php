<?php

			function random6(){
				$numrandom=rand(1, 6);
				return $numrandom;
			}
			function random3(){
				$numrandom=rand(1, 3);
				return $numrandom;
			}
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
<div class="container-fluid" style="margin-left:5%;">
  <div class="row">
    <div class="col-sm-1"><A HREF="javascript:imagen1()"><img id="img1" class="borde" src='dices_img/dado_<?=$valor1?>.png'></A></div>
    <div class="col-sm-1"><A HREF="javascript:imagen2()"><img id="img2" class="borde" src='dices_img/dado_<?=$valor2?>.png'></A></div>
    <div class="col-sm-1"><A HREF="javascript:imagen3()"><img id="img3" class="borde" src='dices_img/dado_<?=$valor3?>.png'></A></div>
    <div class="col-sm-1"><A HREF="javascript:imagen4()"><img id="img4" class="borde" src='dices_img/dado_<?=$valor4?>.png'></A></div>
    <div class="col-sm-2"><A HREF="javascript:imagen5()"><img id="img5" class="borde" src='dices_img/dado_<?=$valor5?>.png'></A></div>
    <div class="col-sm-2"><img id="img5" class="borde" src='dices_img/dodecaedro_<?=$valor6?>.png'></div>
    <div class="col-sm-4" >
      <form id="formdices" style="width:550px; height:125px;" name="formulario" ><!-- action="resultado.php" method="get -->
        
        <label>
          OPERACIÓN DE LOS DADOS
        </label>
        <br>
        <br>
       <!-- DADO <p id=""></p>: <input style="color:black; width:25px;" type="text" name="dado1" id="dado1" readonly="readonly" /> DADO 2: <input id="dado2" style="color:black; width:25px;" type="text" id="dado2" name="dado2" readonly="readonly"/>
        
         DADO 3: <input style="color:black; width:25px;" type="text" id="dado3" name="dado3" readonly="readonly"/> DADO 4: <input style="color:black; width:25px;" type="text" id="dado4" name="dado4" readonly="readonly"/>
         
         DADO 5: <input style="color:black; width:25px;" type="text" id="dado5" name="dado5" readonly="readonly"/> -->
         
         <center><input style="color:black; width:200px;" type="text" name="operacion" id="operacion" readonly="readonly" /></center>
         <!--
         <br>
         <input style="color:black; width:25px;margin-left:5%;" type="text" name="op1" id="op1" readonly="readonly" /> <input style="color:black; width:25px;margin-left:10%;" type="text" name="op2" id="op2" readonly="readonly" />
         <input style="color:black; width:25px;margin-left:13%;" type="text" name="op3" id="op3" readonly="readonly" /> <input style="color:black; width:25px;margin-left:11%;" type="text" name="op4" id="op4" readonly="readonly" />
         <input style="color:black; width:25px;margin-left:12%;" type="text" name="op5" id="op5" readonly="readonly" /> -->
       
        <input type="hidden" name="v1oculto" value="<?=$valor1;?>"/>
        <input type="hidden" name="v2oculto" value="<?=$valor2;?>"/>
        <input type="hidden" name="v3oculto" value="<?=$valor3;?>"/>
        <input type="hidden" name="v4oculto" value="<?=$valor4;?>"/>
        <input type="hidden" name="v5oculto" value="<?=$valor5;?>"/>
        <input type="hidden" name="v6oculto" value="<?=$valor6;?>"/>
        
      </form>
      
     
      
      <br>
      <div class="container">
        <div class="row">
          <div style="width:550px; height:420px;" id="calccc"  class="col-sm-1">
             <img id="in1" style='display:none; float:left;' class="borde" src='dices_img/dado_<?=$valor1?>.png'>
             <img id="in2" style='display:none; float:left;'class="borde" src='dices_img/dado_<?=$valor2?>.png'>
             <img id="in3" style='display:none; 'class="borde" src='dices_img/dado_<?=$valor3?>.png'>
             <img id="in4" style='display:none; float:left;'class="borde" src='dices_img/dado_<?=$valor4?>.png'>
             <img id="in5" style='display:none;'class="borde" src='dices_img/dado_<?=$valor5?>.png'>
             
              <A HREF="javascript:imgsuma()"><img id="suma"  style="width:50px; position:absolute; bottom:40px;left:5px"  src='dices_img/suma.png'></A>
              <A HREF="javascript:imgresta()"><img id="resta" style="width:50px; position:absolute; bottom:55px; left:80px" src='dices_img/resta.png'></A>
              <A HREF="javascript:imgdivision()"><img id="division" style="width:50px; position:absolute; bottom:35px; left:160px" src='dices_img/division.png'></A>
              <A HREF="javascript:imgmulti()"><img id="multi" style="width:50px; position:absolute; bottom:45px; left:250px" src='dices_img/asterisco.png'></A>
              <A HREF="javascript:imgigual()"><img id="igual" style="position:absolute; bottom:32px; left:350px" src='dices_img/igual.png'></A>
            
          </div>
          
           <script type="text/javascript" src="/math_dice/javascript/functionform.js"></script>
          
        </div>
      </div>
    </div>
     
  </div>
</div>
 