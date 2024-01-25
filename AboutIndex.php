<?php
  session_start();
  $hide = "";
  if (!isset($_SESSION['email']))
    header("location: AboutLogin.php");
   else {
    if ($_SESSION['role'] == "admin")
      $hide = "";
     else 
      $hide = "hide";
    
 ?>
 <html>
  <head>
    <title>
     About Us
    </title>
  </head>
  <body>
    <div class="about-section">
      <h1>About Us </h1>
      <p>
       We are a company who sell and distribute garden tools around Europe.
      </p>
      <a class="a" href="">Return</a>
    </div>
    <style>
        body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
  background-image: url(14.jpg);
  
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-left: 210px;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #518a44;
  color: white;
}

.container {
  padding: 0 16px;
  background-color: rgb(226, 226, 226);
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.a{
  text-align: center;
  text-decoration: none;
  background-color: rgb(39, 212, 255);
  padding: 13px;
  transition: opacity 0.3s;
}
.a:hover{
  opacity: 0.7;
}
@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
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
   <h2 style="text-align:center">Our Team</h2>
    <div class="row">
      <div class="column">
        <div class="card">
          <img src="111.webp" alt="" style="width:100%">
          <div class="container">
            <h2>Art Krasniqi</h2>
            <p class="title">Co-founder and student</p>         
          </div>
        </div>
      </div>
    
      <div class="column">
        <div class="card">
          <img src="111.webp" alt="" style="width:100%">
          <div class="container">
            <h2>Altin Selishta</h2>
            <p class="title">Co-founder and student</p>
          </div>
        </div>
      </div>   
    </div>
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
  </body>

  <h3><?php echo "Email: ".$_SESSION['email']."<br>" ?></h3>
  <h3><?php echo "Login Time: ".$_SESSION['loginTime']."<br>"?></h3>

 
</html>
<?php
  }
  ?>