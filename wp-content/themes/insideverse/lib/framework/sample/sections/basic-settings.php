<?php
defined('ABSPATH') || exit;

// Basic Settings //

// agreement section start 
Redux::setSection($opt_name, array(
    'title'            => __('Header Section', 'insideverse'),
    'id'               => 'header-section',
    'icon'             => 'fa fa-cog',
    'fields'           => array(
        array(
            'id' => 'header-logo',
            'type'    => 'media',
            'title' => __('Website Logo', 'insideverse'),
            'subtitle' => __('Upload Your Website Logo', 'insideverse'),
            'default' => array(
                'url' => get_template_directory_uri() . '/assets/images/logo-1x.png',
            )

        ),
    )
));

Redux::setSection($opt_name, array(
    'title'            => __('Footer Section', 'insideverse'),
    'id'               => 'footer-section',
    'icon'             => 'fa fa-cog',
    'fields'           => array(
        array(
            'id' => 'footer-site-query',
            'type' => 'text',
            'title' => __('Site Query', 'insideverse'),
            'default' => 'I am here, if you still have questions!',
        ),

        array(
            'id' => 'footer-site-query-mail',
            'type' => 'text',
            'title' => __('Query Email', 'insideverse'),
            'default' => 'shakilashraf277@gmail.com',
        ),

        array(
            'id' => 'footer-site-query-mail-text',
            'type' => 'text',
            'title' => __('Query Email Text', 'insideverse'),
            'default' => 'Send us a Message',
        ),

        array(
            'id' => 'footer-logo',
            'type'    => 'media',
            'title' => __('Footer Logo', 'insideverse'),
            'subtitle' => __('Upload Your Footer Logo', 'insideverse'),
            'default' => array(
                'url' => get_template_directory_uri() . '/assets/images/logo-1x.png',
            )
        ),

        array(
            'id' => 'footer-site-description',
            'type' => 'editor',
            'title' => __('Site Description', 'insideverse'),
            'default' => "Hello! I'm Sid Vishnu, a game designer based in the UK. I m a narrative designer and story writer I specialize in creating stories and designing games that take players on unforgettable journeys.",
        ),

        array(
            'id' => 'footer-menu-title',
            'type' => 'text',
            'title' => __('Menu Title', 'insideverse'),
            'default' => 'Quick Link',
        ),
        array(
            'id' => 'footer-contact-title',
            'type' => 'text',
            'title' => __('Contact Title', 'insideverse'),
            'default' => 'Contact',
        ),

        array(
            'id' => 'footer-contact-number',
            'type' => 'text',
            'title' => __('Contact Number', 'insideverse'),
            'default' => '+90198764634',
        ),

        array(
            'id' => 'footer-contact-email',
            'type' => 'text',
            'title' => __('Contact Email', 'insideverse'),
            'default' => 'Info@xyz.com',
        ),

        array(
            'id' => 'footer-contact-facebook',
            'type' => 'text',
            'title' => __('Facebook Url', 'insideverse'),
            'default' => 'https://www.facebook.com/',
        ),

        array(
            'id' => 'footer-contact-instagram',
            'type' => 'text',
            'title' => __('Instagram Url', 'insideverse'),
            'default' => 'https://www.instagram.com/',
        ),

        array(
            'id' => 'footer-contact-linkedin',
            'type' => 'text',
            'title' => __('Linkendin Url', 'insideverse'),
            'default' => 'https://bd.linkedin.com/',
        ),
        array(
            'id' => 'copy-right',
            'type' => 'text',
            'title' => __('Copyright', 'insideverse'),
            'default' => '2023 Insidverse | All rights reserved',
        ),
    )
));
