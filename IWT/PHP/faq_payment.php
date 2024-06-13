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

    <h4>Order And Payment</h4>

    <p class="question">
    What payment methods do you accept?
    </p>
    <p class="answer">
    We accept:
    <br> PayPal <br>
    Credit and debit cards, including: Visa, MasterCard and American Express
    </p>  
    <p class="question">
    My credit card details are not being accepted. What’s wrong?
    </p>
    <p class="answer">
    Please check the details you’ve entered online and make sure that:
    <br>Your credit card number is correct with no extra spaces
    <br>Your name must appear exactly as it displays on the card <br><br>
    If you’re still experiencing difficulties, please check with your bank or financial institution
    If problems continue, <a href="\IWT\PHP\contact.php">Contact us</a> .
    </p>  

    </div>

        <footer>
        <?php
        include '\xampp\htdocs\IWT\PHP\footer.php';
        ?>
        </footer>   

</body>

</html>