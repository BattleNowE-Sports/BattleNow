<?php
foreach ($noticia as $not){?>
<div class="col-md-10 offset-md-1">
    <div class="card">
        <img class="card-img-top img-fluid" src="<?php echo base_url(); ?>img/<?php echo $not['Imagen']; ?>" alt="Card image cap">
        <div class="card-block">
            <h4 class="card-title"><?php echo $not['Titulo']; ?></h4>
            <p class="card-text"><?php echo $not['Texto']; ?></p>
            <p class="card-text">Noticia <?php echo $not['ID']; ?> por <?php echo $not['Autor']; ?></p>
        </div>
    </div>
</div>
<?php
}
?>

