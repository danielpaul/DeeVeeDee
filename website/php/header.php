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
            <p id="logo_text">DeeVeeDee</p>
            <div id="search">
                <form action="results.php" method="get">
                    <input type="text" name="q" id="search-field" placeholder="Search for movies...">
                    <button type="submit" id="search-button"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>
        <div id="header_menu">
            <ul id="genres">
              <li class="list">
                <a href="index.php">Home</a>
              </li>
                <li class="list">
                  <a href="results.php?cat=1">Action</a>
                </li>
                <li class="list">
                  <a href="results.php?cat=2">TV Shows</a>
                </li>
                <li class="list">
                    <a href="results.php?cat=3">Horror</a>
                </li>
                <li class="list">
                    <a href="results.php?cat=4">Sci-Fi</a>
                </li>
            </ul>
        </div>
    </header>


