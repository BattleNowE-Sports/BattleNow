<!DOCTYPE html>
<html>
<head>
	<title>Partidas</title>
<<<<<<< HEAD
  <script type="text/javascript">
    $("#bo").click(function(){
        $(this).fadeOut(300);
    });
  </script>
=======
>>>>>>> master
</head>
<body>
<table>
	<tbody>
		<?php
<<<<<<< HEAD
    error_reporting(0); 
		  $u = new Competicion();
=======
		  $u = new Usuarios();
>>>>>>> master
          foreach ($juegos as $j ) {
          $l = $u->buscarLigas($j["Juego"]);
          $array = array();
          $this->session->set_userdata('infoP',$array);
            foreach ($l as $n) {
            	$par = $this->session->userdata('infoP');
<<<<<<< HEAD
            	$p = $u->sacarPartidos($n["CODLiga"]);
                foreach ($p as $datos) {
                   $partidoSac = array(
                     'id' => $datos["CODPartido"],
=======
            	$p = $u->sacarPartidos($n["Abreviatura"]);
                foreach ($p as $datos) {
                   $partidoSac = array(
>>>>>>> master
                     'eq1' => $datos["Equipo1"],
                     'eq2' => $datos["Equipo2"],
                     'hora' => $datos["Hora"],
                     'fecha' => $datos["Fecha"],
                     'stream' => $datos["Streaming"],
<<<<<<< HEAD
                     'lig' => $datos["CODLiga"],
=======
                     'lig' => $datos["Liga"],
>>>>>>> master
                     'result1' => $datos["ResEq1"],
                     'result2' => $datos["ResEq2"]                                                                
                    );
            	array_push($par, $partidoSac);
                }
            }
          $this->session->set_userdata('infoP',$par);
          $infoPart = $this->session->userdata('infoP');
<<<<<<< HEAD
          $juego = $j["Juego"];
          $p1 = $infoPart[0]["id"];
          $p2 = $infoPart[1]["id"];
          $p3 = $infoPart[2]["id"];
          $p4 = $infoPart[3]["id"];
		?>
	 <tr>	
		<td><img height="100px" width="200px" src="<?php echo base_url(); ?>img/<?php echo($juego)?>.png"></td>
      <td>
         <a href="<?php echo base_url()."index.php/Home/verInfoPartido/$p1"; ?>">
         <div style="height: 100px;width: 200px;background-color: red" id="bo"></div>
         </a> 
      </td>
        <td>
          <a href="<?php echo base_url()."index.php/Home/verInfoPartido/$p2"; ?>">
          <div style="height: 100px;width: 200px;background-color: red" id="bo"></div> 
        </a>
        </td>
        <td>
          <a href="<?php echo base_url()."index.php/Home/verInfoPartido/$p3"; ?>">
          <div style="height: 100px;width: 200px;background-color: red" id="bo"></div>
        </a>
        </td>
        <td>
          <a href="<?php echo base_url()."index.php/Home/verInfoPartido/$p4"; ?>">
          <div style="height: 100px;width: 200px;background-color: red" id="bo"></div>
          </a>
        </td>
        <td>
          <a href="<?php echo base_url()."index.php/Home/partidas/$juego"; ?>">
          <img height="100px" width="200px" src="<?php echo base_url(); ?>img/vermas.png">
        </a>
        </td>                
=======
		?>
	 <tr>	
		<td><img src="<?php echo base_url(); ?>img/<?php echo($j["Juego"])?>.png"></td>
        <td><?=$infoPart[0]['eq1']?></td>
        <td><?=$infoPart[1]['eq1']?></td>
        <td><?=$infoPart[2]['eq1']?></td>
>>>>>>> master
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