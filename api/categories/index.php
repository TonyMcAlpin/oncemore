<?php

    require_once '../../config/Database.php';
    require_once '../../models/Category.php';
    $method = $_SERVER['REQUEST_METHOD'];
    

    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');
    

    if ($method === 'OPTIONS') {
        header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
        header('Access-Control-Allow-Headers: Origin, Accept, Content-Type, X-Requested-With');
        exit();
    }
   
    switch($method){
        case 'GET':
        if(isset($_GET['id']))
        {
            require '../../api/categories/read_single.php';
        }else{
            require '../../api/categories/read.php';
        }
        break;
        case 'POST':
            require '../../api/categories/create.php';
            break; 
        case 'PUT':
            require '../../api/categories/update.php';
            break; 
        case 'DELETE':
            require '../../api/categories/delete.php';
            break;  
    }
