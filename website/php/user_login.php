<?php

require_once('functions.php');

$username = $_POST['username'];
$pass = $_POST['pass'];



// Connecting, selecting database
$dbconn = pg_connect("host=webcourse.cs.nuim.ie dbname=cs230 user=cs230teamd6 password=Ootheigh") 
    or die('Could not connect: ' . pg_last_error());

$query = "SELECT DISTINCT * FROM users WHERE username = '{$username}'";

$result = pg_query($query) or die('Query failed: ' . pg_last_error());


if($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {

  if(pass_valid($line['user_password'], $pass)) {
    echo "valid";
  } else {
    echo "Password not valid.";
  }

} else {
  echo "user not found";
}

// Closing connection
pg_close($dbconn);

?>