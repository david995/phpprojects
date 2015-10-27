<!-- PHP  -->

      <?php
$array_es = array("Math Dice","Inicio", "Juego", "Instrucciones");
$array_submenu_es= array("Juego tradicional","Juego modificado","Juego niños");

$array_en = array("Math Dice","Home", "Game", "Instructions");
$array_submenu_en= array("Tradicional game","Modified game","Kid game");

$ini=0;
$lenguaje="es";



?>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <?php
      echo "<a class='navbar-brand' href='#'>".$array_es[$ini]."</a>"
      ?>
    </div>
    <div>
            <!-- INICIO DEL MENÚ -->
      
      <ul class="nav navbar-nav">
         
        <?php
         
          if($lenguaje=="es"){ // IF LENGUAJE ESPAÑOL
            for ($i = 1; $i < count($array_es); $i++) {//PRIMER FOR
             if($i!=2){//PRIMER IF
              echo" <li class='active'><a href='#'>".$array_es[$i]."</a></li>";
              }//PRIMER IF
              if($i==2){//SEGUNDO IF
                echo "<li class='dropdown'><a class='dropdown-toggle' data-toggle='dropdown' href='#'>".$array_es[$i]."<span class='caret'></span></a>";
                echo "  <ul class='dropdown-menu'>";
                  for ($j = 0; $j < count($array_submenu_es) && $i==2; $j++) {//SEGUNDO FOR
                     echo "<li><a href='#'>".$array_submenu_es[$j]."</a></li>";
                  }//segundo for
                echo "  </ul>";
                echo "</li>";
              }//SEGUNDO IF
            }//PRIMER FOR    
      echo"</ul>";
          }//IF LENGUAJE ESPAÑOL
          
          if($lenguaje=="en"){ // IF LENGUAJE INGLÉS
            for ($i = 1; $i < count($array_en); $i++) {//PRIMER FOR
              if($i!=2){//PRIMER IF
                echo" <li class='active'><a href='#'>".$array_en[$i]."</a></li>";
              }//PRIMER IF
              if($i==2){//SEGUNDO IF
                echo "<li class='dropdown'><a class='dropdown-toggle' data-toggle='dropdown' href='#'>".$array_en[$i]."<span class='caret'></span></a>";
                echo "  <ul class='dropdown-menu'>";
                  for ($j = 0; $j < count($array_submenu_en) && $i==2; $j++) {//SEGUNDO FOR
                     echo "<li><a href='#'>".$array_submenu_en[$j]."</a></li>";
                  }//segundo for
                echo "  </ul>";
                echo "</li>";
              }//SEGUNDO IF
            }//PRIMER FOR
      echo"</ul>";
          }//IF LENGUAJE INGÉS
      
      ?>
      
          <!-- FINAL DEL MENÚ -->
    </div>
  </div>
</nav>
<?php
 include "dices.php";
 ?>

	     

