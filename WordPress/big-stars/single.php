<?php
get_header();

    if(have_posts()) { // si des posts sont associés à l'url demandé
                 
        while(have_posts()) { // on boucle sur le(s) post(s) associé à l'url demandé
            the_post(); // chargement du prochain post
        ?>

        <article>
            <h2>
            <a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>
            <p><?php the_date(); ?></p>
            <?php the_content(); ?>
        </article>
        <?php
        }//fin du while

    }
    else { // si aucun post n'a été trouvé
        echo 'Contenu indisponible';
    }//fin du if
        
get_footer(); ?>