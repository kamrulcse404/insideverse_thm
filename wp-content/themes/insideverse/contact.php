<?php

/**
 * Template Name: contact
 **/
get_header();

?>

<section class="section-contact" style="background-image: linear-gradient(to right bottom, rgba(0,0,0,.6), rgba(0,0,0,.4)), url('<?php echo get_post_meta(get_the_ID(), 'contact-page-background', true);  ?>')">
    <div class="main">
        <div class="contact">

            <div class="contact__content">
                <div class="contact__box">
                    <div class="contact__item">
                        <h1 class="heading-primary color-white"><?php echo get_post_meta(get_the_ID(), 'contact-page-title', true);  ?></h1>
                        <p><?php echo get_post_meta(get_the_ID(), 'contact-page-description', true);  ?></p>
                    </div>
                    <div class="contact__item">
                        <span class="contact-info"><ion-icon name="mail-unread-outline" class="contact-icon"></ion-icon></ion-icon> <?php echo get_post_meta(get_the_ID(), 'contact-page-email', true);  ?></span>
                        <span class="contact-info"><ion-icon name="call-outline" class="contact-icon"></ion-icon> <?php echo get_post_meta(get_the_ID(), 'contact-page-number', true);  ?></span>
                        <span class="contact-info"><ion-icon name="map-outline" class="contact-icon"></ion-icon> <?php echo get_post_meta(get_the_ID(), 'contact-page-address', true);  ?></span>
                    </div>
                    <div class="contact__item">
                        <h4>Connect with me</h4>
                        <ul class="social-profiles">
                            <li><a href="<?php echo get_post_meta(get_the_ID(), 'contact-facebook-url', true); ?>"><ion-icon name="logo-facebook" class="social-profile__link color-blue-lotus"></ion-icon></a></li>
                            <li><a href="<?php echo get_post_meta(get_the_ID(), 'contact-instagram-url', true); ?>"><ion-icon name="logo-instagram" class="social-profile__link color-blue-lotus"></ion-icon></a></li>
                            <li><a href="<?php echo get_post_meta(get_the_ID(), 'contact-linkedin-url', true); ?>"><ion-icon name="logo-linkedin" class="social-profile__link color-blue-lotus"></ion-icon></a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section><!-- .section-contact -->

<?php
get_footer();
?>