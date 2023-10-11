<?php

// repeater add more option for portfolio single page   
function single_portfolio_metaboxes_repeater()
{
    $cmb = new_cmb2_box(array(
        'id' => 'single-portfolio-repeater',
        'title' => 'Add More Option For Single Page Portfolio',
        'object_types' => array('portfolio'),
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => true,
    ));

    $add_more_option = $cmb->add_field(array(
        'id' => 'single-portfolio',
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
        'name' => 'Add Image',
        'desc' => 'Add Related Image For Portfolio Single Post',
        'id' => 'single-portfolio-page-image',
        'type' => 'file',
    ));
}

add_action('cmb2_admin_init', 'single_portfolio_metaboxes_repeater');


// single portfolio description 
function metabox_for_portfolio_single_desc(array $portfolio_single_meta_desc)
{
    $portfolio_single_meta_desc[] = array(
        'id' => 'portfolio_desc',
        'title' => 'Portfolio Description',
        'object_types' => array('portfolio'),

        'fields' => array(
            array(
                'id' => 'single-portfolio-desc',
                'name' => 'Single Custom Post Description',
                'default' => "Description",
                'type' => 'wysiwyg',
            ),         
        ),
    );

    return $portfolio_single_meta_desc;
}

add_filter('cmb2_meta_boxes', 'metabox_for_portfolio_single_desc');


// single portfolio imag or video 
function metabox_for_portfolio_imag_video(array $portfolio_img_video)
{
    $portfolio_img_video[] = array(
        'id' => 'single-portfolio-img-video',
        'title' => 'Add Post Image or Video',
        'object_types' => array('portfolio'),

        'fields' => array(
            array(
                'id' => 'single-portfolio-video',
                'name' => 'Single Custom Image',
                'type' => 'file',
            ),         
        ),
    );

    return $portfolio_img_video;
}

add_filter('cmb2_meta_boxes', 'metabox_for_portfolio_imag_video');