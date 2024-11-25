<?php
ob_start(); ?>

<div class="row">
    <?php
    foreach ($LesProduits as $produit) {
    ?>
        <div class="col-3">
            <div class="card">
                <img src="<?= $produit[5] ?>" class="img-fluid" alt="la photo du produit">
                <div class="card-body">
                    <h1 class="card-title"><?= $produit[1] ?></h1>
                    <p class="card-text">Prix: <?= $produit[2] ?></p>
                    <a href="detail.php?id=<?= $produit[0] ?>" class="btn btn-success btn-sm">Détail</a>
                    <a href="#" class="btn btn-primary btn-sm">
                        <i class="fas fa-shopping-cart"></i>Ajouter</a>
                </div>


            </div>
        </div>
    <?php } ?>
</div>



<?php

$contenu = ob_get_clean();
$titre = "Liste des produits";
include "layout.php";
?>