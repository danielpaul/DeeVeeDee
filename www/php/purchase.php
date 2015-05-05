<?php

  include_once('functions.php');

  $user = get_user_info();
  $user_id = $user['user_id'];
  $date = getdate();

  // Connect to the database.
  db_connect();

  $cart = $_SESSION['cart'];
  foreach($cart as $movie_id) {

    $movie = intval($movie_id);

    //perform the insert using pg_query
    $result = pg_query($dbconn, "INSERT INTO orders(movie_id, user_id) VALUES({$movie}, '{$user_id}')");

    // Add each movie to orders table as purchased.

    // Empty the cart.
    unset($_SESSION['cart']);
  }

  // Closing connection
  pg_close($dbconn);


  // Redirect.
  header("Location: ../downloads.php");
  die();


?>