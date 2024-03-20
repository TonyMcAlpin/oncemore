<?php

    require_once '../../config/Database.php';
    require_once '../../models/Category.php';
    //include_once '../../config/Database.php';  // Maybe
    //include_once '../../models/Category.php';   //Maybe

    $method = $_SERVER['REQUEST_METHOD'];
    $endpoint = $_SERVER['REQUEST_URI'];

    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');
    

    if ($method === 'OPTIONS') {
        header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
        header('Access-Control-Allow-Headers: Origin, Accept, Content-Type, X-Requested-With');
        exit();
    }

    switch($method){
        case 'GET':
            include_path='.:/usr/local/lib/php';
            break;
        case 'POST':
            require '../../api/quotes/create.php';
            break; 
        case 'PUT':
            require '../../api/quotes/update.php';
            break; 
        case 'DELETE':
            require '../../api/quotes/delete.php';
            break;  
    }
