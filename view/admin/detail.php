<?php
ob_start();
?>
<div class="row">

    <div class="col-6">
        <div class="card">
            <img src="<?= $produit[5] ?>" alt="photo du produit">
        </div>
    </div>
    <div class="col-6">
        <h3><?= $produit[1] ?>(<?= $produit[2] ?>DT)</h3>
        <p><?= $produit[4] ?></p>
        <?php
        if ($produit[6] == 1) {
        ?>
            <span class="badge bg-success">En Promo</span>
        <?php
        } ?>
    </div>

</div>

<?php
$contenu = ob_get_clean();
$titre = "Détail du produit";
include "layout.php";
?>