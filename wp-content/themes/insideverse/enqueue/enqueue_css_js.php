<?php 

function enqueue_my_styles() {
    // Enqueue Google Fonts Poppins
    wp_enqueue_style('google-fonts-poppins', 'https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');

    // Enqueue Google Fonts Outfit
    wp_enqueue_style('google-fonts-outfit', 'https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700&display=swap');

    // Enqueue Bootstrap CSS
    wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css');

    // Enqueue your custom stylesheet
    wp_enqueue_style('custom-style', get_template_directory_uri() . '../assets/css/style.css');

    // Enqueue your responsive stylesheet
    wp_enqueue_style('responsive-style', get_template_directory_uri() . '../assets/css/responsive.css');
}

// Hook the function to the 'wp_enqueue_scripts' action
add_action('wp_enqueue_scripts', 'enqueue_my_styles');


function enqueue_my_scripts() {
    // Enqueue WordPress default jQuery
    wp_enqueue_script('jquery');

    // Popper.js
    wp_enqueue_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js', array('jquery'), '1.16.0', true);

    // Bootstrap
    wp_enqueue_script('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array('jquery', 'popper'), '4.4.1', true);

    // Ionicons ESM (for modern browsers)
    wp_enqueue_script('ionicons-esm', 'https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js', array(), '7.1.0', true);

    // Ionicons (for older browsers)
    wp_enqueue_script('ionicons', 'https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js', array(), '7.1.0', true);

    // Mixitup
    wp_enqueue_script('mixitup', get_template_directory_uri() . '/assets/js/mixitup.min.js', array(), '1.0.0', true);

    // Your main.js script
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array('jquery', 'popper', 'bootstrap', 'ionicons', 'mixitup'), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'enqueue_my_scripts');

