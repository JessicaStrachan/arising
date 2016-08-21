<!doctype html>
<html lang="en" class="no-js">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
  <title><?php echo (is_front_page()) ? get_bloginfo('name') . ' - ' . get_bloginfo('description') : wp_title(''); ?></title>
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico">
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab|Raleway' rel='stylesheet' type='text/css'>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<section class="header">
  <div class="header-name">
      <h2>Jessica Strachan</h2>
  </div>
  <div class="header-social-media">
      <ul>
          <li><a href="#">Github</a></li>
          <li><a href="#">Twitter</a></li>
          <li><a href="#">Instagram</a></li>
          <li><a href="#">Pinterest</a></li>
      </ul>
  </div>
  <div class="menu-icon js-menu-icon">
      <span class="menu-icon__bars"></span>
  </div>
</section>

<nav class="nav-menu js-nav-menu">
    <ul>
        <li class="nav-menu__item"><a href="#">Home</a></li>
        <li class="nav-menu__item"><a href="#">Portfolio</a></li>
        <li class="nav-menu__item"><a href="#">Blog</a></li>
        <li class="nav-menu__item"><a href="#">Book Reviews</a></li>
        <li class="nav-menu__item"><a href="#">Contact</a></li>
    </ul>
</nav>
