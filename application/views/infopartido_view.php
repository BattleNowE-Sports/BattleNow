<!DOCTYPE html>
<html>
<head>
	<title>Informacion del partido</title>
</head>
<body>
	<?php
	$c = new Competicion();
    foreach ($partido as $b) {
       $ju = $c->sacarJuego($b["CODLiga"]);
       foreach ($ju as $j) {
       	 $codeq1 = $c->sacarCodigoEquipo($b["Equipo1"],$j["Juego"]);
       	  foreach ($codeq1 as $l) {
       	  $jugadores = $c->sacarJugadores($l["CODEq"]);
       	  $array = array();
       	  $this->session->set_userdata('Players1',$array);
       	    foreach ($jugadores as $a) {
       	     $p = $this->session->userdata('Players1');
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
       	    foreach ($jugadores as $a) {
       	     $p = $this->session->userdata('Players2');
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
                $this->session->set_userdata('Players2',$p);       	  	
       	  }
       	  }       	  
	?>
 <h1>Hola, bienvenido al partido de <?= $b["Equipo1"] ?> vs <?= $b["Equipo2"] ?> </h1>
 <p>
 	<div>
 	<img height="200px" width="200px" src="<?php echo base_url(); ?>img/<?php echo($b['Equipo1'])?>.png">
 	<?php
 	 $pl1 = $this->session->userdata('Players1');
       foreach ($pl1 as $p) {
      $jug = $p["user"]; 
       	 echo "<select>";
       	 echo "<option> $jug </option>";
       	 echo "</select>";
       }
 	?>
    </div>
 	vs
    <div>
 	<img height="200px" width="200px" src="<?php echo base_url(); ?>img/<?php echo($b['Equipo2'])?>.png">
 	<?php
 	 $pl2 = $this->session->userdata('Players2');
       foreach ($pl2 as $p) {
      $jug = $p["user"]; 
       	 echo "<select>";
       	 echo "<option> $jug </option>";
       	 echo "</select>";
       }
 	?>
 </div>
 </p>
 <br>
 <br>
 <br>
 <br>

 	<?php
      }
	?>
</body>
</html>