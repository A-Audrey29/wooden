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