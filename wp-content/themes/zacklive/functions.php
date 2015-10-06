<?php
/**
 * functions and definitions
 */

require_once( 'library/setup.php' );
require_once( 'library/nav.php' );
require_once( 'library/widgets.php' );

require_once( 'library/zacklive.php' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/library/underscores/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/library/underscores/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/library/underscores/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/library/underscores/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/library/underscores/jetpack.php';


/**
 * Enqueue scripts and styles
 */
function zacklive_scripts() {

    // load zacklive styles
    wp_enqueue_style( 'zacklive-style', get_stylesheet_uri() );

    // load bootstrap css
    wp_enqueue_style( 'zacklive-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap/bootstrap.min.css' );

    // load bootstrap for WordPress css
    wp_enqueue_style( 'zacklive-bootstrapwp', get_template_directory_uri() . '/assets/css/bootstrap-wp.css' );
    //wp_enqueue_style( 'custom-script', get_template_directory_uri() . '/assets/css/jquery.jscrollpane.css' );
    wp_enqueue_style( 'custom-script', get_template_directory_uri() . '/assets/css/nanoscroller.css' );

    // load font awesome css
    wp_enqueue_style( 'zacklive-fontawesome', get_template_directory_uri() . '/assets/css/FontAwesome/font-awesome.min.css' , array(), '4.3.0', 'all' );

    // load bootstrap.js
    wp_enqueue_script('zacklive-bootstrapjs', get_template_directory_uri().'/assets/js/bootstrap/bootstrap.js', array('jquery') );

    wp_enqueue_script( 'custom-script', get_template_directory_uri() . '/assets/js/jquery.nanoscroller.js', array( 'jquery' ));

    // load bootstrap-wp.js
    wp_enqueue_script( 'zacklive-bootstrapwp', get_template_directory_uri() . '/assets/js/bootstrap-wp.js', array('jquery') );

    //wp_enqueue_script( 'custom-script', get_template_directory_uri() . '/assets/js/jquery.mousewheel.js', array( 'jquery' ));
    //wp_enqueue_script( 'custom-script', get_template_directory_uri() . '/assets/js/jquery.jscrollpane.js', array( 'jquery' ));


    // FitVid (responsive video)
    wp_enqueue_script( 'zacklive-fitvids', get_template_directory_uri() . '/assets/js/FitVids.js-master/jquery.fitvids.js', array('jquery') );

    wp_enqueue_script( 'zacklive-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20130115', true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }

    //load keyboard-image-navigation.js
    if ( is_singular() && wp_attachment_is_image() ) {
        wp_enqueue_script( 'zacklive-keyboard-image-navigation', get_template_directory_uri() . '/assets/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
    }

}
add_action( 'wp_enqueue_scripts', 'zacklive_scripts', 100);

/* by Gamini */
add_filter('widget_text', 'do_shortcode');

/*add_action( 'wp_head', 'vr_set_featured_background', 99);
function vr_set_featured_background() {
    $image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), full, false );
    if ($image_url[0]) {
    ?>
        <style>
 
        html,body {
            height:100%;
            margin:0!important;
        }
        body {
            background:url(<?php echo $image_url[0]; ?>) #000 left top no-repeat;
            background-size: 100% 100%; 
        }
        
        </style>
    <?php
    }
}*/

?>