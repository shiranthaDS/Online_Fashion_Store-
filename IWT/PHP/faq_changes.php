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

    <h4>Order Changes</h4>

    <p class="question">
    An item in my order has been cancelled. Why?
    </p>
    <p class="answer">
    Unfortunately, this will happen if we haven’t been able to secure all items in your order.<br><br>
    You’ll be contacted by email as soon as possible and we’ll refund you,using your original payment method. Please allow 3 – 5 business days for your refund to process.
    </p>  
    <p class="question">
    Can I change or cancel my order after purchasing online?
    </p>
    <p class="answer">
    No, you’re unable to change or cancel your order once it’s been placed. <br><br>
    If you ordered items in error, or have changed your mind, you can return unwanted items to store for a full refund.
    </p> 

    </div>

        <footer>
        <?php
        include '\xampp\htdocs\IWT\PHP\footer.php';
        ?>
        </footer>   

</body>

</html>