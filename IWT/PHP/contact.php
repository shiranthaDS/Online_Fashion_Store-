<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="\IWT\CSS\contact.css">
</head>
    
    <body>

    <header>
    <?php
    include '\xampp\htdocs\IWT\PHP\header.php';
    ?>
    </header>
        <div id="contact-details" class="p1">
        <div id="contact-head" class="p1">
            <div>
                <h1>CONTACT<br>OUR SUPPORT</h1>
                <h4>We love hearing from you, our customers.</h4>
            </div>
            <img src="\IWT\Assets\images\contact1.jpg" alt="">
        </div>

        <div class="contact-box">
            <a href="#"><i class='bx bx-map'></i></a>
            <h3>Address</h3>
            <br>
            <p>Glamour<br>Liverpool,<br>England</p>
           </div>
           <div class="contact-box">
            <a href="#"><i class='bx bx-phone'></i></a>
            <h3>Hotline</h3>
            <br>
            <p>+44 0151 12345678</p>
           </div>
           <div class="contact-box">
            <a href="#"><i class='bx bx-envelope'></i></a>
            <h3>Email</h3>
            <br>
            <p>glamour@gmail.com</p>
           </div>
            <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d152268.82882741353!2d-3.083398339361487!3d53.39335408079743!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487adf8a647060b7%3A0x42dc046f3f176e01!2sLiverpool%2C%20UK!5e0!3m2!1sen!2slk!4v1714277115644!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <script>// Add options for Date of Birth (Day, Month, Year) fields
            function populateDateOfBirth() {
                var dayDropdown = document.getElementById("dob");
                var monthDropdown = document.getElementsByName("dob_month")[0];
                var yearDropdown = document.getElementsByName("dob_year")[0];
            
                // Populate Day (1 - 31)
                for (var i = 1; i <= 31; i++) {
                    var option = document.createElement("option");
                    option.value = i;
                    option.text = i;
                    dayDropdown.appendChild(option);
                }

                // Populate Month (1 - 12)
                for (var i = 1; i <= 12; i++) {
                     var option = document.createElement("option");
                     option.value = i;
                    option.text = i;
                    monthDropdown.appendChild(option);
                 }

                // Populate Year (1955 - 2015)
                for (var i = 1955; i <= 2015; i++) {
                     var option = document.createElement("option");
                    option.value = i;
                    option.text = i;
                    yearDropdown.appendChild(option);

                }
                }

                // Call the function ageto populate Date of Birth options when the page loads
                window.onload = populateDateOfBirth;
        </script>
        <div id="form-details">
            <form action="\IWT\PHP\process_request.php" method="post">
                <h2>Request Form</h2><br>
                <h4>Jot us a note and we’ll get back to you as quickly as possible</h4><br>
                <div>
                    <label for="username">Username : </label>
                    <input type="text" name="username" id="username" required>
                </div>
                <div>
                    <label for="contact">Contact Number : </label>
                    <input type="tel" name="contact" id="contact" pattern="[0-9]{10}" required>
                </div>
                <div>
                    <label for="email">Email Address : </label>
                    <input type="email" id="email" name="email" pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$" required>
                </div>
                <div>
                    <label for="dob">Date of Birth : </label>
                <select id="dob" name="dob_day" required>
                 <!-- Options for days 1 - 31 (populate these) -->
                </select>
                <select name="dob_month" required>
                <!-- Options for months 1 - 12 (populate these) -->
                </select>
                <select name="dob_year" required>
                 <!-- Options for years 1955 - 2015 (populate these) -->
                </select>
                </div>
                <br>
                <div>
                    <label for="subject">Subject : </label>
                    <input type="text" name="subject" id="subject" required>
                </div>
                <div>
                    <label for="message">Your Message : </label>
                    <textarea name="message" id="message" cols="30" rows="10" required></textarea>
                </div>
                <button><a type="submit" href="contact.php" class="normal">Submit</a></button>
            </form>
        </div>
        </div>  

     <footer>
        <?php
        include '\xampp\htdocs\IWT\PHP\footer.php';
        ?>
     </footer>   
        
    
</body>

</html>