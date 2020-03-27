<?php 
foreach ($noticias as $noticia){?>
<div class="col-md-4">
    <div class="card">
        <img class="card-img-top img-fluid" src="<?php echo base_url(); echo $noticia['imagen']; ?>" alt="Card image cap">
        <div class="card-block">
            <h4 class="card-title"><?php echo $noticia['titulo']; ?></h4>
            <p class="card-text"><?php echo $noticia['textoRecortado']; ?></p>
            <a class="btn btn-danger" href="<?php echo base_url() . "index.php/viaje/confirmarReserva/" . $indice?>">Ir a la noticia</a>
        </div>
    </div>
</div>
<?php}?>