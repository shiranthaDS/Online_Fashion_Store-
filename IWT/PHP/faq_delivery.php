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

    <h4>Delivery</h4>

    <p class="question">
    Who will deliver my order?
    </p>
    <p class="answer">
    We use several carriers to deliver our online orders. Depending on your order, it will be shipped to you. The details in your shipping confirmation email(s) will take you directly to the carrier’s website to track your package.
    </p>  
    <p class="question">
    Can I change my delivery address after my order has been placed?
    </p>
    <p class="answer">
    No, you can’t change your delivery address once your order has been placed. Once you receive your shipping confirmation email, it may be possible for the carrier to change your delivery address or redirect your order. Please contact the carrier directly. If your order can’t be delivered it will be returned to our stores. A refund will then be processed and takes 3-5 business days to be processed back into your account. If you still want to purchase the items you can order online again or buy in store.
    </p> 
    <p class="question">
    What if I’m not home when my order arrives?
    </p>
    <p class="answer">
    If you provide authority to leave during checkout, you’re allowing our carriers to leave the package unattended at your address without a signature.
    If the carrier believes the location is not secure, they will not leave the items unattended.
    If you don’t provide authority to leave, our carriers will leave a note directing you with next steps.
    </p>   

    </div>

        <footer>
        <?php
        include '\xampp\htdocs\IWT\PHP\footer.php';
        ?>
        </footer>   

</body>

</html>