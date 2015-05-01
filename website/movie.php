<?php include('php/header.php'); ?>



<?php
  $dbconn = pg_connect("host=webcourse.cs.nuim.ie dbname=cs230 user=cs230teamd6 password=Ootheigh") 
    or die('Could not connect: ' . pg_last_error());

  $query = 'SELECT * FROM movies WHERE movid_id = ' . $_GET['v'];

  $result = pg_query($query) or die('Query failed: ' . pg_last_error());

?>

<?php 
        while($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
      ?>

    <!-- Insert your code here -->
    <a href= "images/<?php echo $line['movid_id']; ?>.jpg" target="_blank"> <img title="<?php echo $line['movie_title']; ?>" src="images/<?php echo $line['movid_id']; ?>.jpg" alt="main" id="TitleImage"></a>


    
<table id="details">
  <tr>
    <td>Name</td>
    <td><?php echo $line['movie_title']; ?></td>
   </tr>
   <tr>
    <td>Genre</td>
    <td><?php echo $line['movie_genre']; ?></td>
    </tr>
   <tr>
    <td>Release Year</td>
    <td><?php echo $line['movie_release_year']; ?></td>
  </tr>
  <tr>
    <td>Director</td>
    <td><?php echo $line['movie_director']; ?></td>
    </tr>
    <tr>
    <td>Price</td>
    <td>€<?php echo $line['movie_price']; ?></td>
  </tr>
</table>
<pre>
  
  
</pre>
<iframe id="Trailer" width="560" height="315" src="https://www.youtube.com/embed/<?php echo get_youtube_id($line['movie_youtube_link']); ?>" frameborder="0" allowfullscreen></iframe>
<pre>
  
  
</pre>

<?php
  }

  // Free resultset
  pg_free_result($result);

  // Closing connection
  pg_close($dbconn);
?>

<?php include('php/footer.php'); ?>