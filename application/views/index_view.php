<head>
    <link rel="stylesheet" type="text/css" href="<?php base_url(); ?>css/index.css">
    <script type="text/javascript">
        function cambiaCarrusel(){
            document.getElementById("img1");
            document.getElementById("img2");
            document.getElementById("img3");
        }
    </script>
</head>
<div id="carouselExampleIndicators" class="carousel slide imagencarrusel" data-ride="carousel">
     <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
     </ol>
     <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
               <img id="img1" class="d-block w-100 imagencarrusel" src="<?php echo base_url(); ?>img/logoHorizontal.png" alt="previsualizacion1">
               <div class="carousel-caption d-none d-md-block">
                     <div class="h3 display-4">Ejemplo1</div>
               </div>
          </div>
          <div class="carousel-item">
               <img id="img2" class="d-block w-100 imagencarrusel" src="<?php echo base_url(); ?>img/eternal.png" alt="previsualizacion2">
               <div class="carousel-caption d-none d-md-block">
                   <div class="h3 display-4">Ejemplo2</div>
               </div>            
          </div>
          <div class="carousel-item">
               <img id="img3" class="d-block w-100 imagencarrusel" src="<?php echo base_url(); ?>img/florida.png" alt="previsualizacion3">
               <div class="carousel-caption d-none d-md-block">
                   <div class="h3 display-4">Ejemplo3</div>
               </div>            
          </div>
      </div>
</div>
