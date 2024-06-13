<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="\IWT\CSS\faq.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <style>

a {
    color: gold; /* Set link color to gold */
    text-decoration: none; /* Remove underline */
}

a:hover {
    text-decoration: none; /* Remove underline on hover */
    color: black;
}

    </style>

</head>

<body>

    <header>
    <?php
    include '\xampp\htdocs\IWT\PHP\header.php';
    ?>
    </header>

    <div class="faq-topics">
        <div class="faq-topic-box">
            <a href="\IWT\PHP\faq_delivery.php">
                <div class="faq-name">Delivery</div>
                <div class="faq-icon"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADwAAAA8CAYAAAA6/NlyAAAAAXNSR0IArs4c6QAAA5FJREFUaEPtmluoDlEUx38n5ZpQUjxQ5MElRChvlFKupTygJA/uhdwitwf3Igol4UkuRXlxiZBCCCkh5RrJJSKScpl/9hFzZn97z3wz53zzfbMfZ9Zea//2WnvtPWtPHTXW6mqMlwK42j1eeLjwcJXNQBHSVebQBjiFh0NTMgZYB/QA2jWC918Ce4D1Wdkq5eFlwKasDDv0jgLOZGHbBjwSOJuFQU+dK4ENnrKxxGzA54ERsTSlK6xltDZdlX+02YA/AO2zMOips9GBf3kOLCuxAjitmbWFdFN7+BJwMQLyO3ABuJp0AioV2MXzHpgLHHEJht/nFVgcisLJwOE40HkGFucPYCBw1xc678DivAEMyTuwLWnpTD81Am46cNAHulI9bNuHmwG3gH4huHdAd+CzCzpvwOIZDFyPANsFzKtGYDEpfKeF4JS1B7gSWB49LM6OwGOgbQjamcDyCizO+cDOiBCeAey3hXaegUslsJ7AxyjoPAOXSmAqE83JE7Ar2breWxNYpXrYBeTzXjUx1cb+a9UMLNAGfAWw8X9TFwB8QtZHpvBwEdJFSPuslMqVKdawbQ0/BbqVcNxrYDFwOfgG1cd37+DsugCYkqKzy7Wh/p19Dx5R35v1fb+YioM+z8JtNzA7Beg0bMQ6aalGZPvEOgZMskDJ0/dSAC7Xhs4RugHVpaDX0VJCW4AlEYPfCiy1QLUO+sg75bZybSwKLvC3Rw3C9cvDmqBT+NpyLzDTQqQ186pcWiCJjSfAOWAb8MA2BhfwBOBEqPNtU/yO0jk2eHcy9OK5IwFGTVJcG/dN4nTOtQvYtiY3A8tD2nsBp4O13zX0/JBH9r4GDA31i2NjI7DCSVviQvzfvrYPiYfAleBS6y3QJ7gBGG0xqMqDKhClmu1/El8bKt3eTAtYg53loyxC5gXQF/jk6K+/De44Qt+m4jgw0Xd8rpCWnpZmq1FlP05TZAwLqg4KV5+m2wQV2Fv4CBsZJadBwa7x1bePD7B09Td/9XTyVWy2NYVqnDY+8PIBoINHJ8GOC/LDIw/ZvyK+wOqg4vdRYLjDgPbhVcGgdwA/4wzGyOoHuNXm2qR5RP835v0+c10ay0Qc4HrFOozoUBJu34JMewpYCDyLNYpo4VZmq9FO0cXsrfKqElnilgRYxtqYvVjrRwVxZevE/10kHn2CjkmBE5iqjC4FcGX4IbtRFB7Obm4rQ3PNefg3rdaxPepT33kAAAAASUVORK5CYII="/></div>
            </a>
        </div>
        <div class="faq-topic-box">
            <a href="\IWT\PHP\faq_changes.php">
                <div class="faq-name">Order Changes</div>
                <div class="faq-icon"><i class='bx bx-edit'></i></div>
            </a>
        </div>
        <div class="faq-topic-box">
            <a href="\IWT\PHP\faq_payment.php">
                <div class="faq-name">Orders & Payment</div>
                <div class="faq-icon"><i class='bx bx-credit-card'></i></div>
            </a>
        </div>
        </div>

        <div class="faq-topics">
        <div class="faq-topic-box">
            <a href="\IWT\PHP\faq_website.php">
                <div class="faq-name">Using Our Website</div>
                <div class="faq-icon"><i class='bx bx-home'></i></div>
            </a>
        </div>
        <div class="faq-topic-box">
            <a href="\IWT\PHP\faq_reviews.php">
                <div class="faq-name">Requests, Feedback And Reviews</div>
                <div class="faq-icon"><i class='bx bx-star'></i></div>
            </a>
        </div>
        <div class="faq-topic-box">
            <a href="\IWT\PHP\faq_account.php">
                <div class="faq-name">Your GLAMOUR Account</div>
                <div class="faq-icon"><i class='bx bx-user-circle'></i></div>
            </a>
        </div>
        </div>

        <footer>
        <?php
        include '\xampp\htdocs\IWT\PHP\footer.php';
        ?>
        </footer>   

</body>

</html>