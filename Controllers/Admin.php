<?php

class Admin extends Controller
{
    public function index(){
        $this->render('index');
    }

    public function ajouter(){
        $this->render('ajouter');
    }

    public function creer(){

        

        $username  = htmlspecialchars(strip_tags($_POST['username']));
        $password  = htmlspecialchars(strip_tags($_POST['password']));
        $password_conf  = htmlspecialchars(strip_tags($_POST['password_confirm']));
        $firstName  = htmlspecialchars(strip_tags($_POST['first-name']));
        $lastName  = htmlspecialchars(strip_tags($_POST['last-name']));

        if($password==$password_conf){
            $this->loadModel("Admins",[null,$username,$password,$firstName,$lastName]);


            $this->loadDAO("AdminDAO",$this->Admins);

        //var_dump($password, $password_conf); die;
            $this->AdminDAO->ajouter();
            
        }

    }
}