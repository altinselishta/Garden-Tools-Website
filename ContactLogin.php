<?php

if (isset($_POST['loginbtn'])) {
    if (empty($_POST['email']) || empty($_POST['password'])) {
        echo "Please fill the required fields!";
    } else {
        
        $email = $_POST['email'];
        $password = $_POST['password'];

        include_once 'usersC.php';
        $i=0;

        foreach ($users as $user) {
          if ($user['email'] == $email &&  $user['password'] == $password){
              session_start();
                $_SESSION['email'] = $email;
                $_SESSION['role'] = $user['role'];
                $_SESSION['loginTime'] = date("H:i:s");
                header("location: ContactIndex.php");
                exit();
              } else{
                  $i++;
                  if($i == sizeof($users)) {
                    echo "Incorrect Email or Password!";
                    exit();
                  
                }
            }
        }

    }
}
include_once 'registerControllerC.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ContactLogin</title>
    <link rel="stylesheet" href="style.css">
    
    <style>
      body{
  display: flex;
  justify-content: center;
  align-items: center;
  background-image: url(3.jpeg);
  
 }  
 .f{
   border-style: double;
   border-color: rgb(104, 255, 3);
   background-color: rgb(54, 136, 43);
   border-radius: 10px;
   padding: 32px;
   width: 200px;
   margin: auto;
   text-align: center;
   font-size: 20px;
   color: rgb(255, 255, 255);
   font-family: Verdana, Geneva, Tahoma, sans-serif
 }
 .f h1{
   text-align: center;
   font-weight: bold;
   color: rgb(255, 255, 255);
 }
 
  input[type=text], input[type=password]{
    background-color: rgb(170, 245, 229);
    width: 100%;
    padding: 10px;
    border-radius: 5px;
  }
  button{
    border: none;
    background-color: rgb(0, 162, 255);
    color: rgb(255, 255, 255);
    height: 40px;
    width: 200px;
    cursor: pointer;
    border-radius: 4px;
    
    
  }
  button:hover{
    opacity: 0.7;
  }
  button:active {
   opacity: 0.4;
  }
  .h{
    text-align: center;
    padding: 46px;
    font-size: 30px;
    font-style: oblique;
    color: black;
  }
  #emailError{
    font-size: 15px;
    color: red;
    padding-bottom: 20px;
  }
  #passwordError{
    font-size: 15px;
    color: red;
    padding-bottom: 20px;
  }

    </style>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
<div>
      <div class="f">
        <form action="index.html" method="post">
        <h1>Login</h1>
        <label for="email">Email: </label><br>
        <input type="text" id="email" name="email" oninput="validateEmail()" placeholder="Enter.." required><br><br>
        <div id="emailError" class="error"></div>
        <label for="password"></label>Password:<br>
        <input type="password" id="password" name="password" oninput="validatePassword()" placeholder="Enter..." required><br><br>
        <div id="passwordError" class="password"></div>
        <button class="button" id="btn" type="submit" onclick="validateForm()">Log In</button><br><br>
        </form>  
      </div>
    </div>  
  </body>
  <script>
       function validateEmail() {
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            var emailInput = document.getElementById('email').value;
            var emailError = document.getElementById('emailError');
            emailError.innerHTML = '';
            
            if (!emailRegex.test(emailInput)) {
                emailError.innerHTML = 'Error: Enter a valid email address.';
            }
        }
           
        function validatePassword(){
          var passwordRegex = /^[A-Z].\d{3}$/;
          var passwordInput = document.getElementById('password').value;
          var passwordError = document.getElementById('passwordError');
          passwordError.innerHtml = '';

          if (!passwordRegex.test(passwordInput)){
            passwordError.innerHTML = 'Error: Enter a valid password.';
          }
        }
          function validateForm() {
            validateEmail();
            validatePassword();
   }

      
    </script>
</html>     