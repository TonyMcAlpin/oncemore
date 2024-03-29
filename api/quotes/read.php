
<?php   

    include_once '../../config/Database.php';
    include_once '../../models/Quote.php';


    // Instantiate DB & connect

    $database = new Database();
    $db = $database->connect();

    
    // Instantiate quote object
// $quote->id = isset($_GET['id']) ?  $_GET['id'] : die();
    $quote = new Quote($db);
    if(isset($_GET['author_id'])){
        $quote->author_id = $_GET['author_id'];
    }
    if(isset($_GET['category_id'])){
        $quote->category_id = $_GET['category_id'];
    }
    // Quote query

    $result = $quote->read();
    //Get row count
    $num = $result->rowCount();

    //Check if any quotes

    if($num>0){
        // quote Array
        $quotes_arr = array();
        

        while($row = $result->fetch(PDO::FETCH_ASSOC)){
            extract($row);

            $quote_item = array(
                'id' => $id,
                'quote' => $quote,
                'author_id' => $author_id,
                'category_id' => $category_id,
                
            );

            // Push to "data

            array_push($quotes_arr, $quote_item);
        }

        // Trun to JSON & output

        echo json_encode($quotes_arr);

    } else{

        // No quotes
        echo json_encode(
            array('message' => 'No quotes Found')
        );

    }
