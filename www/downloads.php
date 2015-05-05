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

              <?php
                // if no results are found.
                if($total_results == 0) { 
              ?>
                <div id="no-movies-message">
                  <h3>Oops! Looks like you havn't purchased any movies yet...</h3>
                </div>
              <?php } ?>

            </section><!-- / #cart -->

          </div><!-- / .container -->
        </section><!-- / #main -->

<?php include('includes/footer.php'); ?>