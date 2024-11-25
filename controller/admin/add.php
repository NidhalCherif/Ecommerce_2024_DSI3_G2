<?php
require_once "../../model/CRUD_produit.php";
$crud = new CRUD_Produit();
//1ere request : affichage d'un formulaire vide
include "../../view/admin/add.php";
//2eme request : récupération des données
if (isset($_POST['ok'])) {
    $lib = htmlspecialchars($_POST['lib']);
    $pu = htmlspecialchars($_POST['pu']);
    $qte = htmlspecialchars($_POST['qte']);
    $des = htmlspecialchars($_POST['des']);
    $img = htmlspecialchars($_POST['img']);
    $pro = htmlspecialchars($_POST['pro']);
    $produit = new produit(null, $lib, $pu, $qte, $des, $img, $pro);
    $res = $crud->add($produit);
    if ($res) {
        header("location:findAll.php");
        exit;
    }
}
