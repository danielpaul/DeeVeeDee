                <?php
                  $is_cart_page = (isset($is_cart_page));
                  $cart_total = 0;

                  $is_downloads_page = (isset($is_downloads_page));

                  $total_results = 0;

                  $result = do_query($query);
                  while($line = pg_fetch_array($result, null, PGSQL_ASSOC)) { 
                    $total_results++;
                ?>
                  <li data-id="<?php echo $line['movid_id']; ?>" data-genre="<?php echo $line['movie_genre']; ?>" data-cost="<?php echo $line['movie_price']; ?>" data-trailer="<?php echo get_youtube_id($line['movie_youtube_link']); ?>">
                    
                    <a href="movie.php?v=<?php echo $line['movid_id']; ?>" title="<?php echo $line['movie_title']; ?>" class="watch_trailer">
                      <img src="img/movies/<?php echo $line['movid_id']; ?>.jpg" alt="<?php echo $line['movie_title']; ?>" />
                    </a>

                    <h4>
                      <a href="movie.php?v=<?php echo $line['movid_id']; ?>" title="More info about this movie" class="watch_trailer"><?php echo $line['movie_title']; ?></a>
                    </h4>

                    <p><?php echo $line['movie_release_year']; ?> / &euro;<?php echo $line['movie_price']; ?></p>
                    <p>Directed by <?php echo $line['movie_director']; ?></p>


                    <?php if($is_cart_page) { // is cart page.
                      // Add total cost of cart.
                      $cart_total += intval($line['movie_price']);
                    ?>

                      <a href="#" class="button-white remove_from_cart" title="Remove from cart">Remove</a>

                    <?php } else if($is_downloads_page) { // downloads page listing. ?>

                      <a href="movie.php?v=<?php echo $line['movid_id']; ?>" class="button-white" title="Watch Trailer">Preview</a>

                      <a href="#" data-action="none" class="button-yellow" title="Download Movie">Download</a>

                    <?php } else { // search listings. ?>

                      <a href="movie.php?v=<?php echo $line['movid_id']; ?>" class="button-white watch_trailer" title="Watch Trailer">Preview</a>

                      <?php if(in_cart($line['movid_id'])) { ?>

                      <a href="#" data-action="checkout" class="button-yellow" title="Buy Movie">View Cart</a>

                      <?php } else { ?>

                      <a href="#" data-action="add" class="button-yellow" title="Buy Movie">Add to cart - &euro;<?php echo $line['movie_price']; ?></a>

                      <?php } ?>

                    <?php } ?>

                    <div class="movie_preview"></div>

                  </li>
                <?php 
                  }

                  // Free resultset
                  pg_free_result($result);
                ?>