<?php
/**
 * functions.php
 * Ce fichier permet de définir les fonctionnalités de notre thème
 * 
 */


// CONSIGNES : 


// activer la fonctionnalité wordpress pour un thème : 'image de mise en avant' (post thumbnail).
// écrivez ci-dessous le code permettant d'activer cette fonctionnalité 


function bigstar_post_thumbnails(){
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme','bigstar_post_thumbnail');




// rechercher d'autres fonctionnalités d'un thème qu'on pourrait activer.
// lister ci-dessous (dans un  bloc de commentaire) certaines fonctionnalités que vous jugez utiles
//
// Ajouter plus tard un Slider
//
//
/*function get_the_post_thumbnail($post = null, $size= 'post-thumbnail', $attr =''){
    $post = get_post($post);
    if (! $post) {
        return '';
    }
    $post_thumbnail_id = get_post_thumbnail_id($post);
    
}*/