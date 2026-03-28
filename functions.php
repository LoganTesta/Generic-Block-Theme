<?php

function initial_theme_setup() {
    wp_enqueue_style( 'style', "" . get_template_directory_uri() . '/assets/css/style.css?mod=03272026' );
}
add_action( 'wp_enqueue_scripts', 'initial_theme_setup' );
