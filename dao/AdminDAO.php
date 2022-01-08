<?php

require_once ("DAO.php");
require_once ("DaoFactory.php");

abstract class AdminDao extends DAO
{
    private $obj;
    private $connexion;

    public function __construct($obj)
    {
        $this->obj = $obj;
        $this->connexion = new DaoFactory();
    }

    public function ajouter()
    { 
        // TODO: Implement ajouter() method.
        try {
            var_dump($this)
            $connexion = $this->connexion->getConnexion();
            $requete = $connexion->prepare('INSERT INTO admin (username, password, nom,prenom) values (:username, :password, :nom, :prenom)');
            $requete->bindValue(':username', $this->obj->getUsername());
            $requete->bindValue(':password', $this->obj->getPassword());
            $requete->bindValue(':nom', $this->obj->getNom());
            $requete->bindValue(':prenom', $this->obj->getPrenom());
            return $requete->execute();
        }catch (Exception $e) {
            die($e->getMessage());
        }
    }
/*
    public function modifier()
    {
        // TODO: Implement modifier() method.
        try {
            $connexion = $this->connexion->getConnexion();
            $requete = $connexion->prepare('UPDATE admin SET (username, password, nom,prenom) values (:username, :password, :nom, :prenom)');
            $requete->bindValue(':username', $this->obj->getUsername());
            $requete->bindValue(':password', $this->obj->getPassword());
            $requete->bindValue(':nom', $this->obj->getNom());
            $requete->bindValue(':prenom', $this->obj->getPrenom());
            return $requete->execute();
        }catch (Exception $e) {
            die($e->getMessage());
        }
    }
    }

    public function supprimer()
    {
        // TODO: Implement supprimer() method.
        try {
            $connexion = $this->connexion->getConnexion();
            $requete = $connexion->prepare('delete from Admin where id=:id');
            $requete->bindValue(':id', $this->obj->getId());
            return $requete->execute();
        }catch (Exception $e) {
            die($e->getMessage());
        }

       
    }*/

}