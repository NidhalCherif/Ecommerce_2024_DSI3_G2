
<?php
require_once "../connexion.php";

$connexion = new connexion();
$pdo = $connexion->getConnexion();
$sql = "delete from produit";
$pdo->exec($sql);
$sql = "";
for ($i = 1; $i < 100; $i++) {
    $lib = "Produit N°" . $i;
    $pu = random_int(2, 5000);
    $qte = random_int(1, 1000);
    $des = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus voluptatibus, et possimus id velit facere delectus, harum commodi aliquam reiciendis, pariatur 
    sapiente accusamus corrupti! Dicta nobis tenetur corporis ea a.";
    $img = "https://picsum.photos/400/?random=$i";
    $pro = random_int(0, 1);
    $sql .= "insert into produit values(NULL,'$lib',$pu,$qte,
    '$des', '$img',$pro);";
}

$res = $pdo->exec($sql);
