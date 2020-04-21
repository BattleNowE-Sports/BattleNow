<!DOCTYPE html>
<html>
<head>
	<title>Partidas</title>
    <script type="text/javascript">
    $("#bo").click(function(){
        $(this).fadeOut(300);
    });
</script>
<style type="text/css">
  a:hover{
    text-decoration: none;
  }
  .mine{
    font-size: x-small;
    margin-top: 20%;
  }
</style>
</head>
<body>
<table>
	<tbody>
		<?php
    error_reporting(0); 
		  $u = new Competicion();
      echo $x = $u->sacarLogo("AdrianMonk");
          foreach ($juegos as $j ) {
          $l = $u->buscarLigas($j["Juego"]);
          $array = array();
          $this->session->set_userdata('infoP',$array);
          $par = $this->session->userdata('infoP');
            foreach ($l as $n) {            	
            	$p = $u->sacarPartidos($n["CODLiga"]);
                foreach ($p as $datos) {
                   $partidoSac = array(
                     'id' => $datos["CODPartido"],
                     'eq1' => $datos["Equipo1"],
                     'eq2' => $datos["Equipo2"],
                     'hora' => $datos["Hora"],
                     'fecha' => $datos["Fecha"],
                     'stream' => $datos["Streaming"],
                     'lig' => $datos["CODLiga"],
                     'result1' => $datos["ResEq1"],
                     'result2' => $datos["ResEq2"]                                                                
                    );
            	array_push($par, $partidoSac);
                }
            }
          $this->session->set_userdata('infoP',$par);
          $infoPart = $this->session->userdata('infoP');
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
         <div style="height: 100px;width: 250px;background-color: red" id="bo">
          <div class="container">
           <div class="row">
            <div class="col-sm-3" style="float: right;">
               <img width="40px" height="40px" style="display: flex;align-items: center;justify-content: center;margin-top: 40%;" src="<?php echo base_url()."img/Equipos/".$infoPart[0][eq1].".png"; ?>">   
               <h6 class="mine"><?= $infoPart[0]["eq1"] ?></h6>
            </div>
            <div class="col-sm-6">
             <h4 style="margin-top: 30%"><?= $infoPart[0]["result1"] ?> : <?= $infoPart[0]["result2"] ?></h4>
             <h6 style="font-size: xx-small;"><?= $infoPart[0]["fecha"] ?> - <?= $infoPart[0]["hora"] ?></h6>
            </div>
            <div class="col-sm-3" style="float: left;">
               <img width="40px" height="40px" style="display: flex;align-items: center;justify-content: center;margin-top: 40%;" src="<?php echo base_url()."img/Equipos/".$infoPart[0][eq2].".png"; ?>">
               <h6 class="mine"><?= $infoPart[0]["eq2"] ?></h6>
            </div>            
           </div>
         </div>
       </div>
         </a> 
      </td>
        <td>
          <a href="<?php echo base_url()."index.php/Home/verInfoPartido/$p2"; ?>">
          <div style="height: 100px;width: 250px;background-color: red" id="bo">
          <div class="container">
           <div class="row">
            <div class="col-sm-3" style="float: right;">
               <img width="40px" height="40px" style="display: flex;align-items: center;justify-content: center;margin-top: 40%;" src="<?php echo base_url()."img/Equipos/".$infoPart[1][eq1].".png"; ?>">   
               <h6 class="mine"><?= $infoPart[1]["eq1"] ?></h6>
            </div>
            <div class="col-sm-6">
             <h4 style="margin-top: 30%"><?= $infoPart[1]["result1"] ?> : <?= $infoPart[1]["result2"] ?></h4>
             <h6 style="font-size: xx-small;"><?= $infoPart[1]["fecha"] ?> - <?= $infoPart[1]["hora"] ?></h6>
            </div>
            <div class="col-sm-3" style="float: left;">
               <img width="40px" height="40px" style="display: flex;align-items: center;justify-content: center;margin-top: 40%;" src="<?php echo base_url()."img/Equipos/".$infoPart[1][eq2].".png"; ?>">
               <h6 class="mine"><?= $infoPart[1]["eq2"] ?></h6>
            </div>            
           </div>
         </div>            
          </div> 
        </a>
        </td>
        <td>
          <a href="<?php echo base_url()."index.php/Home/verInfoPartido/$p3"; ?>">
          <div style="height: 100px;width: 250px;background-color: red" id="bo">
          <div class="container">
           <div class="row">
            <div class="col-sm-3" style="float: right;">
               <img width="40px" height="40px" style="display: flex;align-items: center;justify-content: center;margin-top: 40%;" src="<?php echo base_url()."img/Equipos/".$infoPart[2][eq1].".png"; ?>">   
               <h6 class="mine"><?= $infoPart[2]["eq1"] ?></h6>
            </div>
            <div class="col-sm-6">
             <h4 style="margin-top: 30%"><?= $infoPart[2]["result1"] ?> : <?= $infoPart[2]["result2"] ?></h4>
             <h6 style="font-size: xx-small;"><?= $infoPart[2]["fecha"] ?> - <?= $infoPart[2]["hora"] ?></h6>
            </div>
            <div class="col-sm-3" style="float: left;">
               <img width="40px" height="40px" style="display: flex;align-items: center;justify-content: center;margin-top: 40%;" src="<?php echo base_url()."img/Equipos/".$infoPart[2][eq2].".png"; ?>">
               <h6 class="mine"><?= $infoPart[2]["eq2"] ?></h6>
            </div>            
           </div>
         </div>            
          </div>
        </a>
        </td>
        <td>
          <a href="<?php echo base_url()."index.php/Home/verInfoPartido/$p4"; ?>">
          <div style="height: 100px;width: 250px;background-color: red" id="bo">
          <div class="container">
           <div class="row">
            <div class="col-sm-3" style="float: right;">
               <img width="40px" height="40px" style="display: flex;align-items: center;justify-content: center;margin-top: 40%;" src="<?php echo base_url()."img/Equipos/".$infoPart[3][eq1].".png"; ?>">   
               <h6 class="mine"><?= $infoPart[3]["eq1"] ?></h6>
            </div>
            <div class="col-sm-6">
             <h4 style="margin-top: 30%"><?= $infoPart[3]["result1"] ?> : <?= $infoPart[3]["result2"] ?></h4>
             <h6 style="font-size: xx-small;"><?= $infoPart[3]["fecha"] ?> - <?= $infoPart[3]["hora"] ?></h6>
            </div>
            <div class="col-sm-3" style="float: left;">
               <img width="40px" height="40px" style="display: flex;align-items: center;justify-content: center;margin-top: 40%;" src="<?php echo base_url()."img/Equipos/".$infoPart[3][eq2].".png"; ?>">
               <h6 class="mine"><?= $infoPart[3]["eq2"] ?></h6>
            </div>            
           </div>
         </div>            
          </div>
          </a>
        </td>
        <td>
          <a href="<?php echo base_url()."index.php/Home/partidas/$juego"; ?>">
          <img height="100px" width="200px" src="<?php echo base_url(); ?>img/vermas.png">
        </a>
        </td>                
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