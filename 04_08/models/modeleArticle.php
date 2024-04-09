<?php
require 'connexion.php';

function getArticles()
{
    $connexion = connexionBDD();

    $requete = $connexion->query("SELECT * FROM article");

    $resultat = $requete->fetchAll(PDO::FETCH_ASSOC);

    return $resultat;
}

function addArticles($titre, $contenu, $image) {
    $date = date('Y-m-d h-m-i');
    $connexion = connexionBDD();
    $connexion->prepare("INSERT INTO (article_id, titre, contenu, image, date) VALUES (null,?,?,?,?)")
    ->execute([$titre, $contenu, $image, $date]);
}

function modifyArticle($id, $titre, $contenu, $image)
{
    $date = date("Y-m-d h-m-i");
    $connexion = connexionBDD();
    $connexion->prepare('UPDATE article SET titre = ?, contenu = ?, image = ?, date = ? WHERE article_id = ?')->execute($titre,$contenu, $image, $date, $id);
}