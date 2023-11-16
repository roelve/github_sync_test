<?php
if ( ! function_exists( 'github_sync_test_setup' ) ) :

function github_sync_test_setup() {

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    /* Pinegrow generated Load Text Domain Begin */
    load_theme_textdomain( 'github_sync_test', get_template_directory() . '/languages' );
    /* Pinegrow generated Load Text Domain End */

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     */
    add_theme_support( 'title-tag' );
    
    /*
     * Enable support for Post Thumbnails on posts and pages.
     */
    add_theme_support( 'post-thumbnails' );
    //Support custom logo
    add_theme_support( 'custom-logo' );

    // Add menus.
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'github_sync_test' ),
        'social'  => __( 'Social Links Menu', 'github_sync_test' ),
    ) );

/*
     * Register custom menu locations
     */
    /* Pinegrow generated Register Menus Begin */

    /* Pinegrow generated Register Menus End */
    
/*
    * Set image sizes
     */
    /* Pinegrow generated Image sizes Begin */

    /* Pinegrow generated Image sizes End */
    
    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );

    /*
     * Enable support for Post Formats.
     */
    add_theme_support( 'post-formats', array(
        'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
    ) );

    /*
     * Enable support for Page excerpts.
     */
     add_post_type_support( 'page', 'excerpt' );
}
endif; // github_sync_test_setup

add_action( 'after_setup_theme', 'github_sync_test_setup' );


if ( ! function_exists( 'github_sync_test_init' ) ) :

function github_sync_test_init() {

    
    // Use categories and tags with attachments
    register_taxonomy_for_object_type( 'category', 'attachment' );
    register_taxonomy_for_object_type( 'post_tag', 'attachment' );

    /*
     * Register custom post types. You can also move this code to a plugin.
     */
    /* Pinegrow generated Custom Post Types Begin */

    /* Pinegrow generated Custom Post Types End */
    
    /*
     * Register custom taxonomies. You can also move this code to a plugin.
     */
    /* Pinegrow generated Taxonomies Begin */

    /* Pinegrow generated Taxonomies End */

}
endif; // github_sync_test_setup

add_action( 'init', 'github_sync_test_init' );


if ( ! function_exists( 'github_sync_test_custom_image_sizes_names' ) ) :

function github_sync_test_custom_image_sizes_names( $sizes ) {

    /*
     * Add names of custom image sizes.
     */
    /* Pinegrow generated Image Sizes Names Begin*/
    /* This code will be replaced by returning names of custom image sizes. */
    /* Pinegrow generated Image Sizes Names End */
    return $sizes;
}
add_action( 'image_size_names_choose', 'github_sync_test_custom_image_sizes_names' );
endif;// github_sync_test_custom_image_sizes_names



if ( ! function_exists( 'github_sync_test_widgets_init' ) ) :

function github_sync_test_widgets_init() {

    /*
     * Register widget areas.
     */
    /* Pinegrow generated Register Sidebars Begin */

    /* Pinegrow generated Register Sidebars End */
}
add_action( 'widgets_init', 'github_sync_test_widgets_init' );
endif;// github_sync_test_widgets_init



if ( ! function_exists( 'github_sync_test_customize_register' ) ) :

