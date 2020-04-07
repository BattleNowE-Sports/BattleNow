<!DOCTYPE HTML>
<html lang="es">
<head>
<meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- Para adaptar a los dispositivos móviles -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Última compilación y jquery minimizado -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!--Librería popper-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> 

    <!-- JavaScript de Bootstrap -->
    <script src="<?php echo base_url(); ?>css/bootstrap4/js/bootstrap.min.js"></script>
    <!-- CSS de Bootstrap -->
    <link href="<?php echo base_url(); ?>css/bootstrap4/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cambay&display=swap" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/estiloGeneral.css">
</head>
<body>
    <div id="encabezado">
        <ul class="nav">
            <li class="nav-item" id="principal">
                <a href="<?php echo base_url()."index.php/Home/index"; ?>" name="eleccion"><img src="<?php echo base_url(); ?>img/logoDefinitivo.png" class="img-fluid" id="logo"></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle active" data-toggle="dropdown" href="<?php echo base_url()."index.php/Home/partidas/Todo"; ?>" role="button" aria-haspopup="true" aria-expanded="false" name="eleccion" onmouseover="cambiaCarrusel()">Partidas</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="<?php echo base_url()."index.php/Home/partidas/COD"; ?>">Call of Duty</a>
                    <a class="dropdown-item" href="<?php echo base_url()."index.php/Home/partidas/CR"; ?>">Clash Royale</a>
                    <a class="dropdown-item" href="<?php echo base_url()."index.php/Home/partidas/CSGO"; ?>">Counter Strike</a>
                    <a class="dropdown-item" href="<?php echo base_url()."index.php/Home/partidas/LOL"; ?>">League of Legends</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="<?php echo base_url()."index.php/Home/verNoticias/"; ?>" name="eleccion">Noticias</a>
            </li>
            <?php
                if(!$this->session->userdata('usuario')){
                    echo "<li class='nav-item' id='sinRegistrar'>";
                        echo "<a class='nav-link active' href='http://localhost/BattleNow/index.php/Home/login/'>Inicio de Sesion / Registro</a>";
                }
                if($this->session->userdata('usuario')){
                    echo "<li class='nav-item dropdown' id='registrado'>";
                        echo "<a class='nav-link dropdown-toggle active pull-xs-right' data-toggle='dropdown' href='#' role='button' aria-haspopup='true' aria-expanded='false' name='eleccion'>";
                        echo $this->session->userdata('usuario');
                        echo "</a>";             
                        echo "<div class='dropdown-menu'>";
                            echo "<a class='dropdown-item' href='#'>Mi Perfil</a>";
                            echo "<div class='dropdown-divider'></div>";
                            echo "<a class='dropdown-item' href='#'>Mi Posición</a>";
                            echo "<div class='dropdown-divider'></div>";
                            echo "<a class='dropdown-item' href='#'>Mis Noticias</a>"; 
                            echo "<div class='dropdown-divider'></div>";
                            echo "<a class='dropdown-item' href='http://localhost/BattleNow/index.php/Home/cerrarS/'>Cerrar Sesión</a>";  
                        echo "</div>";
                }
                echo "</li>";
              ?>
                        
        </ul>
    </div>
    <div id="cuerpo" class="col-md-10 offset-md-1">