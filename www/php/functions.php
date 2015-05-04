<?php
  require('config.php');
  


  // Variables
  $dbconn;


  /* ---------- Functions ---------- */

  // Function to connect to the database based on variables from congif.php file and saves conection in variable $dbconn.
  function db_connect() {
    global $db_host, $db_name, $db_user, $db_pass, $dbconn;
    $dbconn = pg_connect("host={$db_host} dbname={$db_name} user={$db_user} password={$db_pass}") or die('Error. Could not connect: ' . pg_last_error());
  }


  function do_query($query) {
    global $dbconn;
    db_connect();
    $result = pg_query($query) or die('Query failed: ' . pg_last_error());
    pg_close($dbconn); // Closing connection
    return $result;
  }


  function is_valid_movie($movie_id) {
    return (is_numeric($movie_id) && $movie_id > 0 && $movie_id <= 50);
  }



  // Take user to homepage
  function go_home() {
    header("Location: index.php");
    die();
  }


  function get_youtube_id($url) {
    parse_str( parse_url( $url, PHP_URL_QUERY ), $my_array_of_vars );
    return $my_array_of_vars['v'];
  }

?>