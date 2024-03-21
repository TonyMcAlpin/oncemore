
<?php   
    //Headers

    

    
    include_once '../../config/Database.php';
    include_once '../../models/Quote.php';


    // Instantiate DB & connect

    $database = new Database();
    $db = $database->connect();

    
    // Instantiate quote object

    $quote = new Quote($db);

    // Get raw data
    $data = json_decode(file_get_contents("php://input"));

    $quote->id = $data->id;
    $quote->quote = $data->quote;
    $quote->author_id = $data->author_id;
    $quote->category_id = $data->category_id;

    // Create quote

    echo json_encode($quote->create());
    //else{
      //  echo json_encode(
        //    array('message' => 'Post Not Created')
        //);


