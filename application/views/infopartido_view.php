<!DOCTYPE html>
<html>
<head>
	<title>Informacion del partido</title>
</head>
<body>
	<?php
	$c = new Competicion();
    foreach ($partido as $b) {
      if($b["Mapa1"] != NULL){
       $mapas = array($b["Mapa1"],$b["Mapa2"],$b["Mapa3"],$b["Mapa4"],$b["Mapa5"]);
       $this->session->set_userdata('mapas',$mapas);
     }
       $ju = $c->sacarJuego($b["CODLiga"]);
       foreach ($ju as $j) {
       	 $codeq1 = $c->sacarCodigoEquipo($b["Equipo1"],$j["Juego"]);
       	  foreach ($codeq1 as $l) {
       	  $jugadores = $c->sacarJugadores($l["CODEq"]);
       	  $array = array();
       	  $this->session->set_userdata('Players1',$array);
       	   $p = $this->session->userdata('Players1');
       	    foreach ($jugadores as $a) {
       	     $Jugador = array(
                     'user' => $a["Nick"],
                     'nom' => $a["Nombre"],
                     'apellidos' => $a["Apellidos"],
                     'edad' => $a["Edad"],
                     'palmares' => $a["Palmares"],
                     'equipo' => $a["Equipo"]                                                            
                    );
            	array_push($p, $Jugador);
                }
             $this->session->set_userdata('Players1',$p);
       	    }
       	 $codeq2 = $c->sacarCodigoEquipo($b["Equipo2"],$j["Juego"]);
       	  foreach ($codeq2 as $l) {
       	  $jugadores = $c->sacarJugadores($l["CODEq"]);
       	  $array = array();
       	  $this->session->set_userdata('Players2',$array);
       	  $p = $this->session->userdata('Players2');
       	    foreach ($jugadores as $a) {
       	     $Jugador = array(
                     'user' => $a["Nick"],
                     'nom' => $a["Nombre"],
                     'apellidos' => $a["Apellidos"],
                     'edad' => $a["Edad"],
                     'palmares' => $a["Palmares"],
                     'equipo' => $a["Equipo"],
                     'img' => $a["Imagen"]                                                            
                    );
            	array_push($p, $Jugador);
                }
                $this->session->set_userdata('Players2',$p);       	  	
       	  }
       	  }       	  
	?>
 <h1>Hola, bienvenido al partido de <?= $b["Equipo1"] ?> vs <?= $b["Equipo2"] ?> </h1>
 <p>
 	<div class="row">
 	<div class="col-sm-4" style="text-align: right;">
    <div>
 	<th><img height="200px" width="200px" src="<?php echo base_url(); ?>img/<?php echo($b['Equipo1'])?>.png"></th>
    </div>
 	<div>
    <?php
 	 $pl1 = $this->session->userdata('Players1');
       foreach ($pl1 as $p) {
      $jug = $p["user"];
         echo "<div>";
       	 echo "<h3> $jug </h3>";
       	 echo "</div>";
       }
 	?>
    </div>
    </div>
 	<div class="col-sm-4">
     <?php
         echo "<h3> $b[ResEq1]  :  $b[ResEq2] </h3>";
         echo "<h6> $b[Fecha] - $b[Hora]</h6>";
     	?>
      <br><br><br>
      <hr>
      <br>
      <?php 
       $mapas = $this->session->userdata('mapas');
       foreach ($mapas as $m) {
       echo "<div>";
       echo "<h4>$m</h4>";
       echo "</div>";
     }
      ?>
     </div>
    <div class="col-sm-4" style="text-align: left;">
         <div>
 	    <th><img height="200px" width="200px" src="<?php echo base_url(); ?>img/<?php echo($b['Equipo2'])?>.png"></th>
         </div>
 <div>
  <?php
 	 $pl2 = $this->session->userdata('Players2');
       foreach ($pl2 as $p) {
      $jug = $p["user"]; 
      $img = "base_url().'img/jugadores/$p[img]'.";
         echo "<div>";
         echo "<img src=".$img.">";
       	 echo "<h3> $jug </h3>";
       	 echo "</div>";
       }
 	?>
  </div>
 </div>
 </div>
 </p>
 <br>
 <br>
 <br>
 <br>

 	<?php
 	      $array = array();
          $this->session->set_userdata('Players1',$array);
          $this->session->set_userdata('Players2',$array);
          $this->session->set_userdata('mapas',$array);
      }
	?>
</body>
</html>