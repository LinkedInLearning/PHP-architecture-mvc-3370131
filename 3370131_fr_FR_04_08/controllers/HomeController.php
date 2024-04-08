<?php

require 'models/modeleArticle.php';

function getHome()
{
    $articles = getArticles();
    require 'views/HomeView.php';
}