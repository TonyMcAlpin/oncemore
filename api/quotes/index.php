<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
$method = $_SERVER['REQUEST_METHOD'];
$endpoint = $_SERVER['REQUEST_URI'];

if ($method === 'OPTIONS') {
    header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
    header('Access-Control-Allow-Headers: Origin, Accept, Content-Type, X-Requested-With');
    exit();
}

try {
    require_once __DIR__ . '/../../config/Database.php';
    require_once __DIR__ . '/../../models/Quote.php';

    switch ($method) {
        case 'GET':
            require __DIR__ . '/../../api/quotes/read.php';
            break;
        case 'POST':
            require __DIR__ . '/../../api/quotes/create.php';
            break;
        case 'PUT':
            require __DIR__ . '/../../api/quotes/update.php';
            break;
        case 'DELETE':
            require __DIR__ . '/../../api/quotes/delete.php';
            break;
        default:
            http_response_code(405); // Method Not Allowed
            echo json_encode(array("message" => "Method not allowed."));
    }
} catch (Exception $e) {
    http_response_code(500); // Internal Server Error
    echo json_encode(array("message" => "Internal server error."));
}
