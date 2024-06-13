<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="\htdocs\IWT\CSS\faq.css">

<style>
.p1 {
padding: 40px 80px;
}

/* Styles for FAQ page */
h4 {
    font-size: 24px;
    color: #333;
    margin-bottom: 20px;
}

.question {
    font-weight: bold;
    font-size: 18px;
    color: #333;
    margin-bottom: 10px;
}

.answer {
    font-size: 16px;
    color: #666;
    margin-bottom: 30px;
}

a {
    color: #007bff;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}
</style>

</head>

<body>

    <header>
    <?php
    include '\xampp\htdocs\IWT\PHP\header.php';
    ?>
    </header>

    <div class="p1">

    <h4>Requests, Feedback and Reviews</h4>

    <p class="question">
    I want to send a request for some help, where can I express my request?
    </p>
    <p class="answer">
    If you're looking for help, please use our request form to send us your request. You can find the form <a href="\IWT\PHP\contact.php">here</a> .
    </p>  
    <p class="question">
    How can I provide feedback and reviews about a product?
    </p>
    <p class="answer">
    We love hearing feedback from our customers! <br>
    To provide us with yours, you can leave a review on our Product Review page <a href="\IWT\PHP\read_review.php">here</a> .
    </p>  

    </div>

        <footer>
        <?php
        include '\xampp\htdocs\IWT\PHP\footer.php';
        ?>
        </footer>   

</body>

</html>