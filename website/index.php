<!DOCTYPE html>
<html>

<head>
    <!-- Character Set -->
    <meta charset="utf-8">
    <!-- Author -->
    <meta name="author" content="Zhenbang Xiao">
    <!-- Style Sheet -->
    <link rel="stylesheet" href="./site/stylesheet.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="./site/font-awesome/css/font-awesome.min.css">
    <!-- Script -->
    <!-- jQuery -->
    <script src="./site/jquery/jquery.min.js"></script>
    <script src="./site/action.js"></script>
    <!-- Title -->
    <title>DeeVeeDee - The DVD Rental System</title>
</head>

<body>
    <header>
        <div id="logo">
        	<div id="welcome">Hello.</div>
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
    <!-- Insert your code here -->
    <iframe id="main-container" name="content" src="http://www.apple.ie"></iframe>
    
    <footer>
    	<div id="footer">
    		DeeVeeDee Team 2015
    	</div>
    </footer>
</body>

</html>
