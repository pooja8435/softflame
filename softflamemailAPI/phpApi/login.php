<?php
class login{
 
    // database connection and table name
    private $conn;
    private $table_name = "loginDetail";
 
    // object properties
    public $id;
    public $user_name;
    public $password;
    
    // constructor with $db as database connection
    public function __construct($db){
    $this->conn = $db;
    }

function fetchAllenquirymails(){
                $query = "SELECT *
        FROM
            " . $this->table_name . " "; 
        // prepare query statement
        $stmt = $this->conn->prepare($query);
        // execute query
        $stmt->execute();
        return $stmt;
}

function fetchEnquiById(){
 
    // query to read single record
    $query = "SELECT
               *
            FROM
                " . $this->table_name . " c
            
            WHERE
                c.user_name = ? and c.password = ?
            ";
 
    // prepare query statement
    $stmt = $this->conn->prepare($query);
 
    // bind id of product to be updated
    // $stmt->bindParam(1, $this->id);
    $stmt->bindParam(1, $this->user_name);
    $stmt->bindParam(2, $this->password);
 
    // execute query
    $stmt->execute();
 
    // get retrieved row
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    // print_r($row);
    // set values to object properties
   $this->name = $row['id'];
    $this->user_name = $row['user_name'];
    $this->password = $row['password'];
}

function userLogin($un,$pw){
    // $result;
    $query = "SELECT * FROM 
     " . $this->table_name . " WHERE user_name='$un'";

        // prepare query statement
        $stmt = $this->conn->prepare( $query );

        // bind id of product to be updated
        $stmt->bindParam(1, $this->id);
        // execute query
        $stmt->execute();
        // get retrieved row
        $row = $stmt->fetch(PDO::FETCH_ASSOC);     
        $this->password = $row['password'];
        if ($un == $row['user_name'] && $pw == $row['password']) {
            $result = "true";
        } else {
            $result = "false";
        }
    return $result;
}


function fechLoginByName(){

    // query to read single record
    $query = "SELECT
    c.user_name, c.password
    FROM
    " . $this->table_name . " c
    
    WHERE
    c.user_name = ?
   ";
   
    // prepare query statement
    $stmt = $this->conn->prepare( $query );
    $num = $stmt->rowCount();

    // bind id of product to be updated
    $stmt->bindParam(1, $this->name);

    // execute query
    $stmt->execute();

    // get retrieved row
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    // set values to object properties

    $this->user_name = $row['user_name'];
    $this->password = $row['password'];
}
}
