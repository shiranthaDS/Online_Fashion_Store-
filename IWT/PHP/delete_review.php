<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="\IWT\CSS\review.css">
</head>

<body>

<!-- add review starts  -->

<div class="form-container">
    <form method="post"> <!--form for submitting a review-->
        <h3>Delete your review</h3>

        <div>
            <label for="username">Username</label>
            <input type="text" name="username" id="username" required>
        </div>
        
        <div class="button-container">
            <button id="submitbtn" name="submitbtn" type="submit">Delete Review</button>
            <button><a href="\IWT\PHP\read_review.php" class="button">Go Back</a></button>
        </div>

    </form>
</div>

<!--add review ends-->


</body>

</html>

<?php

if ($_SERVER['REQUEST_METHOD']=== 'POST') {
    //connect to the database
    $con = new mysqli("localhost","root","","glamour");

    //check connection
    if ($con->connect_error) {
        die("Connection failed: ". $con->connect_error);
}

$username = $_POST["username"]; //retrieve data

$sql = "DELETE FROM reviews WHERE Username ='$username'";


if ($con->query($sql)) {
    echo '<script>
    alert("Review deleted successfully!");
    window.location.href="read_review.php";
    </script>';
} else {
    echo "Error deleting review: " ,$con->error;
}

$con->close() ;
}

?>