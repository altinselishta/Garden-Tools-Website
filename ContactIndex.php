<?php
  session_start();
  $hide = "";
  if (!isset($_SESSION['username']))
    header("location: ContactLogin.php");
   else {
    if ($_SESSION['role'] == "admin")
      $hide = "";
     else 
      $hide = "hide";
    
 ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contact Us</title>
        <style>
            body {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: Arial, Helvetica, sans-serif;
                line-height: 1.6;
            }
    
            header {
                display: flex;
                justify-content: space-between;
                align-items: center;
                background-color: green;
                color: white;
                height: 60px;
            }
    
            .logo {
                font-size: 2px;
                display: flex;
                margin-left: 10px;
                width: 60px;
                height: 60px;
            }
    
            nav {
                width: 30rem;
            }
    
            nav ul {
                list-style: none;
                display: flex;
                justify-content: space-between;
                margin-right: 30px;
            }
    
            nav a {
                color: white;
                text-decoration: none;
            }
    
            nav ul li a:hover {
                background-color: gray;
                border: none;
                border-radius: 10px;
                cursor: pointer;
            }
    
            main {
                text-align: center;
                padding: 50px;
            }
    
            .s1{
            text-align: center;
            height: auto;
             }
            .s2{
            padding: 40px 0;
            height: 0 10px;
            }
    
            .d2 {
                max-width: 600px;
                margin: 0 auto;
            }
    
            form {
                display: flex;
                flex-direction: column;
            }
    
            label {
                margin-top: 10px;
            }
    
            input,
            textarea {
                margin-bottom: 10px;
                padding: 8px;
            }
    
            button.submit {
                background-color: green;
                color: white;
                padding: 10px;
                border: none;
            }
    
            .s3{
            text-align: center;
            padding: 40px 0;
            }
            #nameError{
            font-size: 15px;
            color: red;
            }
            #surnameError{
            font-size: 15px;
            color: red;
            }
            #emailError{
            font-size: 15px;
            color: red;
           }
           #phoneError{
           font-size: 15px;
           color: red;
        }
    
            .footeri {
                background-color: gray;
                align-items: center;
                display: flex;
                height: 80px;
                justify-content: space-between;
                padding: 10px;
            }
    
            .footeri h4 {
                text-align: center;
                margin: 0;
                gap: 10px;
                margin-right: 10px;
            }
    
            .Linkat-social {
                display: flex;
                gap: 10px;
                margin-right: 10px;
            }
    
            .Linkat-kontaktues {
                display: flex;
                gap: 10px;
            }
        </style>
    </head>
    <body>
        <header>
            <div class="logo">
                <img src="Logo.png" alt="Logo i Garden">
            </div>
            <nav id="nav">
                <ul>
                    <li><a href="Garden Tools.html">Garden Tools</a></li>
                    <li><a href="About Us.html">About Us</a></li>
                    <li><a href="Products.html">Products</a></li>
                </ul>
            </nav>
        </header>
    
        <section class="s1">
            <h1>Contact Us</h1>
        
        </section>
        
        <section class="s2">
            <div class="d2">
                <h2>Your Details</h2>
                <form action="#" method="post">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                    <div id="nameError" class="error"></div>
    
                    <label for="surname">Surname:</label>
                    <input type="text" id="surname" name="surname" required>
                    <div id="surnameError" class="error"></div>
    
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                    <div id="emailError" class="error"></div>
    
                    <label for="phone">Phone:</label>
                    <input type="text" id="phone" name="Phone" required>
                    <div id="phoneError" class="error"></div>
    
                    <br>
    
                    <label for="message">Message:</label>
                    <textarea name="message" id="message" rows="4"></textarea>
                    <button class="submit" type="submit" onclick="validateForm()">Submit</button>
                </form>
            </div>
        </section>
        
        <section class="s3">
            <h2>Contact Information</h2>
            <address>
                Garden Tools Company
                <br>
                Prishtinë
                <br>
                Phone Number: 045-371-802 / 044-702-105
                <br>
                Email: gardentools@gmail.com
            </address>
        </section>
    
        <script>
            function validateName() {
                var nameRegex = /^[A-Z][a-z]+$/;
                var nameInput = document.getElementById('name').value;
                var nameError = document.getElementById('nameError');
                nameError.innerHTML = '';
    
                if (!nameRegex.test(nameInput)) {
                    nameError.innerHTML = 'Error: Start with a capital letter and use only letters.';
                }
            }
    
            function validateSurname() {
                var surnameRegex = /^[A-Z][a-z]+$/;
                var surnameInput = document.getElementById('surname').value;
                var surnameError = document.getElementById('surnameError');
                surnameError.innerHTML = '';
    
                if (!surnameRegex.test(surnameInput)) {
                    surnameError.innerHTML = 'Error: Start with a capital letter and use only letters.';
                }
            }
    
            function validateEmail() {
                var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                var emailInput = document.getElementById('email').value;
                var emailError = document.getElementById('emailError');
                emailError.innerHTML = '';
                if (!emailRegex.test (emailInput)) {
                emailError.innerHTML = 'Error: Enter a valid email address.';
    }
    }
    function validatePhone() {
            var PhoneRegex = /[0-9]{8}$/;
            var phoneInput = document.getElementById('phone').value;
            var phoneError = document.getElementById('phoneError');
            phoneError.innerHTML = '';
    
            if (!PhoneRegex.test(phoneInput)) {
                phoneError.innerHTML = 'Error: Use 8 characters, numbers only.';
            }
        }
    
        function validateForm() {
            validateName();
            validateSurname();
            validateEmail();
            validatePhone();
        }
        
    </script>
    
    <footer class="footeri">
        <div class="Linkat-social">
            <img src="LogoFacebok.png" alt="Logo Facebook" width="32px" height="32px">
            <img src="LogoInstagram.png" alt="Logo Instagram" width="32px" height="32px">
        </div>
        <h4>www.gardentools.com</h4>
        <div class="Linkat-kontaktues">
            <img src="LogoPhone.png" alt="Logo Phone" width="32px" height="32px">
            <img src="LogoViber.png" alt="Logo Viber" width="32px" height="32px">
            <img src="LogoEmail.png" alt="Logo Email" width="32px" height="32px">
        </div>
    </footer>
    <h3><?php echo "Username: ".$_SESSION['username']."<br>" ?></h3>
    <h3><?php echo "Login Time: ".$_SESSION['loginTime']."<br>"?></h3>
   
    </body>
    </html>
    <?php
      }
    ?>