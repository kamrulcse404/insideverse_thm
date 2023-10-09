<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">


<head>
    <meta charset="<?php language_attributes() ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
</head>

<body class="body_class">

    <div id="page" class="site">

        <!-- ====== Start Header ====== -->
        <header class="header">
            <a href="index.html"><img src="<?php global $insideverse;
                                            echo $insideverse['header-logo']['url'] ?>" alt="Insidverse logo"></a>

            <nav class="header-nav">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'header_menu',
                    'container' => 'ul',
                    'menu_class' => 'header-nav-list',
                ));
                ?>
            </nav>

            <button class="btn-mobile-nav">
                <ion-icon name="menu-outline" class="icon-mobile-nav"></ion-icon>
                <ion-icon name="close-outline" class="icon-mobile-nav"></ion-icon>
            </button>
        </header><!-- .header -->