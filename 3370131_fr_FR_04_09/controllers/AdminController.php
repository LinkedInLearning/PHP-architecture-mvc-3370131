<?php
require_once 'models/modeleArticle.php';

function getListArticles()
{
    $articles = getArticles();
    require_once 'views/ListArticleView.php';
}

function addArticlePage()
{
    if(!empty($_POST) AND !empty($_FILES)){
        if(validation() == false)
        {
            addArticles($_POST['titre'], $_POST['contenu'], $_FILES['file']['name']);
        }
    }
    require_once 'views/FormArticleAddView.php';
}

function modifyArticlepage($id)
{
    $article = getArticleInfo($id);
    if(!empty($_POST) and !empty($_FILES))
    {
        if(validation() == false)
        {
            if(!empty($_FILES['file']['name']))
            {
                $image = $_FILES['file']['name'];
            }else {
                $image = $article['image'];
            }
            modifyArticle($id, $_POST['titre'], $_POST['contenu'], $image);
        }
    }

    require_once 'views/FormArticleModifyView.php';
}

function validation()
{

    // récupération du nom du fichier dans la variable $nom_du_fichier
    $nom_du_fichier = $_FILES['file']['name'];
    // récupération du type du fichier dans la variable $type_du_fichier
    $type_du_fichier = $_FILES['file']['type'];
    //récupération du dossier temporaire
    $dossier_temporaire = $_FILES['file']['tmp_name'];
    //récupération du dossier d'upload
    $dossier_uploads = 'assets/uploads/'.$nom_du_fichier;

    $extension_du_fichier = strrchr($nom_du_fichier,'.');
    $extensions_autorisees = array('.jpg','.JPG','.jpeg','.png','.PNG');

    $error = false;

    if(!isset($_POST['titre']) || strlen($_POST['titre']) < 1){
        echo 'le titre est invalide';
        $error =  true;
    }

    if(!isset($_POST['contenu']) || strlen($_POST['contenu']) < 1){
        echo 'la description  est invalide';
        $error =  true;
    }

    if(!empty($_FILES['file']['name'])){
        if(!in_array($extension_du_fichier, $extensions_autorisees)){
            echo "l'extension n'est pas autorisée";
            $error = true;
        }
    }

    if(!move_uploaded_file($dossier_temporaire, $dossier_uploads)){
        echo 'une erreur est survenue pendant l\'upload du fichier';
        $error = true;
    }

    return $error;


}