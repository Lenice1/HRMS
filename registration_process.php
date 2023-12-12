<?php
require_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate and sanitize form data (add more validation as needed)
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format");
    }

    // Insert data into the database
    $insert_query = "INSERT INTO subscribers (name, email, gender, address) VALUES ('$name', '$email', '$gender', '$address')";

    if ($conn->query($insert_query) === TRUE) {
        // Redirect to a thank you page
        header('Location: send_email.php');
    } else {
        echo "Error: " . $insert_query . "<br>" . $conn->error;
    }
} else {
    // Redirect to the registration page if accessed directly
    header('Location: register.php');
}

$conn->close();
?>
