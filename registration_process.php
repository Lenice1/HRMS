<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Handle form submission and email sending
    // Validate form data
    // Insert data into the database (not included in this example)

    // Redirect to a thank you page
    header('Location: send_email.php');
} else {
    // Redirect to the registration page if accessed directly
    header('Location: register.php');
}
?>
