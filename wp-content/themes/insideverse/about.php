<?php

/**
 * Template Name: about
 **/
get_header();

?>


<!-- ========== Section About ========== -->
<section class="section-about" style="background-image: url('<?php echo get_post_meta(get_the_ID(), 'about-section-background', true);  ?>')">
    <div class="main">
        <div class="about">

            <div class="about__content">
                <div class="about__img-box">
                    <img src="<?php echo get_post_meta(get_the_ID(), 'about-page-image', true);  ?>" alt="Sidvishnu picture">
                </div>
                <div class="about__text-box">
                    <h3 class="heading-tertiary"><?php echo get_post_meta(get_the_ID(), 'about-page-section-title', true);  ?></h3>
                    <p><?php echo get_post_meta(get_the_ID(), 'about-page-section-des', true);  ?></p>

                    <ul class="social-profiles">
                        <li><a href="<?php echo get_post_meta(get_the_ID(), 'about-facebook-url', true);  ?>"><ion-icon name="logo-facebook" class="social-profile__link color-white"></ion-icon></a></li>
                        <li><a href="<?php echo get_post_meta(get_the_ID(), 'about-instagram-url', true);  ?>"><ion-icon name="logo-instagram" class="social-profile__link color-white"></ion-icon></a></li>
                        <li><a href="<?php echo get_post_meta(get_the_ID(), 'about-linkedin-url', true);  ?>"><ion-icon name="logo-linkedin" class="social-profile__link color-white"></ion-icon></a></li>
                    </ul>
                    <a href="<?php echo get_post_meta(get_the_ID(), 'cv-url', true);  ?>" class="btn-color-blue-lotus" download target="_blank">Download CV <ion-icon name="download-outline" class="color-white"></ion-icon></a>
                </div>
            </div>

        </div>
    </div>
</section><!-- .section-about -->


<!-- ========== Section Services ========== -->
<section class="section-services">
    <div class="main">
        <div class="services">
            <div class="services__content">
                <h2 class="heading-secondary color-blue-lotus"><?php echo get_post_meta(get_the_ID(), 'about-service-section-title', true);  ?></h2>
                <div class="border-blue-lotus"></div>

                <div class="services__box">


                    <?php
                    $serviceItems = get_post_meta(get_the_ID(), "about-page-service-section", true);
                    if (count($serviceItems) > 0) {
                        foreach ($serviceItems as $key => $serviceItem) {
                            $title = $des = '';
                            if (isset($serviceItem['about-service-section-item-title'])) {
                                $title = esc_html($serviceItem['about-service-section-item-title']);
                            }
                            if (isset($serviceItem['about-service-section-item-desc'])) {
                                $des = esc_html($serviceItem['about-service-section-item-desc']);
                            }

                    ?>

                            <div class="services__box-item">
                                <h4><?php echo $title ?></h4>
                                <p><?php echo $des ?></p>
                            </div>


                    <?php
                        }
                    }
                    ?>
                    <!-- <div class="services__box-item">
                        <h4>Narrative Design</h4>
                        <p>As a narrative designer, I specialize in shaping immersive worlds and compelling stories within games. Let's collaborate to create unforgettable journeys that leave a lasting impact.

                        </p>
                    </div>
                    <div class="services__box-item">
                        <h4>Game Designer</h4>
                        <p>I'm used to working with different teams to translate design ideas into reality. So I've got a solid grasp of design, but I'm also a great team player!</p>
                    </div>
                    <div class="services__box-item">
                        <h4>World Builder</h4>
                        <p>To build a consistent world with unique characters is my main goal every time I want to give life to a new narrative
                            project.</p>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</section><!-- .section-services -->

<?php
get_footer();
?>