<?php
/**
 * front-page.php 
 * fichier correspondant à la page d'accueil du site
 * Selon la configuration de wordpress (règlages->lecture), 
 * ce fichier affichera soit les derniers articles, soit la page statique choisie.
 */
// chargement du fichier "header.php"
get_header();
?>
<section class="sidebar">
    <?php
        if(is_active_sidebar('bigstars-principal')){
            dynamic_sidebar('bigstars-principal');
        }
    ?>
</section>
<p>front-page.php</p>

<section class="liste">
<?php
    if(have_posts()) { // si des posts sont associés à l'url demandé
                 
        while(have_posts()) { // on boucle sur le(s) post(s) associé à l'url demandé
            the_post(); // chargement du prochain post
        ?>

        <article>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>
            <p><?php the_date(); ?></p>
            <figure>
                <?php
                    if (has_post_thumbnail()) {
                        //the_post_thumbnail();
                        //the_post_thumbnail('large');//image grande taille
                        //the_post_thumbnail('medium');//Image taille moyenne
                        the_post_thumbnail('thumbnail');//Image miniature
                    }
                ?>
            </figure>
            <div>
            <?php the_excerpt(); ?>
            </div>
        </article>
        <?php
        }//fin du while

    }
    else { // si aucun post n'a été trouvé
        echo 'Contenu indisponible';
    }//fin du if
   ?>
</section>
<?php     
get_footer();