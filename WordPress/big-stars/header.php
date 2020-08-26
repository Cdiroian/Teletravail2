<!DOCTYPE html>

<html lang='fr'>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
        <title><?php bloginfo('name'); // Le titre du blog ?></title>
        <?php wp_head(); ?> 
    </head>
    <body>
        <h1><?php bloginfo('name'); // le titre du blog ?></h1>
        <h2><?php bloginfo('description'); // le slogan du blog ?></h2>
        <p><?php bloginfo('admin_email'); // l'adresse email de l'administrateur ?></p>
        <main>