<?php include('php/header.php'); ?>

<?php
  $dbconn = pg_connect("host=webcourse.cs.nuim.ie dbname=cs230 user=cs230teamd6 password=Ootheigh") 
    or die('Could not connect: ' . pg_last_error());


  if(isset($_GET['q']) && !empty($_GET['q'])) {

  	$search_query = pg_escape_string($_GET['q']);
  	$query = "SELECT * FROM movies WHERE movie_title ILIKE '%{$search_query}%'";

  } elseif(isset($_GET['cat']) && !empty($_GET['cat'])) {

  	$query = 'SELECT * FROM movies WHERE movie_genre = ' . $_GET['cat'];

  } else {

  	$query = 'SELECT * FROM movies';

  }


  $result = pg_query($query) or die('Query failed: ' . pg_last_error());

?>

		<!-- Insert your code here -->
		<div id="refineBy" >
			<h3>Refine search by.</h3>
			<br>
			<h4>Genre</h4>
			<a class="links" href="">Comedy</a><br>
			<a class="links" href="">Horror</a><br>
			<a class="links" href="">TV Shows</a><br>
			<h4>Price</h4>
			<a class="links" href="">&lt; &euro;4.99</a><br>
			<a class="links" href="">&euro;5.00 - &euro;9.99</a><br>
			<a class="links" href="">&euro;10.00 - &euro;19.99</a><br>
		</div>
		<div id="contentResults" >
			<h2 id="contentTitle">Search Results:</h2>
			

			<?php 
        while($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
      ?>

        <div class="img">
          <a class="links" href="movie.php?v=<?php echo $line['movid_id']; ?>">
            <img src="images/<?php echo $line['movid_id']; ?>.jpg" alt="<?php echo $line['movie_title']; ?>" width="130" height="190">
            <div class="desc"><?php echo $line['movie_title']; ?> &euro;<?php echo $line['movie_price']; ?></div>
          </a>
        </div>

      <?php 
        } 
      ?>

		</div>



<?php
  // Free resultset
  pg_free_result($result);

  // Closing connection
  pg_close($dbconn);
?>



<?php include('php/footer.php'); ?>