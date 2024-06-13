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
        <h3>Edit your review</h3>

        <div>
            <label for="username">Username</label>
            <input type="text" name="username" id="username" required>
        </div>
        <div>
            <label for="description">Review Description</label>
            <textarea name="description" id="description" cols="30" rows="10" required></textarea>
        </div>
        <div>
            <label for="rating">Review Rating</label>
            <select name="rating" id="rating" required>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>
        <div class="button-container">
            <button id="submitbtn" name="submitbtn" type="submit">Edit Review</button>
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
$description = $_POST["description"];
$rating = $_POST["rating"];

$sql = "UPDATE reviews SET Rating='$rating', Description='$description' WHERE Username='$username'";

if ($con->query($sql)===TRUE) {
    echo '<script>
    alert("Review edited successfully!");
    window.location.href="read_review.php";
    </script>';
} else {
    echo "Error editing review: " ,$con->error;
}

$con->close() ;
}


