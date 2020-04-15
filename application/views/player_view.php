<!DOCTYPE html>
<html>
 <?php  
   foreach ($jugador as $p) {
   $c = new Competicion();
   $logo = $c->sacarLogo($p["Nick"]);
 ?>
<head>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
</script>
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
              

   /*        var n1 = "<div id='d1' style='height:0%;width:20%;background-color:green;float:right'></div>";
           var n2 = "<div id='d2' style='height:0%;width:20%;background-color:green;float:right'></div>";
           var n3 = "<div id='d3' style='height:0%;width:20%;background-color:green;float:right'></div>";
           var n4 = "<div id='d4' style='height:0%;width:20%;background-color:green;float:right'></div>";
           var n5 = "<div id='d5' style='height:0%;width:20%;background-color:green;float:right'></div>";
            $("#info").append(n1);
            $("#info").append(n2);
            $("#info").append(n3);
            $("#info").append(n4);
            $("#info").append(n5);

            $('#d1').animate({
                height: '100%' 
            },2000);  
            $('#d2').delay(2000).animate({
                height: '100%' 
            },2000);  
            $('#d3').delay(4000).animate({
                height: '100%' 
            },2000);  
            $('#d4').delay(6000).animate({
                height: '100%' 
            },2000);  
            $('#d5').delay(8000).animate({
                height: '100%' 
            },2000);                                                            
           */
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
        <img width="80%" height="80%" src="<?php echo base_url()."img/Equipos/".$logo.".png"; ?>">
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
	<br><br>
 <?php
   }
 ?>	
</body>
</html>