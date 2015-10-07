<!DOCTYPE html>

<!-- PHP  -->

      <?php
$array_es = array("Math Dice","Inicio", "Juego", "Instrucciones");
$array_submenu_es= array("Juego tradicional","Juego modificado","Juego niños");

$array_en = array("Math Dice","Home", "Game", "Instructions");
$array_submenu_en= array("Tradicional game","Modified game","Kid game");

$ini=0;
$lenguaje="es";

?>

<!-- HTML  -->

<html lang="en">
<head>
  <title>Bootstrap Case</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>

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
      
    </div>
  </div>
</nav>
  
<div class="container">
  <div class="jumbotron">
    <h1>My first Bootstrap website!</h1>      
    <p>This page will grow as we add more and more components from Bootstrap...</p>      
    <a href="#" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-search"></span> Search</a>
  </div>

  <div class="row">
    <div class="col-md-3">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
    <div class="col-md-3"> 
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    <div class="col-md-3"> 
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
    <div class="col-md-3">
      
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#">Home</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Menu 1 <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Submenu 1-1</a></li>
            <li><a href="#">Submenu 1-2</a></li>
            <li><a href="#">Submenu 1-3</a></li>                        
          </ul>
        </li>
        <li><a href="#">Menu 2</a></li>
        <li><a href="#">Menu 3</a></li>
      </ul>
    </div>
    <div class="clearfix visible-lg"></div>
  </div>
</div>

</body>
</html>