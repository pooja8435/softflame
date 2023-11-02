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
include_once 'hireresource.php';
 
// get database connection
$database = new Database();
$db = $database->getConnection();
 
// prepare product object
$hireresource = new Hireresource($db);
 
// set ID property of record to read
$hireresource->id = isset($_GET['id']) ? $_GET['id'] : die();
 
// read the details of complaint to be edited

$hireresource->fetchHireMailById();
 
if($hireresource->name!=null){
    // create array
        $hireresource_arr = array(
        // "id" =>  $hireresource->id,
       

         "id" => $hireresource->id,
            "name" => $hireresource->name,
            "status" => $hireresource->status,
            "mobile_no" => $hireresource->mobile_no,
            "message" => $hireresource->message,
            "email" => $hireresource->email  
 
    );
 
    // set response code - 200 OK
    http_response_code(200);
 
    // make it json format
    echo json_encode($hireresource_arr);
}
 
else{
    // set response code - 404 Not found
    http_response_code(404);

    // tell the user product does not exist
    echo "false";
}
?>