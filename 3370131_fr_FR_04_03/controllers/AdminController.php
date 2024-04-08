<?php
require_once 'models/modeleArticle.php';

function getListArticles()
{
    $articles = getArticles();
    require_once 'views/ListArticleView.php';
}