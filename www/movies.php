<?php
  
  // Default title.
  $title = "All Movies";

  // Check what query to do...
  if(isset($_GET['q']) && !empty($_GET['q'])) { // If searching

    $search_query = pg_escape_string($_GET['q']);
    $query = "SELECT * FROM movies WHERE movie_title ILIKE '%{$search_query}%' LIMIT 6";

    $js_search_query = "q=" . $_GET['q'];

    $title = "Search results for '" . $_GET['q'] . "'"; // Update page title.

  } elseif(isset($_GET['cat']) && !empty($_GET['cat'])) { // If listing the category.

    $query = 'SELECT * FROM movies WHERE movie_genre = ' . $_GET['cat'] . ' LIMIT 6';

    $js_search_query = "cat=" . $_GET['cat'];

    $title = "Movies in genre";

  } else { // if getting all movies.

    $query = 'SELECT * FROM movies LIMIT 6';

  }

include('includes/header.php'); ?>


        <section id="main" class="clearfix search">
          <div class="container">

            <section class="left">

              <h4 class="title">Filter by Genre</h4>
              <ul id="genre-filter">
                <li class="active">
                  <a href="#" data-genre="0" id="all-movies-filter" title="All Movies">All</a>
                </li>
                <li>
                  <a href="#" data-genre="1" id="action-movies-filter" title="Action Movies">Action Movies</a>
                </li>
                <li>
                  <a href="#" data-genre="2" id="tv-shows-filter" title="TV Shows">TV Shows</a>
                </li>
                <li>
                  <a href="#" data-genre="3" id="scifi-movies-filter" title="Sci-Fi Movies">Sci-Fi Movies</a>
                </li>
                <li>
                  <a href="#" data-genre="4" id="horror-movies-filter" title="Horror Movies">Horror Movies</a>
                </li>
              </ul>

              <br />

              <h4 class="title">Filter by Price</h4>
              <ul id="cost-filter">
                <li>
                  <a href="#" id="low-cost-filter" title="Movies on sale">Under &euro;5/on sale</a>
                </li>
                <li class="active">
                  <a href="#" id="normal-cost-filter" title="Regular Rate">&euro;5</a>
                </li>
                <li>
                  <a href="#" id="high-cost-filter" title="Latest Movies">Above &euro;5/new movies</a>
                </li>
              </ul>

            </section><!-- / .left -->

            <section class="right">

              <div id="serach-results">

                <h2><?php echo $title; ?></h2>

                <div id="no-movies-message">
                  <h3>Oops! Looks like no movies matched your serach!</h3>
                </div>

                <ul class="movies-list">

                  <?php include('includes/movies_listing_loop.php'); ?>

                </ul>

                <div id="pagination">
                  <a href="#" id="load-more-movies" class="button-white" data-query="<?php echo $js_search_query; ?>">Load More Results</a>
                </div>

              </div>

            </section><!-- / .right -->

          </div><!-- / .container -->
        </section><!-- / #main -->

<?php include('includes/footer.php'); ?>