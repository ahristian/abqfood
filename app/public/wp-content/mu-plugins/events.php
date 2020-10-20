<?php

function foodAbq_post_types () {
    register_post_type('events', array(
        'has_archive' => true,
        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'excerpt', 'custom-fields'),
        'public' => true,
        'labels' => array(
            'name'=> 'Events',
            'add_new_item'=> 'Add new Event',
            'edit_item' => 'Edit Event',
            'all_items' => 'Events',
            'singular_name' => 'Event'
        ),
        'menu_icon' => 'dashicons-buddicons-groups'
    ));
}

add_action('init', 'foodAbq_post_types');
