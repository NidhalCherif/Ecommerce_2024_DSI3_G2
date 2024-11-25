  <?php
  require_once "../../model/crud_produit.php";
  $crud = new CRUD_Produit();
  $LesProduits = $crud->findAll();
  //appel de la vue de l'admin
  include "../../view/user/findAll.php";
