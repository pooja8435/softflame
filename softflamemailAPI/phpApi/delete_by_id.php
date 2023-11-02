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
// include database and object file
include_once 'database.php';
include_once 'careermails.php';
// get database connection
$database = new Database();
$db = $database->getConnection();
// prepare product object
$careermails = new Careermails($db);
// get product id
$data = json_decode(file_get_contents("php://input"));
// set product id to be deleted
$careermails->id = $data->id;
// delete the product
if($careermails->deleteCareerMail()){
// set response code - 200 ok
http_response_code(200);
// tell the user
// echo json_encode(array("message" => "Product was deleted."));
echo "true";
}
// if unable to delete the product
else{
// set response code - 503 service unavailable
http_response_code(503);
// tell the user
// echo json_encode(array("message" => "Unable to delete product."));
echo "false";
}
?>