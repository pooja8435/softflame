<?php
class Careermails{
 
    // database connection and table name
    private $conn;
    private $table_name = "careeermails";
 
    // object properties
    public $id;
    public $name;
    public $mobile_no;
    public $email;
    public $dob;
    public $permanent_address;
    public $residential_address;
    public $skills;
    public $file_name;
    public $status;
    public $createdate;
    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }

function fetchAllHireCareerMails(){
                $query = "SELECT * FROM " . $this->table_name . " ORDER BY createdate desc"; 
        // prepare query statement
        $stmt = $this->conn->prepare($query);
        // execute query
        $stmt->execute();
        return $stmt;
}
function fetchCareerMailById(){
 
    // query to read single record
    $query = "SELECT
               *
            FROM
                " . $this->table_name . " c
            
            WHERE
                c.id = ?
            ";
 
    // prepare query statement
    $stmt = $this->conn->prepare( $query );
 
    // bind id of product to be updated
    $stmt->bindParam(1, $this->id);
 
    // execute query
    $stmt->execute();
 
    // get retrieved row
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
 
    // set values to object properties
     $this->name = $row['name'];
    $this->mobile_no = $row['mobile_no'];
    // $this->message = $row['message'];
    $this->dob = $row['dob'];
    $this->email = $row['email'];
    $this->permanent_address = $row['permanent_address'];
    $this->residential_address = $row['residential_address'];
    $this->skills = $row['skills'];
    $this->file_name = $row['file_name'];
    $this->createdate = $row['createdate'];

}

function deleteCareerMail(){
    // delete query
    $query = "DELETE FROM " . $this->table_name . " WHERE id = ?";
    // prepare query
    $stmt = $this->conn->prepare($query);
    // sanitize
    $this->id=htmlspecialchars(strip_tags($this->id));
    // bind id of record to delete
    $stmt->bindParam(1, $this->id);
    // execute query
    if($stmt->execute()){
    return true;
    }


}
}
?>