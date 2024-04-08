<?php
require 'connexion.php';

function getArticles()
{
    $connexion = connexionBDD();

    $requete = $connexion->query("SELECT * FROM article");

    $resultat = $requete->fetchAll(PDO::FETCH_ASSOC);

    return $resultat;
}