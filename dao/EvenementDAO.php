<?php

require_once ("DAO.php");
require_once ("DaoFactory.php");

class EvenementDao extends DAO
{
    private $evenement;
    private $connexion;

    public function __construct($adr)
    {
        $this->evenement = $evmnt;
        $this->connexion = new DaoFactory();
    }

    public function ajouter()
    {
        // TODO: Implement ajouter() method.
        try {
            $connexion = $this->connexion->getConnexion();
            $requete = $connexion->prepare('INSERT INTO evenement(intitule, date, description,lien) values (:intitule, :date, :description, :lien)');
            $requete->bindValue(':intitule', $this->evenement->getIntitule());
            $requete->bindValue(':date', $this->evenement->getDate());
            $requete->bindValue(':description', $this->evenement->getDescription());
            $requete->bindValue(':lien', $this->evenement->getLien());
            return $requete->execute();
        }catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function modifier($obj)
    {
        // TODO: Implement modifier() method.
        try {
            $connexion = $this->connexion->getConnexion();
            $requete = $connexion->prepare('UPDATE evenement SET (intitule, date, description,lien) values (:intitule, :date, :description, :lien)');
            $requete->bindValue(':intitule', $this->evenement->getIntitule());
            $requete->bindValue(':date', $this->evenement->getDate());
            $requete->bindValue(':description', $this->evenement->getDescription());
            $requete->bindValue(':lien', $this->evenement->getLien());
            return $requete->execute();
        }catch (Exception $e) {
            die($e->getMessage());
        }
    }
    }

    public function supprimer($id)
    {
        // TODO: Implement supprimer() method.
    }
}