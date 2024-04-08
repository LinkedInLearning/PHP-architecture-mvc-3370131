<?php

function connexionBDD()
{

    $host = "localhost";
    $db_name = "blog";
    $user = "root";
    $password = "";


    try {
        $connexion = new PDO('mysql:host='.$host.';dbname='.$db_name.'', $user, $password);
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $connexion;

    } catch(PDOException $e) {
        echo "Une erreur est survenue lors de la connexion :".$e->getMessage();
    }
}

$connexion = connexionBDD();
print_r($connexion);