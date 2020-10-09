<?php

function foodAbq_post_event () {
    register_post_type('event', array(
        'public' => true,
        'menu_icon' => 'dashicons-buddicons-groups',
        'labels' => array(
            'name'=> 'Events',
            'add_new_item'=> 'Add new Event',
            'edit_item' => 'Edit Event',
            'all_items' => 'All Events',
            'singular_name' => 'Event'
        )
    ));
}
add_action('init', 'foodAbq_post_event');

