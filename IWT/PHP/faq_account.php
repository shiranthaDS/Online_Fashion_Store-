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
    I have forgotten my password. What do I do?
    </p>
    <p class="answer">
    If you have forgotten your password, you can reset your password using the 'forgot password' option in your profile.
    <br><br>
    You can update your account settings using the Profile and Settings options in My Account. You can also update your personal details, password, addresses and preferences for the website.
    </p>  
    <p class="question">
    How do I delete my GLAMOUR account?
    </p>
    <p class="answer">
    Follow the steps below for how to delete your account. Please note, this action is not reversible.
    <br>
    1. Log in to your account online <br>
    2. Select ‘Account’ <br>
    3. Scroll down and select the ‘Remove Account’ button
    </p> 

    </div>

        <footer>
        <?php
        include '\xampp\htdocs\IWT\PHP\footer.php';
        ?>
        </footer>   

</body>

</html>