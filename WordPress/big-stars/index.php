<?php
get_header();
?>
<section class='liste'>
<h2>index.php</h2>
    <?php
        //Boucle WordPress
        //Un post = un Article.
        if(have_posts()) { // si des posts sont associés à l'url demandé
                 
            while(have_posts()) { // on boucle sur le(s) post(s) associé à l'url demandé
            the_post(); // chargement des données du post en cours
            // le code suivant corespond à l'affichage d'1 post
        // les fonctions wordpress commençant par "the_" permettent d'afficher les données d'un post chargé par the_post()
        // les fonctions commençant par "the_" ne sont utilisables qu'à l'intérieur de la boucle wordpress
        // les utiliser à l'extérieur de cette boucle ne fonctionnera pas.
        // liste de toutes les fonctions wordpress : 
        //      https://codex.wordpress.org/fr:Fonctions_de_r%C3%A9f%C3%A9rence
    ?>
    <article>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <?php the_date(); // Date du post ?> 
                    <figure>
                        <?php 
                            if(has_post_thumbnail()){
                            //the_post_thumbnail();
                            //the_post_thumbnail('large');//image grande taille
                            //the_post_thumbnail('medium');//Image taille moyenne
                            the_post_thumbnail('thumbnail');//Image miniature
                            }
                        ?>
                    </figure>
                    <div>
                        <?php
                            the_content();//Affiche de l'extrait
                        ?>
                    </div>
                </article>
                            

                 <?php
            }//fin du while

        }
        else 
        { // si aucun post n'a été trouvé
            echo 'Contenu indisponible';
        }//fin du if
        ?>
    </section>
                
<?php get_footer(); ?>