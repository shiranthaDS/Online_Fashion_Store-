<?php

//connection to mySQL database server
$con = new mysqli("localhost", "root", "", "glamour");

if ($con->connect_error) {
    die("Connection error: " . $con->connect_error); //if connection fails display error message
}

$username = $_POST["username"]; //retrieve data
$description = $_POST["description"];
$rating = $_POST["rating"];

$sql = "INSERT INTO reviews(`Username`,`Description`,`Rating`) VALUES ('$username','$description','$rating')";  //insert review data to database

if ($con->query($sql)) { //execute query
    echo '<script>
    alert("Review added successfully!");
    window.location.href="read_review.php";
    </script>';
} else {
    echo "ERROR: " . $con->error;
}

$con->close(); //close database connection

?>
