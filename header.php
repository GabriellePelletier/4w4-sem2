<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Thème du groupe #1</title>
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Raleway&:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet"
    />
    <!-- Link à d'autres pages -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/normalize.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />
  </head>
  <!-- Début du corps du site -->
  <body>
    <div id="entete__menu" class="global">
      <?php echo get_custom_logo(); ?>
        <header class="hero">
      </header>
        <input type="checkbox" name="" id="chk_burger">
        <label id="burger" for="chk_burger"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
        <path d="M5,7h2h12c1.1,0,2-0.9,2-2s-0.9-2-2-2H7H5C3.9,3,3,3.9,3,5S3.9,7,5,7z"></path><path d="M19,10h-3H5c-1.1,0-2,0.9-2,2s0.9,2,2,2h11h3c1.1,0,2-0.9,2-2S20.1,10,19,10z"></path><path d="M19,17h-6H5c-1.1,0-2,0.9-2,2s0.9,2,2,2h8h6c1.1,0,2-0.9,2-2S20.1,17,19,17z"></path></svg>
        </label>
        <?php wp_nav_menu(array('container' => 'nav')); ?>
    </div>