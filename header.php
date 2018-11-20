<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset='<?php bloginfo('charset'); ?>'>
    <!-- Import Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Cinzel|Lato"
      rel="stylesheet"
    />
    <!-- Import Google Icon Font -->
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
      integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
      crossorigin="anonymous"
    />


    <!-- Import materialize.css -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"
    />
    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" />

    <!-- Let browser know website is optimized for mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php bloginfo('name'); ?> |
    <?php is_front_page() ? bloginfo('description') : 
     wp_title(); ?>
    </title>
    <?php wp_head(); ?>
    </head>

  <body id="home" class="scrollspy">
    <!-- Navbar -->
    <div class="navbar-fixed">
      <nav class="blue darken-2">
        <div class="nav-wrapper pr-0">
          <!-- .sr Classes call scroll reveal on elements -->
          <a href="#" class="brand-logo hide-on-small-and-down amber-text text-darken-2 bold hoverable"
          ><?php bloginfo('name'); ?></a
          >
          <a href="#" data-target="mobile-nav" class="sidenav-trigger">
            <i class="material-icons">menu</i>
          </a>
          <div class="right hide-on-med-and-down">
          <?php wp_nav_menu(); ?>
        </div>
      </nav>
    </div>
    <ul class="sidenav blue" id="mobile-nav">
      <li class='right-align'><i class="fas fa-window-close white-text mr-25 sidenav-close"></i></li>
      <li><a class='white-text' href="#home">Home</a></li>
      <li><a class='white-text' href="#service">Our Services</a></li>
      <li><a class='white-text' href="#start">Get Started</a></li>
      <li><a class='white-text' href="#about">About</a></li>
      <li><a class='white-text' href="#contact">Contact</a></li>
</ul>

    <!-- End Header -->
