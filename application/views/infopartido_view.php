<!DOCTYPE html>
<html>
<head>
	<title>Informacion del partido</title>
</head>
<body>
	<?php
      foreach ($partido as $b) {
	?>
 <h1>Hola, bienvenido al partido de <?= $b["Equipo1"] ?> vs <?= $b["Equipo2"] ?> </h1>
 <p>
 	<img height="200px" width="200px" src="<?php echo base_url(); ?>img/<?php echo($b['Equipo1'])?>.png">

 	vs

 	<img height="200px" width="200px" src="<?php echo base_url(); ?>img/<?php echo($b['Equipo2'])?>.png">
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