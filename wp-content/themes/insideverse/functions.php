<?php

// include title & js_css  
add_theme_support('title-tag');
require_once('enqueue/enqueue_css_js.php');


// redux Framework //
require_once('lib/framework/ReduxCore/framework.php');
require_once('lib/framework/sample/config.php');



// header menus 
function register_header_menu()
{
    register_nav_menus(
        array(
            'header_menu' => __('Header Menu', 'insideverse')
        )
    );
}
add_action('after_setup_theme', 'register_header_menu');


// footer menus 
function register_footer_menus()
{
    register_nav_menus(
        array(
            'footer_menu' => __('Footer Menu', 'insideverse'),
        )
    );
}
add_action('after_setup_theme', 'register_footer_menus');
