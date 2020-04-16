<!DOCTYPE html>
<html>
 <?php  
   foreach ($jugador as $p) {
   $c = new Competicion();
   $logo = $c->sacarLogo($p["Nick"]);
    foreach ($logo as $l) {
 ?>
<head>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
</script>
<style type="text/css">
  #par::-webkit-scrollbar {
    width: 7px;
  }
  #par::-webkit-scrollbar-thumb {
    background-color: orange;
  }
</style>
	<title>Jugadores</title>
	<script type="text/javascript">
     $(document).ready(function(){
        $("#uno").on('mouseenter',function(){
          $("#info").html("");
            var nom = "<div id='div1' style='height:25%;width:0%;background-color:green'></div>";
            var ed = "<div id='div2' style='height:25%;width:0%;background-color:green'></div>";
            var eq = "<div id='div3' style='height:50%;width:0%;background-color:green'></div>";
            $("#info").append(nom);
            $("#info").append(ed);
            $("#info").append(eq);
            
            $('#div1').animate({
                width: '100%' 
            },3000);
            $('#div2').delay(3000).animate({
                width: '100%' 
            },3000);
            $('#div3').delay(6000).animate({
                width: '100%' 
            },3000,"linear",function(){
                $(this).html("Hola");
            });            
        });
         
        $("#dos").on('mouseenter',function(){
          $("#info").html("");
          <?php
            $num = $c->numPlayers($p["Equipo"],$p["Nick"]);
          ?>
           var numP = 100 / (<?php echo $num ?> - 1) ;
           var num = <?php echo $num ?> ; 
           for (var i = 1; i < num; i++) {
              var div = "<div id='" + i + "' style='height:0%;width:" + numP + "%;background-color:green;float:right'></div>";
              $("#info").append(div);

            if(i==1){
              $("#" + i + "").animate({
                  height: '100%' 
              },2000);
            }else{
              var d = i * 2000;
             $("#" + i + "").delay(d).animate({
                height: '100%' 
            },2000); 
            }  

           }
        }); 

        ('#tres').on('mouseenter',function(){
        $("#info").html("");
        
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
    <h2 style="color: white;margin-bottom: 10%"><?= $p["Nick"] ?></h2>
    
    </div>
    <div class="col-sm-1">
      <div id="uno" style="height: 25%;width: 100%;background-color: green">
      	<img style="margin-top: 10%" width="80%" height="80%" src="<?php echo base_url(); ?>img/info.png">
      </div>
      <div id="dos" style="height: 25%;width: 100%;background-color: purple">
        <img style="margin-top: 10%" width="80%" height="80%" src="<?php echo base_url(); ?>img/Equipos/dallas.png">
      </div>
      <div id="tres" style="height: 25%;width: 100%;background-color: grey">
        <img style="margin-top: 10%" width="80%" height="80%" src="<?php echo base_url(); ?>img/stats.png">
      </div>
      <div id="cuatro" style="height: 25%;width: 100%;background-color: orange">
        <img style="margin-top: 10%" width="80%" height="80%" src="<?php echo base_url(); ?>img/tick.png">
      </div>	
    </div>
    <div class="col-sm-7" style="text-align: center;">
    	<br><br>
    	<div style="background-color: white;width: 80%;height: 80%;margin-left: 10%;" id="info">
    	</div>
     </div>
	</div>
  <div class="row" style="background-color: blue;width: 80%;height: 350px;margin-top: 2%;">
    <div class="container">
      <div class="table-responsive" id="par" style="height: 70%;margin-top: 1%;width: 100%;"> 
        <table class="table">
          <thead>
            <tr> 
              <th>Local</th>
              <th>Visitante</th>
              <th>Hora</th>
              <th>Fecha</th>
              <th>Liga</th>
                          
            </tr>
          </thead>
    <tbody>
      <?php
       $part = $c->PartidosPlayer($p["Equipo"]);
       foreach ($part as $i) {
      ?>
    <tr style="background-color: green">
      <td><?= $i["Equipo1"] ?></td>
      <td><?= $i["Equipo2"] ?></td>
      <td><?= $i["Hora"] ?></td>
      <td><?= $i["Fecha"] ?></td>
      <td><?= $i["CODLiga"] ?></td>
      
      <td width="20%"><a href="<?php echo $i['Streaming']; ?>"><img style="float: left;" width="80%" height="40%" src="<?php echo base_url(); ?>img/live.png"></a></td>
      
    </tr>
    <?php
      }
    ?>
    </tbody>          
        </table>
      </div>
    </div>  
  </div>	
	<br><br>
 <?php
 }
   }
 ?>	
</body>
</html>