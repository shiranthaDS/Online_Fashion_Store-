<?php
// Check if form is submitted
if (isset($_POST['submit'])) {
    // Include database connection
    include "connection.php";

    // Retrieve and sanitize user inputs
    $firstName = mysqli_real_escape_string($conn, $_POST['fname']);
    $lastName = mysqli_real_escape_string($conn, $_POST['lname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['pass'];
    $confirmPassword = $_POST['cpass'];

    // Check if the email already exists in the database
    $sql = "SELECT * FROM customer WHERE email = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);
    $countEmail = mysqli_stmt_num_rows($stmt);
    mysqli_stmt_close($stmt);

    // If email does not exist in the database
    if ($countEmail == 0) {
        // Check if password and confirm password match
        if ($password === $confirmPassword) {
            // Hash the password
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            // Insert new user data into the database
            $sql = "INSERT INTO customer (First_name, Last_name, email, password) VALUES (?, ?, ?, ?)";
            $stmt = mysqli_prepare($conn, $sql);
            mysqli_stmt_bind_param($stmt, "ssss", $firstName, $lastName, $email, $hashedPassword);
            if (mysqli_stmt_execute($stmt)) {
                // Redirect to login page with a success message
                echo '<script>
                alert("Signup successful! You can now log in.");
                window.location.href = "login.php";
                </script>';
            } else {
                echo "Error: " . mysqli_error($conn);
            }
            mysqli_stmt_close($stmt);
        } else {
            // Redirect back to signup with an error message
            echo '<script>
            alert("Passwords do not match! Please try again.");
            window.location.href = "signup.php";
            </script>';
        }
    } else {
        // Redirect to signup with an error message
        echo '<script>
        alert("Email is already registered. Please try logging in.");
        window.location.href = "signup.php";
        </script>';
    }
}

// HTML signup form
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Signup</title>
    
    <link rel="stylesheet" href="\IWT\CSS\signuplogin.css">
</head>
<body>
    <div class="container">
    <div class="logo-container">
        <img src="\IWT\Assets\images\logo.png" alt="Logo" class="logo">
    </div>
        <h1>Sign Up</h1>
        <form action="signup.php" method="POST">
            <div class="mb-3">
                <label for="fname" class="form-label">First Name</label>
                <input type="text" name="fname" id="fname" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="lname" class="form-label">Last Name</label>
                <input type="text" name="lname" id="lname" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="pass" class="form-label">Password</label>
                <input type="password" name="pass" id="pass" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="cpass" class="form-label">Confirm Password</label>
                <input type="password" name="cpass" id="cpass" class="form-control" required>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Sign Up</button>
            <p>Already have an account? <a href="login.php">Login</a></p>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

