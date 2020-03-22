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
    <script type="text/javascript">
    function cargar(){
        if(document.getElementById('registrado').value == ""){
            document.getElementById('registrado').style.visibility="hidden";
            document.getElementById('sinRegistrar').style.visibility="visible";
        }else{
            document.getElementById('registrado').style.visibility="visible";
            document.getElementById('sinRegistrar').style.visibility="hidden";
        }
    }
    </script>
    <style>
        header{
            background-color: #000000;
            float: left;
            position: relative;
            width: 100%;
        }
        .nav,.nav-link{
            background-color: #b5a269;
            color: white;
        }
        
        .nav-link:hover{
            color: #343a40;
        }
        article{
            float: left;
            position: relative;
            height: 70%;
            text-align: center;
        }
        footer{
            background-color: #b5a269;
            color: white;
            text-align: right;
            float: left;
            position: relative;
            width: 100%;
        }
    </style>
</head>
<body>
    <header class="pt-md-2">
        <hgroup class="text-center text-white">
            <img src="<?php echo base_url(); ?>img/logo.png" class="img-fluid">
            <h2>Para los que aman los E-Sports</h2>
        </hgroup>
        <hr>
            <ul class="nav">
              <li class="nav-item">
                    <a class="nav-link active navbar-brand" href="<?php echo base_url()."index.php/Home/index"; ?>">Battle Now</a>
              </li>
              <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Partidas</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Call of Duty</a>
                        <a class="dropdown-item" href="#">Clash Royale</a>
                        <a class="dropdown-item" href="#">Counter Strike</a>
                        <a class="dropdown-item" href="#">League of Legends</a> 
                    </div>
              </li>
              <li class="nav-item">
                    <a class="nav-link active" href="#">Noticias</a>
              </li>
              <?php
                if(!$this->session->userdata('usuario')){
                    echo "<li class='nav-item' id='sinRegistrar'>";
                        echo "<a class='nav-link active' href='http://localhost/BattleNow/index.php/Home/login/'>Inicio de Sesion / Registro</a>";
                }
                if($this->session->userdata('usuario')){
                    echo "<li class='nav-item dropdown' id='registrado'>";
                        echo "<a class='nav-link dropdown-toggle active pull-xs-right' data-toggle='dropdown' href='#' role='button' aria-haspopup='true' aria-expanded='false'>";
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
    </header>