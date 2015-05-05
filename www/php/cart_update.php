<?php
  
  include_once('functions.php');

  $action = $_GET['action'];

  // add new item to the cart.
  if($action == "add") {

    $add = $_GET['movie']; // ID of movie to add.

    // Add ID to array if not added already.
    if(!in_cart($add)) $_SESSION['cart'][] = $add;

    // Echo total items in cart.
    echo get_cart_count();

  } else if($action == "remove") {

    $remove = $_GET['movie'];

    // Remove ID from array.
    $_SESSION['cart'] = array_diff($_SESSION['cart'], array($remove));

    echo "Add to cart";

  }

?>