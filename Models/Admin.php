<?php 
class Admin {
    private $idAdmin;
    private $username;
    private $password;
    private $nom;
    private $prenom;

    public function __construct($id,$user,$passw,$n,$pnom)
    {
        $this->idAdmin=$id;
        $this->username=$user;
        $this->password=$passw;
        $this->nom=$n;
        $this->prenom=$pnom;
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