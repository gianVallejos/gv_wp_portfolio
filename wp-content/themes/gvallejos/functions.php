<?php

    function add_app_functions () {
        // wp_enqueue_style('app_style', get_template_directory_uri() . '/assets/css/app.css');
        // wp_enqueue_script('app_script', get_template_directory_uri() . '/vue/dist/app.js', array(), false, true);
        wp_enqueue_style('app_style', 'https://use.fontawesome.com/releases/v5.7.2/css/all.css');
        wp_enqueue_script('app_script', 'http://localhost:8080/dist/app.js', array(), false, true);
    }

    add_action('add_app_style', add_app_functions ());

?>