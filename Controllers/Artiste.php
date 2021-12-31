<?php

class Artiste extends Controller
{
    public function index(){
        $this->render('index');
    }

    public function ajouter(){
        $this->render('ajouter');
    }
}