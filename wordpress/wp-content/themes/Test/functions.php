<?php

function test_enqueue_stylesheets(){
    wp_enqueue_style('test-stylesheet', get_stylesheet_uri());
    wp_style_add_data('test-stylesheet', 'rtl', 'replace');
}
add_action('wp_enqueue_scripts', 'test_enqueue_stylesheets');

