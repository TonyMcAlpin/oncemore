<?php

    require_once '../../config/Database.php';
    require_once '../../models/Quote.php';

    $method = $_SERVER['REQUEST_METHOD'];
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');
    

    if ($method === 'OPTIONS') {
        header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
        header('Access-Control-Allow-Headers: Origin, Accept, Content-Type, X-Requested-With');
        exit();
    }
    

    if($method==='GET'){
        require '../../api/quotes/read.php';
    } elseif($method==='POST'){
        require '../../api/quotes/create.php';
    } elseif($method==='PUT'){
        require '../../api/quotes/update.php';
    } elseif($method==='DELETE'){
        require '../../api/quotes/delete.php';
    }    


    switch($method){
        case 'GET':
            require '../../api/quotes/read.php';
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
