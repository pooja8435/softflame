<?php
// required headers
if (isset($_SERVER['HTTP_ORIGIN'])) {
    header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
    header('Access-Control-Allow-Credentials: true');
    }
    
    if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    
    if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS"); 
    
    if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
    header("Access-Control-Allow-Headers: {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");
    
    exit(0);
    }
 
// include database and object files
include_once 'database.php';
include_once 'Enquiry.php';
 
// get database connection
$database = new Database();
$db = $database->getConnection();
 
// prepare product object
$enquiry = new Enquiry($db);
 
// set ID property of record to read
$enquiry->id = isset($_GET['id']) ? $_GET['id'] : die();
 
// read the details of complaint to be edited

$enquiry->fetchEnquiById();
 
if($enquiry->name!=null){
    // create array
        $enquiry_arr = array(
        // "id" =>  $enquiry->id,
       

         "id" => $enquiry->id,
            "name" => $enquiry->name,
            "status" => $enquiry->status,
            "mobile_no" => $enquiry->mobile_no,
            "message" => $enquiry->message,
            "email" => $enquiry->email  
 
    );
 
    // set response code - 200 OK
    http_response_code(200);
 
    // make it json format
    echo json_encode($enquiry_arr);
}
 
else{
    // set response code - 404 Not found
    http_response_code(404);

    // tell the user product does not exist
    echo "false";
}
?>