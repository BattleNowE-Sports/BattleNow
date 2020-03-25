<!DOCTYPE html>
<html>
<head>
	<title>Partidas</title>
</head>
<body>
<table>
	<tbody>
		<?php
		  $u = new Usuarios();
          foreach ($juegos as $j ) {
          $l = $u->buscarLigas($j["Juego"]);
          $array = array();
          $this->session->set_userdata('infoP',$array);
            foreach ($l as $n) {
            	$par = $this->session->userdata('infoP');
            	$p = $u->sacarPartidos($n["Abreviatura"]);
                foreach ($p as $datos) {
                   $partidoSac = array(
                     'eq1' => $datos["Equipo1"],
                     'eq2' => $datos["Equipo2"],
                     'hora' => $datos["Hora"],
                     'fecha' => $datos["Fecha"],
                     'stream' => $datos["Streaming"],
                     'lig' => $datos["Liga"],
                     'result1' => $datos["ResEq1"],
                     'result2' => $datos["ResEq2"]                                                                
                    );
            	array_push($par, $partidoSac);
                }
            }
          $this->session->set_userdata('infoP',$par);
          $infoPart = $this->session->userdata('infoP');
		?>
	 <tr>	
		<td><img src="<?php echo base_url(); ?>img/<?php echo($j["Juego"])?>.png"></td>
        <td><?=$infoPart[0]['eq1']?></td>
        <td><?=$infoPart[1]['eq1']?></td>
        <td><?=$infoPart[2]['eq1']?></td>
     <tr>
     	<?php
     	  $array = array();
          $this->session->set_userdata('infoP',$array);
          }
     	?>
	</tbody>
</table>
 </body>
</html>