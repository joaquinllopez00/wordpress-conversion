<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css" type="text/css" media="screen" />

  <title>JLCodes</title>

  <?php wp_head(); ?>
</head>

<body>
  <div id="slideout-menu">
    <ul>
      <li>
        <a class="active" href="<?php echo site_url('');?>">Home</a>
      </li>
      <li>
        <a href="<?php echo site_url('');?>/blog">Blog</a>
      </li>
      <li><a href="<?php echo site_url('');?>/what-im-working-on">What I'm Working On</a></li>
      <li><a href="<?php echo site_url('');?>/about">About</a></li>
      <li>
        <input type="text" placeholder="Search JL Codes" />

      </li>
    </ul>
  </div>

  <nav>
    <div id="logo-img">
      <a href="#">
        <img src="<?php echo get_template_directory_uri();?>/assets/logo.png" alt="Empty Brackets" />
      </a>
    </div>
    <div id="menu-icon">
      <i class="fas fa-bars"></i>
    </div>
    <ul>
      <li>
        <a class="active" href="<?php echo site_url('');?>">Home</a>
      </li>
      <li>
        <a href="<?php echo site_url('');?>/blog">Blog</a>
      </li>
      <li><a href="<?php echo site_url('');?>/what-im-working-on">What I'm Working On</a></li>
      <li><a href="<?php echo site_url('');?>/about">About</a></li>
      <li>

        <div id="search-icon">
          <i class="fas fa-search"></i>
        </div>
      </li>
    </ul>
  </nav>
  <div id="searchbox">
    <input type="text" placeholder="Search JL Codes" />
  </div>