<?php
/**
 * Recommended way to include parent theme styles.
 * (Please see http://codex.wordpress.org/Child_Themes#How_to_Create_a_Child_Theme)
 *
 */  

 // branchement du thème enfant, fichier style.css
 add_action( 'wp_enqueue_scripts', 'hello_elementor_child_style' );
  function hello_elementor_child_style() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css',array('parent-style'));
}

// branchement du fichier JS
function hello_elementor_child_enqueue_scripts()
{
    wp_enqueue_script('script', get_stylesheet_directory_uri() . '/assets/js/script.js', '', '', true);
    wp_enqueue_script('lightbox-script', get_stylesheet_directory_uri() . '/assets/js/lightbox-script.js', '', '', true);

}
add_action('wp_enqueue_scripts', 'hello_elementor_child_enqueue_scripts');



// shortcode du bouton 'CONTACTEZ-NOUS'

function custom_button_shortcode() {
  return '<div class="elementor-widget-container">
              <div class="elementor-button-wrapper">
                  <a class="elementor-button elementor-button-link elementor-size-lg" href="#" id="popup-js">
                      <span class="elementor-button-content-wrapper">
                          <span class="elementor-button-text">Contactez-nous</span>
                      </span>
                  </a>
              </div>
          </div>';
}
add_shortcode('custom_button', 'custom_button_shortcode');




