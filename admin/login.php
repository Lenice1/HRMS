<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check login credentials (use proper password hashing in a real-world scenario)
    if ($_POST['username'] === 'admin' && $_POST['password'] === '@dministrat0r') {
        $_SESSION['admin'] = true;
        header('Location: admin_panel.php');
        exit();
    } else {
        $error = "Invalid username or password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HRMS - Admin Login</title>
    <!-- Add Bootstrap CDN links here -->
</head>
<body>
    <!-- Navigation menu -->
    <!-- ... -->

    <div class="container">
        <h2>Admin Login</h2>
        <!-- Add your login form here -->
        <!-- ... -->
    </div>

    <!-- Footer or other common elements -->
    <!-- ... -->
</body>
</html>

<?php include 'includes/header.php'; ?>

<h2>Login</h2>

<section class="content">
        <div class="container">
            <h2>User Login</h2>
            <!-- User Login Form (add your form fields) -->
            <form action="user_login_process.php" method="post">
                <!-- Add your form fields (e.g., username, password) -->
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>
