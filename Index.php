<?php
  session_start();
   $hide = "";
  if (!isset($_SESSION['email'])) 
    header("location: Login.php");
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
    <title>Garden Tools</title>
    <style>
 body{
    margin:0px;
}

p{
    background-color: red;
    color: white;
    height: 20px;
    text-align: center;
    padding-bottom: 30px;
    padding-top: 20px;
    width: 100%;

    

}
.items{
    background-color: greenyellow;
    display: flex;
    justify-content: space-between;
    
    
}
.logo{
  display: flex;  
  margin-left: 10px;
  width: 60px;
  height: 60px;
}
#listatheader{
    display: flex;
    width: 30%;
    margin-right:30px;
    list-style: none;
    justify-content: space-between;
    flex-wrap: wrap;
    column-gap: 15px;
    
}
a:hover{
    cursor: pointer;
    border-radius: 10px;
    background-color: grey;

}
.Login{
    border-radius: 50px;
    width: 60px;
    height: 30px;
    background-color: white;
}
.Sign{
    border-radius: 60px;
    width: 70px;
    height: 30px;
    background-color: white;
   
    
   
}
a{
    color: white;
    text-decoration: none;
}
ul li a:hover{
    background-color: gray;
    border: none;
    border-radius: 10px;
    cursor: pointer;
}

.Kopshti{
   display: flex;
    background-image: url(Kopshti.jpg);
    background-size: contain;
    margin: 10px;
    overflow: hidden;
}
.Welcome{
   position: absolute;
   margin-left: 450px;
   padding-top:  250px;
   color: white;
   font-size: 100px;
   text-align: center;
}
.Text{
    display: flex;
    margin: 120px;
    background-color: white;
    color: black;
    text-align: center;
    justify-content: center;
    font-size: large;
}


.footeri{
    background-color: gray;
    align-items: center;
    display: flex;
    height: 80px;
    justify-content: space-between;
    padding: 10px;
}

.footeri h4{
    text-align: center;
    margin: 0;
    gap: 10px;
    margin-right: 10px;
    
}
.Linkat-social{
   display: flex;
   gap: 10px;
   margin-right: 10px;
    
}
.Linkat-kontaktues{
    display: flex;
    gap: 10px;
}

     </style>
</head>
<body>
    <header>
        <div class="items">
            <div>
                <img src="Logo.png" alt="Logo i Garden" class="logo">
            </div>
            <ul id="listatheader">
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="About Us.html">About Us</a></li>
                <li><a href="Contact Us.html">Contact Us</a></li>
                <li><a href="Products.html">Products</a></li>
                <li><a href="login.html"><button class="Login">Log In</button></a></li>
                <li><a href="signup.html"><button class="Sign">Sign Up</button></a></li>
            </ul>
        </div>
    </header>

    <main>
        
        <h1>Welcome</h1>
        <p>This is the admin dashboard.</p>
    </main>

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
    <h3><?php echo "Email: ".$_SESSION['email']."<br>" ?></h3>
    <h3><?php echo "Login Time: ".$_SESSION['loginTime']."<br>"?></h3>
</body>
</html>
 <?php
  }
 ?>