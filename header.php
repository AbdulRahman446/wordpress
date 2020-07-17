<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <title><?php bloginfo('name'); ?></title>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"/>
    <?php wp_head(); ?>
</head>
<body>
         <?php menu(); ?>
<?php custom_menu()?>
<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
           <span class="icon-bar"></span>

            </button>
          <a class="navbar-brand" href="#">Navbar</a>

        </div>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
    </div>
  </div>
</nav>

