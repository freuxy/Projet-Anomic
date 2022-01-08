<?php

abstract class Controller
{

    public function loadModel($model,$data=false){ 
        //var_dump(file_exists(ROOT.'Models/'.$model.'.php')); die;
        // On va chercher le fichier correspondant au modËle souhaitÈ
        require_once(ROOT.'Models/'.$model.'.php');
        // On crÈe une instance de ce modËle. Ainsi "Article" sera accessible par $this->Article
        $this->$model = new $model($data);
    }

    public function loadDAO($dao,$data){
        // On va chercher le fichier correspondant au modËle souhaitÈ

        //var_dump($data); die;

        require_once(ROOT.'dao/'.$dao.'.php');

        // On crÈe une instance de ce modËle. Ainsi "Article" sera accessible par $this->Article
        $this->$dao = new $dao($data);
    }

    public function render($fichier, $data = []){

        // RÈcupËre les donnÈes et les extrait sous forme de variables
        extract($data);

        // On démarre le buffer de sortie
        ob_start();

        // On gÈnËre la vue
        require_once(ROOT.'Views/'.strtolower(get_class($this)).'/'.$fichier.'.php');

        // On stocke le contenu dans $content
        $contenu = ob_get_clean();

        // On fabrique le "template"
        require_once(ROOT.'Views/Layout/default.php');
    }


}