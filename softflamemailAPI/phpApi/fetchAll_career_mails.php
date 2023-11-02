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
 
// instantiate database and complaint object
$database = new Database();
$db = $database->getConnection();
 
// initialize object
$complaint = new Careermails($db);

 // query products
$stmt = $complaint->fetchAllHireCareerMails();
$num = $stmt->rowCount();
//echo json_encode($num);
// check if more than 0 record found
if($num>0){
 
    // products array
    $complaints_arr=array();
    $complaints_arr["records"]=array();
 
    // retrieve our table contents
    // fetch() is faster than fetchAll()
    // http://stackoverflow.com/questions/2770630/pdofetchall-vs-pdofetch-in-a-loop
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        // extract row
        // this will make $row['name'] to
        // just $name only
        extract($row);
 
        $complaint_item=array(
            "id" => $id,
            "name" => $name,
            "status" => $status,
            "mobile_no" => $mobile_no,
            "dob" => $dob,
            "email" => $email,       
            "permanent_address" => $permanent_address,
            "residential_address" => $residential_address,
            "skills" => $skills,
            "file_name" => $file_name,
            "createdate" => $createdate
    
        );
 
        array_push($complaints_arr["records"], $complaint_item);
    }
 
    // set response code - 200 OK
    http_response_code(200);
 
    // show products data in json format
    echo json_encode($complaints_arr);
}
 
// no products found will be here
else{
 
    // set response code - 404 Not found
    http_response_code(404);
 
    // tell the user no products found
    echo "false";
}
?>