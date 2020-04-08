<head>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/noticias.css">
</head>
<br><br>
<div class="row">
<?php
foreach ($noticia as $not){?>
	<br><br>
<div class="col-md-3">
    <div class="card">
        <img class="card-img-top img-fluid" src="<?php echo base_url(); ?>img/<?php echo $not['Imagen']; ?>" alt="Card image cap">
        <div class="card-block">
            <h4 class="card-title"><?php echo $not['Titulo']; ?></h4>
            <p class="card-text"><?php echo $not['TextoRecortado']; ?>...</p>
            <a class="btn btn-danger" href="<?php echo base_url() . "index.php/Home/verNoticia/" . $not['ID']?>">Ir a la noticia</a>
        </div>
    </div>
</div>
<?php
}
?>
</div>
<br><br>