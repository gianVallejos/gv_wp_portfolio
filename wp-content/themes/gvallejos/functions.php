<?php

    add_action('wp_enqueue_scripts', 'add_app_functions');
    function add_app_functions () {
        // wp_enqueue_style('app_style', get_template_directory_uri() . '/assets/css/app.css');
        // wp_enqueue_script('app_script', get_template_directory_uri() . '/vue/dist/app.js', array(), false, true);
        wp_enqueue_style('font_awesome_style', 'https://use.fontawesome.com/releases/v5.7.2/css/all.css');
        wp_enqueue_style('contact_style', get_template_directory_uri() . '/assets/css/contact.css');                
        wp_enqueue_script('app_script', 'http://localhost:8080/dist/app.js', array(), false, true);
    } 

    add_action('rest_api_init', 'register_rest_images' );
    function register_rest_images(){
        register_rest_field( array('post'),
            'fimg_url',
            array(
                'get_callback'    => 'get_rest_featured_image',
                'update_callback' => null,
                'schema'          => null,
            )
        );
    }
    
    function get_rest_featured_image( $object, $field_name, $request ) {
        if( $object['featured_media'] ){
            $img = wp_get_attachment_image_src( $object['featured_media'], 'app-thumb' );
            return $img[0];
        }
        return false;
    }

    function mytheme_post_thumbnails() {
        add_theme_support( 'post-thumbnails' );
    }
    add_action( 'after_setup_theme', 'mytheme_post_thumbnails' );

?>