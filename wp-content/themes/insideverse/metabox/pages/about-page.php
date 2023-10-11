<?php 

// metabox for about Section background
function metabox_for_about_section_background(array $about_section_background)
{
    $about_section_background[] = array(
        'id' => 'about-section-background',
        'title' => 'About Section Background',
        'object_types' => array('page'),
        'show_on' => array(
            'key' => 'page-template',
            'value' => 'about.php',
        ),
        'fields' => array(
            array(
                'id' => 'about-section-background',
                'name' => 'Upload About Section Background',
                'default' => get_template_directory_uri() . '/assets/images/about-bg.png',
                'type' => 'file',
            ),
        ),
    );

    return $about_section_background;
}

add_filter('cmb2_meta_boxes', 'metabox_for_about_section_background');



// metabox for about page about Section
function metabox_for_about_section(array $about_section)
{
    $about_section[] = array(
        'id' => 'about_page_section-about',
        'title' => 'About Page About Section',
        'object_types' => array('page'),
        'show_on' => array(
            'key' => 'page-template',
            'value' => 'about.php',
        ),
        'fields' => array(
            array(
                'id' => 'about-page-image',
                'name' => 'Upload About Image',
                'default' => get_template_directory_uri() . '/assets/images/about-img.png',
                'type' => 'file',
            ),

            array(
                'id' => 'about-page-section-title',
                'name' => 'About Title',
                'default' => 'A Few Words About Me',
                'type' => 'text',
            ),

            array(
                'id' => 'about-page-section-des',
                'name' => 'About Description',
                'default' => 'I am Sidvishnu, a Toronto-based game designer with an emphasis on narrative-driven games! Here, you will find game projects I have worked on, creative writing pieces, and of course, some Toronto raccoons! Enjoy!',
                'type' => 'wysiwyg',
            ),

            array(
                'id' => 'about-facebook-url',
                'name' => 'About Facebook Url',
                'default' => 'https://www.facebook.com/',
                'type' => 'text',
            ),

            array(
                'id' => 'about-instagram-url',
                'name' => 'About Instagram Url',
                'default' => 'https://www.instagram.com/',
                'type' => 'text',
            ),

            array(
                'id' => 'about-linkedin-url',
                'name' => 'About LinkedIn Url',
                'default' => 'https://www.linkedin.com/',
                'type' => 'text',
            ),

            array(
                'id' => 'cv-url',
                'name' => 'CV Download Link',
                'default' => '#',
                'type' => 'text',
            ),
        ),
    );

    return $about_section;
}

add_filter('cmb2_meta_boxes', 'metabox_for_about_section');


// metabox for about service section
function metabox_for_about_service_section(array $about_service_section)
{
    $about_service_section[] = array(
        'id' => 'about-service-section',
        'title' => 'About Service Section',
        'object_types' => array('page'),
        'show_on' => array(
            'key' => 'page-template',
            'value' => 'about.php',
        ),
        'fields' => array(
            array(
                'id' => 'about-service-section-title',
                'name' => 'About Service Title',
                'default' => "What I Do",
                'type' => 'text',
            ),
        ),
    );

    return $about_service_section;
}

add_filter('cmb2_meta_boxes', 'metabox_for_about_service_section');



// repeater add more option for about page service section  
function about_service_section_metaboxes()
{
    $cmb = new_cmb2_box(array(
        'id' => 'about-page-service-section-repeater',
        'title' => 'Add More Option For About Service Section',
        'object_types' => array('page'),
        'show_on' => array(
            'key' => 'page-template',
            'value' => 'about.php',
        ),
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => true,
    ));

    $add_more_option = $cmb->add_field(array(
        'id' => 'about-page-service-section',
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
        'name' => 'About Service Title',
        // 'desc' => 'Enter the feature title',
        'id' => 'about-service-section-item-title',
        'type' => 'text',
    ));

    $cmb->add_group_field($add_more_option, array(
        'name' => 'About Service Item Description',
        // 'desc' => 'Enter the feature description',
        'id' => 'about-service-section-item-desc',
        'type' => 'wysiwyg',
    ));
}

add_action('cmb2_admin_init', 'about_service_section_metaboxes');