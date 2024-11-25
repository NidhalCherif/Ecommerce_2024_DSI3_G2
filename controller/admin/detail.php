<?php
require_once "../../model/crud_produit.php";
$crud = new CRUD_Produit();
$id = $_GET['id'];
$produit = $crud->find($id);
//appel de la vue de l'admin detail.php
include "../../view/admin/detail.php";
