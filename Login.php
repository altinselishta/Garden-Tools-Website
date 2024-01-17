<?php

if (isset($_POST['loginbtn'])) {
    if (empty($_POST['username']) || empty($_POST['password'])) {
        echo "Please fill the required fields!";
    } else {

        $username = $_POST['username'];
        $password = $_POST['password'];
        
        include_once 'User.php';
        $i=0;

        foreach ($users as $user) {
          if($user['username'] == $username && $user['password'] == $password){
              session_start();
                $_SESSION['username'] = $username;
                $_SESSION['role'] = $user['role'];
                $_SESSION['loginTime'] = date("H:i:s");
                header("location: Index.php");
                exit();
              } else{
                  $i++;
                  if($i == sizeof($users)) {
                    echo "Incorrect Username or Password!";
                    exit();
                  
                }
            }
        }

    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
    <div>
        <div class="f">
            <form method="post">
                <h1>Login</h1>
                <label for="username">Username: </label><br>
                <input type="text" id="username" name="username" placeholder="Enter.." required><br><br>
                <label for="password">Password:<br>
                <input type="password" id="password" name="password" placeholder="Enter..." required><br><br>
                <button class="button" id="btn" type="submit" name="loginbtn">Log In</button><br><br>
            </form>  
        </div>
    </div>  
</body>
</html>