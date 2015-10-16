<html>
	<head>
		<title>CODE 01</title>
	
	
		
	</head>
	
	<body>
		<div class="container">
  <div class="row">
	  
		<?php
			
		
		function dadorandom(){
		    
		    
            $option=rand(1, 6);
		
		
		switch($option){
			    case 1:
			        ?><div class="col-sm-2"><img src='dices_img/dado_1.png'></div><?php
			    break;

			    case 2:
			         ?><div class="col-sm-2"><img src='dices_img/dado_2.png'></div><?php
			    break;
			        
			    case 3:
			         ?><div class="col-sm-2"><img src='dices_img/dado_3.png'></div><?php
			    break;
			    
			    case 4:
			         ?><div class="col-sm-2"><img src='dices_img/dado_4.png'></div><?php
			    break;
			    
			    case 5:
			         ?><div class="col-sm-2"><img src='dices_img/dado_5.png'></div><?php
			    break;
			    
			    case 6:
			         ?><div class="col-sm-2"><img src='dices_img/dado_6.png'></div><?php
			    break;
			    
			}
			
		
	    }
			return dadorandom;
			
			
		?>
		</div>
	</div>
	</body>
</html>