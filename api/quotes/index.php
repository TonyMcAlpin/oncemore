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
    




    Parse ID from the endpoint
    $parts = explode('/', $endpoint);
    $id = end($parts);
    
    // Check if the endpoint is requesting a specific quote by ID
    if ($method === 'GET' && is_numeric($id)) {
        // Call read_single method
        require '../../api/quotes/read_single.php';
        exit(); // Stop further execution
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
