<?php
$host = "localhost"; // Change this if your database is on a different host
$user = "your_database_user";
$password = "your_database_password";
$database = "your_database_name";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
