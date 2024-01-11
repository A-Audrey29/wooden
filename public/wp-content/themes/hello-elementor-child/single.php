<?php
/**
 * The template for displaying singular post-types: posts, pages and user-defined custom post types.
 *
 * @package HelloElementor
 */
?>
 <?php get_header(); ?>
<?php 
if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); 
      

        // Afficher la photo mise en avant
        if ( has_post_thumbnail() ) {
            the_post_thumbnail('full');
        }

          // Afficher le titre du post
          the_title('<h1>', '</h1>'); 

        // Afficher le contenu du post
        // the_content(); 

        // Afficher un champ personnalisé
        $valeur_du_champ = get_field('texte');
        if ($valeur_du_champ) {
            echo '<p>' . $valeur_du_champ . '</p>';
        }
?>

<?php

            // Afficher le bouton "Contactez-nous" avec le shortcode
            echo do_shortcode('[custom_button]');
            
            // Inclure le template part pour afficher les images
            get_template_part('template-parts/images');
         

    endwhile; 
endif; 
?>


 <?php get_footer(); ?>