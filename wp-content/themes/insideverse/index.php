<?php

/**
 * Template Name: home
 **/
get_header();

?>




<!-- ========== Section Banner ========== -->
<section class="section-banner">
    <img src="<?php echo get_post_meta(get_the_ID(), 'index-banner-image', true);  ?>" alt="">
</section><!-- .section-banner -->


<!-- ========== Section About ========== -->
<section class="section-about" style="background-image: url('<?php echo get_post_meta(get_the_ID(), 'index-about-background', true);  ?>')">
    <div class="container">
        <div class="about">

            <div class="about__content">
                <div class="about__text-box">
                    <h3 class="heading-tertiary"><?php echo get_post_meta(get_the_ID(), 'index-about-content-title', true);  ?></h3>
                    <p><?php echo get_post_meta(get_the_ID(), 'index-about-content-description-one', true);  ?></p>
                    <p><?php echo get_post_meta(get_the_ID(), 'index-about-content-description-two', true);  ?></p>
                    <a href="#portfolio" class="button-btn btn-color-blue-lotus">View My Works</a>
                </div>
                <div class="about__img-box">
                    <img src="<?php echo get_post_meta(get_the_ID(), 'index-about-content-image', true);  ?>" alt="Sidvishnu picture">
                </div>
            </div>

            <div class="services__content">
                <h2 class="heading-secondary color-white"><?php echo get_post_meta(get_the_ID(), 'index-service-title', true);  ?></h2>
                <div class="border-blue-lotus"></div>

                <div class="services__box">

                    <?php
                    $serviceItems = get_post_meta(get_the_ID(), "about-service-item", true);
                    if (count($serviceItems) > 0) {
                        foreach ($serviceItems as $key => $serviceItem) {
                            $title = $des = '';
                            if (isset($serviceItem['about-service-item-title'])) {
                                $title = esc_html($serviceItem['about-service-item-title']);
                            }
                            if (isset($serviceItem['about-service-item-title'])) {
                                $des = esc_html($serviceItem['about-service-item-description']);
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


                </div>
            </div>

        </div>
    </div>
</section><!-- .section-about -->


<section class="section-portfolio" id="portfolio">
    <div class="container">
        <div class="portfolio">
            <h2 class="heading-secondary color-black"><?php echo get_post_meta(get_the_ID(), 'index-portfolio-title', true);  ?></h2>
            <div class="border-blue-lotus"></div>


            <ul class="portolio-filter">
                <li class="mixitup-control-active" data-filter="all">All</li>
                <?php
                $categories = get_terms(array(
                    'taxonomy' => 'portfolio_category',
                    'hide_empty' => false,
                ));

                if (!empty($categories)) {
                    foreach ($categories as $category) {
                        echo '<li data-filter=".' . $category->slug . '">' . $category->name . '</li>';
                    }
                }
                ?>
            </ul>


            <div class="portfolio__content">
                <div class="portfolio__box">
                    <?php
                    $args = array(
                        'post_type' => 'portfolio',
                        'posts_per_page' => -1,
                    );

                    $query = new WP_Query($args);

                    // Check if there are any portfolio items
                    if ($query->have_posts()) {
                        while ($query->have_posts()) {
                            $query->the_post();

                            $categories = get_the_terms(get_the_ID(), 'portfolio_category');

                            // Check if there are categories
                            if ($categories && !is_wp_error($categories)) {
                                $category_slugs = array();
                                foreach ($categories as $category) {
                                    $category_slugs[] = $category->slug;
                                }
                                $category_list = implode(' ', $category_slugs);
                            }



                    ?>

                            <div class="portfolio__box-item mix <?php echo $category_list; ?>">
                                <div class="portfolio__text-box">
                                    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                    <p><?php the_excerpt(); ?></p>

                                    <a href="<?php the_permalink(); ?>" class="btn-underline">View Details</a>
                                </div>
                                <div class="portfolio__img-box">
                                    <?php
                                    if (has_post_thumbnail()) {
                                        the_post_thumbnail(); // You can use a different image size here
                                    } else {
                                        echo '<img src="' . esc_url(get_template_directory_uri()) . '/assets/images/default-thumbnail.jpg" alt="Default Thumbnail">';
                                    }
                                    ?>
                                </div>
                            </div>

                    <?php
                        }
                        wp_reset_postdata();
                    } else {
                        echo 'No portfolio items found.';
                    }
                    ?>
                </div>
            </div>

        </div>
    </div>
</section><!-- .section-portfolio -->


<?php
get_footer();
?>