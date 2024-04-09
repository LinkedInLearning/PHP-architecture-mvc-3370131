<?php

if($_GET['action']){

    $params = explode("/", $_GET['action']);
    print_r($params);
}