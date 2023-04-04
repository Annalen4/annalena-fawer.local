<?php

/* Theme Support*/
function portfolio_theme_supports(){
    //beitragsbild
    add_theme_support('post-thumbnails');
    //html5
    add_theme_support(
        'html5',
        [
            'search-form',
            'gallery',
            'captions',
            'script',
            'style'
        ]
        );
}
add_action( 'after_setup_theme','portfolio_theme_supports' );

//stylesheet einbinden
function portfoilo_include_stylesheets(){
    wp_enqueue_style('portfolio-style', get_stylesheet_uri( ));
}
add_action('wp_enqueue_scripts','portfoilo_include_stylesheets');

function portfolio_include_blockstyles() {
    wp_enqueue_style('portfolio-blockstyle',get_template_directory_uri().'/assets/css/block-style.css');
 }
 add_action('enqueue_block_assets','portfolio_include_blockstyles');

//Scripts

function portfolio_include_scripts(){
    wp_enqueue_script('portfolio-scripts', get_template_directory_uri() . '/assets/js/index.js');
}
add_action('wp_enqueue_scripts', 'portfolio_include_scripts');


/**Google Fonts**/
function portfolio_include_googlefonts(){
    wp_enqueue_style('google-fonts.Yeseva One','https://fonts.googleapis.com/css2?family=Gloock&family=Montserrat:ital,wght@0,400;0,600;1,300&family=Noto+Serif+Display:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,500&family=Syncopate:wght@400;700&family=Yeseva+One&display=swap');
}
add_action('enqueue_block_assets','portfolio_include_googlefonts');

//Menu 
function portfolio_menu (){
    $locations =[
        'primary' =>__('Primarnavigation', 'portfolio-theme'),
        'social' => __('social media', 'port-folio-theme'),
    ];
    register_nav_menus($locations);
}
add_action('init', 'portfolio_menu');