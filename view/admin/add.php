<?php
ob_start();
?>
<form action="../../controller/admin/add.php" method="post" class="form-control">
    <label for="">Libellé</label><input type="text" name="lib" class="form-control" id=""></br>
    <label for="">Prix</label><input type="text" name="pu" class="form-control" id=""></br>
    <label for="">Quantité</label><input type="text" class="form-control" name="qte" id=""></br>
    <label for="">Description</label><textarea name="des" class="form-control" id=""></textarea></br>
    <label for="">image</label><input type="text" name="img" class="form-control" id=""></br>
    <label for="">En Promo</label><input type="text" class="form-control" value=0 name="pro" id=""></br>
    <input type="submit" value="Ajouter" name="ok" class="btn btn-success btn-lg">
</form>
<?php
$contenu = ob_get_clean();
$titre = "Ajout d'un produit";
include "layout.php"; ?>





?>