<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title><?php bloginfo( 'title' ); ?></title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
  <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' />

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <!-- <link rel="stylesheet" href="css/normalize.css"> -->
  <!-- <link rel="stylesheet" href="css/skeleton.css"> -->

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="images/favicon.png">
  <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
<header class= hero-unit >

  <div class="container">

    <div class="row">
      
      <div class="one-half column" style="margin-top: 5%">
        <a href="<?php bloginfo( 'url' ); ?>"><h1>Skeleton Press Inc.</h1></a>
        <p>It is wrong to think that love comes from long companionship and persevering courtship. Love is the offspring of spiritual affinity and unless that affinity is created in a moment, it will not be created for years or even generations. <a href="http://www.getskeleton.com">Skeleton documentation</a>.</p>
      </div>
      <!-- <button class="button-primary">Read More</button> -->
    </div>

  </div>
    <section class="row">
      <div class="twelve columns">
     
          <nav class="site-navigation container" role="navigation">
             <?php //wp_nav_menu(); ?>
          </nav>
         
      </div>
    </section>
</header>
