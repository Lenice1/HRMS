<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Hospital Registration Management System</title>
</head>
<body>
    <header>
        <h1>Hospital Registration Management System</h1>
    </header>
    <nav>
        <a href="home.php">Home</a>
        <a href="about.php">About</a>
        <a href="services.php">Services</a>
        <a href="contact.php">Contact</a>
        <a href="register.php">Register</a>
        <?php if (isset($_SESSION['admin'])): ?>
            <a href="admin_panel.php">Admin Panel</a>
            <span class="admin-welcome">Welcome, Admin!</span>
            <a href="logout.php">Logout</a>
        <?php endif; ?>
    </nav>
    <section>
