<?php
// Database configuration
$dbHost     = "localhost";
$dbUsername = "softflameAdmin";
$dbPassword = "softflame@123";
$dbName     = "softflamemaildata";

// Create database connection
$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>