<?php
     session_start(); 

     $page = $_SERVER['PHP_SELF'];
     $sec = "6";
     header("Refresh: $sec; url=$page");

?>



<html>
     <head>
          <title>CO Home</title> <!-- to be fixed -->
          <link rel='icon' type='image/x-icon' href='images/favicon.ico' >

          <!-- META Tags -->
          <meta charset='UTF-8'>
          <meta name='description' content='ChazOnline the official website.'>
          <meta name='author' content="Elijah 'Chaz' Spurr">
          <meta name='keywords' content='gaming, videos, coding, livestreaming'>
          <meta name='viewport' content='width=device-width, initial-scale=1.0'>

          <!-- Default Redirect -->
          <base href='home.php' target='_self'>

          <!-- STYLESHEETS -->
          <link rel='stylesheet' type='text/css' href='styles/global.css'>
          <link rel='stylesheet' type='text/css' href='styles/images.css'>
          <link rel='stylesheet' type='text/css' href='styles/scrollbar.css'>
          <link rel='stylesheet' type='text/css' href='styles/navigation_bar.css'>
          <link rel='stylesheet' type='text/css' href='styles/text.css'>
          <link rel='stylesheet' type='text/css' href='styles/footer.css'>

     </head>

     <body>
          <div class='header'>
               <a href=''><image src='images/web-title.png' class='web-title-image img-placeholder' title='ChazOnline'></image></a>
          </div>

          <div class='header-nav'>
               <nav class='header-nav-sec'>
                    <ul class='header-nav-list-l'>
                         <a href='' id='navbar-btn'><h3 class='header-nav-text'>Home</h3></a>
                         <a href='' id='navbar-btn'><h3 class='header-nav-text'>Projects</h3></a>
                         <a href='' id='navbar-btn'><h3 class='header-nav-text'>Games</h3></a>
                         <a href='' id='navbar-btn'><h3 class='header-nav-text'>Library</h3></a>
                         <a href='' id='navbar-btn'><h3 class='header-nav-text'>Shop</h3></a>
                         <a href='' id='navbar-btn'><h3 class='header-nav-text'>Forum</h3></a>                       
                    </ul>
                    <ul class='header-nav-list-r'>
                        <?php 
                              if(isset($_SESSION["useruid"])) {
                                   echo "<a href='' id='navbar-btn'><h3 class='header-nav-text'>Profile</h3></a>";
                                   echo "<a href='' id='navbar-btn'><h3 class='header-nav-text'>Logout</h3></a>";
                              } 
                              else {
                                   echo "<a href='' id='navbar-btn'><h3 class='header-nav-text'>Login / Register</h3></a>";
                              }
                         ?>
                    </ul>
               </nav>
          </div>

          <div class='logged-in-msg'>
               <?php 
                    if (isset($_SESSION["useruid"])) {
                         echo "<h3 class='logged-text'>Welcome to ChazOnline!</p>";
                    }
                    else {
                         echo "<style>
                              div.logged-in-msg {visibility: hidden; margin: 0; padding: 0;}
                         </style>";
                    }
               ?>
          </div>


