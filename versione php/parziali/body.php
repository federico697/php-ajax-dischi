<header class="p-3">
    <i class="fa-brands fa-spotify fa-2x text-white"></i>
</header>

<!-- struttura a righe e colonne per i dischi -->
<div class="container">
    <div class="row pb-3">
       <?php foreach( $database as $elem ) { ?>
            <div class="col-4 g-3">
                <div class="card" style="width: 18rem;">
                    <img src="<?php echo $elem['poster'] ?>" class="card-img-top" alt="...">
                    <div class="card-body text-white">
                        <h5 class="card-title"><?php echo $elem['title'] ?></h5>
                        <p class="card-title"><?php echo $elem['genre'] ?></p>
                    </div>
                </div>              
            </div>
        <?php } ?>
    </div>
</div>