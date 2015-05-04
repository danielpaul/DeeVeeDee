<?php
  require_once('php/functions.php');

  // Get movie details.
  $movie_id = $_GET['v'];

  if(!is_valid_movie($movie_id)) go_home(); // redirect to home if invalid movie id.

  // SQL query.
  $query = 'SELECT DISTINCT * FROM movies WHERE movid_id = ' . $movie_id;

  $result = do_query($query);
  $movie = pg_fetch_array($result, null, PGSQL_ASSOC);

  // Page title.
  $title = $movie['movie_title'] . " - DeeVeeDee";
?>

<?php include('header.php'); ?>


        <section id="main" class="clearfix">
          <div class="container">

            <section class="left">
              <h1><?php echo $movie['movie_title']; ?></h1>
              <p><?php echo $movie['movie_release_year']; ?></p>
              <p>Directed by <?php echo $movie['movie_director']; ?></p>

              <a href="" class="button-yellow">Add to cart - </a>
              <!-- share link -->
            </section><!-- / .left -->

            <section class="right">

              <iframe id="Trailer" width="640" height="360" src="https://www.youtube.com/embed/<?php echo get_youtube_id($movie['movie_youtube_link']); ?>" frameborder="0" allowfullscreen></iframe>


            </section><!-- / .right -->

          </div><!-- / .container -->
        </section><!-- / #main -->


<?php
  // Free resultset
  pg_free_result($result);
?>

<?php include('footer.php'); ?>