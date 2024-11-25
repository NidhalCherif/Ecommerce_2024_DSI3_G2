<?php
class connexion
{
    private $pdo;
    public function __construct()
    {

        $dsn = "mysql:host=localhost;dbname=ecommerce_l2dsi3_g2";
        $user = "root";
        $pw = "";
        $this->pdo = new PDO($dsn, $user, $pw);
    }
    public function getConnexion()
    {
        return $this->pdo;
    }
}
