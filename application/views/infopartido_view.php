<!DOCTYPE html>
<html>
<head>
	<title>Informacion del partido</title>
  <style type="text/css">
  </style>
</head>
<body>
	<?php
	$c = new Competicion();
    foreach ($partido as $b) {
      if($b["Mapa1"] != NULL){
       $mapas = array($b["Mapa1"],$b["Mapa2"],$b["Mapa3"],$b["Mapa4"],$b["Mapa5"]);
       $this->session->set_userdata('mapas',$mapas);
     }
       	  $jugadores = $c->sacarJugadores($b["Equipo1"]);
       	  $array = array();
       	  $this->session->set_userdata('Players1',$array);
       	   $p = $this->session->userdata('Players1');
       	    foreach ($jugadores as $a) {
       	     $Jugador = array(
                     'user' => $a["Nick"],
                     'nom' => $a["Nombre"],
                     'apellidos' => $a["Apellidos"],
                     'edad' => $a["Edad"],
                     'desc' => $a["Descripcion"],
                     'equipo' => $a["Equipo"],
                     'imag' => $a["Imagen"],
                     'tit' => $a["Titularidad"]                                                              
                    );
            	array_push($p, $Jugador);
                }
             $this->session->set_userdata('Players1',$p);
       	    
       	  $array = array();
       	  $this->session->set_userdata('Players2',$array);
          $jugadores2 = $c->sacarJugadores($b["Equipo2"]);
       	  $p = $this->session->userdata('Players2');
       	    foreach ($jugadores2 as $a) {
       	     $Jugador = array(
                     'user' => $a["Nick"],
                     'nom' => $a["Nombre"],
                     'apellidos' => $a["Apellidos"],
                     'edad' => $a["Edad"],
                     'desc' => $a["Descripcion"],
                     'equipo' => $a["Equipo"],
                     'imag' => $a["Imagen"],
                     'tit' => $a["Titularidad"]                                                            
                    );
            	array_push($p, $Jugador);
                }
                $this->session->set_userdata('Players2',$p);       	  	
       	  
       	         	  
	?>
 <h1>Hola, bienvenido al partido de <?= $b["Equipo1"] ?> vs <?= $b["Equipo2"] ?> </h1>
 <p>
 	<div class="row">
 	<div class="col-sm-4" style="text-align: right;">
    <div>
 	<th><img height="200px" width="200px" src="<?php echo base_url(); ?>img/Equipos/<?php echo($b['Equipo1'])?>.png"></th>
    </div>
 	<div>
    <br><br>
  <?php
 	 $pl1 = $this->session->userdata('Players1');
       foreach ($pl1 as $p) {
        if($p["tit"] == "T"){
      $jug = $p["user"];
   ?>
   <a href="<?php echo base_url()."index.php/Home/verInfoPlayer/$p[user]"; ?>">   
   <?php
         echo "<div style='text-align: right;'>";
   ?>
    <img width="150px" height="150px" style="background-color: orange;" src="<?php echo base_url(); ?>img/jugadores/<?= "$p[imag]" ?>"></a>
  <?php    
       	 echo "<h3 style= 'color: orange;'> $jug </h3>";
       	 echo "</div>";
   ?>      
    </a>
   <?php 
        }
       }
 	 ?>
    </div>
    </div>
 	<div class="col-sm-4">
     <?php
         echo "<h1> $b[ResEq1]  :  $b[ResEq2] </h1>";
         echo "<h6> $b[Fecha] - $b[Hora]</h6>";
     	?>
      <br><br><br>
      <hr>
      <br>
      <?php 
      if(!$this->session->userdata('mapas')){
      }else{
       $mapas = $this->session->userdata('mapas');
       $i = 1;
       foreach ($mapas as $m) {
      echo "<br><br>";
       echo "<div>";
       echo "<h4>Mapa $i - $m </h4>";
       ?>
         <img width="80%" height="200px"  src="<?php echo base_url(); ?>img/mapas/<?= "$m" ?>"></a>
       <?php
       echo "</div>";
       $i++;
     }
     }
      ?>
      <br><br><br></br>
      <hr>
     </div>
    <div class="col-sm-4" style="text-align: left;">
         <div>
 	    <th><img height="200px" width="200px" src="<?php echo base_url(); ?>img/Equipos/<?php echo($b['Equipo2'])?>.png"></th>
         </div>
 <div>
  <br><br>
  <?php
 	 $pl2 = $this->session->userdata('Players2');
       foreach ($pl2 as $p) {
      $jug = $p["user"];
   ?>     
  <a href="<?php echo base_url()."index.php/Home/verInfoPlayer/$p[user]"; ?>">  
   <?php 
         echo "<div>";
   ?>    
         <img width="150px" height="150px" style="background-color: orange;" src="<?php echo base_url(); ?>img/jugadores/<?= "$p[imag]" ?>" >
   <?php      
       	 echo "<h3 style= 'color: orange;'> $jug </h3>";
       	 echo "</div>";
       }
 	?>
  </div>
 </div>
 </div>
 </p>

<h1>Informacion adicional del partido</h1>
<br><br>
<center>
<h5>Este partido esta siendo disputado en <?= substr($b["CODLiga"],0,3)  ?> </h5>
<div style="width: 500px;height: 300px;background-color: orange;">
  <div class="row">
    <div class="col-sm-4">
    </div>
    <div class="col-sm-4">
    </div>    
    <div class="col-sm-4">
    </div>
  </div>
</div>
</center>
<br><br>



 	<?php
 	      $array = array();
          $this->session->set_userdata('Players1',$array);
          $this->session->set_userdata('Players2',$array);
          $this->session->set_userdata('mapas',$array);
      }
	?>
</body>
</html>