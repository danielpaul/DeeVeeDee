<?php
  // Page information
  $title = "Your Cart";

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

                $hide_yellow_button = true;
                include('includes/movies_listing_loop.php');
              ?>

              </ul>

              <div class="checkout_button">
                <a href="checkout.php" class="button-yellow large" title="Buy Now">Checkout</a>
              </div>

            </section><!-- / #cart -->

          </div><!-- / .container -->
        </section><!-- / #main -->

<?php include('includes/footer.php'); ?>