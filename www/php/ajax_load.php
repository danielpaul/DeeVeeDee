<?php

  /* AJAX load more search results */

  require_once('functions.php'); // Load functions.

  // Set offset to get
  $offset = (isset($_GET['offset']) && is_numeric($_GET['offset'])) ? $_GET['offset'] : 10;
  $limit = 6;


  // Check what query to do...
  if(isset($_GET['q']) && !empty($_GET['q'])) { // If searching.

    $search_query = pg_escape_string($_GET['q']);
    $query = "SELECT * FROM movies WHERE movie_title ILIKE '%{$search_query}%' LIMIT {$limit} OFFSET {$offset}";

  } elseif(isset($_GET['cat']) && !empty($_GET['cat'])) { // If listing the category.
    $cat = $_GET['cat'];
    $query = "SELECT * FROM movies WHERE movie_genre = {$cat} LIMIT {$limit} OFFSET {$offset}";


  } else { // if getting all movies.
    
    $query = "SELECT * FROM movies LIMIT {$limit} OFFSET {$offset}";

  }


  // Print out results.
  include('../includes/movies_listing_loop.php');

?>