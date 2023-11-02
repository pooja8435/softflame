<?php
class Hireresource{
 
    // database connection and table name
    private $conn;
    private $table_name = "hireresourcemails";
 
    // object properties
    public $id;
    public $name;
    public $mobile_no;
    public $email;
    public $status;
    public $message;
    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }

function fetchAllHireResourceMails(){
                $query = "SELECT *
        FROM
            " . $this->table_name . " "; 
        // prepare query statement
        $stmt = $this->conn->prepare($query);
        // execute query
        $stmt->execute();
        return $stmt;
}
function fetchComplaintByStatus($status){
        $query = "SELECT *
        FROM
            " . $this->table_name . " 
        WHERE
            status='".$status."'";
    // prepare query statement
    $stmt = $this->conn->prepare($query);
    // execute query
    $stmt->execute();
    return $stmt;

}
function fetchHireMailById(){
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
$this->message = $row['message'];
$this->status = $row['status'];
$this->email = $row['email'];
}
}
