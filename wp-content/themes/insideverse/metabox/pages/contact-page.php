<?php

// metabox for contact page
function metabox_for_contact(array $contact_page)
{
    $contact_page[] = array(
        'id' => 'contact_page',
        'title' => 'Contact Page Section',
        'object_types' => array('page'),
        'show_on' => array(
            'key' => 'page-template',
            'value' => 'contact.php',
        ),
        'fields' => array(
            array(
                'id' => 'contact-page-background',
                'name' => 'Upload Contact Page Background Image',
                'default' => get_template_directory_uri() . '/assets/images/about-bg.png',
                'type' => 'file',
            ),
            array(
                'id' => 'contact-page-title',
                'name' => 'Contact Title',
                'default' => 'Say Hello to me',
                'type' => 'text',
            ),
            array(
                'id' => 'contact-page-description',
                'name' => 'Contact Description',
                'default' => "Join me in exploring a fusion of creativity and technology. Whether you're a fellow designer or a gamer looking for new experiences, you're in for a treat. Get ready to step into worlds filled with vibrant characters, rich stories, and endless possibilities.",
                'type' => 'wysiwyg',
            ),

            array(
                'id' => 'contact-page-email',
                'name' => 'Contact Email',
                'default' => 'getemail@email.com',
                'type' => 'text',
            ),

            array(
                'id' => 'contact-page-number',
                'name' => 'Contact Number',
                'default' => '+12 986 987 7867',
                'type' => 'text',
            ),

            array(
                'id' => 'contact-page-address',
                'name' => 'Contact Address',
                'default' => '37, Pollsatnd, New York, United State',
                'type' => 'text',
            ),

            array(
                'id' => 'contact-facebook-url',
                'name' => 'Contact Facebook Url',
                'default' => 'https://www.facebook.com/',
                'type' => 'text',
            ),

            array(
                'id' => 'contact-instagram-url',
                'name' => 'Contact Instagram Url',
                'default' => 'https://www.instagram.com/',
                'type' => 'text',
            ),

            array(
                'id' => 'contact-linkedin-url',
                'name' => 'Contact LinkedIn Url',
                'default' => 'https://www.linkedin.com/',
                'type' => 'text',
            ),
        ),
    );

    return $contact_page;
}

add_filter('cmb2_meta_boxes', 'metabox_for_contact');