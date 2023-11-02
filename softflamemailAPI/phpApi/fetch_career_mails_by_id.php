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
include_once 'careermails.php';
 
// get database connection
$database = new Database();
$db = $database->getConnection();
 
// prepare product object
$careermails = new Careermails($db);
 
// set ID property of record to read
$careermails->id = isset($_GET['id']) ? $_GET['id'] : die();
 
// read the details of complaint to be edited

$careermails->fetchCareerMailById();
 
if($careermails->name!=null){
    // create array
        $careermails_arr = array(
            "id" => $careermails->id,
            "name" => $careermails->name,
            "mobile_no" => $careermails->mobile_no,
            "dob" => $careermails->dob,
            "permanent_address" => $careermails->permanent_address,
            "residential_address" => $careermails->residential_address , 
            "email" => $careermails->email,
            "skills" => $careermails->skills,
            "file_name" => $careermails->file_name,
            "createdate" => $careermails->createdate
 
    );
 
    // set response code - 200 OK
    http_response_code(200);
 
    // make it json format
    echo json_encode($careermails_arr);
}
else{
    // set response code - 404 Not found
    http_response_code(404);
    // tell the user product does not exist
    echo "false";
}
?>