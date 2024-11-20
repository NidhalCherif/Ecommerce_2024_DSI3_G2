<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    require_once "../classes/crud_produit.php";
    $crud = new CRUD_Produit();

    $res = $crud->delete($id);
    if ($res) {
        header("location:all.php");
        exit;
    } else echo "pb de suppression!!!";
}
