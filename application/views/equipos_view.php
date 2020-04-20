<head>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/noticias.css">
</head>
<div class="row">
<?php
foreach ($equipo as $equ){?>
<div class="col-md-3">
    <div class="card">
        <img class="card-img-top img-fluid" src="<?php echo base_url(); ?>img/Equipos/<?php echo $equ['Logo']; ?>" alt="Card image cap">
        <div class="card-block">
            <h4 class="card-title"><?php echo $equ['Nombre']; ?></h4>
            <a class="btn btn-danger" href="<?php echo base_url() . "index.php/Home/verEquipo/" . $equ['Nombre']?>">Ver ficha completa</a>
            <br>
        </div>
    </div>
</div>
<?php
}
?>
</div>