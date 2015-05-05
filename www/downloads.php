<?php
  // Page information
  $title = "Your Purchases";

  include('includes/header.php'); 
?>


        <section id="main" class="clearfix">
          <div class="container">

            <section id="cart">

              <h2 class="text-centre"><?php echo $title; ?></h2>

              <ul class="movies-list">

              <?php
                $user = get_user_info();
                $user_id = $user['user_id'];

                $query = "SELECT * FROM movies WHERE movid_id IN (SELECT movie_id FROM orders WHERE user_id = '{$user_id}')";

                $is_downloads_page = true;
                include('includes/movies_listing_loop.php');
              ?>

              </ul>

            </section><!-- / #cart -->

          </div><!-- / .container -->
        </section><!-- / #main -->

<?php include('includes/footer.php'); ?>