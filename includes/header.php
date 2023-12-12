<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Your Website Title</title>
</head>
<body>
    <header>
        <h1>Your Website</h1>
    </header>
    <nav>
        <a href="index.php">Home</a>
        <a href="about.php">About</a>
        <a href="services.php">Services</a>
        <a href="contact.php">Contact</a>
        <?php if (isset($_SESSION['admin'])): ?>
            <span class="admin-welcome">Welcome, Admin!</span>
        <?php endif; ?>
    </nav>
    <section>
