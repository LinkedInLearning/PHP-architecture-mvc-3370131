<?php
require 'controllers/TestController.php';

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
        }
    }
}