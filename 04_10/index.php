<?php
require 'controllers/TestController.php';
require 'controllers/HomeController.php';
require 'controllers/AdminController.php';

if($_GET['action']){

    define('PATH', str_replace('index.php',"", $_SERVER['SCRIPT_FILENAME']));
    $params = explode("/", $_GET['action']);
    print_r($params);


    if(!empty($params[0]))
    {
        $controller = $params[0];


        if(!empty($params[1])){
            $action = $params[1];

            require_once(PATH.'controllers/'.$controller.'php');

            if($action == 'getTest'){
                getTest();
            }
        }else if($action == 'getHome')
        {
            getHome();
        } else if($action == 'getListArticles')
        {
            getListArticles();
        }else if($action == "addArticlepage"){
            addArticlepage();
        }else if($action == "modifyArticlepage")
        {
            $id = $params[2];

            if(!empty($if)){
                modifyArticlepage($id);
            }
        
        }
    }
}