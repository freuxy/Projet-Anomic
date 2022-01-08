<?php 
class Admins {
    private $idAdmin;
    private $username;
    private $password;
    private $nom;
    private $prenom;

    public function __construct($data)
    {
        if($data){
            $this->idAdmin=$data[0];
            $this->username=$data[1];
            $this->password=$data[2];
            $this->nom=$data[3];
            $this->prenom=$data[4];
        }
       
    }

    public function getIdAdmin()
    {
        return $this->idAdmin;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

}

?>