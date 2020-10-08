<?php
function foodAbq () {
    wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
   if (strstr($_SERVER['SERVER_NAME'], 'foodabq.local')) {
       wp_enqueue_script('javaScript', 'http://localhost:3000/bundled.js', NULL, '1.0', true);

   } else {
       wp_enqueue_script('our-vendors-js', get_theme_file_uri('/bundled-assets/vendors~scripts.8c97d901916ad616a264.js'), NULL, '1.0', true);
       wp_enqueue_script('javaScript', get_theme_file_uri('/bundled-assets/scripts.944507dd80df366d0788.js'), NULL, '1.0', true);
       wp_enqueue_style('our-main-style', get_theme_file_uri('/bundled-assets/styles.944507dd80df366d0788.css'));
   }

}
add_action('wp_enqueue_scripts', 'foodAbq');

function foodAbq_features(){
    register_nav_menu('headerMenu', 'Header Menu');
    register_nav_menu('footerMenu', 'Footer Menu');
    register_nav_menu('footerMenu2', 'Footer Menu 2');
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'foodAbq_features');