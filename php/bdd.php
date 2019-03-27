<?php
    $PARAM_hote='localhost'; // le chemin vers le serveur
    $PARAM_port='8888';
    $PARAM_nom_bd='todo-list'; // le nom de votre base de données
    $PARAM_utilisateur='todo-list'; // nom d'utilisateur pour se connecter
    $PARAM_mot_passe='todo-list'; // mot de passe de l'utilisateur pour se connecter
    try
    {
        $db = new PDO('mysql:host='.$PARAM_hote.';port='.$PARAM_port.';dbname='.$PARAM_nom_bd, $PARAM_utilisateur, $PARAM_mot_passe);
    }
    catch(Exception $e)
    {
            echo 'Erreur : '.$e->getMessage().'<br />';
            echo 'N° : '.$e->getCode();
    }
?>
