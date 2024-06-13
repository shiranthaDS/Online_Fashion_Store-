<?php
// Establish connection to MySQL database server
$con = new mysqli("localhost", "root", "", "glamour");

// Check if connection was successful
if ($con->connect_error) {
    // If connection fails, display error message and terminate script
    die("Connection error: " . $con->connect_error);
}

// Retrieve form data from POST request
$username = $_POST["username"];
$contact = $_POST["contact"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];
$day = $_POST["dob_day"];
$month = $_POST["dob_month"];
$year = $_POST["dob_year"];

// Concatenate day, month, and year to form date of birth in YYYY-MM-DD format
$date_of_birth = "$year-$month-$day";

// SQL query to insert request data into database
$sql = "INSERT INTO requests (`Username`, `Contact`, `Email`, `DOB`, `Subject`, `Message`) 
        VALUES ('$username', '$contact', '$email', '$date_of_birth', '$subject', '$message')";

// Execute SQL query
if ($con->query($sql)) {
    // If query execution is successful, display success message and redirect user
    echo '<script>
    alert("Request sent successfully!");
    window.location.href="\IWT\PHP\contact.php";
    </script>';
} else {
    // If query execution fails, display error message
    echo "ERROR: Unable to send request.";
}

// Close database connection
$con->close();
?>
