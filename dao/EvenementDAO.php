<?php

require_once ("DAO.php");
require_once ("DaoFactory.php");

class EvenementDao extends DAO
{
    private $adresse;
    private $connexion;

    public function __construct($adr)
    {
        $this->adresse = $adr;
        $this->connexion = new DaoFactory();
    }

    public function ajouter()
    {
        // TODO: Implement ajouter() method.
        try {
            $connexion = $this->connexion->getConnexion();
            $requete = $connexion->prepare('insert into adresse(rue, ville, codePostal) values (:rue, :ville, :code)');
            $requete->bindValue(':rue', $this->adresse->getRue());
            $requete->bindValue(':ville', $this->adresse->getVille());
            $requete->bindValue(':code', $this->adresse->getCodePostal());
            return $requete->execute();
        }catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function modifier($obj)
    {
        // TODO: Implement modifier() method.
    }

    public function supprimer($id)
    {
        // TODO: Implement supprimer() method.
    }
}