<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Trinity Group</title>
  <meta name="description" content="">
  <meta name="author" content="SitePoint">
   <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta property="og:title" content="A Basic HTML5 Template">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://www.sitepoint.com/a-basic-html5-template/">
  <meta property="og:description" content="">
  <meta property="og:image" content="image.png">

  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css?v=1.0">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/splide.min.css"/>
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

  <?php wp_head();?>

</head>

<body>
<div class="full-page-overlay">
    <i class="bx bxs-x-circle" id="close-overlay"></i>
    <div class="executive-popup-wrapper">
      <p class="bio-name p7"></p>
      <p class="bio-position p2"></p>
      <p class="bio-quote p3"></p>
      <p class="bio-info p1"></p>
    </div>  
</div>
<div class="nav-gradient">
</div>
<nav>
<div class="navbar">
    <i class='bx bx-menu'></i>
    <div class="logo"><a href="/"><img src="<?php bloginfo('template_url'); ?>/images/Trinity_Logo_FullColour_White_Type.svg"/></a></div>
      <div class="nav-links">
        <div class="sidebar-logo">
          <span class="logo-name"><a href="/"><img src="<?php bloginfo('template_url'); ?>/images/Trinity_Logo_FullColour_White_Type.svg"/></a></span>
          <i class='bx bx-x' ></i>
        </div>
        <?php
        // wp_nav_menu( array( 
        //     'container'=> false,
        //     'theme_location' => 'header', 
        //     'container_class' => 'x',
        //     'menu_class' => 'links',
        //     'depth' => 2,
        //     )
        //   ); 
          

          $defaults = array(
            'container'=> false,
            'theme_location' => 'header', 
            'menu_class' => 'links',
            'echo'            => false,
            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            'depth' => 2,
          );
          // your class name : like menu_sub
            echo str_replace('sub-menu', 'js-sub-menu sub-menu', wp_nav_menu( $defaults)
          );

        ?>
      </div>
    </div>
</div>
</nav>