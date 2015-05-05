<?php
  require('config.php');

  session_start(); // Start session.
  


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

  /* Single page functions. */
  function get_youtube_id($url) {
    parse_str( parse_url( $url, PHP_URL_QUERY ), $my_array_of_vars );
    return $my_array_of_vars['v'];
  }



  /* User Login & Session */

  function is_loggedin(){ 
    global $_SESSION;

    if(isset($_SESSION['logged'])) {

      $username = $_SESSION['logged'];

      // Check if valid user. 
      $query = "SELECT DISTINCT * FROM users WHERE username = '{$username}'";
      db_connect();
      $result = pg_query($query) or die('Query failed: ' . pg_last_error());

      if($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
        return true; // Valid user is logged in.
      } else {
        return false; // Not a valid user.
      }

    } else {
      return false; // User not logged in.
    } 
  };

  function get_fname() {
    $query = "SELECT DISTINCT * FROM users WHERE username = '{$_SESSION['logged']}'";
    db_connect();
    $result = pg_query($query) or die('Query failed: ' . pg_last_error());
    $line = pg_fetch_array($result, null, PGSQL_ASSOC);
    return $line['user_fname'];
  }


  /* User Login & Register */


  function salt_pass($pass) {
    // generate a 16-character salt string
    $salt = substr(str_replace('+','.',base64_encode(md5(mt_rand(), true))),0,16);
    // how many times the string will be hashed
    $rounds = 10000;
    // pass in the password, the number of rounds, and the salt
    // $5$ specifies SHA256-CRYPT, use $6$ if you really want SHA512
    return crypt($pass, sprintf('$5$rounds=%d$%s$', $rounds, $salt));
    // output: $5$rounds=10000$3ES3C7XZpT7WQIuC$BEKSvZv./Y3b4ZyWLqq4BfIJzVHQweHqGBukFmo5MI8
  }


  function pass_valid($given_hash, $test_pw) {

    // extract the hashing method, number of rounds, and salt from the stored hash
    // and hash the password string accordingly
    $parts = explode('$', $given_hash);
    $test_hash = crypt($test_pw, sprintf('$%s$%s$%s$', $parts[1], $parts[2], $parts[3]));

    /* output:
    $5$rounds=10000$3ES3C7XZpT7WQIuC$BEKSvZv./Y3b4ZyWLqq4BfIJzVHQweHqGBukFmo5MI8
    $5$rounds=10000$3ES3C7XZpT7WQIuC$BEKSvZv./Y3b4ZyWLqq4BfIJzVHQweHqGBukFmo5MI8
    true */

    return ($given_hash == $test_hash) ? true : false;
  }


  /* Checkout & Cart */

  // Function checks if movie is in cart.
  function in_cart($movie_id) {
    if(!isset($_SESSION['cart'])) return false; // If no cart yet.

    return in_array($movie_id, $_SESSION['cart']);
  }

  function get_cart_count() {
    if(isset($_SESSION['cart'])) {
      return count($_SESSION['cart']);
    } else {
      return 0;
    }
  }

?>