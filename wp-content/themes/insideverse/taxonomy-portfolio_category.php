<?php
get_header();

?>
<?php
$term = get_queried_object();
$taxonomy_title = $term->name;
$taxonomy_description = $term->description;
$portfolio_cat_img_id = get_term_meta($term->term_id, 'portfolio_cat_img', true);
$portfolio_title = get_term_meta($term->term_id, 'my-work-texonomy', true);
?>


<!-- ========== Section Hero Portfolio ========== -->
<section class="section-hero-portfolio" style="background-image: linear-gradient(to right, rgba(0,0,0,.7), rgba(0,0,0,.5)) ,url('<?php echo $portfolio_cat_img_id;  ?>');">
    <div class="main">
        <div class="hero-portfolio">

            <div class="hero-portfolio__content">
                <div class="hero-portfolio__box">
                    <h1 class="heading-primary"><?php echo $taxonomy_title ?></h1>
                    <p><?php echo $taxonomy_description ?></p>
                </div>
            </div>

        </div>
    </div>
</section><!-- .section-hero-portfolio -->


<section class="section-portfolio">
    <div class="main">
        <div class="portfolio">
            <h2 class="heading-secondary color-black"><?php echo $portfolio_title ?></h2>
            <div class="border-blue-lotus"></div>

            <div class="portfolio__content">

                <div class="portfolio__box">
                    <?php
                    $term = get_queried_object();
                    $term_taxonomy_id = $term->term_taxonomy_id;

                    $args = array(
                        'tax_query' => array(
                            array(
                                'taxonomy' => $term->taxonomy, // Specify the custom taxonomy
                                'field'    => 'term_taxonomy_id', // Use term_taxonomy_id for field
                                'terms'    => $term_taxonomy_id, // Use the term_taxonomy_id of the current term
                            ),
                        ),
                        'posts_per_page' => -1, // Retrieve all posts in the term
                    );

                    $query = new WP_Query($args);

                    // Now you can loop through the posts
                    if ($query->have_posts()) {
                        while ($query->have_posts()) {
                            $query->the_post();
                            // Display post content or perform other actions here
                    ?>

                            <div class="portfolio__box-item">
                                <div class="portfolio__text-box">
                                    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                    <p><?php the_excerpt(); ?></p>
                                    <a href="<?php the_permalink(); ?>" class="btn-underline">View Details</a>
                                </div>
                                <div class="portfolio__img-box">
                                    <?php
                                    if (has_post_thumbnail()) {
                                        the_post_thumbnail(); // You can change 'thumbnail' to any registered image size
                                    } else {
                                        // If no featured image is set, you can add a default image here
                                        echo '<img src="path-to-default-image.jpg" alt="Default Image">';
                                    }
                                    ?>
                                </div>
                            </div>

                    <?php
                        }
                        wp_reset_postdata(); // Restore the global post data
                    }
                    ?>
                </div>


                <!-- <div class="portfolio__box">








                    <div class="portfolio__box-item">
                        <div class="portfolio__text-box">
                            <h4><a href="single-portfolio-name.html">Architectural Marvels: 3D Environments for Virtual Worlds</a></h4>
                            <p>Step into a world where architectural wonders come to life in stunning 3D. Explore intricately detailed buildings, from ancient ruins to futuristic megastructures.</p>
                            <a href="single-portfolio-name.html" class="btn-underline">View Details</a>
                        </div>
                        <div class="portfolio__img-box">
                            <img src="assets/images/portfolio/portfolio-1.png" alt="Portolio image">
                        </div>
                    </div>






                    <div class="portfolio__box-item">
                        <div class="portfolio__text-box">
                            <h4><a href="single-portfolio-name.html">Architectural Marvels: 3D Environments for Virtual Worlds</a></h4>
                            <p>Step into a world where architectural wonders come to life in stunning 3D. Explore intricately detailed buildings, from ancient ruins to futuristic megastructures.</p>
                            <a href="single-portfolio-name.html" class="btn-underline">View Details</a>
                        </div>
                        <div class="portfolio__img-box">
                            <img src="assets/images/portfolio/portfolio-2.png" alt="Portolio image">
                        </div>
                    </div>



                    <div class="portfolio__box-item">
                        <div class="portfolio__text-box">
                            <h4><a href="single-portfolio-name.html">Architectural Marvels: 3D Environments for Virtual Worlds</a></h4>
                            <p>Step into a world where architectural wonders come to life in stunning 3D. Explore intricately detailed buildings, from ancient ruins to futuristic megastructures.</p>
                            <a href="single-portfolio-name.html" class="btn-underline">View Details</a>
                        </div>
                        <div class="portfolio__img-box">
                            <img src="assets/images/portfolio/portfolio-3.png" alt="Portolio image">
                        </div>
                    </div>





                </div> -->
            </div>
        </div>
    </div>
</section><!-- .section-portfolio -->

<?php
get_footer();
?>