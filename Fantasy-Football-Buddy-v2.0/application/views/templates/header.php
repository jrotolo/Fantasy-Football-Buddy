<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8" />

	<!-- Set the viewport width to device width for mobile -->
	<meta name="viewport" content="width=device-width" />

	<title>Fantasy Sports App - <?= $page_title ?></title>

    <link rel="stylesheet" href="http://localhost/Fantasy-Football-Buddy-v1.0/stylesheets/normalize.css">
	<link rel="stylesheet" href="http://localhost/Fantasy-Football-Buddy-v1.0/stylesheets/foundation.css">
	<!-- End Combine and Compress These CSS Files -->
	<link rel="stylesheet" href="http://localhost/Fantasy-Football-Buddy-v1.0/stylesheets/app.css">

    <script src="http://localhost/Fantasy-Football-Buddy-v1.0/javascripts/vendor/modernizr.js"></script>
    

	<!--[if lt IE 9]>
		<link rel="stylesheet" href="stylesheets/ie.css">
	<![endif]-->
	
	<!-- IE Fix for HTML5 Tags -->
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

</head>

<!-- HEADER AREA -->
<header class="full-width header-area">
    <div class="row">
        <div class="large-12 columns">
            <h2>Fantasy Football Buddy </h2>
        </div>
    </div>
</header> 

<!-- NAVIGATION AREA -->
<div class="full-width navigation-area">
    <div class="row">
        <div class="large-12 columns">     
            <nav class="top-bar" data-topbar="">
            	<ul class="title-area">
                    <!-- Title Area -->
                    <li class="name"></li>
                    <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
                    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a>
                        <asid class="left-of"
                        <li>Here is an item</li>
                    </li>
                </ul>
 
                <!-- The Section wrap -->
                <section class="top-bar-section">
                 
                    <!-- Left Nav Section -->
                    <ul class="left">
                        <li class="<?php if ($page_title == "Home") echo "active"; else echo ""; ?>"><a href="http://localhost/Fantasy-Football-Buddy-v1.0/index.php/pages/index">Home</a></li>
                        <li class="divider"></li>
                        <li class="<?php if ($page_title == "Search") echo "active"; else echo ""; ?>"><a href="http://localhost/Fantasy-Football-Buddy-v1.0/index.php/search">Search Players</a></li>
                        <li class="divider"></li>
                        <li class="<?php if ($page_title == "Stats") echo "active"; else echo ""; ?>"><a href="http://localhost/Fantasy-Football-Buddy-v1.0/index.php/pages/stats">Stats</a></li>
                        <li class="divider"></li>
                        <li class="<?php if ($page_title == "Schedule") echo "active"; else echo ""; ?>"><a href="http://localhost/Fantasy-Football-Buddy-v1.0/index.php/pages/schedule">Schedule</a></li>
                        <li class="divider"></li>
                        <li class="<?php if ($page_title == "Contact") echo "active"; else echo ""; ?>"><a href="http://localhost/Fantasy-Football-Buddy-v1.0/index.php/pages/contact">Contact</a></li>
                        <li class="divider"></li>
                        <li class="<?php if ($page_title == "login") echo "active"; else echo ""; ?>"><a href="http://localhost/Fantasy-Football-Buddy-v1.0/index.php/login/">Login</a></li>
                        <li class="divider"></li>
                    </ul>
                    
             
                </section>
            </nav>
        </div>
    </div>
</div>
<body>

    <!-- container -->
	<div class="container">

		

