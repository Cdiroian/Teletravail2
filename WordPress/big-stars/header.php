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
        <h1><?php bloginfo('name'); // le titre du blog ?></h1>
        <h2><?php bloginfo('description'); // le slogan du blog ?></h2>
        <p><?php bloginfo('admin_email'); // l'adresse email de l'administrateur ?></p>
        <main>

        <!-- ajout de ma nouvelle widget area -->
        <?php if (is_active_sidebar('new-widget-area')) : { }?>
        <div id="header-widgets-area" class="nwa-header-widget widget-area" role="complementary">
                <?php dynamic_sidebar('new-widget-area');?>
        </div>
        <?php endif; ?>
        <!-- fin de ma nouvelle widget area -->