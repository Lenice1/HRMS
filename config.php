<?php
$host = "127.0.0.1"; 
$user = "root";
$password = '';
$database = "hrms_db"; 

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>
