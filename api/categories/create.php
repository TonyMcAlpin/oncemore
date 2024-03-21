
<?php
  
  include_once '../../config/Database.php';
  include_once '../../models/Category.php';
  // Instantiate DB & connect
  $database = new Database();
  $db = $database->connect();

  // Instantiate category object
  $category = new Category($db);

  // Get raw data
  $data = json_decode(file_get_contents("php://input"));

  $category->category = $data->category;
  $quote->id = $data->id;
  $quote->category = $data->category;
  // Create Category
  echo json_encode($quote->create());
