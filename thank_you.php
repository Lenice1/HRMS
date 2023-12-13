<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Thank You</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body>
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

    <div class="container">
        <h2>Thank you for submitting your information!</h2>

    </div>

    <?php include 'includes/footer.php'; ?>
</body>
</html>