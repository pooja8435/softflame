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
// get database connection
include_once 'database.php';
 
// instantiate product object
include_once 'login.php';
 
$database = new Database();
$db = $database->getConnection();
 
$login = new Login($db);
 
// get posted data
$data = json_decode(file_get_contents("php://input"));
 
// make sure data is not empty
if(
    !empty($data->user_name) &&
    !empty($data->password)
){
 
    // set product property values
    $login->user_name = $data->user_name;
    $login->password = $data->password;
    $result=  $login->userLogin($login->user_name, $login->password);
    echo($result);
            
}
?>