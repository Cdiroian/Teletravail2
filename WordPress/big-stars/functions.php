<?php
/**
 * functions.php
 * Ce fichier permet de définir les fonctionnalités de notre thème
 * 
 */


// CONSIGNES : 


// activer la fonctionnalité wordpress pour un thème : 'image de mise en avant' (post thumbnail).
// écrivez ci-dessous le code permettant d'activer cette fonctionnalité 

add_theme_support('post-thumbnails');


// Activation de Widget

function bigstars_sidebar(){

    register_sidebar([
        'id' => 'bigstars-principal',
        'name' => 'Principal',
        'description' => 'Ma sidebar principal',
        'before_widget' => '<div class="nwa-widget">',
        'after_widget' => '</div>',
        'befor_widget' => '<h2 class="nwa-widget">',
        'after_widget' => '</h2>'
    ]);

    register_sidebar([
        'id' => 'bigstars-secondaire',
        'name' => 'Secondaire',
        'description' => 'Ma sidebar secondaire',
        'before_widget' => '<div class="nwa-widget">',
        'after_widget' => '</div>',
        'befor_widget' => '<h2 class="nwa-widget">',
        'after_widget' => '</h2>'
    ]);
}
add_action('widgets_init','bigstars_sidebar');
//add_action('widget_init','header_widgets_init');
/* function header_widgets_init(){

    register_sidebar( array('name' => 'Ma zone de widget',
    'id' => 'New widget area',
    'before_widget' => '<div class="nwa-widget">',
    'after_widget' => '</div>',
    'befor_widget' => '<h2 class="nwa-widget">',
    'after_widget' => '</h2>'
    )
);

} */
// rechercher d'autres fonctionnalités d'un thème qu'on pourrait activer.
// lister ci-dessous (dans un  bloc de commentaire) certaines fonctionnalités que vous jugez utiles
//
// 
//
//

function register_my_menus() {
    register_nav_menus(
      array(
        'header-menu' => __( 'Header Menu' ),
        'extra-menu' => __( 'Extra Menu' ),
      )
    );
  }
add_action( 'init', 'register_my_menus' );