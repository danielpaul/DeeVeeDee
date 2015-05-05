<?php
  // Page information
  $title = "Your Cart";

  require_once('php/functions.php');

  // Check if there is something in cart first.
  if(get_cart_count() < 1) {
    header("Location: movies.php?note=" . urlencode("You do not have anything in your cart. Checkout some movies."));
    die();
  }

  include('includes/header.php'); 
?>


        <section id="main" class="clearfix">
          <div class="container">

            <section id="cart">

              <h2 class="text-centre"><?php echo $title; ?></h2>

              <ul class="movies-list">

              <?php
                $cart_movies = "";
                foreach($_SESSION['cart'] as $movie) {
                  $cart_movies .= "'{$movie}',";
                }
                $cart_movies = rtrim($cart_movies, ",");

                $query = "SELECT * FROM movies WHERE movid_id IN ({$cart_movies})";

                $is_cart_page = true;
                include('includes/movies_listing_loop.php');
              ?>

              </ul>


              <div class="checkout_button">
                <?php if(is_loggedin()) { ?>
                <a href="checkout.php?total=<?php echo $cart_total; ?>" class="button-yellow large" title="Buy Now">Checkout - &euro;<?php echo $cart_total; ?></a>
                <?php } else { ?>
                <a href="login.php" class="button-yellow large" title="Login">Login / Register</a>
                <?php } ?>
              </div>


            </section><!-- / #cart -->

          </div><!-- / .container -->
        </section><!-- / #main -->

<?php include('includes/footer.php'); ?>