<?php

require_once('functions.php');

$username = $_GET['username'];

// Connecting, selecting database
db_connect();

$query = "SELECT DISTINCT * FROM users WHERE username = '{$username}'";

$result = pg_query($query) or die('Query failed: ' . pg_last_error());


if($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {

  // username already exists.
  echo "false";

} else {
  
  // Username not found in database.
  echo "true";

}

// Closing connection
pg_close($dbconn);

?>