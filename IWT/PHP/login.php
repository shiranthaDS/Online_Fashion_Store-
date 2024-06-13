<?php
// Check if form is submitted
if (isset($_POST['submit'])) {
    // Include database connection
    include "connection.php";

    // Retrieve and sanitize user inputs
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['pass'];

    // Prepare SQL statement to find user by email
    $sql = "SELECT password FROM customer WHERE email = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);

    // Check if the email exists in the database
    if (mysqli_stmt_num_rows($stmt) === 1) {
        // Bind the hashed password to a variable
        mysqli_stmt_bind_result($stmt, $hashedPassword);
        mysqli_stmt_fetch($stmt);

        // Verify the provided password against the hashed password
        if (password_verify($password, $hashedPassword)) {
            // Password is correct, login is successful
            echo '<script>
            alert("Login Successful!");
            window.location.href = "g_home.php";
            </script>';
        } else {
            // Incorrect password
            echo '<script>
            alert("Invalid Email or Password.");
            window.location.href = "login.php";
            </script>';
        }
    } else {
        // Email not found
        echo '<script>
        alert("Invalid Email or Password.");
        window.location.href = "login.php";
        </script>';
    }

    // Close the prepared statement
    mysqli_stmt_close($stmt);
}

// HTML login form
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Login</title>

    
    <link rel="stylesheet" href="\IWT\CSS\signuplogin.css">
</head>
<body>
    <div class=bg_img></div>
    <div class="container">
    <div class="logo-container">
        <img src="\IWT\Assets\images\logo.png" alt="Logo" class="logo">
    </div>
        <h1>Login</h1>
        <form action="login.php" method="POST">
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="pass" class="form-label">Password</label>
                <input type="password" name="pass" id="pass" class="form-control" required>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Login</button>
            <p>Don't have an account? <a href="signup.php">Sign Up</a></p>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </div>
</body>
</html>

