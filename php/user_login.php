<?php

require_once('functions.php');

$username = $_POST['username'];
$pass = $_POST['pass'];

// Connecting, selecting database
db_connect();

$query = "SELECT DISTINCT * FROM users WHERE username = '{$username}'";

$result = pg_query($query) or die('Query failed: ' . pg_last_error());


if($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {

  if(pass_valid($line['user_password'], $pass)) {

    // Valid usename and password. Log user in.

    $_SESSION["logged"] = $username;

    // Redirect user to movies page.
    header("Location: ../movies.php");
    die();

  } else {
    
    // Wrong password.
    header("Location: ../login.php?msg=2");
    die();

  }

} else {
  
  // Username not found in database.
  header("Location: ../login.php?msg=1");
  die();

}

// Closing connection
pg_close($dbconn);

?>