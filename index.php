<?php

  define('ROOT', str_replace('index.php', '', $_SERVER['SCRIPT_FILENAME']));

    require_once(ROOT.'app/Model.php');
    require_once(ROOT.'app/Controller.php');

    // On sÈpare les paramËtres et on les met dans le tableau $params
    $params = explode('/', $_GET['p']);

    // Si au moins 1 paramËtre existe
    if ($params[0] != "") {

        // On sauvegarde le 1er paramËtre dans $controller en mettant sa 1Ëre lettre en majuscule
        $controller = ucfirst($params[0]);

        // On sauvegarde le 2Ëme paramËtre dans $action si il existe, sinon index
        $action = isset($params[1]) ? $params[1] : 'index';

        require_once(ROOT.'Controllers/'.$controller.'.php'); // On appelle le contrÙleur
        $controller = new $controller(); // On instancie le contrÙleur

        if(method_exists($controller, $action)){
            //$controller->$action(); // On appelle la mÈthode si elle existe

            // On supprime les 2 premiers paramËtres
            unset($params[0]);
            unset($params[1]);

            call_user_func_array([$controller,$action], $params);
        }else{
            // On envoie le code rÈponse 404
            http_response_code(404);
            echo "La page recherchÈe n'existe pas";
        }

    } else {
        // Ici aucun paramËtre n'est dÈfini
        require_once(ROOT.'Controllers/Main.php');
        $controller = new Main(); // On instancie le contrÙleur
        $controller->index();
    }