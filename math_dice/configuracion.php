<!-- PHP  -->

      <?php
$lenguaje="es";

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
				"es"=>"Juego tradicional",
				"en"=>"Traditional game",
			),
			"sub1"=>array(
				"es"=>"Juego para niños",
				"en"=>"Game for kids",
				),
			)
		)
	);
	
$titulo = $menu["titulo"][$lenguaje]; //TÍTULO

?>
<img id="fondo" src="dices_img/fondo.jpg" alt="Fondo" />

          <!-- FINAL DEL MENÚ -->
          
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class='navbar-brand' href='#'><?=$titulo?></a> <!-- TÍTULO -->
    </div>
    <div>
      <ul class="nav navbar-nav">
         <li class='active'><a href='#'><?=$menu["inicio"][$lenguaje]?></a></li> <!-- INICIO -->
         <li class='dropdown'><a class='dropdown-toggle' data-toggle='dropdown' href='#'><?=$menu["juegos"][$lenguaje]?><span class='caret'></span></a> <!-- INICIO DEL SUBMENÚ -->
          <ul class='dropdown-menu'>
            <?php
            for ($i = 0; $i < count($menu["juegos"]["submenu"]); $i++) {
              echo "<li><a href='#'>".$menu["juegos"]["submenu"]["sub$i"][$lenguaje]."</a></li>"; // FOR PARA MOSTRAR EL SUBMENÚ
            }
            ?>
          </ul>
        </li>
        <li class='active'><a href='#'><?=$menu["info"][$lenguaje]?></a></li> <!-- INSTRUCCIONES -->
      </ul>
    </div>
  </div>
</nav>
          <!-- FINAL DEL MENÚ -->
<?php
 include "dices.php";
 ?>

	     

