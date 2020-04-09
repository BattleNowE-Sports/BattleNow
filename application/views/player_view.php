<!DOCTYPE html>
<html>
 <?php  
   foreach ($jugador as $p) {
 ?>
<head>
	<title>Jugadores</title>
	<script type="text/javascript">
     $(document).ready(function(){
        $("#uno").on('mouseenter',function(){
            var nom = "<div id='div1' style='height:25%;width:0%;background-color:green'>Nombre</div>";
            var ed = "<div style='height:25%;width:0%;background-color:green'>Edad</div>";
            var eq = "<div style='height:50%;width:0%;background-color:green'>Descripcion</div>";
            $("#info").append(nom);
            $("#info").append(ed);
            $("#info").append(eq);  
            
        });
        $("#uno").on('mouseleave',function(){
            $("#info").html("");
        });
         
        $("#dos").hover(function(){
           
        }); 
     });
	</script>
</head>
<body>
 <br><br>
	<div class="row" style="background-color: blue">	
    <div class="col-sm-4">
    <br><br>
    <img height="80%" width="60%" style="background-color: orange;" src="<?php echo base_url(); ?>img/jugadores/<?= "$p[Imagen]" ?>" >
    <h2 style="color: white;margin-bottom: 5%"><?= $p["Nick"] ?></h2>
    
    </div>
    <div class="col-sm-1">
      <div id="uno" style="height: 25%;width: 100%;background-color: green">
      	<img style="margin-top: 10%" width="80%" height="80%" src="<?php echo base_url(); ?>img/info.png">
      </div>
      <div id="dos" style="height: 25%;width: 100%;background-color: purple"></div>
      <div id="tres" style="height: 25%;width: 100%;background-color: grey"></div>
      <div id="cuatro" style="height: 25%;width: 100%;background-color: orange"></div>	
    </div>
    <div class="col-sm-7" style="text-align: center;">
    	<br><br>
    	<div style="background-color: white;width: 80%;height: 80%;margin-left: 10%;" id="info">
    	</div>
     </div>
	</div>	
	<br><br>
 <?php
   }
 ?>	
</body>
</html>