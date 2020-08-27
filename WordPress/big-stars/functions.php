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
add_action('widgets_init','bigstars_register_widget');

function bigstars_register_widget(){

    register_sidebars([
        'id' => 'Homepage',
        'name' => 'Sidebar Accueil'
    ]);
}
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
//add_action('widget_init','header_widgets_init');

// rechercher d'autres fonctionnalités d'un thème qu'on pourrait activer.
// lister ci-dessous (dans un  bloc de commentaire) certaines fonctionnalités que vous jugez utiles
//
// 
//
//
/*function get_the_post_thumbnail($post = null, $size= 'post-thumbnail', $attr =''){
    $post = get_post($post);
    if (! $post) {
        return '';
    }
    $post_thumbnail_id = get_post_thumbnail_id($post);
    
}*/