<?php
get_header();

?>
<?php
$term = get_queried_object();
echo "<pre>";
print_r($term);
// $id = $term->term_taxonomy_id;
$taxonomy_title = $term->name;
$taxonomy_description = $term->description;
$portfolio_cat_img_id = get_term_meta($term->term_id, 'portfolio_cat_img', true);
$portfolio_title = get_term_meta($term->term_id, 'my-work-texonomy', true);



$category_id = $id;
$args = array(
    'cat' => $category_id, // Specify the category ID
    'posts_per_page' => -1, // Retrieve all posts in the category
);

$query = new WP_Query($args);

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
                    $args = array(
                        'category_name' => $term->slug, // Replace with your category slug
                        'post_type' => 'post',
                        'posts_per_page' => -1, // Retrieve all posts in the category
                    );

                    $query = new WP_Query($args);

                    if ($query->have_posts()) :
                        while ($query->have_posts()) : $query->the_post();
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
                                        the_post_thumbnail('thumbnail'); // You can use other image sizes as well
                                    } else {
                                        echo '<img src="' . get_template_directory_uri() . '/default-thumbnail.jpg" alt="Default Thumbnail">';
                                    }
                                    ?>
                                </div>
                            </div>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    else :
                        echo 'No posts found.';
                    endif;
                    ?>






                    <!-- <div class="portfolio__box-item">
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
                    </div> -->





                </div>
            </div>
        </div>
    </div>
</section><!-- .section-portfolio -->

<?php
get_footer();
?>