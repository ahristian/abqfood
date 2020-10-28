<?php

function foodAbq_post_types () {
    //Event Post Type
    register_post_type('events', array(
        'has_archive' => true,
        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'excerpt', 'custom-fields'),
        'rewrite' => array('slug' => 'events'),
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

    //Destination Post Type
    register_post_type('destination', array(
        'has_archive' => true,
        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'custom-fields', 'thumbnail'),
        'rewrite' => array('slug' => 'destinations'),
        'public' => true,
        'labels' => array(
            'name'=> 'Destinations',
            'add_new_item'=> 'Add new Destinations',
            'edit_item' => 'Edit Destination',
            'all_items' => 'Destinations',
            'singular_name' => 'Destination'
        ),
        'menu_icon' => 'dashicons-car'
    ));

    //Things to do Post Type
    register_post_type('thing', array(
        'has_archive' => true,
        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'custom-fields'),
        'rewrite' => array('slug' => 'things'),
        'public' => true,
        'labels' => array(
            'name'=> 'Things to Do',
            'add_new_item'=> 'Add new Things to Do',
            'edit_item' => 'Edit Thing to Do',
            'all_items' => 'Things  to Do',
            'singular_name' => 'Thing  to Do'
        ),
        'menu_icon' => 'dashicons-universal-access'
    ));
}

add_action('init', 'foodAbq_post_types');
