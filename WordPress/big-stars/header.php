<!DOCTYPE html>

<html lang='fr'>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php bloginfo('name'); // Le titre du blog ?></title>
        
        <?php wp_head(); ?>
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>"> 
    </head>
    <body>
        <header>
            <img src="<?=bloginfo('template_url');?>">
            <h1><?php bloginfo('name'); // le titre du blog ?></h1>
            <h2><?php bloginfo('description'); // le slogan du blog ?></h2>
            <div>
                <a href="<?php bloginfo('url'); // le titre du blog ?>">Accueil </a>Futur menu
            </div>
            <?php wp_nav_menu(array('theme_location'=>'header-menu','container_class' => 'custom-menu-class' )); ?>
        </header>
        <main>