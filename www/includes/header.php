<?php 
    // Require helper functions.
    require_once('php/functions.php');
?>

<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php echo $title; ?> - DeeVeeDee</title>
        <meta name="description" content="Browse, purchase and download DVDs with a few clicks.">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" type="image/png" src="img/icon.png">

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <header>
            <section id="top">
                <div class="container clearfix">
                    <div id="logo">
                        <h1>DeeVeeDee</h1>
                        <h3>Watch DVDs in a few clicks</h3>
                    </div>
                    <div id="search">

                        <form action="movies.php" method="get">
                            <input type="text" name="q" placeholder="Search for movies..." required>
                            <input type="submit" value="Search">
                        </form>

                    </div>
                    <div id="user">

                        <?php if(is_loggedin()) { ?>

                        <ul class="loggedin">
                            <li class="welcome">
                                Welcome <?php echo get_fname(); ?>!
                            </li>
                            <li>
                                <a href="#" title="">My Account</a>
                            </li>
                            <li>
                                <a href="php/user_logout.php" title="Log out">Log out</a>
                            </li>
                        </ul>

                        <?php } else { ?>

                        <ul>
                            <li>
                                <a href="login.php" title="Login to your account">Login</a>
                            </li>
                            <li>
                                <a href="register.php" title="Register for a free account">Register</a>
                            </li>
                        </ul>

                        <?php } ?>
                        
                    </div>
                </div>

            </section>
            <section id="menu">
                <div class="container">
                    <ul>
                        <li><a href="index.php" title="Homepage">Home</a></li>
                        <li<?php if(isset($_GET['cat']) && $_GET['cat'] == "1") echo ' class="active"'; ?>><a href="movies.php?cat=1" title="Action Movies">Action</a></li>
                        <li<?php if(isset($_GET['cat']) && $_GET['cat'] == "2") echo ' class="active"'; ?>><a href="movies.php?cat=2" title="TV Shows">TV Shows</a></li>
                        <li<?php if(isset($_GET['cat']) && $_GET['cat'] == "3") echo ' class="active"'; ?>><a href="movies.php?cat=3" title="Sci-Fi Movies">Sci-Fi</a></li>
                        <li<?php if(isset($_GET['cat']) && $_GET['cat'] == "4") echo ' class="active"'; ?>><a href="movies.php?cat=4" title="Horrow Movies">Horror</a></li>
                        <li><a href="movies.php" title="Explore Movies"> + More</a></li>
                    </ul>
                </div>
            </section>
        </header>