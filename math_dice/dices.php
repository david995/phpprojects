<html>
	<head>
		<title>CODE 01</title>
	
	
		
	</head>
	
	<body>
		<div class="container">
  <div class="row">
	  
		<?php
		
		
			
			function random(){
				$numrandom=rand(1, 6);
				return $numrandom;
			}
			
			$valor1=random();
      $valor2=random();

	    
			
		?>
<div class="container">
  <div class="row">
    <div class="col-sm-3"><img src='dices_img/dado_<?=$valor1?>.png'></div>
    <div class="col-sm-4"><img src='dices_img/dado_<?=$valor2?>.png'></div>
    <div class="col-sm-4">
      <form action="resultado.php?valor1=$option" style="margin-top:50px; margin-left:30px; border:solid; padding:1em;" >
        
        <label>
          OPERACIÓN DE LOS DADOS
        </label>
        <br>
        DADO 1: <input type="text" name="dado1"/>
        <br>
        <br>
        + &nbsp;<input type="radio" name="operacion" value="+"/>
        - &nbsp;<input type="radio" name="operacion" value="-"/>
        <input type="hidden" name="valor1oculto" value="<?=$valor1;?>"/>
        <input type="hidden" name="valor2oculto" value="<?=$valor2;?>"/>
        <br>
        <br>
        DADO 2: <input type="text" name="dado2"/>
        <br>
        <br>
        <input type="submit" name="submit"/>
      </form>
    </div>
  </div>
</div>

		</div>
	</div>
	</body>
</html>