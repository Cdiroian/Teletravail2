<?php
get_header();

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
                <?php the_post_thumbnail(); ?>
                <article>
                    <?php the_date(); // Date du post ?> 
                    <h2>
                        <a href="<?php the_permalink(); // lien vers le contenu ?>">
                        <?php the_title(); // le titre du post ?>
                        </a>
                    </h2>
                </article>
                            

                 <?php
                }//fin du while

                }
                else { // si aucun post n'a été trouvé
                    echo 'Contenu indisponible';
                }//fin du if
        
get_footer(); ?>