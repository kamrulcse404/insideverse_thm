<?php

// metabox for index page banner
function metabox_for_index_banner(array $index_page_banner)
{
    $index_page_banner[] = array(
        'id' => 'index_page_banner',
        'title' => 'Index Page Banner Section',
        'object_types' => array('page'),
        'show_on' => array(
            'key' => 'page-template',
            'value' => 'index.php',
        ),
        'fields' => array(
            array(
                'id' => 'index-banner-image',
                'name' => 'Upload Banner Image for Index',
                'default' => get_template_directory_uri() . '/assets/images/hero-bg.png',
                'type' => 'file',
            ),
        ),
    );

    return $index_page_banner;
}

add_filter('cmb2_meta_boxes', 'metabox_for_index_banner');

// metabox for index page about background image
function metabox_for_index_about_background(array $index_page_about_background)
{
    $index_page_about_background[] = array(
        'id' => 'index_page_about_background',
        'title' => 'Index Page About Background Section',
        'object_types' => array('page'),
        'show_on' => array(
            'key' => 'page-template',
            'value' => 'index.php',
        ),
        'fields' => array(
            array(
                'id' => 'index-about-background',
                'name' => 'Upload About Background Image',
                'default' => get_template_directory_uri() . '/assets/images/about-bg.png',
                'type' => 'file',
            ),
        ),
    );

    return $index_page_about_background;
}

add_filter('cmb2_meta_boxes', 'metabox_for_index_about_background');



// metabox for index page about 
function metabox_for_index_about(array $index_page_about)
{
    $index_page_about[] = array(
        'id' => 'index_page_about',
        'title' => 'Index Page About Section',
        'object_types' => array('page'),
        'show_on' => array(
            'key' => 'page-template',
            'value' => 'index.php',
        ),
        'fields' => array(
            array(
                'id' => 'index-about-content-title',
                'name' => 'About Title',
                'default' => "Welcome to Sid Vishnu's Gaming Universe",
                'type' => 'text',
            ),

            array(
                'id' => 'index-about-content-description-one',
                'name' => 'About Description One',
                'default' => "Hello! I'm Sid Vishnu, a game designer based in the UK. I'm a narrative designer and story writer I specialize in creating stories and designing games that take players on unforgettable journeys.",
                'type' => 'wysiwyg',
            ),
            array(
                'id' => 'index-about-content-description-two',
                'name' => 'About Description Two',
                'default' => "Here, you'll discover a collection of my projects, each one a blend of captivating stories and interactive gameplay. From epic adventures to intimate experiences, every game is a unique world waiting to be explored.",
                'type' => 'wysiwyg',
            ),
            array(
                'id' => 'index-about-content-image',
                'name' => 'Upload About Content Image',
                'default' => get_template_directory_uri() . '/assets/images/about-img.png',
                'type' => 'file',
            ),
        ),
    );

    return $index_page_about;
}

add_filter('cmb2_meta_boxes', 'metabox_for_index_about');



// metabox for index page service content
function metabox_for_index_service(array $index_page_service)
{
    $index_page_service[] = array(
        'id' => 'index_page_about_service',
        'title' => 'Index Page Service Section',
        'object_types' => array('page'),
        'show_on' => array(
            'key' => 'page-template',
            'value' => 'index.php',
        ),
        'fields' => array(
            array(
                'id' => 'index-service-title',
                'name' => 'About Service Title',
                'default' => "What I Do",
                'type' => 'text',
            ),
        ),
    );

    return $index_page_service;
}

add_filter('cmb2_meta_boxes', 'metabox_for_index_service');


// repeater add more option for about service item  
function index_about_service_metaboxes()
{
    $cmb = new_cmb2_box(array(
        'id' => 'about-service-item-repeater',
        'title' => 'Add More Option For About Service Item',
        'object_types' => array('page'),
        'show_on' => array(
            'key' => 'page-template',
            'value' => 'index.php',
        ),
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => true,
    ));

    $add_more_option = $cmb->add_field(array(
        'id' => 'about-service-item',
        'type' => 'group',
        'repeatable' => true,
        'options' => array(
            'group_title' => 'Add More {#}',
            'add_button' => 'Add Another Option',
            'remove_button' => 'Remove Option',
            'closed' => true,
            'sortable' => true,
        ),
    ));

    $cmb->add_group_field($add_more_option, array(
        'name' => 'About Service Item Title',
        // 'desc' => 'Enter the feature title',
        'id' => 'about-service-item-title',
        'type' => 'text',
    ));

    $cmb->add_group_field($add_more_option, array(
        'name' => 'About Service Item Description',
        // 'desc' => 'Enter the feature description',
        'id' => 'about-service-item-description',
        'type' => 'wysiwyg',
    ));
}

add_action('cmb2_admin_init', 'index_about_service_metaboxes');


// metabox for index page portfolio
function metabox_for_index_portfolio(array $index_page_portfolio)
{
    $index_page_portfolio[] = array(
        'id' => 'index_page_portfolio_section',
        'title' => 'Index Page Portfolio Section',
        'object_types' => array('page'),
        'show_on' => array(
            'key' => 'page-template',
            'value' => 'index.php',
        ),
        'fields' => array(
            array(
                'id' => 'index-portfolio-title',
                'name' => 'Portfolio Title',
                'default' => 'My Portfolio',
                'type' => 'text',
            ),
        ),
    );

    return $index_page_portfolio;
}

add_filter('cmb2_meta_boxes', 'metabox_for_index_portfolio');





// category extra field 
function cmb2_add_metabox_to_taxonomy_page()
{
    $taxonomy = 'portfolio_category'; // Replace with your custom taxonomy name

    $cmb = new_cmb2_box(array(
        'id'           => 'portfolio_category_metabox',
        'title'        => 'Portfolio Category Metabox',
        'object_types' => array('term'), // This specifies that it's for taxonomy terms
        'taxonomies'   => array($taxonomy), // Specify the taxonomy you want to target
    ));

    $cmb->add_field(array(
        'name' => 'Category Image',
        'id'   => 'portfolio_cat_img',
        'default' => get_template_directory_uri() . '/assets/images/portfolio/portfolio-8.png',
        'type' => 'file',
    ));

    $cmb->add_field(array(
        'name' => 'My Work Title',
        'id'   => 'my-work-texonomy',
        'default' => 'My Work',
        'type' => 'text',
    ));
}

add_action('cmb2_admin_init', 'cmb2_add_metabox_to_taxonomy_page');
