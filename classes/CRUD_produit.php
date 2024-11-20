<?php
require_once "produit.php";
require_once "../connexion.php";
class CRUD_Produit
{
    private $pdo; // objet PDO
    public function  __construct()
    {
        $connexion = new connexion();
        $this->pdo = $connexion->getConnexion();
    }
    public function  add(Produit $produit)
    {
        $lib = $produit->getLibelle();
        $pu = $produit->getPrix();
        $qte = $produit->getQte();
        $des = $produit->getDes();
        $img = $produit->getImage();
        $pro = $produit->getPromo();
        $sql = "insert into produit values(NULL,'$lib',$pu,$qte,
        '$des','$img',$pro)";
        $res = $this->pdo->exec($sql);
        return $res;
    }
    public function  delete($id)
    {
        $sql = "delete from produit  where id=$id";
        $res = $this->pdo->exec($sql);
        return $res;
    }
    public function  find($id) {}
    public function findAll()
    {
        $sql = "select * from produit";
        $res = $this->pdo->query($sql);
        return $res->fetchAll(PDO::FETCH_NUM);
    }
    public function edit(Produit $produit) {}
}
