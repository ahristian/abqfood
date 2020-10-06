<?php
function foodAbq () {
    wp_enqueue_style('foodAbq', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'foodAbq');