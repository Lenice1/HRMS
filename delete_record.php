<?php
include 'config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM your_table WHERE id = $id";
    $db->query($query);

    
    header("Location: view_records.php");
    exit();
} else {
    // Handle the case when no ID is provided
    // Redirect or display an error message
}
?>