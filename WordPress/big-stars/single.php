<?php
get_header();
?>
<p>single.php</p>

<section class="single">
<?php
    if(have_posts()) { // si des posts sont associés à l'url demandé
                 
        while(have_posts()) { // on boucle sur le(s) post(s) associé à l'url demandé
            the_post(); // chargement du prochain post
        ?>

        <article>
            <h2>
            <a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>
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
            <?php the_content(); ?>
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