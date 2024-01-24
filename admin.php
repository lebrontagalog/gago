<?php
// admin.php

session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Expected admin credentials
    $expectedUsername = "admin";
    $expectedPassword = "admin";

    // Get user-submitted credentials
    $submittedUsername = $_POST["username"];
    $submittedPassword = $_POST["password"];

    // Check if credentials are correct
    if ($submittedUsername == $expectedUsername && $submittedPassword == $expectedPassword) {
        // Correct credentials, redirect to dashboard.php
        $_SESSION["username"] = $submittedUsername;
        header("Location: dashboard.php");
        exit();
    } else {
        // Incorrect credentials, display error message
        $error_message = "Wrong username or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Admin Panel</title>
</head>

<body>
    <div class="login-container">
        <h2>Admin Login</h2>
        <?php if (isset($error_message)) { ?>
            <p class="error"><?php echo $error_message; ?></p>
        <?php } ?>
        <form action="admin.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Login</button>
        </form>
    </div>
</body>

</html>
