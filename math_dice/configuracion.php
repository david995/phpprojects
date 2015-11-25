<!-- PHP  -->
      <?php
      
      
      $lenguaje1=$_GET['lenguaje'];
      if($lenguaje1==null){
$lenguaje="es";
}else{
	$lenguaje=$lenguaje1;
}
$contador=0;

$menu=array(
	"titulo"=>array(
		"es"=>"Math Dice",
		"en"=>"Math Dice"
	    ),
	"inicio"=>array(
		"es"=>"Inicio",
		"en"=>"Home"
		),
	"info"=>array(
		"es"=>"Instrucciones",
		"en"=>"Instructions"
		),
	"juegos"=>array(
		"es"=>"Juegos",
		"en"=>"Games",
		"submenu"=>array(
			"sub0"=>array(
				"es"=>"Juego",
				"en"=>"Game",
			),
			"sub1"=>array(
				"es"=>"Juego+",
				"en"=>"Game+",
				),
			)
		)
	);
	


?>

          <!-- FINAL DEL MENÚ -->
          
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class='navbar-brand' href='iniciosesion.php'><?php echo $menu["titulo"][$lenguaje]?></a> <!-- TÍTULO -->
    </div>
    <div>
      <ul class="nav navbar-nav">
         <li class='active'><a href='Modalidades.php'><?=$menu["inicio"][$lenguaje]?></a></li> <!-- INICIO -->
         <li class='dropdown'><a class='dropdown-toggle' data-toggle='dropdown' href='#'><?=$menu["juegos"][$lenguaje]?><span class='caret'></span></a> <!-- INICIO DEL SUBMENÚ -->
          <ul class='dropdown-menu'>
            <?php
            /*for ($i = 0; $i < count($menu["juegos"]["submenu"]); $i++) {
              echo "<li><a href='#'>".$menu["juegos"]["submenu"]["sub$i"][$lenguaje]."</a></li>"; // FOR PARA MOSTRAR EL SUBMENÚ
            }*/
            foreach($menu["juegos"]["submenu"] as $valor){
            	echo "<li><a href='".$valor[$lenguaje].".php'>".$valor[$lenguaje]."</a></li>"; // FOREACH PARA MOSTRAR EL SUBMENÚ
            }
            ?>
          </ul>
        </li>
        <li class='active'><a href='instrucciones.php'><?=$menu["info"][$lenguaje]?></a></li> <!-- INSTRUCCIONES -->
      </ul>
      <ul class="nav navbar-nav navbar-right">
      <li><a href="<?=$_SERVER['PHP_SELF']?>?lenguaje=es"><img style="width:35px; heigth:35px;" src="dices_img/banderaes.jpg" /></a></li>
      <li><a href="<?=$_SERVER['PHP_SELF']?>?lenguaje=en"><img style="width:35px; heigth:35px;" src="dices_img/banderain.png" /></a></li>
    </ul>
    </div>
  </div>
</nav>
<img id="fondo" src="dices_img/fondo.png.jpg"></img>
          <!-- FINAL DEL MENÚ -->
          <div style="float: right;">
         
		    <?php
		        if(isset($jugador1)){
		    ?>
	           Jugador: <?=$jugador1->getNOMBRE()?> <br> Puntos: <?=$jugador1->getPUNTOS() //MUESTRA EL NOMBRE DEL JUGADOR Y LOS PUNTOS DE ESTE ?>
	       <?php
		        }else{
	       ?>
	           No hay jugadores definidos
	       <?php
		        }
	       ?>
		</div> 	</div> 