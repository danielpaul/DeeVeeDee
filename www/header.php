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
                        <ul>
                            <li>
                                <a href="#" title="">Login</a>
                            </li>
                            <li>
                                <a href="#" title="">Register</a>
                            </li>
                    </div>
                </div>

            </section>
            <section id="menu">
                <div class="container">
                    <ul>
                        <li><a href="#" title="">Home</a></li>
                        <li><a href="#" title="">Action</a></li>
                        <li><a href="#" title="">TV Shows</a></li>
                        <li><a href="#" title="">Sci-Fi</a></li>
                        <li><a href="#" title="">Horror</a></li>
                        <li><a href="#" title="">More</a></li>
                    </ul>
                </div>
            </section>
        </header>