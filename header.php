<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1">

  <title>Northern / NorthMart</title>

  <meta property="og:title" content="Northern / NorthMart - northmart.ca">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://northmart.ca/">
  <meta property="og:image" content="">

  <link rel="icon" type="image/png" href="/favicon-48x48.png" sizes="48x48" />
  <link rel="icon" type="image/svg+xml" href="/favicon.svg" />
  <link rel="shortcut icon" href="/favicon.ico" />
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />

  <!-- <link rel="stylesheet" href="dist/style.css"> -->


  <!-- Google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Atkinson+Hyperlegible:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

  <?php wp_head(); ?>
  
</head>

<body class="home" <?php body_class(); ?>>
                    <?php wp_body_open(); ?>
  <div id="page" class="site">

    <a href="#main" class="visually-hidden">Skip to main content</a>

    <!-- HEADER / NAVIGATION SECTION START
    =================================================== -->
    <header id="masthead" class="header header__site" role="header">
      
      <h2 class="visually-hidden">Header</h2>

      <div class="topnav topnav__wrapper">

        <!-- SITE BRANDING STARTS HERE -->
        <div class="topnav__container">
          <div class="topnav__branding">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="topnav__homelink">
              <img class="topnav__logo" src="<?php echo get_theme_file_uri(); ?>/img/ncr_brandHead.svg" alt="Northern/NorthMart homepage" width="176" height="102">
            </a>
          </div>
        </div>
        <!-- SITE BRANDING ENDS HERE -->

        <!-- TOP NAVIGATION STARTS HERE -->
        <nav>
          <span id="nav-label" hidden>Navigation</span>

          <div class="topnav__navLinks">
            <div id="overlay" class="topnav__overlay"></div>
            
              <button 
                id="btnOpen"
                class="topnav__open" 
                aria-expanded="false" 
                aria-labelledby="nav-label">
                
                <img src="<?php echo get_theme_file_uri(); ?>/img/btnOpen.png" alt="" width="30" height="23">
              </button>


            <!-- nav__toggle header__menu hide-for-desktop -->

            <div id="menuTopNav" class="topnav__menu" role="dialog" aria-labelledby="nav-label">

              <button
                id="btnClose"
                class="topnav__close">

                <img src="<?php echo get_theme_file_uri(); ?>/img/close-button.png" alt="" width="26" height="26">
              </button>
                              
              <ul class="topnav__navigation">
                <li class="topnav__email topnav__item">
                  <a class="topnav__link" href="#">
                    <img class="topnav__link--icon" src="<?php echo get_theme_file_uri(); ?>/img/icon_email.svg" alt="" width="22" height="22">
                    email signup
                  </a>
                </li>
                <li class="topnav__item">
                  <div class="searchbox">
                    <?php get_search_form(); ?>
                  </div>
                </li>
                <li class="topLinks__lang topnav__item topnav__link">
                  <span class="topLinks__lang--active">eng</span>/fre
                </li>
              </ul>


              <!-- MAIN TOPNAV STARTS HERE -->
               <div class="menu header__menu">
                <?php
                    wp_nav_menu(array(
                      'theme_location'  =>  'headerMenuLocation',
                      'depth'           =>  3,
                      'container'       =>  false,
                      'menu_class'      =>  'menu topnav__links'
                    ));
                  ?>
               </div>
              <!-- MAIN TOPNAV ENDS HERE -->
                
            </div> <!-- topnav__menu -->
          </div>

        </nav>
        <!-- TOP NAVIGATION ENDS HERE -->

      </div> <!-- topnav topnav__wrapper -->

    </header>
    <!-- ============================================== -->
     
    <!-- MAIN
    =================================================== -->
    <main id="main" class="site-content main" role="main">
      <article>