function github_sync_test_customize_register( $wp_customize ) {
    // Do stuff with $wp_customize, the WP_Customize_Manager object.

    /* Pinegrow generated Customizer Controls Begin */

    $wp_customize->add_section( 'blocks_header_3', array(
        'title' => __( 'Header 3', 'github_sync_test' )
    ));

    $wp_customize->add_section( 'blocks_header_3', array(
        'title' => __( 'Header 3', 'github_sync_test' )
    ));

    $wp_customize->add_section( 'blocks_content_1_3', array(
        'title' => __( 'Content 1-3', 'github_sync_test' )
    ));

    $wp_customize->add_section( 'blocks_content_2_2', array(
        'title' => __( 'Content 2-2', 'github_sync_test' )
    ));

    $wp_customize->add_section( 'blocks_content_3_4', array(
        'title' => __( 'Content 3-4', 'github_sync_test' )
    ));

    $wp_customize->add_section( 'blocks_content_3_6', array(
        'title' => __( 'Content 3-6', 'github_sync_test' )
    ));

    $wp_customize->add_section( 'blocks_content_2_8', array(
        'title' => __( 'Content 2-8', 'github_sync_test' )
    ));

    $wp_customize->add_section( 'blocks_map', array(
        'title' => __( 'Map', 'github_sync_test' )
    ));
    $pgwp_sanitize = function_exists('pgwp_sanitize_placeholder') ? 'pgwp_sanitize_placeholder' : null;

    $wp_customize->add_setting( 'blocks_header_3_bck', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'blocks_header_3_bck', array(
        'label' => __( 'Background image', 'github_sync_test' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'blocks_header_3'
    ) ) );

    $wp_customize->add_setting( 'blocks_header_3_logo', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'blocks_header_3_logo', array(
        'label' => __( 'Logo', 'github_sync_test' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'blocks_header_3'
    ) ) );

    $wp_customize->add_setting( 'blocks_header_3_title', array(
        'type' => 'theme_mod',
        'default' => __( 'Pinegrow Blocks', 'github_sync_test' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'blocks_header_3_title', array(
        'label' => __( 'Title', 'github_sync_test' ),
        'type' => 'text',
        'section' => 'blocks_header_3'
    ));

    $wp_customize->add_setting( 'blocks_header_3_text', array(
        'type' => 'theme_mod',
        'default' => __( 'Lots of easy to use component blocks for fast Bootstrap site development', 'github_sync_test' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'blocks_header_3_text', array(
        'label' => __( 'Text', 'github_sync_test' ),
        'type' => 'textarea',
        'section' => 'blocks_header_3'
    ));

    $wp_customize->add_setting( 'blocks_header_3_button1_label', array(
        'type' => 'theme_mod',
        'default' => __( 'Find out more', 'github_sync_test' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'blocks_header_3_button1_label', array(
        'label' => __( 'Button 1 Label', 'github_sync_test' ),
        'type' => 'text',
        'section' => 'blocks_header_3'
    ));

    $wp_customize->add_setting( 'blocks_header_3_button1_url', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'blocks_header_3_button1_url', array(
        'label' => __( 'Button 1 Link', 'github_sync_test' ),
        'type' => 'text',
        'section' => 'blocks_header_3'
    ));

    $wp_customize->add_setting( 'blocks_header_3_button2_label', array(
        'type' => 'theme_mod',
        'default' => __( 'Buy here', 'github_sync_test' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'blocks_header_3_button2_label', array(
        'label' => __( 'Button 2 Label', 'github_sync_test' ),
        'type' => 'text',
        'section' => 'blocks_header_3'
    ));

    $wp_customize->add_setting( 'blocks_header_3_button2_url', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'blocks_header_3_button2_url', array(
        'label' => __( 'Button 2 Link', 'github_sync_test' ),
        'type' => 'text',
        'section' => 'blocks_header_3'
    ));

    $wp_customize->add_setting( 'blocks_content_1_3_source', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_BlocksContentDropdown_Customize_Control( $wp_customize, 'blocks_content_1_3_source', array(
        'label' => __( 'Content source', 'github_sync_test' ),
        'type' => 'custom',
        'section' => 'blocks_content_1_3'
    ) ) );

    $wp_customize->add_setting( 'blocks_content_1_3_title', array(
        'type' => 'theme_mod',
        'default' => __( 'Every service under one roof', 'github_sync_test' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'blocks_content_1_3_title', array(
        'label' => __( 'Title', 'github_sync_test' ),
        'type' => 'text',
        'section' => 'blocks_content_1_3'
    ));

    $wp_customize->add_setting( 'blocks_content_2_2_source', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_BlocksContentDropdown_Customize_Control( $wp_customize, 'blocks_content_2_2_source', array(
        'label' => __( 'Content source', 'github_sync_test' ),
        'type' => 'custom',
        'section' => 'blocks_content_2_2'
    ) ) );

    $wp_customize->add_setting( 'blocks_content_3_4_source', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_BlocksContentDropdown_Customize_Control( $wp_customize, 'blocks_content_3_4_source', array(
        'label' => __( 'Content source', 'github_sync_test' ),
        'type' => 'custom',
        'section' => 'blocks_content_3_4'
    ) ) );

    $wp_customize->add_setting( 'blocks_content_3_4_image', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'blocks_content_3_4_image', array(
        'label' => __( 'Image', 'github_sync_test' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'blocks_content_3_4'
    ) ) );

    $wp_customize->add_setting( 'blocks_content_3_4_title', array(
        'type' => 'theme_mod',
        'default' => __( 'Young Photographer of the Year', 'github_sync_test' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'blocks_content_3_4_title', array(
        'label' => __( 'Title', 'github_sync_test' ),
        'type' => 'text',
        'section' => 'blocks_content_3_4'
    ));

    $wp_customize->add_setting( 'blocks_content_3_4_text', array(
        'type' => 'theme_mod',
        'default' => __( 'Magnis modipsae que lib voloratati andigen daepedor quiate ut reporemni aut labor. Laceaque quiae sitiorem ut restibusaes es tumquam core posae volor remped modis volor. Doloreiur qui commolu ptatemp dolupta orem retibusam emnis et consent accullignis lomnus.', 'github_sync_test' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'blocks_content_3_4_text', array(
        'label' => __( 'Text', 'github_sync_test' ),
        'type' => 'text',
        'section' => 'blocks_content_3_4'
    ));

    $wp_customize->add_setting( 'blocks_content_3_6_source', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_BlocksContentDropdown_Customize_Control( $wp_customize, 'blocks_content_3_6_source', array(
        'label' => __( 'Content source', 'github_sync_test' ),
        'type' => 'custom',
        'section' => 'blocks_content_3_6'
    ) ) );

    $wp_customize->add_setting( 'blocks_content_2_8_source', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_BlocksContentDropdown_Customize_Control( $wp_customize, 'blocks_content_2_8_source', array(
        'label' => __( 'Content source', 'github_sync_test' ),
        'type' => 'custom',
        'section' => 'blocks_content_2_8'
    ) ) );

    $wp_customize->add_setting( 'blocks_content_2_8_image', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'blocks_content_2_8_image', array(
        'label' => __( 'Image', 'github_sync_test' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'blocks_content_2_8'
    ) ) );

    $wp_customize->add_setting( 'blocks_content_2_8_title', array(
        'type' => 'theme_mod',
        'default' => __( 'Our customer support is the very best!', 'github_sync_test' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'blocks_content_2_8_title', array(
        'label' => __( 'Title', 'github_sync_test' ),
        'type' => 'textarea',
        'section' => 'blocks_content_2_8'
    ));

    $wp_customize->add_setting( 'blocks_content_2_8_text', array(
        'type' => 'theme_mod',
        'default' => __( 'We don\\\'t want to overload you with hundreds of styles you don\\\'t want, or need. We give you a strong base to express your own creativity.', 'github_sync_test' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'blocks_content_2_8_text', array(
        'label' => __( 'Text', 'github_sync_test' ),
        'type' => 'textarea',
        'section' => 'blocks_content_2_8'
    ));

    $wp_customize->add_setting( 'blocks_map_lat', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'blocks_map_lat', array(
        'label' => __( 'Latitude', 'github_sync_test' ),
        'type' => 'text',
        'section' => 'blocks_map',
        'input_attrs' => 
            array(
                'placeholder' => '51.5111507'
            )
    ));

    $wp_customize->add_setting( 'blocks_map_long', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'blocks_map_long', array(
        'label' => __( 'Longitude', 'github_sync_test' ),
        'type' => 'text',
        'section' => 'blocks_map',
        'input_attrs' => 
            array(
                'placeholder' => '-0.123'
            )
    ));

    $wp_customize->add_setting( 'blocks_map_zoom', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'blocks_map_zoom', array(
        'label' => __( 'Zoom', 'github_sync_test' ),
        'type' => 'text',
        'section' => 'blocks_map',
        'input_attrs' => 
            array(
                'placeholder' => '15'
            )
    ));

    /* Pinegrow generated Customizer Controls End */

}
add_action( 'customize_register', 'github_sync_test_customize_register' );
endif;// github_sync_test_customize_register


if ( ! function_exists( 'github_sync_test_enqueue_scripts' ) ) :
    function github_sync_test_enqueue_scripts() {

        /* Pinegrow generated Enqueue Scripts Begin */

    wp_enqueue_script( 'jquery' );
    wp_deregister_script( 'github_sync_test-bootstrap' );
    wp_enqueue_script( 'github_sync_test-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', [], '1.0.1', true);

    wp_deregister_script( 'github_sync_test-plugins' );
    wp_enqueue_script( 'github_sync_test-plugins', get_template_directory_uri() . '/js/plugins.js', [], '1.0.1', true);

    wp_deregister_script( 'github_sync_test-script' );
    wp_enqueue_script( 'github_sync_test-script', 'https://maps.google.com/maps/api/js?sensor=true', [], '1.0.1', true);

    wp_deregister_script( 'github_sync_test-bskitscripts' );
    wp_enqueue_script( 'github_sync_test-bskitscripts', get_template_directory_uri() . '/js/bskit-scripts.js', [], '1.0.1', true);

    /* Pinegrow generated Enqueue Scripts End */

        /* Pinegrow generated Enqueue Styles Begin */

    wp_deregister_style( 'github_sync_test-bootstrap' );
    wp_enqueue_style( 'github_sync_test-bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css', [], '1.0.1', 'all');

    wp_deregister_style( 'github_sync_test-fontawesome' );
    wp_enqueue_style( 'github_sync_test-fontawesome', get_template_directory_uri() . '/css/font-awesome.min.css', [], '1.0.1', 'all');

    wp_deregister_style( 'github_sync_test-style' );
    wp_enqueue_style( 'github_sync_test-style', 'http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700', [], '1.0.1', 'all');

    wp_deregister_style( 'github_sync_test-style-1' );
    wp_enqueue_style( 'github_sync_test-style-1', 'http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic', [], '1.0.1', 'all');

    wp_deregister_style( 'github_sync_test-stylelibrary' );
    wp_enqueue_style( 'github_sync_test-stylelibrary', get_template_directory_uri() . '/css/style-library-1.css', [], '1.0.1', 'all');

    wp_deregister_style( 'github_sync_test-plugins' );
    wp_enqueue_style( 'github_sync_test-plugins', get_template_directory_uri() . '/css/plugins.css', [], '1.0.1', 'all');

    wp_deregister_style( 'github_sync_test-blocks' );
    wp_enqueue_style( 'github_sync_test-blocks', get_template_directory_uri() . '/css/blocks.css', [], '1.0.1', 'all');

    wp_deregister_style( 'github_sync_test-custom' );
    wp_enqueue_style( 'github_sync_test-custom', get_template_directory_uri() . '/css/custom.css', [], '1.0.1', 'all');

    wp_deregister_style( 'github_sync_test-style-2' );
    wp_enqueue_style( 'github_sync_test-style-2', get_bloginfo('stylesheet_url'), [], '1.0.1', 'all');

    /* Pinegrow generated Enqueue Styles End */

    }
    add_action( 'wp_enqueue_scripts', 'github_sync_test_enqueue_scripts' );
endif;

function pgwp_sanitize_placeholder($input) { return $input; }
/*
 * Resource files included by Pinegrow.
 */
/* Pinegrow generated Include Resources Begin */
require_once "inc/custom.php";
if( !class_exists( 'PG_Helper_v2' ) ) { require_once "inc/wp_pg_helpers.php"; }

    /* Pinegrow generated Include Resources End */
?>