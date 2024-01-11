<div class="galery">
    <?php
    // Récupérez le tableau d'image
    $images = ['image_1', 'image_2', 'image_3', 'image_4', 'image_5', 'image_6', 'image_7', 'image_8', 'image_9', 'image_10'];

    foreach ($images as $image_name) {
        $image = get_field($image_name);

        // Vérifiez si une image a été ajoutée
        if( $image ): 
            // Affichez l'image
            echo '<img class="lightbox-trigger" src="' . esc_url($image['url']) . '" alt="' . esc_attr($image['alt']) . '" />';
        endif;
    }
    ?>
</div>

<div class="lightbox">
    <button class="lightbox__close"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/close.svg" alt="Croix de fermeture" /></button>
    <button class="lightbox__prev"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/previous.svg" alt="Flèche vers la gauche" /></button>
    <button class="lightbox__next"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/next.svg" alt="Flèche vers la droite" /></button>

    <div class="lightbox__container">
        <?php
        if (has_post_thumbnail()) :
        $image_url = wp_get_attachment_image_url( $image_id, 'full' );
        $image_id = attachment_url_to_postid( $image_url );

        if( $image_url ) {
        echo '<img src="' . esc_url($image_url) . '" alt="Description" />';
        }
        endif;
        ?>
</div>