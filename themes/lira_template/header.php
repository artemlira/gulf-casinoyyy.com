<?php
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <?php wp_head(); ?>
</head>

<body class="content-color">
  <header>
    <div class="centered-container flex-inline-style">
      <nav id='cssmenu' class="col-12">
        <div class="logo">
          <?php the_custom_logo(); ?>
        </div>
        <div id="head-mobile"></div>
        <div class="button"></div>
      </nav>
    </div>
  </header>