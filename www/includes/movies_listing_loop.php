                <?php
                  $hide_yellow_button = (isset($hide_yellow_button));
                  $result = do_query($query);
                  while($line = pg_fetch_array($result, null, PGSQL_ASSOC)) { 
                ?>
                  <li data-id="<?php echo $line['movid_id']; ?>" data-genre="<?php echo $line['movie_genre']; ?>" data-cost="<?php echo $line['movie_price']; ?>">
                    
                    <a href="movie.php?v=<?php echo $line['movid_id']; ?>" title="<?php echo $line['movie_title']; ?>">
                      <img src="img/movies/<?php echo $line['movid_id']; ?>.jpg" alt="<?php echo $line['movie_title']; ?>" />
                    </a>

                    <h4>
                      <a href="movie.php?v=<?php echo $line['movid_id']; ?>" title="More info about this movie"><?php echo $line['movie_title']; ?></a>
                    </h4>

                    <p><?php echo $line['movie_release_year']; ?></p>
                    <p>Directed by <?php echo $line['movie_director']; ?></p>

                    <a href="movie.php?v=<?php echo $line['movid_id']; ?>" class="button-white" title="Watch Trailer">Preview</a>

                    <?php if(!$hide_yellow_button) { ?>
                      <?php if(in_cart($line['movid_id'])) { ?>

                      <a href="#" data-action="checkout" class="button-yellow" title="Buy Movie">View Cart</a>

                      <?php } else { ?>

                      <a href="#" data-action="add" class="button-yellow" title="Buy Movie">Add to cart - &euro;<?php echo $line['movie_price']; ?></a>

                      <?php } ?>
                    <?php } ?>

                  </li>
                <?php 
                  }

                  // Free resultset
                  pg_free_result($result);
                ?>