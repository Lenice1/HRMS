<?php
require_once '../config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate and sanitize form data
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
    } else {
        // Check if the email address is already in use
        $check_email_query = "SELECT * FROM subscribers WHERE email = '$email'";
        $result = $conn->query($check_email_query);

        if ($result->num_rows > 0) {
            echo "Email address is already in use";
        } else {
            // Upload profile picture
            $profile_picture = "default_profile_picture.jpg"; // Default picture
            if (isset($_FILES['profile_picture']) && $_FILES['profile_picture']['error'] === UPLOAD_ERR_OK) {
                $target_dir = "profile_pictures/";
                $target_file = $target_dir . basename($_FILES["profile_picture"]["name"]);

                if (move_uploaded_file($_FILES["profile_picture"]["tmp_name"], $target_file)) {
                    $profile_picture = basename($_FILES["profile_picture"]["name"]);
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }

            // Insert data into the database
            $insert_query = "INSERT INTO subscribers (name, email, gender, address, profile_picture) VALUES ('$name', '$email', '$gender', '$address', '$profile_picture')";

            if ($conn->query($insert_query) === TRUE) {
                // Redirect to a thank you page or home page
                header('Location: send_email.php');
            } else {
                echo "Error: " . $insert_query . "<br>" . $conn->error;
            }
        }
    }
}
?>

<?php include '../includes/header.php'; ?>

<h2>Register</h2>

<form action="register.php" method="post" enctype="multipart/form-data">
    <label for="name">Name:</label>
    <input type="text" name="name" required>

    <label for="email">Email:</label>
    <input type="email" name="email" required>

    <label for="gender">Gender:</label>
    <select name="gender">
        <option value="male">Male</option>
        <option value="female">Female</option>
    </select>

    <label for="address">Address:</label>
    <input type="text" name="address">

    <label for="profile_picture">Profile Picture:</label>
    <input type="file" name="profile_picture">

    <input type="submit" value="Register">
</form>

<?php include '../includes/footer.php'; ?>
