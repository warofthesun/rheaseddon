<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}


/*remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

function my_theme_wrapper_start() {
  echo '<div id="content_area">';
}

function my_theme_wrapper_end() {
  echo '</div>';
}*/

add_theme_support( 'custom-header', array(
 'video' => true,
) );

//image sizes
add_image_size( 'gallery-thumb', 335, 251, true ); //(cropped)
add_image_size( 'article-thumb', 964, 723, true ); //(cropped)
add_image_size( 'image-header', 1080, 488, true ); //(cropped)


// USE THIS TEMPLATE TO CREATE CUSTOM POST TYPES EASILY
//  require_once( 'library/custom-post-type.php' );

  function insert_jquery(){
  wp_enqueue_script('jquery', false, array(), false, false);
  }
  add_filter('wp_enqueue_scripts','insert_jquery',1);


add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

function enqueue_load_fa() {

    wp_enqueue_style( 'load-fa', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );

}

add_action( 'wp_enqueue_scripts', 'enqueue_load_fa' );

function google_fonts() {
  wp_enqueue_style('googleFonts', '//fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300i,700|Open+Sans:400,700,800');
}

add_action('wp_enqueue_scripts', 'google_fonts');

?>
