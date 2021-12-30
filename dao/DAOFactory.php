<?php

class DaoFactory
{
    private $connexion;

    public function __construct($sgbd)
    {
        switch ($sgbd) {
            case 'mysql' :
                try {
                    $pdo_options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_PERSISTENT =>  true);
                    $this->connexion = new PDO('mysql:host=localhost;dbname=anomic;charset=utf8', 'root', 'root', $pdo_options);
                } catch (Exception $e) {
                    die('Erreur : ' . $e->getMessage());
                }
            default :
                $this->connexion = true;
        }
    }


    public function getConnexion() {
        return $this->connexion;
    }

   /* public function getDao($dao) {
        return new AdminDAO($this);
    }*/

}