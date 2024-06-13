<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="\IWT\CSS\review.css">

    <style>
    /* Style for reviews image */
    .review-img {
    display: flex; 
    justify-content: center; 
    align-items: center; 
    height: 400px; 
    margin-bottom: 20px;
    }

    .review-img img {
    max-width: 100%; 
    max-height: 100%; 
    }

    #editReview_btn{
        background-color: goldenrod;
    }

    </style>

    </head>

    <body>

    <header>
    <?php
    include '\xampp\htdocs\IWT\PHP\header.php';
    ?>
    </header>

        <div class="review-img">
            <img src="\IWT\Assets\images\reviews1.jpg" alt="">
        </div>
        
    <div class="review-heading"> 
        <p class ="Rheading">Customer Reviews</p>
        <div class="buttons">
        <a href="\IWT\PHP\add_review.php">Add Review</a>
        <button id= "editReview_btn">Edit Review</button>
        <button id="deleteReview_btn">Delete Review</button>
        </div>
    </div>

    <script>
        document.getElementById("deleteReview_btn").addEventListener("click",function() {
            alert("The Review will be deleted. Please confirm.");
            //redirect to another page
            window.location.href = "delete_review.php";
        })

        

document.getElementById("editReview_btn").addEventListener("click",function() {
    alert("The Review will be edited. Please confirm.");
    //redirect to another page
    window.location.href = "edit_review.php";
});
    </script>


<?php


$con = new mysqli("localhost", "root", "", "glamour"); //connection to database

//check connection
if ($con->connect_error) {
    die("Connection error: " . $con->connect_error);
}
$sql = "SELECT * FROM reviews"; //query to select all reviews

$result = $con->query($sql); //execute query

if($result->num_rows > 0){
 
    while($row = $result->fetch_assoc()){

$userN = $row["Username"];
$des = $row["Description"];
$rating = $row["Rating"];
$date = $row["Date"];

echo '<div class="review-container">';

echo  '<div class="username">'.$userN. '</div>';
echo '<div class="date">'.$date. '</div>';


// Display star icons based on rating
echo '<div class="rating-container">';
for ($i = 0; $i < 5; $i++) { // Loop to generate 5 stars
    if ($i < $rating) {
        echo '<span class="rating-star" style="color: gold;">&#9733;</span>'; // Unicode for filled star
    } else {
        echo '<span class="rating-star" style="color: gold;">&#9734;</span>'; // Unicode for empty star
    }
}
echo '</div>';

echo '<div class="description">'.$des. '</div>';
echo '</div>';
  }
  
}
else {
    echo "No reviews added yet!";
}
$con->close() ; //close database connection

?>

<footer>
    <?php
    include '\xampp\htdocs\IWT\PHP\footer.php';
    ?>
</footer>   

    </body>
</html>