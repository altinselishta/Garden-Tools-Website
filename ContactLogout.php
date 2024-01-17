<?php
  session_start();

  session_destroy();

  header("location: ContactLogin.php");
?>