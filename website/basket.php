<!DOCTYPE html>
	<html>
	<head>
    <!-- Character Set -->
    <meta charset="utf-8">
    <!-- Author -->
    <meta name="author" content="Daragh Broderick">
    <!-- Style Sheet -->
    <link rel="stylesheet" href="./site/stylesheet.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="template/site/font-awesome/css/font-awesome.min.css">
    <!-- Script -->
    <!-- jQuery -->
    <script src="template/site/jquery/jquery.min.js"></script>
    <script src="template/site/action.js"></script>
    <!-- Title -->
    <title>DeeVeeDee - The DVD Rental System</title>
</head>

<body>
    <header>
        <div id="logo">
          <div id="welcome"></div>
            <p id="logo_text">DeeVeeDee</p>
            <div id="search">
                <input type="text" name="search-field" id="search-field" value="Movie, Actor, Genre...">
                    <button id="search-button"><i class="fa fa-search"></i></button>
            </div>
        </div>
        <div id="header_menu">
            <ul id="genres">
              <li class="list">
                <a href="http://www.apple.ie" target="content">Home</a>
              </li>
                <li class="list">
                  <a href="http://www.ideastarter.ie" target="content">Action</a>
                </li>
                <li class="list">
                  <a href="#" target="content">TV Shows</a>
                </li>
                <li class="list">
                    <a href="#" target="content">Horror</a>
                </li>
                <li class="list">
                    <a href="http://starkshaw.me" target="content">Sci-Fi</a>
                </li>
            </ul>
        </div>
    </header>
    
			<p id="input">Your Shopping Cart</p>
			<br>
			<table class="basketTable">
  				<tr class="bask">
    				<td>Description</td>
    				<td>Price</td>
  				</tr>
  				<tr class="bask">
   					<td><img id="tabimg" src="http://i.telegraph.co.uk/multimedia/archive/03051/The_Imitation_Game_3051179c.jpg" alt="The Imitation Game">
					The Imitation Game</td>
    				<td> &euro;14.99 </td>
  				</tr>
  				<tr class="bask">
    			
    				<td><img id="tabimg" src="http://ecx.images-amazon.com/images/I/51C7G4YDE5L.jpg" alt="Mr. & Mrs. Smith">
					Mr. & Mrs. Smith</td>
    				<td> &euro;4.99 </td>
  				</tr>
  				<tr class="bask">
    				<td></td>
    				<td>Total &euro;19.98 <button type="button">Checkout</button></td>
  				</tr>
			</table>
			
			
			
			
				<footer>
			<div id="footer">
				DeeVeeDee Team 2015
			</div>
		</footer>
	</body>
</html>