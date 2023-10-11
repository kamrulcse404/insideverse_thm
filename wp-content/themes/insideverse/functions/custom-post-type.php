<?php 

// custom post type name portfolio
function custom_post_type_portfolio()
{
    $labels = array(
        'name'               => _x('Portfolios', 'post type general name', 'insideverse'),
        'singular_name'      => _x('Portfolio', 'post type singular name', 'insideverse'),
        'menu_name'          => _x('Portfolios', 'admin menu', 'insideverse'),
        'name_admin_bar'     => _x('Portfolio', 'add new on admin bar', 'insideverse'),
        'add_new'            => _x('Add New', 'portfolio', 'insideverse'),
        'add_new_item'       => __('Add New Portfolio', 'insideverse'),
        'new_item'           => __('New Portfolio', 'insideverse'),
        'edit_item'          => __('Edit Portfolio', 'insideverse'),
        'view_item'          => __('View Portfolio', 'insideverse'),
        'all_items'          => __('All Portfolios', 'insideverse'),
        'search_items'       => __('Search Portfolios', 'insideverse'),
        'parent_item_colon'  => __('Parent Portfolios:', 'insideverse'),
        'not_found'          => __('No portfolios found.', 'insideverse'),
        'not_found_in_trash' => __('No portfolios found in Trash.', 'insideverse')
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'portfolio'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array('title', 'editor', 'thumbnail')
    );

    register_post_type('portfolio', $args);
}
add_action('init', 'custom_post_type_portfolio');


// texonomy for portfolio
function custom_portfolio_taxonomy() {
    $labels = array(
        'name'              => _x( 'Portfolio Categories', 'taxonomy general name', 'insideverse' ),
        'singular_name'     => _x( 'Portfolio Category', 'taxonomy singular name', 'insideverse' ),
        'search_items'      => __( 'Search Portfolio Categories', 'insideverse' ),
        'all_items'         => __( 'All Portfolio Categories', 'insideverse' ),
        'parent_item'       => __( 'Parent Portfolio Category', 'insideverse' ),
        'parent_item_colon' => __( 'Parent Portfolio Category:', 'insideverse' ),
        'edit_item'         => __( 'Edit Portfolio Category', 'insideverse' ),
        'update_item'       => __( 'Update Portfolio Category', 'insideverse' ),
        'add_new_item'      => __( 'Add New Portfolio Category', 'insideverse' ),
        'new_item_name'     => __( 'New Portfolio Category Name', 'insideverse' ),
        'menu_name'         => __( 'Portfolio Categories', 'insideverse' ),
    );

    $args = array(
        'hierarchical'      => true, // This makes it hierarchical.
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'portfolio-category' ), // Customize the slug as needed.
    );

    register_taxonomy( 'portfolio_category', 'portfolio', $args );
}
add_action( 'init', 'custom_portfolio_taxonomy' );

