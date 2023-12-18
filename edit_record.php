<?php
include 'config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM your_table WHERE id = $id";
    $result = $db->query($query);
    $record = $result->fetch_assoc();
} else {
    // Handle the case when no ID is provided
    // Redirect or display an error message
}
?>

<!-- Create an HTML form pre-filled with the record details for editing -->
<!-- Similar to the form used for registration, but with pre-filled values -->

