<?php include 'includes/header.php'; ?>

<h2>Register</h2>

<form action="registration_process.php" method="post" enctype="multipart/form-data">
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

<?php include 'includes/footer.php'; ?>

