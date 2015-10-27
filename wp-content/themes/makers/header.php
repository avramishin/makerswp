<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>
      Makers - We like to build startups    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="http://www.makers.do/apple-touch-icon.png">
    <!--<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>-->
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/vendor/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/noty/packaged/jquery.noty.packaged.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather:300,300italic,400,400italic|Montserrat:400,700" type="text/css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/normalize.min.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/style.css?t=<?=time()?>">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/style2.css?t=<?=time()?>">
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Makers">
    <meta property="og:description" content="A digital studio crafting beautiful websites">
    <meta property="og:url" content="http://www.makers.do">
    <meta property="og:site_name" content="Makers">
    <meta property="og:image" content="http://www.makers.do/images/makers-share.jpg">
  </head>
  <body>
    <!--[if lt IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <header class="header">
      <a href="<?php bloginfo('url') ?>" class="logo">
        <h1>Makers</h1>
      </a>
      <nav class="navigation show" role="navigation">
        <a href="javascript:void(0)" class="main-navigation-button">
          <span>Menu</span>
        </a>
        <ul class="main-navigation">
          <li><a href="<?php bloginfo('url') ?>/about/" class="<?php if (substr_count($_SERVER['REQUEST_URI'], '/about/')) echo"active"?>" title="">About</a></li>
          <li><a href="<?php bloginfo('url') ?>/companies/" class="<?php if (substr_count($_SERVER['REQUEST_URI'], '/companies/')) echo"active"?>" title="">Companies</a></li>
          <li><a href="<?php bloginfo('url') ?>/blog/" class="<?php if (substr_count($_SERVER['REQUEST_URI'], '/blog/')) echo"active"?>" title="">Blog</a></li>

          <!-- <li><a href="http://www.medium.com" target="_blank" class="<?php if (substr_count($_SERVER['REQUEST_URI'], '/blog/')) echo"active"?>" title="">Blog</a></li> -->
          <li class="join-us"><a href="<?php bloginfo('url') ?>/join-us/" class="<?php if (substr_count($_SERVER['REQUEST_URI'], '/join-us/')) echo"active"?>" title="">Join us</a></li>
        </ul>
      </nav>
      <div class="social-container">
        <ul class="social">
          <li class="facebook"><a href="http://www.facebook.com/makers.do" target="_blank">Facebook</a></li>
          <li class="linkedin"><a href="http://www.linkedin.com" target="_blank">LinkedIn</a></li>
          <li class="twitter"><a href="http://twitter.com/MakersDo" target="_blank">Twitter</a></li>
          <li class="medium"><a href="http://www.medium.com" target="_blank">Medium</a></li>
          <li class="pinterest"><a href="http://www.pinterest.com" target="_blank">Pinterest</a></li>
          <li class="angellist"><a href="https://angel.co/" target="_blank">AngelList</a></li>
        </ul>
      </div>
    </header>