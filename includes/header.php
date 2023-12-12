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
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="home.php">HRMS</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link btn btn-dark" href="home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-dark" href="about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-dark" href="services.php">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-dark" href="contact.php">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-dark" href="register.php">Register</a>
                </li>
                <?php if (isset($_SESSION['admin'])): ?>
                    <li class="nav-item">
                        <a class="nav-link btn btn-dark" href="admin_panel.php">Admin Panel</a>
                    </li>
                    <span class="admin-welcome">Welcome, Admin!</span>
                    <li class="nav-item">
                        <a class="nav-link btn btn-dark" href="logout.php">Logout</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>

    <section>
