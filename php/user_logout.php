<?php
  session_start(); 
  
  // Destroy session.
  session_destroy();

  // Redirect user.
  header("Location: ../index.php");
  die();

?>